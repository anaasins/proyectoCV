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
        echo "<a href='actualizarpersonales.php?id_personal=".$usuario['id_personal']."&foto=".$usuario['foto']."&nombre=".$usuario['nombre']."&apellidos=".$usuario['apellidos']."&direccion=".$usuario['direccion']."&telefono=".$usuario['telefono']."&correo=".$usuario['correo']."&redes=".$usuario['redes_sociales']."'>Actualizar datos personales.</a>";
      }


      ?>
      <h2>Experiencia laboral</h2>
      <?php
      $experiencialaboral=$experiencia->experienciaCV($_SESSION['usuario']);
      foreach ($experiencialaboral as $experiencia) {
        echo "<ul><li><b>".$experiencia['anyoinicio']."-".$experiencia['anyofinal'].": </b>" .$experiencia['empresa'].": ".$experiencia['texto']."</li></ul>";
      }
     ?>
     <h2>Educación</h2>
     <?php
      $educacionusuario=$educacion->mostrarEducacion($_SESSION['usuario']);
      foreach ($educacionusuario as $educacion) {
        echo "<ul><li><b>".$educacion['año_inicio']."-".$educacion['año_finalizacion'].": </b>".$educacion['empresa'].": ".$educacion['texto']."</li></ul>";
        echo "<a href='actualizareducacion.php?id_estudios=".$educacion['id_estudios']."&año_inicio=".$educacion['año_inicio']."&año_finalizacion=".$educacion['año_finalizacion']."&empresa=".$educacion['empresa']."&texto=".$educacion['texto']."'>Actualizar educacion.</a>";
      }
      ?>
  </body>
</html>
<?php
}
 ?>
