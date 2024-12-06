<?php

class Deposito
{
  
  private $saldo;
  private $id_deposito;
  private $dni_cliente;
  private $nom_sucursal; 

  public function __construct($s,$id,$dni,$suc)
  {
    $this->saldo=$s;
    $this->id_deposito=$id;
    $this->dni_cliente=$dni;
    $this->nom_sucursal=$suc;

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
public function get_IdDeposito()
{
    return $this->id_deposito;
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