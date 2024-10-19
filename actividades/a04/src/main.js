function ejemplo1(){
    var div1 = document.getElementById('ejemplo1')
    div1.innerHTML = '<h3>Hola mundo de js</h3>';
}

function ejemplo2(){
    var nombre = prompt('Nombre: ', '');
    var edad = prompt('Edad: ', 0);
    var estatura = prompt('Estatura: ', '');
    var casado = prompt('Casado (si/no): ', '').toLocaleLowerCase();

    var isCasado = casado === 'si' || casado === 'si';

    var div1 = document.getElementById('nombre');
    div1.innerHTML = ' <h3>Nombre: ' + nombre + '</h3>';
    var div2 = document.getElementById('edad');
    div2.innerHTML = ' <h3>Edad: ' + edad + '</h3>';
    var div3 = document.getElementById('estatura');
    div3.innerHTML = ' <h3>Estatura: ' + estatura + '</h3>';
    var div4 = document.getElementById('casado');
    div4.innerHTML = ' <h3>Casado: ' + isCasado + '</h3>';
}
function ejemplo3(){

    var nombre = prompt('Nombre: ', '');
    var edad = prompt('Edad: ', '');

    var div1 = document.getElementById('ejemplo3');
    div1.innerHTML = '<h3>Hola ' + nombre + ' 😘 '+ ' cómo que tienes: ' + edad + ' años 🙀' + '</h3>';
}
function ejemplo4(){
    var valor1;
    var valor2;
    valor1 = prompt('Introducir primer número:', '');
    valor2 = prompt('Introducir segundo número', '');
    var suma = parseInt(valor1)+parseInt(valor2);
    var producto = parseInt(valor1)*parseInt(valor2);

    var div1 = document.getElementById('suma');
    div1.innerHTML = ' <h3>La suma es: ' + suma + '</h3>';
    var div2 = document.getElementById('producto');
    div2.innerHTML = ' <h3>El producto es: ' + producto + '</h3>';

}
function ejemplo5(){

    var nombre = prompt('Nombre: ', '');
    var nota = prompt('Nota: ', '');
    if (nota>=4) {
        var div1 = document.getElementById('nota');
        div1.innerHTML = '<h3>' + nombre + ' esta aprobado con un ' + nota + '</h3>';
    } else {
        var div1 = document.getElementById('nota');
        div1.innerHTML = '<h3> Ta reprobao </h3>';
    }
}
function ejemplo6(){
    var num1 = parseInt(prompt('Ingrese el primer number: ', ''));
    var num2 = parseInt(prompt('Ahora ingresa the second number: ', ''));
    
    if (num1>num2) {
        var div1 = document.getElementById('ejemplo6');
        div1.innerHTML = '<h3>el mayor es: ' + num1  ;
    }
    else {
        var div1 = document.getElementById('ejemplo6');
        div1.innerHTML = '<h3>el mayor es: ' + num2  ;
    }
}
function ejemplo7(){
        var nota1 = parseInt(prompt('Ingresa 1ra. nota:', ''));
        var nota2 = parseInt(prompt('Ingresa 2da. nota:', ''));
        var nota3 = parseInt(prompt('Ingresa 3ra. nota:', ''));
    
        var pro = (nota1 + nota2 + nota3) / 3;
        
        if (pro >= 7) {
            var div1 = document.getElementById('ejemplo7');
            div1.innerHTML = '<h3>Aprobado</h3>';
        } else if (pro >= 4) {
            var div1 = document.getElementById('ejemplo7');
            div1.innerHTML = '<h3>Regular</h3>';
        } else {
            var div1 = document.getElementById('ejemplo7');
            div1.innerHTML = '<h3>Reprobado</h3>';
        }
}
function ejemplo8(){

    var valor = parseInt(prompt('Ingresar un valor comprendido entre 1 y 5', ''));
    switch (valor) {

        case 1: 
        var div1 = document.getElementById('valor');
        div1.innerHTML = '<h3>uno</h3>';
        break;

        case 2: 
        var div1 = document.getElementById('valor');
        div1.innerHTML = '<h3>dos</h3>';
        break;

        case 3: 
        var div1 = document.getElementById('valor');
        div1.innerHTML = '<h3>tres</h3>';
        break;

        case 4: 
        var div1 = document.getElementById('valor');
        div1.innerHTML = '<h3>cuatro</h3>';
        break;

        case 5: 
        var div1 = document.getElementById('valor');
        div1.innerHTML = '<h3>cinco</h3>';
        break;

        default:
        var div1 = document.getElementById('valor');
        div1.innerHTML = '<h3>debe ingresar un valor comprendido entre 1 y 5.😠</h3>';
    }
}
function ejemplo9(){

    var col = prompt('Ingresa el color con que quierar pintar el fondo de la ventana (rojo, verde, azul)','');
    switch (col) {
        case 'rojo': document.bgColor='#ff0000';

        break;

        case 'verde': document.bgColor='#00ff00';

        break;

        case 'azul': document.bgColor='#0000ff';

        break;

    }
}
function ejemplo10() {
    var x=1;
    while (x<=100) {
            var div = document.getElementById('ejemplo10');
            div.innerHTML+= (x + '<br>');
            x=x+1;
        }  
    }
