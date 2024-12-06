<?php
class Sucursal
{
  private $conexion_bd;  

  private $nombre;
  private $activos;
  private $pais;

  private $lista_clientes;
  private $lista_depositos;
  private $lista_prestamos; 

 public function __construct($n,$a,$p)
 {
    require_once("conexion.php");
    $this->conexion_bd = Conexion::conectar();

    $this->nombre=$n;
    $this->activos=$a;
    $this->pais=$p;
    $this->lista_clientes=array();
    $this->lista_depositos=array();
    $this->lista_prestamos=array();

 }


 public function Add_Client(Cliente $c)
 {
   array_push($this->lista_clientes,$c);
 }
////////////////////////////////////////////////
 public function get_Clientes()
 {
     return $this->lista_clientes;
 }
////////////////////////////////////////////////
 public function Add_Deposito(Deposito $d)
 {
   array_push($this->lista_depositos,$d);
 }
////////////////////////////////////////////////
 public function get_Depositos()
 {
     return $this->lista_depositos;
 }
/////////////////////////////////////////////////

public function Add_Prestamo(Prestamo $p)
{
  array_push($this->lista_prestamos,$p);
}
////////////////////////////////////////////////
public function get_Prestamos()
{
    return $this->lista_prestamos;
}
/////////////////////////////////////////////////
 public function get_Nombre()
{
    return $this->nombre;
}
////////////////////////////////////////////////
public function get_Activos()
{
    return $this->activos;
}

public function set_Activos($a)
{
    $this->activos=$a;
}
//////////////////////////////////////////////////
public function get_Pais()
{
    return $this->pais;
}

public function set_Pais($p)
{
    $this->pais=$p;
}
///////////////////////////////////////////////////


}


?>