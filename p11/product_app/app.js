$(document).ready(function() {
    var baseJSON = {
        "precio": 0.0,
        "unidades": 1,
        "modelo": "XX-000",
        "marca": "NA",
        "detalles": "NA",
        "imagen": "img/default.png"
    };

    function init() {
        var JsonString = JSON.stringify(baseJSON, null, 2);
        $("#description").val(JsonString);
        listarProductos();
    }

    function listarProductos() {
        $.get('./backend/product-list.php', function(data) {
            let productos = $.parseJSON(data);
            if (Object.keys(productos).length > 0) {
                let template = '';
                productos.forEach(producto => {
                    let descripcion = `
                        <li>precio: ${producto.precio}</li>
                        <li>unidades: ${producto.unidades}</li>
                        <li>modelo: ${producto.modelo}</li>
                        <li>marca: ${producto.marca}</li>
                        <li>detalles: ${producto.detalles}</li>
                    `;
                    template += `
                        <tr productId="${producto.id}">
                            <td>${producto.id}</td>
                            <td>${producto.nombre}</td>
                            <td><ul>${descripcion}</ul></td>
                            <td>
                                <button class="product-delete btn btn-danger">Eliminar</button>
                            </td>
                        </tr>
                    `;
                });
                $("#products").html(template);
            }
        });
    }

    $("#search").on("input", function() {
        let search = $(this).val();
        $.get(`./backend/product-search.php?search=${search}`, function(data) {
            let productos = $.parseJSON(data);
            if (Object.keys(productos).length > 0) {
                let template = '';
                let template_bar = '';
                productos.forEach(producto => {
                    template += `
                        <tr productId="${producto.id}">
                            <td>${producto.id}</td>
                            <td>${producto.nombre}</td>
                            <td>
                                <ul>
                                    <li>precio: ${producto.precio}</li>
                                    <li>unidades: ${producto.unidades}</li>
                                </ul>
                            </td>
                        </tr>`;
                    template_bar += `<li>${producto.nombre}</li>`;
                });
                $("#product-result").removeClass("d-none");
                $("#container").html(template_bar);
                $("#products").html(template);
            }
        });
    });

    $('#product-form').submit(function (e) {
        e.preventDefault();

        var name = $('#name').val();
        var description = $('#description').val();

        // Validaciones
        if (!name) {
            alert('El nombre es un campo requerido.');
            return;
        }
        try {
            var finalJSON = JSON.parse(description);
        } catch (e) {
            alert('El JSON no es válido. Verifique el formato.');
            return;
        }
        if (finalJSON.precio <= 99.99) {
            alert('El precio debe ser mayor a $99.99.');
            return;
        }
        if (!finalJSON.modelo || finalJSON.modelo.length > 25) {
            alert('El modelo es obligatorio y debe tener menos de 25 caracteres.');
            return;
        }
        if (parseInt(finalJSON.unidades) <= 0) {
            alert('Las unidades deben ser mayor a 0.');
            return;
        }

        finalJSON['nombre'] = name;
        var productoJsonString = JSON.stringify(finalJSON, null, 2);

        $.ajax({
            url: './backend/product-add.php',
            type: 'POST',
            data: productoJsonString,
            contentType: "application/json; charset=UTF-8",
            success: function (respuesta) {
                let template_bar = `
                    <li style="list-style: none;">status: succes</li>
                    <li style="list-style: none;">message: Producto añadido 🤑</li>
                `;
                $('#container').html(template_bar);
                $('#product-result').removeClass('d-none');
                listarProductos(); 
            }
        });
    });

    $(document).on('click', '.product-delete', function() {
        if (confirm("¿De verdad deseas eliminar el Producto?")) {
            let id = $(this).closest("tr").attr("productId");
            $.get(`./backend/product-delete.php?id=${id}`, function(response) {
                let respuesta = JSON.parse(response);
                let template_bar = `
                    <li>status: ${respuesta.status}</li>
                    <li>message: ${respuesta.message}</li>
                `;
                $("#product-result").removeClass("d-none");
                $("#container").html(template_bar);
                listarProductos(); 
            });
        }
    });

    // Inicializar la página
    init();
});
