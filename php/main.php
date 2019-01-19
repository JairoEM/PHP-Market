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
                    <a class="nav-link" href="./carrito.php">Carrito<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Cerrar Sesion</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- MAIN-->
    <section class="container">
        <h1 id="welcome">Bienvenido a Nuestro Supermercado</h1>
        <hr>
        
        <!-- PRODUCTS -->
        <div class="row">
            <div class="col-md-4">
                <div class="card justify-content-center" style="width: 18rem;">
                    <img class="card-img-top" src="https://media.game.es/COVERV2/3D_L/155/155878.png">
                    <div class="card-body">
                        <h5 class="card-title">Sekiro PC - 100€</h5>
                        <p class="card-text">Traza tu propio camino hacia la venganza en una nueva aventura del desarrollador FromSoftware, creador de las sagas Bloodborne y Dark Souls.</p>
                        <a href="./objeto1.php" class="btn btn-primary" name="1">Añadir al Carrito</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card justify-content-center" style="width: 18rem;">
                    <img class="card-img-top" src="https://media.game.es/COVERV2/3D_L/155/155879.png">
                    <div class="card-body">
                        <h5 class="card-title">Sekiro PS4 - 100€</h5>
                        <p class="card-text">Traza tu propio camino hacia la venganza en una nueva aventura del desarrollador FromSoftware, creador de las sagas Bloodborne y Dark Souls.</p>
                        <a href="./objeto2.php" class="btn btn-primary" name="2">Añadir al Carrito</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card justify-content-center" style="width: 18rem;">
                    <img class="card-img-top" src="https://media.game.es/COVERV2/3D_L/155/155880.png">
                    <div class="card-body">
                        <h5 class="card-title">Sekiro XBOX - 100€</h5>
                        <p class="card-text">Traza tu propio camino hacia la venganza en una nueva aventura del desarrollador FromSoftware, creador de las sagas Bloodborne y Dark Souls.</p>
                        <a href="./objeto3.php" class="btn btn-primary" name="3">Añadir al Carrito</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>