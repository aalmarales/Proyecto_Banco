<?php
require("../modelos/Cliente.php");
require("../modelos/Sucursal.php");


$dni_cliente=$_POST["dni"];
$nomb_cliente=$_POST["nombre"];
$prof_cliente=$_POST["profesion"];
$pais_cliente=$_POST["pais"];

if(isset($_POST["reg_cliente"])){

    $suc=new Sucursal("BBva",350,"ESpaña");
    $client=new Cliente($dni_cliente,$nomb_cliente,$prof_cliente,$pais_cliente);

    $suc->Add_Client($client);
    print_r($suc);
}




?>