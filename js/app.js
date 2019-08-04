//navbar transicion, smool scrool
document.querySelectorAll('.navbar .nav-link').forEach(enlace => {
    enlace.addEventListener('click', function (e) {
        e.preventDefault();//previene el comportamiento por default del navegador

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    });
});

//cambio de color del navbar
window.onscroll = function (e) {
    let scroll = window.scrollY;

    const headerScroll = document.querySelector('#navegacion');
    if(scroll > 300) {
        headerScroll.classList.add('bg-success');
    } else {
        headerScroll.classList.remove('bg-success');
    }
};


//Dias faltantes
$('#fecha').countdown('2019/08/30', function(event) {
    // Selecciono la fecha
    //Imprimo html
    $(this).html(event.strftime('<p><span> %D </span> dias <span> %H </span> horas <span> %M </span> minutos  <span> %S </span> Segundos </p>'));
  });

//Creo los constructores para el Total
function Total(entrada, entradascantidad){
    // Inicializo los constructores
    this.entrada = entrada;
    this.entradascantidad = entradascantidad;

}

Total.prototype.totalEntrada = function(){
    /* 
        Entrada de un 1 dia 30mil Bss
        Entrada de 2 dias 40mil Bss
    */
    const unDia = 30000;
    const dosDia = 40000;
    switch(this.entrada.value){
        case '1': 
            precio = (unDia*this.entradascantidad.value);
            break;
        case '2':
            precio = (dosDia*this.entradascantidad.value);
            break;
    }
    return precio;
}

//Para mostrar el resultado
function Interfaz(){}

//Mensaje a imprimir en el html, en caso de error
Interfaz.prototype.mostrarError = function(mensaje,tipo){
    const div = document.createElement('div');
    if(tipo == 'error'){//en caso de error
        div.classList.add('mensaje','error');
    }else{
        div.classList.add('mensaje','correcto');
    }
    //inserto el html
    div.innerHTML = `${mensaje}`;
    formulario.insertBefore(div, document.querySelector('.form-group'));
    setTimeout(function(){
        document.querySelector('.mensaje').remove();
    },3000);

}

//Mensaje a imprimir en el html, en caso correcto
Interfaz.prototype.mostrarResultado = function(cotizarEntrada,precio){
    const resultado = document.getElementById('resultado');
    //creo un div
    const div = document.createElement('div');
    //inserto la informacion
    div.innerHTML = `
        <p>Los datos se han enviado correctamente </p>
        <p>El total a pagar es ${precio} BSS </p>
        <p>Te esperamos </p>
    `;
    const spinner = document.querySelector('#cargando img');
    spinner.style.display = 'block';
    setTimeout(function(){
         spinner.style.display = 'none';
         resultado.appendChild(div);
    },3000);
} 

//EventListener
const formulario = document.getElementById('datosformulario');
formulario.addEventListener('submit',function(e){
    e.preventDefault(); //Que no mande nada sin haber presionado el submit

    /* ----- Leo los valores del formulario --- */

    //Leo los dias seleccionados de la entrada
    const entrada = document.getElementById('entrada');
    const entradasSeleccionada = entrada.options[entrada.selectedIndex].value;

    //leo la cantidad de entradas a comprar
    const entradascantidad = document.getElementById('entradascantidad');
    const entradascantidadSeleccionada = entradascantidad.options[entradascantidad.selectedIndex].value;
    
    //creo la instancia
    const interfaz = new Interfaz();

    //compruebo que los campos no esten vacios
    if(entradasSeleccionada == '' || entradascantidad == '' ){
        interfaz.mostrarError('Faltan datos','error');//S hay error, se muestra
    }else{
        //Limpiar resultados anteriores
        const resultado = document.querySelector('#resultado div');
        if(resultado != null){
            resultado.remove();
        }

        //En caso de que esten llenos correctamente, instancio el objeto interfaz
        const cotizarEntrada = new Total(entrada,entradascantidad);
        //cotizar la entrada
        const precio = cotizarEntrada.totalEntrada();
        //Muestro el resultado
        interfaz.mostrarResultado(cotizarEntrada,precio);
    }//else

});

//Opciones de cantidad de personas para comprar las entradas
const max=10;//Maximo de cantidad de entradas que puede comprar
const min=1;//Minimo de cantidad de entradas
const selectEntradasCantidad = document.getElementById('entradascantidad');//Selecciono el ID
//Ciclo for para imprimir los opcions
for(let i=min; i<=max;i++){
    let option = document.createElement('option');
    option.value = i;
    option.innerHTML = i;
    selectEntradasCantidad.appendChild(option);
}