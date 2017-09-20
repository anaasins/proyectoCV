<?php
  require_once '/Modelo/usuario.php';
  require_once '/Modelo/educacion.php';
  require_once '/Modelo/experiencia.php';
  require_once '/seguridad/seguridad.php';

  $usuario= new Usuario();
  $educacion= new Educacion();
  $experiencia= new Experiencia();
  $seguridad= new Seguridad();

  if (isset($_SESSION['usuario'])==false) {
    header('Location: login.php');
  }else {

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mi CV.</title>
  </head>
  <body>
    <?php
      $usuario->datosCv($_SESSION['usuario']);
      
     ?>
  </body>
</html>
<?php
}
 ?>
