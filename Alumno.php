<?php

class alumno{

private $nombre;
private $apellido;
private $codigo;


public function __construc (string $nombre, string $apellido, int $codigo){

  $this->setNombre($nombre);
  $this->setApellido($apellido);
  $this->setCodigo($codigo);
}

public function getNombre() : string
{
    return $this->nombre;
}

public function getApellido() : string
{
    return $this->apellido;
}

public function getCodigo() : int
{
    return $this->codigo;
}


public function setNombre(string $nombre)
{
    $this->nombre = $nombre;
}

public function setApellido(string $apellido)
{
    $this->apellido = $apellido;
}

public function setCodigo(string $codigo)
{
    $this->codigo = $codigo;
}












}



 ?>
