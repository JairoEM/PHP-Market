<?php
    require("./clases/Conexion.php");
    require("./clases/Usuarios.php");

    $usuario = $_POST["user"];
    $pass = $_POST["pass"];
    $mail = $_POST["mail"];

    $conexion = new Conexion();
    
    try {
        $sql = "SELECT * FROM usuarios WHERE usuario_nombre LIKE '".$usuario."'";
        $res = $conexion->query($sql);
    } catch (PDOException $e) {
        echo 'Error de consulta' . $e->getMessage();
        exit();
    }
    
    foreach ($res as $key => $value) {        
        echo $value[0];
        echo $value[1];
        echo $value[2];

        if($value[0] == $usuario){
            if($value[1] == $pass){
                if($value[2] == $mail){
                    header('Location: ./php/main.php');
                }
            }
        }
    }

    $conexion = null;
    $res = null;

    header("refresh:0.1; ./error.php");
?>