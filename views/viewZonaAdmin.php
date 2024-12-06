<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>ZONA DE ADMINISTRADORES</h1>
    <?php
    echo "HOLA"."<br>".$_SESSION["admin"];
    ?>
    <br><br><br>
    <a href="viewLista_sucursales.php"><input type="button" name="sucursales" value="LISTA DE SUCURSALES"></a><br>
   
</body>

</html>