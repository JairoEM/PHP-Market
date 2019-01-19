<?php
    require("./clases/Conexion.php");
    require("./clases/Usuarios.php");

    $objeto = "3";

    $conexion = new Conexion();

    $precio = "SELECT articulo_precio FROM articulos WHERE articulo_id LIKE '".$objeto."'";
    $stock = "SELECT articulo_stock FROM articulos WHERE articulo_id LIKE '".$objeto."'";
    
    try {
        $sql = "INSERT INTO pedidos VALUES (null,'$objeto',$precio[0],$stock[0])";
        $res = $conexion->query($sql);
    } catch (PDOException $e) {
        echo 'Error de consulta' . $e->getMessage();
        exit();
    }
?>