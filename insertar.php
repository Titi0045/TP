<?php

$nombre = $_POST['nombre'];
$numero = $_POST['numero'];

$conexion = mysqli_connect("localhost","root","","logeo");
$consulta = "INSERT INTO info (nombre, numero) VALUES('$nombre', '$numero')";
$resultado = mysqli_query($conexion,$consulta);
if (!$resultado) {
    echo"No se Inserto";
}
else {
    header("Location: index.php");
}
?>