$(document).ready(function() {
    //obtenemos el valor de los input
    
    var esNuevo2 = true;
    var id2;
  
    $('#agregar2').click(
      function() {
        if(document.getElementById("Nombre").value !=""){
          if(document.getElementById("Categoria").value !=""){
            if(document.getElementById("Precio").value !=""){
                if(document.getElementById("Cantidad").value !=""){
                    if(document.getElementById("Descripcion").value !=""){
                        if(esNuevo2){
                            insertarDatos();
                          }else{
                            $('#row' + id2).remove()
                            insertarDatos();
                            esNuevo2 = true;
                          }
                        }else{
                          alert("Seleccione una Descripcion");
                        }
                    }else{
                        alert("Ingrese una Cantidad");
                    }
            
                }else{
                    alert("Ingrese un Precio");
                }
            
            }else{
                alert("Ingrese una Categoria");
            }
        
        }else{
          alert("Seleccione una Nombre");
        }
      });
  
  $(document).on('click', '.btn_remove', function() {
  var button_id2 = $(this).attr("id");
    //cuando da click obtenemos el id del boton
     //borra la fila
    //limpia el para que vuelva a contar las filas de la tabla

    $('#row' + button_id2 + '').remove();
  });
  
  $(document).on('click', '.btn_modificar', function() {
    document.getElementById("Nombre").value = $(this).parents("tr").find("td")[0].innerHTML;
    document.getElementById("Categoria").value = $(this).parents("tr").find("td")[1].innerHTML;
    document.getElementById("Precio").value = $(this).parents("tr").find("td")[2].innerHTML;
    document.getElementById("Cantidad").value = $(this).parents("tr").find("td")[3].innerHTML;
    document.getElementById("Descripcion").value = $(this).parents("tr").find("td")[4].innerHTML;
    esNuevo2 = false;
    id2 = $(this).attr("id");
  });
  function insertarDatos(){
    var Nombre = document.getElementById("Nombre").value;
    var Categoria = document.getElementById("Categoria").value;
    var Precio = document.getElementById("Precio").value;
    var Cantidad = document.getElementById("Cantidad").value;
    var Descripcion = document.getElementById("Descripcion").value;
    var j = $("#tabla tbody tr").length; //contador para asignar id al boton que borrara la fila
    var fila = '<tr id="row' + j + '"><td>' + Nombre + '</td><td>' + Categoria + '</td><td>' + Precio + '</td><td>' + Cantidad + '</td><td>' + Descripcion + '</td><td><button type="button" name="remove" id="' + j+ '" class="btn btn-danger btn_remove">Quitar</button><button type="button" name="btnModificar" id="' + j + '" class="btn ms-1 btn-danger btn_modificar">Modificar</button></td></tr>'; //esto seria lo que contendria la fila
  
    $('#tabla tbody').append(fila);

    document.getElementById("Nombre").value ="";
    document.getElementById("Categoria").value = "";
    document.getElementById("Precio").value = "";
    document.getElementById("Descripcion").value = "";
    document.getElementById("Cantidad").value = "";
    document.getElementById("Descripcion").focus();
  }
  });