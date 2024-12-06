<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucursal</title>
</head>
<body>
    REGISTRO DE SUCURSAL
    <form action="../controlador/controllerSucursal_Insert.php" method="post">

    <input type="text" name="nomb_sucursal" placeholder="NOMBRE SUCURSAL"><br>
    <input type="text" name="activos" placeholder="# DE ACTIVOS"><br>
    <input type="text" name="pais" placeholder="PAIS"><br>


    <input type="submit" name="reg_sucursal" value="REGISTRAR SUCURSAL">
    <input type="reset" name="cancel" value="CANCELAR">

    </form>
</body>
</html>