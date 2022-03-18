<?php
$servername="localhost";
$username="root";
$password="";
$database="residencias_profesionales";

$con=mysqli_connect('localhost','root','','residencias_profesionales')or die('Error en la conexion servidor');
// $con = mysqli_connect($servername,$username,$password,$database);
// // CONEXION CHECK
// if (!$con){
//     die("Conetion failed: ".mysqli_connect_error());
// }

$fecha=$_POST['fecha'];
$NombreAlumno=$_POST['NombreAlumno'];
$ApellidoPaternoAlumno=$_POST['ApellidoPaternoAlumno'];
$ApellidoMaternoAlumno=$_POST['ApellidoMaternoAlumno'];
$numero_control=$_POST['numero_control'];
$Motivo=$_POST['Motivo'];
$MESinicio=$_POST['MESinicio'];
$MESfin=$_POST['MESfin'];
$firma=$_POST['firma'];
$na=$_POST['na'];




$sql="INSERT into carta_compromiso (fecha,NombreAlumno,ApellidoPaternoAlumno,ApellidoMaternoAlumno,numero_control ,Motivo,MESinicio,MESfin,firma,na) VALUES('".$fecha."','".$NombreAlumno."','".$ApellidoPaternoAlumno."','".$ApellidoMaternoAlumno."','".$numero_control."','".$Motivo."','".$MESinicio."','".$MESfin."','".$firma."','".$na."')";



// VALUES(2002-03-18,'Juliett','Jazmin','Carrillo','Molina','181130077','mis creditos complementarias faltantes','Febrero','Junio','','Juli')";






echo$fecha,"<br>",$NombreAlumno,"<br>",$ApellidoPaternoAlumno,"<br>",$ApellidoMaternoAlumno,"<br>",$numero_control,"<br>",$Motivo,"<br>",$MESinicio,"<br>",$MESfin,"<br>",$firma,"<br>",$na,"<br>";


// }else{

// }

mysqli_close($con);

?>