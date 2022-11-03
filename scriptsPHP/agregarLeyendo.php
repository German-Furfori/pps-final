<?php
    include("manejoSesion.inc");
    include("conexion.inc");

    $id_usuario = $_SESSION['idUsuario'];
    $id_libro = $_POST['id'];
    $pagina_actual = 1;
    $terminado = 0;
    $query = "INSERT INTO leyendo (fk_usuario, fk_libro, pagina_actual, terminado) 
        VALUES (" . $id_usuario . ", " . $id_libro . ", " . $pagina_actual . ", " . $terminado . ");";

    $resultado = mysqli_query($conexion, $query);
    echo ($resultado);
    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>