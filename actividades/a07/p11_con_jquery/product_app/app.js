$(document).ready(function() {
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

    $('#product-form').submit(function(e) {
        e.preventDefault();

        var name = $('#name').val();
        var description = $('#description').val();
        var brand = $('#brand').val();
        var price = $('#price').val();
        var units = $('#units').val();

        // Validaciones
        if (!name || !description || !brand || price <= 99.99 || units <= 0) {
            alert('Por favor, completa todos los campos con valores válidos.');
            return;
        }

        var productoData = {
            nombre: name,
            descripcion: description,
            marca: brand,
            precio: price,
            unidades: units
        };

        $.ajax({
            url: './backend/product-add.php',
            type: 'POST',
            data: productoData,
            success: function(respuesta) {
                let response = JSON.parse(respuesta);
                $('#container').html(`<li>${response.message}</li>`);
                $('#product-result').removeClass('d-none');
                listarProductos();
            },
            error: function(error) {
                console.error('Error en el servidor:', error);
                alert('Ocurrió un error al intentar añadir el producto.');
            }
        });
    });

    $(document).on('click', '.product-delete', function() {
        if (confirm("¿De verdad deseas eliminar el Producto?")) {
            let id = $(this).closest("tr").attr("productId");
            $.get(`./backend/product-delete.php?id=${id}`, function(response) {
                let respuesta = JSON.parse(response);
                $("#container").html(`<li>${respuesta.message}</li>`);
                $("#product-result").removeClass("d-none");
                listarProductos();
            });
        }
    });

    listarProductos();
});
