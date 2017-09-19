<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
  </head>
  <body>
    <form class="" action="registro.php" method="post">
      Nombre: <input type="text" name="nombre" value=""><br><br>
      Apellido: <input type="text" name="apellido" value=""><br><br>
      Correo electronico: <input type="text" name="correo" value=""><br><br>
      Contraseña: <input type="text" name="pass" value=""><br><br>
      Repita la contraseña: <input type="text" name="pass2" value=""><br><br>
      <input type="submit" name="registrarse" value="Registrarse">
    </form>
    <?php
    if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['correo']) && isset($_POST['pass']) && isset($_POST['pass2'])) {
   //si el usuario rellena todos los campos, llamamos al archivo de la db y creamos el objeto.
   include '\Modelo\usuario.php';
   $usuarios=new Usuario();
   //llamada a la funcion de insertar usuario en la db
   $resultado=$usuarios->registroUsuario($_POST['pass'], $_POST['nombre'], $_POST['apellido'], $_POST['correo']);
   if ($resultado==null) {
     echo "Error";
   }else {
     //si se inserta con exito, sacamos un mensaje i lo llevamos a login.php
    ?>
    <script type="text/javascript">
      alert("Usuario registrado con exito.");
    </script>
    <?php
    header('Location: login.php');
     }
 }else {
   ?>
   <script type="text/javascript">
     alert("No has rellenado todos los campos.");
   </script>
   <?php
 }
     ?>
  </body>
</html>
