<?php

$name=$_POST['nombre'];
$edad=$_POST['edad'];
$ciudad=$_POST['ciudad'];
$sexo=$_POST['sexo'];

echo "<p>Datos del usuario registrado en el formulario</p>";

echo "<p>Nombre: $name Edad: $edad Ciudad: $ciudad Sexo: $sexo</p>";

?>