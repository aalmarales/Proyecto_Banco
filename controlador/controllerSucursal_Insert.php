<?php
/// INSERTAR SUCURSAL ///
$nomb_sucursal=$_POST["nomb_sucursal"];
$activos=$_POST["activos"];
$pais=$_POST["pais"];


if(isset($_POST["reg_sucursal"]))
{
   require("../modelos/BancoCentral.php");

   $sucursal= new Sucursal($nomb_sucursal,$activos,$pais);

   $banco=new BancoCentral();
   $banco->insertar_Sucursal($sucursal);
   header("Location:../views/lista_sucursales.php");
}

?>