<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$id = $_GET['id'];
$nombre = $_GET['nombre'];
$numero = $_GET['numero'];
?>
    <div>
        <form action="insertar.php" method="post">
            <table>
                <tr>
                    <td>Ingresar Datos:</td>
                    <td><input type="text" name="id" id="" style="visibility.hidden" value="<?=$id?>"></td>
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="nombre" id="" value="<?=$nombre?>"></td>
                </tr>
                <tr>
                    <td>Numero</td>
                    <td><input type="text" name="numero" id="" value="<?=$numero?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" value= "Actualizar"></td>
                    <td><a href="index.php">Cancelar</a></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>