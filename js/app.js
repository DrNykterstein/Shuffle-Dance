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