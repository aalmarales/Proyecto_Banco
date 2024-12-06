<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
</head>
<body>
    REGISTRO DE CLIENTES
    <form action="../controlador/controllerCliente.php" method="post">

    <input type="text" name="dni" placeholder="DNI"><br>
    <input type="text" name="nombre" placeholder="NOMBRE"><br>
    <input type="text" name="profesion" placeholder="PROFESION"><br>
    <input type="text" name="pais" placeholder="PAIS"><br>

    <input type="submit" name="reg_cliente" value="REGISTRAR">
    <input type="reset" name="cancel" value="CANCELAR">

    </form>
</body>
</html>