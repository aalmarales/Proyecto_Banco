<?php

$user=$_POST["usuario"];
$pass=$_POST["password"];

require_once("../modelos/BancoCentral.php");
$banco=new BancoCentral();
$consulta=$banco->busca_Admin($user,$pass);


if($consulta){
    session_start();
    $_SESSION["admin"]=$user;
    header("Location:../views/viewZonaAdmin.php");
}else
{
  die("<script>alert('USUARIO NO AUTORIZADO')</script>");
  //header("Location:../views/LoginAdmin.php");
}

?>