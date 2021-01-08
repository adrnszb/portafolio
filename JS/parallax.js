$(document).ready(function(){

  $(window).scroll(function(){
    var windowWidth = $(window).width();

    if(windowWidth > 800){
      var scroll = $(window).scrollTop(); // IDEA: calcular el valor de la pantalla y dividirlo para que se mueva diferente

      $('header .textos').css({
        'transform': 'translate(0px, ' + scroll / 2 + '%)'
      });

      $('.acerca article').css({
        'transform': 'translate(0px, -' + scroll / 4 + '%)'
      });
    }

});

$(window).resize(function(){
  var windowWidth = $(window).width();
  if(windowWwidth < 800){
    $('.acerca article').css({
      'transform': 'translate(0px, 0px)'
    })
  }
})

$(window).resize(function(){
  var windowWidth = $(window).width();
  if(windowWwidth < 800){
    $('header .textos').css({
      opacity: 0
    })
  }
})
});
