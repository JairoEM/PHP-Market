<?php
    require("./clases/Conexion.php");
    require("./clases/Usuarios.php");

    $objeto = "3";
    $precioInsert = "";
    $stockInsert = "";

    $conexion = new Conexion();

    $precio = "SELECT articulo_precio FROM articulos WHERE articulo_id LIKE ".$objeto;
    $precioValue = $conexion->query($precio);

    $stock = "SELECT articulo_stock FROM articulos WHERE articulo_id LIKE ".$objeto;
    $stockValue = $conexion->query($stock);

    foreach ($precioValue as $key => $value) {        
        $precioInsert = $value[0];
    }
    foreach ($stockValue as $key => $value) {        
        $stockInsert = $value[0];
    }

    try {
        $sql = "INSERT INTO pedidos VALUES (null,'$objeto',$precioInsert,$stockInsert)";
        $res = $conexion->query($sql);
    } catch (PDOException $e) {
        echo 'Error de consulta' . $e->getMessage();
        exit();
    }

    header('Location: ./main.php');
?>