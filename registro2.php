<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="shortcut icon" href="img/logopestaña.png" type="image/x-icon">
    <title>Registro</title>

    <style>
        body {
            background: #292929;
            background: linear-gradient(to rifht, #acacac, #292929);

        }

        .bg {
            background-image: url(img/cinefondoregistro.png);
            background-position: center center;
        }
    </style>
</head>

<body>

    <div class="container w-75 bg-primary mt-5 rounded shadow">
        <div class="row aling-items-stretch">
            <div class="col bg d-none  d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">

            </div>
            <div class="col bg-white p-5 rounded-end">
                <div class="text-end">
                    <img src="img/Logo_Cine_sin_fondo_negro.png" width="200" alt="">
                </div>
                <h2 class="fw-bold text-center pt-5 mb-5">Bienvenido a Cine Premiere</h2>
<form action="registro.php" method="post">
    <div class="mb-4">
        <label for="nombre" class="form-label">Nombre Completo</label>
        <input type="text" class="form-control" name="nombre">
    </div>

    <div class="mb-4">
        <label for="email" class="form-label">Correo Electronico</label>
        <input type="email" class="form-control" name="emai2">
    </div>

    <div class="mb-4">
        <label for="password" class="form-label">Contraseña*</label>
        <input type="password" class="form-control" name="contrasen">
    </div>

    <div class="mb4">
        <label for="telefono" class="form-label">Telefono</label>
        <input type="tel" class="form-control" id="tel" name="telefon">
    </div>
    <br>
    <div class="mb-4 form-check">
        <input type="checkbox" name="conenected" class="form-check-input">
        <label for="conenected" class="form-check-label">Recordar Contraseña</label>
    </div>

    <div class="d-grid">
        <button type="submit" class="btn btn-primary" name="registrarse" value="registrarse">Registrarse</button>
    </div>

    <div class="my-3 text-center">
        <span>Ya cuentas con una Cuenta? <a href="login.php">Logeate</a></span><br>
        <span><a href="./modules/termycond.html">Terminos Y Condiciones</a></span>
    </div>
</form>
                <div class="container w-1000 my-5">
                    <div class="row text-center">
                        <div class="col-12">Registrarse con</div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <a button href="https://www.facebook.com/" class="btn btn-outline-primary w-100 my-1">
                                <div class="row aling-items-center">
                                    <div class="col-2 d-none d-md-block">
                                        <img src="img/facebo.jpg" width="32" alt="">

                                    </div>
                                    <div class="col-10 col-md-10 text-center">
                                        Facebook
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a button href="https://myaccount.google.com/?utm_source=sign_in_no_continue&pli=1"
                                class="btn btn-outline-danger w-100 my-1">
                                <div class="row aling-items-center">
                                    <div class="col-2 d-none d-md-block">
                                        <img src="img/googlw.png" width="32" alt="">
                                    </div>
                                    <div class="col-10 col-md-10 text-center">
                                        Google
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>