<?php

class Profesor{

  private $nombreProfesor;
  private $apellidoProfesor;
  private $antiguedadProfesor;
  private $codigoProfesor;

public function __construct (string $nombreProfesor, string $apellidoProfesor, int $antiguedadProfesor, int $codigoProfesor) {

  $this->setNombreProfesor($nombreProfesor);
  $this->setApellidoProfesor($apellidoProfesor);
  $this->setAntiguedadProfesor($antiguedadProfesor);
  $this->setCodigoProfesor($codigoProfesor);
}
public function getNombreProfesor() : string {
  return $this->nombreProfesor;
}
public function getApellidoProfesor() : string {
  return $this->apellidoProfesor;
}
public function getAntiguedadProfesor() : int {
  return $this->antiguedadProfesor;
}
public function getCodigoProfesor() : int {
  return $this->codigoProfesor;
}

public function setNombreProfesor(string $nombreProfesor)  {
   $this->nombreProfesor = $nombreProfesor;
}
public function setApellidoProfesor(string $apellidoProfesor)   {
   $this->apellidoProfesor = $apellidoProfesor;
}
public function setAntiguedadProfesor(int $antiguedadProfesor)   {
  $this->antiguedadProfesor = $antiguedadProfesor;
}
public function setCodigoProfesor(int $codigoProfesor)   {
  $this->codigoProfesor = $codigoProfesor;
}
