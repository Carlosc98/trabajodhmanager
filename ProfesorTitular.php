<?php


require_once 'Profesor';

class Profesor extends ProfesorTitular{


      $especialidad;


  function __construct(string $especialidad)
  {
    $this->setEspecialidad($especialidad);

  }


  public function getEspecialidad() : string
  {
    return $this->especialidad;
  }

  public function setEspecialidad(string $especialidad)
  {
    $this->especialidad = $especialidad;
  }
















}

 ?>
