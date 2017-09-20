<?php
/**
 * Clase de gestion de usuarios
 */
 require_once 'db.php';
class Usuario extends db
{

  function __construct()
 {
   parent::__construct();
 }

 //funcion insertar usuario en la bd
  function registroUsuario($contraseña, $nombre, $apellido, $correo){
    $sql="INSERT INTO datospersonales(id_personal, contrasenya, nombre, apellidos, correo)
          VALUES (NULL , '".sha1($contraseña)."', '".$nombre."', '".$apellido."', '".$correo."')";
    //Realizamos la consulta
    $resultado=$this->realizarConsulta($sql);
    if($resultado!=false){
      //Recogemos el ultimo usuario insertado
      $sql="SELECT * from datospersonales ORDER BY id_personal DESC";
      //Realizamos la consulta
      $resultado=$this->realizarConsulta($sql);
      if($resultado!=false){
        return $resultado->fetch_assoc();
      }else{
        return null;
      }
    }else{
      return null;
    }
  }

  function LoginUsuario($correo){
    //Construimos la consulta
    $sql="SELECT * from datospersonales WHERE correo='".$correo."'";
    //Realizamos la consulta
    $resultado=$this->realizarConsulta($sql);
    if($resultado!=false){
      if($resultado!=false){
        return $resultado->fetch_assoc();
      }else{
        return null;
      }
    }else{
      return null;
    }
  }

  function datosCv($idusuario){
    //Construimos la consulta
    $sql="SELECT * from datospersonales WHERE id_personal='".$idusuario."'";
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
