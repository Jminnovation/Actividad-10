<?php

include("Conexion.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"href="Actividad 10 DB.css">
    <title>Actividad Base de Datos</title>
</head>
<body>

<div id="Marca-Jminnovation">
    <div class="logo-item">jd</div>
   </div>
  </br>
  <div class="B">
    <div class="c1"></div>
    <div class="c1"></div>
    <div class="c1"></div>
  </div>

<section class="form-register">

    <h4>Formulario Registro</h4>

    <form method="post" action="Conexion.php">

    <label for="nombre">nombre:</label>
    <input class="controls" type="text" name="nombre"placeholder="Ingrese su Nombre" required>
   

    <label for="apellidos">apellidos:</label>
    <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido">

    <label for="Cedula">Cedula:</label>
    <input class="controls" type="number" name="Cedula" placeholder="Ingrese su Documento"required>
   
    <label for="Edad">Edad:</label>
    <input class="controls" type="number" name="Edad" placeholder="Ingrese su Edad"required>

    <label for="correo">correo:</label>
    <input class="controls" type="email" name="correo"  placeholder="Ingrese su Correo"required>

    <label for="Clave">Contraseña:</label>
    <input class="controls" type="password" name="Clave"  placeholder="Ingrese su Contraseña"required>

    <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>

    <button type="submit" class="botons" href="Actividad 10 DB.php">Enviar</button>
    
    <p><a href="#">¿Ya tengo Cuenta?</a></p>
</form>


</section>

<script src="./Actividad 10 DB.js"></script>

</body>
</html>