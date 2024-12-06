<?php


class Cliente
{

private $dni;
private $nombre;
private $profesion;
private $pais;

public function __construct($dni,$nom,$prof,$pais)
{
    
    $this->dni=$dni;
    $this->nombre = $nom;
    $this->profesion=$prof;
    $this->pais=$pais;
}

public function get_DNI()
{
    return $this->dni;
}
////////////////////////////////////
public function get_Nombre()
{
    return $this->nombre;
}

public function set_Nombre($n)
{
    $this->nombre=$n;
}
/////////////////////////////////////////
public function get_Profesion()
{
    return $this->profesion;
}

public function set_Profesion($p)
{
    $this->profesion=$p;
}
/////////////////////////////////////////
public function get_Pais()
{
    return $this->pais;
}

public function set_Pais($pa)
{
    $this->pais=$pa;
}





}




?>