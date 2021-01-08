$(document).ready(function(){
  $('.menu a').each(function(index, elemento){
    $(this).css({
      'top': '-200px'
    });

    $(this).animate({
      top: '0'
    }, 2000 ); // IDEA: index, para que los elementos vayan apareciendo con tiempo de separación entre ellos.
})


// IDEA: Efecto HEADER
if($(window).width()>800){
  $('header .textos').css({
    opacity: 0,
    marginTop: 0
  });

  $('header .textos').animate({
    opacity: 1,
    marginTop: '-52px'
  }, 1500);

}

// IDEA: SCROLL ELEMENTOS MENU

var acercaDe = $('#acerca').offset().top,
    menu = $('#platos').offset().top,
    galeria = $('#galeria').offset().top,
    ubicacion = $('#ubicacion').offset().top;

$('#btn-acerca').on('click', function(e){
  e.preventDefault();
  $('html, body').animate({
    scrollTop: 540
  }, 500);
});

$('#btn-menu').on('click', function(e){
  e.preventDefault();
  $('html, body').animate({
    scrollTop: menu
  }, 500);
});

$('#btn-galeria').on('click', function(e){
  e.preventDefault();
  $('html, body').animate({
    scrollTop: galeria
  }, 500);
});

$('#btn-ubicacion').on('click', function(e){
  e.preventDefault();
  $('html, body').animate({
    scrollTop: ubicacion
  }, 500);
});

});
