<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actualizar usuario</title>
  </head>
  <body>


    <!--Cuerpo de la pagina -->
    <article class="article">
    <form class="" action="actualizareducacion.php" method="post">
      <fieldset>
        <!--Formulario de actualizar datos. -->
      <legend>Actualizar datos</legend>
      Fecha de Inicio: <input type="date" name="fechai" value=""> <br><br>
      Fecha de Finalizacion: <input type="date" name="fechaf" value=""><br><br>
      Texto: <input type="text" name="texto" value=""><br><br>
      Empresa: <input type="text" name="empresa" value=""> <br><br>
      <input type="hidden" name="id_estudios" value="1">
      <input type="submit" name="Actualizar" value="Actualizar">
    </fieldset>
    </form>
    <?php
    //incluimos reserva.php y llamamo a la funcion que nos actualizara los datos.
    include '/modelo/educacion.php';
    $educacion=new Educacion();
    if (isset($_POST['fechai']) && isset($_POST['fechaf']) && isset($_POST['texto']) && isset($_POST['empresa'])) {
      $actualizareducacion=$educacion->ActualizarEducacion($_POST['fechai'], $_POST['fechaf'], $_POST['texto'], $_POST['empresa'], $_POST["id_estudios"]);
      if ($actualizareducacion==true) {
        var_dump($actualizareducacion);
      }
    }
     ?>
    </article>

  </body>
</html>
