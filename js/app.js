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

//EventListener
const formulario = document.getElementById('datosformulario');
formulario.addEventListener('submit',function(e){
    e.preventDefault(); //Que no mande nada sin haber presionado el submit

    /* ----- Leo los valores del formulario --- */

    //Leo los dias seleccionados de la entrada
    const entrada = document.getElementById('entrada');
    const entradasSeleccionada = entrada.options[entrada.selectedIndex].value;

    //leo la cantidad de entradas a comprar
    const entradascantidad = document.getElementById('entradas-cantidad');
    const entradascantidadSeleccionada = entradascantidad.options[entradascantidad.selectedIndex].value;
    console.log(entradasSeleccionada);
    console.log(entradascantidadSeleccionada);
    console.log('Presionado');

});

//Opciones de cantidad de personas para comprar las entradas
const max=10;//Maximo de cantidad de entradas que puede comprar
const min=1;//Minimo de cantidad de entradas
const selectEntradasCantidad = document.getElementById('entradas-cantidad');//Selecciono el ID
//Ciclo for para imprimir los opcions
for(let i=min; i<=max;i++){
    let option = document.createElement('option');
    option.value = i;
    option.innerHTML = i;
    selectEntradasCantidad.appendChild(option);
}