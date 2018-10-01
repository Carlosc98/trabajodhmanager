<?php


require_once 'Profesor';

class Profesor extends ProfesorAdjunto{


      $horasConsulta;


  function __construct(int $horasConsulta)
  {
    $this->setHorasConsulta($horasConsulta);

  }


  public function getHorasConsulta() : int
  {
    return $this->horasConsulta;
  }

  public function setHorasConsulta(int $horasConsulta )
  {
    $this->horasConsulta = $horasConsulta;
  }
