$(document).ready(function(){
 
  //BOTON INDEX
  $("#inicio").click(function(){  
    $('li').removeClass('active');
      $("#inicio").addClass('active');
      $.ajax({
        type:"GET",
        datatype: "html",
        cache: false,
        url:"index.php?action=inicio",
        success:function(data){
          $("#contenedor_principal").html(data)
          listarCategoriasDesplegableIndex();
        },
        error: function(){
          $("#contenedor_principal").html("<h5>No se cargó</h5>");
        }
      });
  event.preventDefault();
  });

  // ESTADISTICAS
  $("#estadisticas").click(function(){
      $('li').removeClass('active');
      $("li#estadisticas").addClass('active');
      $.ajax({
        type:"GET",
        datatype: "html",
        cache: false,
        url:"index.php?action=estadisticas",
        success:function(data){
          $("#contenedor_principal").html(data)
        },
        error: function(){
          $("#contenedor_principal").html("<h5>No se cargo</h5>");
        }
      });
  event.preventDefault();
  });
});