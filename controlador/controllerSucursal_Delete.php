<?php
/// DELETE SUCURSAL ///

$nom=$_GET["Name"];
include("../modelos/BancoCentral.php");
$obj=new BancoCentral();
$obj->delete_Sucursal($nom);
header("Location: ../views/viewLista_sucursales.php");


?>