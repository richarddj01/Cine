<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CinePremier</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <script src="../js/jquery-3.6.3.min.js"></script>
  <script src="../js/carrito_pelicula.js"></script>
  <!-- Recibir variable con el nombre de la película -->
  <?php
    $nombre_pelicula = $_GET['nombre'];
    $imagen = $_GET['img'];
  ?>
    <header class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg ">
                <div class="row pr-5 pl-3">
                    <a class="logo navbar-brand" href="index.html" target="_blank"><img
                            src="../img/Logo_Cine_sin_fondo2.png" alt=""></a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu"
                    aria-controls="menu" aria-expandend="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="menu">
                    <ul class="navbar-nav ms-auto">
                        <li><a href="../index.html">Inicio</a></li>
                        <li><a href="../index.html">Peliculas</a></li>
                        <li><a href="./ayuda.html">Ayuda</a></li>
                        <li><a href="../modules/login.html">Login</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div><br>
        </div>
        <div>
            <br>
        <section>
            <center>
              <div class="container text-light  mb-3" >
                <div class="containter px-4" >
                  <div class="row">

                    <div class="containter text-center pt-3">
                      <h3>Compra de Boletos</h3>
                      <br>
                      <hr>
                      <h3>Pelicula: <?php echo $nombre_pelicula;?></h3>
                      <hr>
                      <br>
                        </div>
                            <div class="col-4">
                              <img src="../img/<?php echo $imagen?>" alt="" />
                            </div>
                            <div class="col-8">
                              <div class="row">
                                <div class="col-7">
                                    <label for="Categoria" class="form-label">Tipo de Boleto:</label>
                                    <select name="tipo_boleto" id="tipo_boleto" class="input-group mb-3 form-control">
                                      <option value=""></option>
                                      <option value="Niño">Niño</option>
                                      <option value="Adulto">Adulto</option>
                                      <option value="Adulto Mayor">Adulto Mayor</option>
                                    </select>
                                </div>
                                <div class="col-2">
                                    <label for="Cantidad" class="form-label">Cantidad:</label>
                                    <input id="cantidad" type="number" class="input-group mb-3 form-control">
                                </div>
                                <div class="col-3 mt-4">
                                  <button id="agregar2" class="btn btn-primary btn-danger mt-2 px-5" type="submit">Agregar</button>
                                </div>
                              </div>
                              <div class="row">
                                <div class="mt-2 pb-2 table-responsive">  
                                <table id="tabla" class="table table-light table-bordered table-hover">
                                  <thead>
                                    <tr>
                                      <th scope="col-6">Tipo de Boleto</th>
                                      <th scope="col-2">Cantidad</th>
                                      <th scope="col-4"></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                  <!-- <tr id="row1">
                                      <td>2022-12-08</td>
                                      <td>2022-12-09</td>
                                      <td>Tacos</td>
                                      <td>One</td>
                                      <td><button type="button" name="remove" id="1" class="btn btn-danger btn_remove">Quitar</button><button type="button" name="btnModificar" id="1" class="btn ms-1 btn-danger btn_modificar">Modificar</button>
                                    </tr>
                                  -->
                                  </tbody>
                                </table>
                                </div>
                              </div>
                            </div>
                      </div>
                 </div>
                </div>
            </div>
          </div>
            </center>
        </section>
        </div>
        
        
        <div><br><br><br><br><br><br><br><br><br></div>
        <footer class="bg-dark text-white">
          <br>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h3>Contacto</h3>
                        <ul class="list-unstyled">
                            <li> 1234-5678</li>
                            <li>info@unicah.edu</li>
                            <li>Santa Rosa de Copan, Honduras.</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3>Síguenos en</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">Youtube</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3>Mas información:</h3>
                        <ul class="list-unstyled">
                            <li><a href="./termycond.html">Terminos y Condiciones</a></li>
                            <li><a href="./acercade.html">Acerca de</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <p class="text-center">Derechos Reservados &copy; 2023 UNICAH</p>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
            crossorigin="anonymous"></script>
        <script src="../js/bootstrap.js"></script>
</body>

</html>
