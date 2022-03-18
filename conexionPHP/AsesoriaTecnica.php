<?php
$con=mysqli_connect('localhost','root','','residencias_profesionales')or die('Error en la conexion servidor');
$sql="INSERT INTO candidato_residencias
VALUES('".$_POST["nombre_alumno"]."','".$_POST["apellido_paterno_alumno"]."','".$_POST["apellido_materno_alumno"]."','".$_POST["numero_control"]."','".$_POST["nombre_carrera"]."')";
$resultado=mysqli_query($con,$sql) or die ('Error en el query database');
mysqli_close($con);



?>