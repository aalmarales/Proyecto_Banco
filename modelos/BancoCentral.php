<?php
require("Sucursal.php");

class BancoCentral
{
    private $conex;
    private $lista_sucursales;

    public function __construct()
    {
        require_once("conexion.php");
        $this->conex = Conexion::conectar();
        $this->lista_sucursales=array();
    }
    
 public function insertar_Sucursal(Sucursal $s)
 {
    $sql="INSERT INTO sucursal VALUES (:nombre, :activos, :pais)";
    $stm=$this->conex->prepare($sql);
    $stm->execute(array(':nombre'=>$s->get_Nombre(), ':activos'=>$s->get_Activos(), ':pais'=>$s->get_Pais()));

 }
 public function update_Sucursal($nombre, $act, $pais)
 {
    $sql="UPDATE sucursal SET numero_activos= :activos, pais= :pais WHERE nomb_sucursal= :nombre";
    $stm=$this->conex->prepare($sql);
    $stm->execute(array(':activos'=>$act, ':pais'=>$pais, ':nombre'=>$nombre));
 }
 public function delete_Sucursal($nombre)
 {
    $sql="DELETE FROM sucursal WHERE nomb_sucursal= :nombre";
    $stm=$this->conex->prepare($sql);
    $stm->execute(array(':nombre'=>$nombre));
 }
 public function showAll_Sucursal()
 {
    $sql="SELECT * FROM sucursal";
    $stm=$this->conex->prepare($sql);
    $stm->execute();

    while ($fila=$stm->fetch(PDO::FETCH_ASSOC)) {
        $this->lista_sucursales[]=$fila;
    }

    return $this->lista_sucursales;

 }

 public function find_Sucursal($nombre)
 {
   $sql="SELECT * FROM sucursal WHERE nomb_sucursal= :nombre";
   $stm=$this->conex->prepare($sql);
   $stm->execute(array(':nombre'=> $nombre));
   $resul=$stm->fetch(PDO::FETCH_ASSOC);

   return $resul;
 }

 public function busca_Admin($user,$pass)
 {
   $sql="SELECT * FROM admin WHERE usuario= :u AND password= :p";
   $stm=$this->conex->prepare($sql);
   $stm->execute(array(':u'=>$user, ':p'=>$pass));

   $resul=$stm->fetch(PDO::FETCH_ASSOC);
   return $resul;
}
}

?>