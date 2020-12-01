<?php
?>
<!DOCTYPE html >
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/decoracion (1).css">
    <script src =" js/jquery-3.5.1.min.js"></script>
    <title>Registro</title>
  </head>
  <body>
    <form class="formulario" action="" onsubmit="return validar();">
      <h1 class="formulario__titulo">FORMULARIO DE REGISTRO</h1>
      <input type="text" class="formulario__input" name="plantel" id="plantel" >
      <label for="" class="formulario__label nombre">Plantel</label>
      <input type="text" class="formulario__input" name="nombres" id="nombres" >
      <label for="" class="formulario__label nombre">Nombres</label>
      <input type="text" class="formulario__input" name="apellidop" id="apellidop" >
      <label for="" class="formulario__label nombre">Apellido Paterno</label>
      <input type="text" class="formulario__input nombre" name="apellidom" id="apellidom" >
      <label for="" class="formulario__label nombre">Apellido Materno</label>
      <input type="text" class="formulario__input nombre" name="fechadenacimiento" id="fechadenacimiento" >
      <label for="" class="formulario__label nombre">Fecha de nacimiento(DD/MM/AAAA)</label>
      <input type="text" class="formulario__input nombre" name="grupo" id="grupo" >
      <label for="" class="formulario__label">Grupo</label>
      <input type="text" class="formulario__input nombre" name="matricula" id="matricula" >
      <label for="" class="formulario__label">Matricula</label>
      <input type="email" class="formulario__input nombre" name="correo" id="correo" >
      <label for="" class="formulario__label">Correo electronico</label>
      <input type="password" class="formulario__input nombre" name="ingcontraseña" id="ingcontraseña" >
      <label for="ingcontraseña" class="formulario__label">Contraseña</label>
      <input type="password" class="formulario__input nombre" name="conficontraseña"id="conficontraseña" >
      <label for="conficontraseña" class="formulario__label">Confirmar Contraseña</label>
      <input type="submit" name="" value="Enviar" class="formulario__submit">
    </form>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/form (1).js"></script>
    <script src="js/validar.js"></script>
  </body>
</html>
