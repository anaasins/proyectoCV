<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actualizar datos personales.</title>
  </head>
  <body>
    <form class="" action="actualizarpersonales.php" method="post">
      <fieldset>
        <legend>Actualizar datos personales.</legend>
        Foto: <input type="text" name="foto" value="<?=$_GET["foto"]?>"> <br><br>
        Nombre: <input type="text" name="nombre" value="<?=$_GET["nombre"]?>"> <br><br>
        Apellidos: <input type="text" name="apellidos" value="<?=$_GET["apellidos"]?>"> <br><br>
        Direccion:<input type="text" name="direccion" value="<?=$_GET["direccion"]?>"> <br><br>
        Telefono:<input type="text" name="telefono" value="<?=$_GET["telefono"]?>"> <br><br>
        Correo:<input type="text" name="correo" value="<?=$_GET["correo"]?>"> <br><br>
        Redes sociales:<input type="text" name="redes" value="<?=$_GET["redes"]?>"> <br><br>
        <input type="hidden" name="id_personal" value="<?=$_GET["id_personal"]?>">
        <input type="submit" name="Actualizar" value="Actualizar">
      </fieldset>
    </form>
    <?php
      include 'Modelo/usuario.php';
      $usuario=new Usuario();

      if (isset($_POST['foto']) && isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['direccion']) && isset($_POST['telefono']) && isset($_POST['correo']) && isset($_POST['redes'])) {
        $actualizar
      }
     ?>
  </body>
</html>
