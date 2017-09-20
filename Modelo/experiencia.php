<?php
require_once 'db.php';

/**
 * Clase encargada de las consultas a la tabla experiencia.
 */
class Experiencia extends db
{

  function __construct()
  {
    parent::__construct();
  }

  function experienciaCV($idusuario){
    //Construimos la consulta
    $sql="SELECT * from experienciaprofesional WHERE id_personal='".$idusuario."'";
    //Realizamos la consulta
    $resultado=$this->realizarConsulta($sql);
    if($resultado!=null){
      //Montamos la tabla de resultados
      $tabla=[];
      while($fila=$resultado->fetch_assoc()){
        $tabla[]=$fila;
      }
      return $tabla;
    }else{
      return null;
    }
  }
}

 ?>
