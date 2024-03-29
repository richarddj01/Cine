<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/login.css">
  <link rel="shortcut icon" href="./img/logopestaña.png" type="image/x-icon">
</head>

<body>

  <section class="vh-100"
    style="background-image: url(./img/cine.jpg); background-repeat: no-repeat; background-size: cover;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <h3 class="mb-5">Iniciar Sesion</h3>
              
              <form action="validar.php" method="post">
              <div class="form-outline mb-4">
                <input type="email" id="typeEmailX-2" class="form-control form-control-lg" name="correo5">
                <label class="form-label" for="typeEmailX-2">Email</label>
              </div>

              <div class="form-outline mb-4">
                <input type="password" id="typePasswordX-2" class="form-control form-control-lg" name="contrasena5"/>
                <label class="form-label" for="typePasswordX-2">Password</label>
              </div>

              <!-- Checkbox -->
              <div class="form-check d-flex justify-content-start mb-4">
                <input class="form-check-input" type="checkbox" value=" " id="form1Example3" />
                <label class="form-check-label" for="form1Example3"> Recordar Contraseña </label>
              </div>
              <input class="btn btn-primary btn-lg btn-block" type="submit" value="Entrar"></input>
              </form>

              <hr class="my-4">
              <a href="https://accounts.google.com/login?hl=es">
                <button class="btn btn-lg btn-block btn-primary" style="background-color: #f7770e;" type="submit"><i
                    class="fab fa-google me-2"></i> Logearse con Google</button>
              </a>
              <br>
              <br>
              <a href="https://www.facebook.com/">
                <button class="btn btn-lg btn-block btn-primary mb-2" style="background-color: #0041ce;"
                  type="submit"><i class="fab fa-facebook-f me-2"></i>Logearse con facebook</button>
              </a>

              <p><a href="registro2.php">¿Crear Cuenta?</a></p>
      
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="./js/bootstrap.min.js"></script>
</body>

</html>