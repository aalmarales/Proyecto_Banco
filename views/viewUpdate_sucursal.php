<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>UPDATE SUCURSAL</h1><br>
    <form action="../controlador/controllerSucursal_Update.php" method="post">

    <input type="hidden" name="n_sucursal" value="<?php echo $_GET["N"];?>">
    <input type="text" name="suc" value="<?php echo $_GET["N"];?>" disabled><br>
    
    <input type="text" name="upd_activos" value="<?php echo $_GET["A"];?>"><br>
    <input type="text" name="upd_pais" value="<?php echo $_GET["P"];?>"><br>


    <input type="submit" name="upd_sucursal" value="UPDATE">
    <a href="lista_sucursales.php"><input type="button" name="cancel" value="CANCELAR"></a>

    </form>
</body>
</html>