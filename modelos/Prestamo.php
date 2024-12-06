<?php

class Prestamo
{
  private $nom_sucursal;
  private $id_prestamo; 
  private $dni_cliente;
  private $saldo;


  public function __construct($suc,$id_p,$dni,$s)
  {
    $this->nom_sucursal=$suc;
    $this->id_prestamo=$id_p;
    $this->dni_cliente=$dni;
    $this->saldo=$s;

  }
////////////////////////////////////////////////
  public function get_Saldo()
{
    return $this->saldo;
}

public function set_Saldo($sal)
{
    $this->saldo=$sal;
}
////////////////////////////////////////////////
public function get_IdPrestamo()
{
    return $this->id_prestamo;
}
////////////////////////////////////////////////
public function get_DniCliente()
{
    return $this->dni_cliente;
}
////////////////////////////////////////////////
public function get_NombSucursal()
{
    return $this->nom_sucursal;
}
}


?>