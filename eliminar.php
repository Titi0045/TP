<?php
$id = $_GET['id'];

$conexion = mysqli_connect("localhost","root","","logeo");
$consulta = "DELETE FROM info where id like $id";
$resultado = mysqli_query($conexion,$consulta);
if ($resultado){
    header("Location: index.php");
}
?>
