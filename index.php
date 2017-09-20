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
    <h2>Datos personales.</h2>
    <?php
      $datosusuario=$usuario->datosCv($_SESSION['usuario']);
      foreach ($datosusuario as $usuario) {
        echo "<img src='".$usuario["foto"]."' alt=''> <br><br>";
        echo "<ul><li>".$usuario['nombre']."</li>";
        echo "<li>".$usuario['apellidos']."</li>";
        echo "<li>".$usuario['direccion']."</li>";
        echo "<li>".$usuario['telefono']."</li>";
        echo "<li>".$usuario['correo']."</li>";
        echo "<li>".$usuario['redes_sociales']."</li></ul>";
      }

      ?>
      <h2>Experiencia laboral</h2>
      <?php
      $experiencialaboral=$experiencia->experienciaCV($_SESSION['usuario']);
      foreach ($experiencialaboral as $experiencia) {
        echo "<ul><li><b>".$experiencia['anyoinicio']."-".$experiencia['anyofinal'].": </b>" .$experiencia['empresa'].": ".$experiencia['texto']."</li></ul>";
      }
     ?>
  </body>
</html>
<?php
}
 ?>
