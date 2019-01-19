<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- BOOTSTRAP AND STYLES -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">

    <title>PHP Market</title>
  </head>
  <body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">PHP Market</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Carrito<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cerrar Sesion</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- MAIN-->
    <section class="container">
        <h1 id="welcome">Inicio de Sesión</h1>
        <hr>

        <!-- CONECTION FORM -->
        <div class="row">
            <div class="col-6 offset-3">
                <form method="POST" action="./php/conexion.php">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Correo Electrónico</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo Electrónico" name="mail">
                        <small id="usuarioHelp" class="form-text text-muted">Tus datos son seguros y no serán compartidos.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsuario1">Usuario</label>
                        <input type="usuario" class="form-control" id="exampleInputUsuario1" aria-describedby="usuarioHelp" placeholder="Usuario" name="user">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" name="pass">
                    </div>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </form>
            </div>     
        </div>
    </section>

    <!-- SCRIPTS -->

    <!-- BOOTSTRAP SCRIPS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>