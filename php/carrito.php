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
        <a class="navbar-brand" href="./main.php">PHP Market</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Carrito<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Cerrar Sesion</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- MAIN-->
    <section class="container">
        <h1 id="welcome">Carrito</h1>
        <hr>

        <!-- TABLE -->
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Compra</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Cantidad</th>
                </tr>
            </thead>
            <tbody>

                <!-- PHP TABLE -->
                <?php
                    require("./clases/Conexion.php");
                    require("./clases/Usuarios.php");

                    $conexion = new Conexion();
        
                    try {
                        $sql = "SELECT * FROM pedidos GROUP BY pedido_des";
                        $res = $conexion->query($sql);
                    } catch (PDOException $e) {
                        echo 'Error de consulta' . $e->getMessage();
                        exit();
                    }

                    $count = 1;
                    $articulo = "";

                    foreach ($res as $key => $value) {
                        if($value[1] == "1"){
                            $articulo = "Sekiro PC";
                        }else{
                            if($value[1] == "2"){
                                $articulo = "Sekiro PS4";
                            }else{
                                $articulo = "Sekiro XBOX";
                            }
                        }
                        
                        echo "
                            <tr>
                                <th scope='row'>$count</th>
                                <td>$articulo</td>
                                <td>$value[2]</td>
                                <td>
                                    <input class='form-control' type='number' value='1' min='0' max='$value[3]' id='$count' style='width: 70px;'>
                                </td>
                            </tr>
                        ";
                        
                        $count++;
                    }
                ?>
            </tbody>
        </table>
    </section>

    <br>
    
    <div class="container">
        <div class="row">
            <div class="col-2 offset-10">
                <a href="./gracias.php" role="button" aria-pressed="true" class="btn btn-dark btn-block">Comprar</a>
            </div>
        </div>
    </div>

    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>