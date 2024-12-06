<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table>
    <tr>LISTA DE SUCURSALES</tr>
        <tr>
            <td>NOMBRE</td>
            <td>#_ACTIVOS</td>
            <td>PAIS</td>
            <td></td>
            <td></td>
        </tr>

        <?php
        include("../modelos/BancoCentral.php");

        $obj=new BancoCentral();
        $lista=$obj->showAll_Sucursal();

        foreach($lista as $fila):?>
        
        <tr>
            <td><?php echo $fila["nomb_sucursal"]?></td>
            <td><?php echo $fila["numero_activos"]?></td>
            <td><?php echo $fila["pais"]?></td>
            <td><a href="viewUpdate_sucursal.php?N=<?php echo $fila["nomb_sucursal"];?> && A=<?php echo $fila["numero_activos"];?> && P=<?php echo $fila["pais"];?>"><input type="button" name="btn_update" value="UPDATE"></a></td>
            <td><a href="../controlador/controllerSucursal_Delete.php?Name=<?php echo $fila["nomb_sucursal"];?>"><input type="button" name="btn_delete" value="DELETE"></a></td>
        </tr>
        <?php
        endforeach;
        ?>
        
    </table><br>
    <a href="viewInsert_Sucursal.php"><input type="button" name="btn_insert" value="INSERTAR SUCURSAL"></a>
</body>
</html>