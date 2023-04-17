console.log("hola");


$(document).ready(function() {
    // Función para actualizar el margen superior
    function actualizarMargenSuperior() {
      var alturaCabecera = $('.cabecera').height();
      $('.categorias').css('margin-top', alturaCabecera + 'px');
    }
  
    // Actualizar el margen superior 
    actualizarMargenSuperior();
    $(window).on('resize', actualizarMargenSuperior);
  });
