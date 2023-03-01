$(document).ready(function() {
    //obtenemos el valor de los input
    
    var esNuevo2 = true;
    var id2;
  
    $('#agregar2').click(
      function() {
        if(document.getElementById("tipo_boleto").value !=""){
            if(document.getElementById("cantidad").value !=""){
                if(document.getElementById("cantidad").value > 0){
                    if(esNuevo2){
                        insertarDatos();
                    }else{
                        $('#row' + id2).remove()
                        insertarDatos();
                        esNuevo2 = true;
                        }
                    }
                else{
                    alert("La cantidad debe ser mayor que 0");
                }
            }
            else{
                alert("Seleccione una Cantidad");
            }
        }else{
          alert("Seleccione un tipo de Boleto");
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
    document.getElementById("tipo_boleto").value = $(this).parents("tr").find("td")[0].innerHTML;
    document.getElementById("cantidad").value = $(this).parents("tr").find("td")[1].innerHTML;
    esNuevo2 = false;
    id2 = $(this).attr("id");
  });
  function insertarDatos(){
    var Tipo_Boleto = document.getElementById("tipo_boleto").value;
    var Cantidad = document.getElementById("cantidad").value;
    var j = $("#tabla tbody tr").length; //contador para asignar id al boton que borrara la fila
    var fila = '<tr id="row' + j + '"><td class="col-6">' + Tipo_Boleto + '</td><td class="col-2">' + Cantidad + '</td><td class="col-4"><button type="button" name="remove" id="' + j+ '" class="btn btn-danger btn_remove">Quitar</button><button type="button" name="btnModificar" id="' + j + '" class="btn ms-1 btn-danger btn_modificar">Modificar</button></td></tr>'; //esto seria lo que contendria la fila
  
    $('#tabla tbody').append(fila);

    document.getElementById("tipo_boleto").value ="";
    document.getElementById("cantidad").value = "";
    document.getElementById("cantidad").focus();
  }
  });
  /*
  function validarSiExiste(){
    var valores
    for (var i = 0; i<$("#tabla tbody tr").length;i++){
        var quesito = $(this).parents("#tabla tbody tr").find("td").each(function() {
            valores += $(this).html() + "\n";
          });
        alert(valores);
        if(quesito == document.getElementById("tipo_boleto").value){
            alert("Este tipo de boleto ya fue seleccionado, puede modificar la cantidad presionando el boton modificar que se encuentra a la derecha del tipo de boleto");
            return false;
        }
        else{
            return true;
        }
    }
  }
  */