<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="estilos.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros de telefonos</title>
</head>
<body>
    <form action="agregar.php" method="post">
        <input type="text" name="buscar" id="">
        <input type="sumbit" value="Buscar">
        <a href="nuevo.php">Nuevo</a>
    </form>
    <div>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>NOMBRE</td>
                <td>NUMERO DE TELEFONO</td>
            </tr>
            <?php
            $conexion = mysqli_connect("localhost","root","","logeo");
            $consulta = "SELECT id, nombre, numero FROM info order by id desc";
            $resultado = mysqli_query($conexion,$consulta);
            while ($mostrar = mysqli_fetch_row($resultado)){
            ?>
            <tr>
                <td><?php echo $mostrar['0'] ?></td>
                <td><?php echo $mostrar['1'] ?></td>
                <td><?php echo $mostrar['2'] ?></td>
                <td>
                    <a href="editar.php?
                    id=<?php echo $mostrar['0'] ?> &
                    nombre=<?php echo $mostrar['1'] ?> &
                    numero=<?php echo $mostrar['2'] ?> &
                    ">Editar</a>
                    <a href="eliminar.php? id=<?php echo $mostrar['0'] ?>">Eliminar</a>
            </td>    
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>
</html>