console.log("hola");


$(document).ready(function () {
  // Función para actualizar el margen superior
  function actualizarMargenSuperior() {
    var alturaPantalla = $(".cabecera").height();
    var anchoPantalla = $(window).width();
    $('.categorias').css('margin-top', alturaPantalla + 'px');
    $('.cabecera').css('width', anchoPantalla + 'px');

  }
  
  // Actualizar el margen superior 
  actualizarMargenSuperior();
  $(window).on('resize', actualizarMargenSuperior);

  // filtros retractiles 
  // Selector de encabezados de filtro
  $(".encabezadoFiltro").click(function () {

    var $listaColor = $(this).next(".listacolor");


    $listaColor.slideToggle("slow", function () {
      if ($(this).is(':hidden')) {
        $(this).prev(".encabezadoFiltro").find("img").attr("src", "http://localhost/img/fAbajo.png")
      } else {
        $(this).prev(".encabezadoFiltro").find("img").attr("src", "http://localhost/img/fArriba.png");
      }
    });
  });


});

var counter = 1;
setInterval(function () {
  document.getElementById('radio' + counter).checked = true;
  counter++;
  if (counter > 4) {
    counter = 1;
  }

}, 5500);