function ejemplo11(){
    var x=1;
    var suma=0;
    var valor;
    while (x<=5){
        valor = parseInt(prompt('Ingresa el valor:', ''));
        suma = suma+valor;
        x = x+1;
    }
    var div1 = document.getElementById('ejemplo11');
    div1.innerHTML=('La suma de los valores es ' +suma+'<br>');
}
function ejemplo12(){
    do{
        var valor = parseInt(prompt('Ingresa un valor entre 0 y 999', ''));
        
        var div1 = document.getElementById('ejemplo12');
        div1.innerHTML = '<h3>El valor: ' + valor + ' tiene ' + '</h3>';
        if (valor<10){
        var div1 = document.getElementById('ejemplo12');
        div1.innerHTML = '<h3>Tiene 1 dígito</h3>'
        }
    
        else if (valor<100) {
        var div1 = document.getElementById('ejemplo12');
        div1.innerHTML = '<h3>Tiene 2 dígitos</h3>'
        }
        else {
        var div1 = document.getElementById('ejemplo12');
        div1.innerHTML = '<h3>Tiene 3 dígitos</h3>'
        }
        }
        while(valor=0);
}
function ejemplo13(){
    var f;
    for(f=1; f<=10; f++)
    {
    var div = document.getElementById('ejemplo13')
    div.innerHTML += f + "  ";
    }
}
function ejemplo14(){
    var div = document.getElementById('ejemplo14')
        div.innerHTML +=("Cuidado<br>");
        div.innerHTML +=("Ingresa tu documento correctamente<br>");
        div.innerHTML +=("Cuidado<br>");
        div.innerHTML +=("Ingresa tu documento correctamente<br>");
        div.innerHTML +=("Cuidado<br>");
        div.innerHTML +=("Ingresa tu documento correctamente<br>");
}
function ejemplo15() {
    function mostrarMensaje() {
        var div = document.getElementById('ejemplo15');
        div.innerHTML += "Cuidado<br>";
        div.innerHTML += "Ingresa tu documento correctamente<br>";
    }
    mostrarMensaje();
    mostrarMensaje();
    mostrarMensaje();
    
}
function ejemplo16(){
    function mostrarRango(x1,x2) {
        var inicio;
        for(inicio=x1; inicio<=x2; inicio++) {
            var div = document.getElementById('ejemplo16')
            div.innerHTML += inicio+' ';
        
        }
        }
        var valor1,valor2;
        valor1 = parseInt(prompt('Ingresa el valor inferior:', ''));
        valor2 = parseInt(prompt('Ingresa el valor superior:', ''));
        mostrarRango(valor1,valor2);
}
function ejemplo17(){
    function convertirCastellano(x) {
        if(x==1)
        return "uno";
        else
        if(x==2)
        return "dos";
        else
        if(x==3)
        return "tres";
        else
        if(x==4)
        return "cuatro";
        else
        if(x==5)
        return "cinco";
        else
        return "valor incorrecto";
        
        }
        var valor = prompt("Ingresa un valor entre 1 y 5",'');
        valor = parseInt(valor);
        var r = convertirCastellano(valor);
        var div = document.getElementById('ejemplo17')
        div.innerHTML= r;
}
function ejemplo18(x){
    function convertirCastellano(x) {
        switch (x) {
        case 1: return "uno";
        case 2: return "dos";
        case 3: return "tres";
        case 4: return "cuatro";
        case 5: return "cinco";
        default: return "valor incorrecto";
        }
        
    }
    var valor = prompt("Ingresa un valor entre 1 y 5",'');
        valor = parseInt(valor);
        var r = convertirCastellano(valor);
        var div = document.getElementById('ejemplo18')
        div.innerHTML= r;
}



