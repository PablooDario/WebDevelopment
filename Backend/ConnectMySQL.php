<?php
    //$variable = mysqli_connect("servidor(dominio o ip)", "usuario", "contraseña", "nombreBaseDeDatos")
    $conexion = mysqli_connect("localhost", "root", "KurapikaCarti", "desarrollow");
    $sql ="SELECT * FROM ALUMNO";
    $resultado = mysqli_query($conexion, $sql);
    $detalle= mysqli_fetch_row($resultado);
    echo $detalle[0]
?>