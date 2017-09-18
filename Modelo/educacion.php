<?php

require_once 'db.php';

class Educacion extends db
{

  function __construct()
  {
    parent::__construct();
  }

  public function ActualizarEducacion($id_estudios,$año_inicio,$año_final,$texto,$empresa){
            $sql="UPDATE estudios SET año_inicio=".$año_inicio.", año_finalizacion=".$año_final.", empresa='".$empresa."', texto='".$texto."' WHERE id_estudios=".$id_estudios."";
            $actualizarreserva=$this->realizarConsulta($sql);
            if ($actualizarreserva=!false) {
              return true;
            }else {
              return false;
            }
          }


}


 ?>
