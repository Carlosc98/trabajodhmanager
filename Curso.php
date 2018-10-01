<?php



class Curso{

  private $nombreCurso;
  private $codigoCurso;
  private $cupoMax;
  private $ProfesorAdj;
  private $ProfesorTit;
  private $AlumnosArray = [];


public function __construct( string $nombreCurso, int $codigoCurso, int $cupoMax) {
  $this->setNombreCurso($nombreCurso);
  $this->setCodigoCurso($nombreCodigo);
  $this->setCupoMax($cupoMax);
}
public function getNombreCurso() : string {
  return $this->nombreCurso;
}
public function getCodigoCurso() : int {
  return $this->codigoCurso;
}
public function setNombreCurso(string $nombreCurso) {
   $this->nombreCurso = $nombreCurso;
}
public function setCodigoCurso(int  $codigoCurso)  {
  $this->codigoCurso = $codigoCurso;
}

public function getCupoMax() : int {
  return $this->cupoMax;
}
public function setCupoMax(int $cupoMax)  {
  $this->cupoMax = $cupoMax;
}
public function setPorfesorAdj(ProfesorAdjunto $ProfesorAdj)
{
  $this->ProfesorAdj = $ProfesorAdj;
}

public function setPorfesorTit(ProfesorTitular $ProfesorTit)
{
  $this->ProfesorTit = $ProfesorTit;
}

public function agregarUnAlumno(Alumno $unAlumno){
  $this->Alumnos[] = "Jorge";

if count($AlumnosArray) < $cupoMax {
  return true
}else{
  return false
}
var_dump(agregarUnAlumno);
}
