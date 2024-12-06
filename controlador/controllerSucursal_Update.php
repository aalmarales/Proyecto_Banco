<?php

/// UPDATE SUCURSAL ///

$nomb=$_POST["n_sucursal"];
$nuevo_act=$_POST["upd_activos"];
$nuevo_pais=$_POST["upd_pais"];

if(isset($_POST["upd_sucursal"])){
   require("../modelos/BancoCentral.php");
   $obj=new BancoCentral();
   $obj->update_Sucursal($nomb, $nuevo_act, $nuevo_pais);
   header("Location: ../views/viewLista_sucursales.php");
}



?>