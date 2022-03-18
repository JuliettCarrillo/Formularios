
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=YES">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Scripts -->
   <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="js/jquery-3.4.1.min.js"></script> 
 <script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>   
<script src="js/bootstrap.bundle.js"></script>

<title>Formato de conclusion y agradecimiento</title>

</head>

<div class="container">
  <center>
    <table class="table table-striped table-bordered" >
  
        <thead>
          
            <tr>
        
              <th ><center>Revisión 03
               <center></th>
        
              <td rowspan="3" align="center">
                <center>   FORMATO</center>  
                <center>  CARTA COMPROMISO DEL CANDIDATO A RESIDENCIA PROFESIONAL</center>
                <br>
                
  </td>
                <td rowspan="3"><img src="img/logotipo.png"alt="" width="50%" height="50%"></td>
         </tr>
        
            <tr>
        
            <th colspan="1"><center>ITGAM-AC-004-15</center></th>
                
            
            </tr>
  
            <tr>
                <th><center>Página 1 de 1</center></th>              
                </tr>
        
          </thead>
    </table>
  </center>
<body>
  <!-- CONEXION BDD -->
  <form action="conexionPHP/cartaCompromiso.php" method="POST">
    
<p align="right">Gustavo A. Madero, México  a : 
  <input type=date name="fecha"/>
</p>
<p>A quien corresponda:</p>
<p>Por medio de la presente yo &nbsp;
  <input type="text" name="NombreAlumno" id="NombreAlumno" placeholder="Nombre(s) Alumno" />
  
  <input type="text" name="ApellidoPaternoAlumno" placeholder="Apellido paterno" />
  
  <input type="text" name="ApellidoMaternoAlumno" placeholder="Apellido Materno" />
  con  numero de control
  <input type="text" name="numero_control" placeholder="No.Control"/>, me comprometo que liberare 
  <select name="Motivo">
    <option  name="Motivo"selected="selected" >Motivo: </option>
    <option name="Motivo" value="mis creditos complementarios faltantes">mis creditos complementarios faltantes </option>
    <option name="Motivo" value="mi credito complementario faltante">mi credito complementario faltante </option>
    <option name="Motivo" value="mi materia faltante">mi materia faltante</option>
    <option name="Motivo" value="mis materias faltantes">mis materias faltantes</option>
  </select>
  <!-- (MATERIA(S)) -->
     en el periodo  escolar
  <select name="MESinicio"id="MESinicio">
    <!-- <option selected="selected" value="MESinicio">Mes de Inicio: </option> -->
    <option name="MESinicio" value="Enero">Enero </option>
    <option name="MESinicio" value="Febrero">Febrero </option>
    <option name="MESinicio" value="Marzo">Marzo </option>
    <option name="MESinicio" value="Abril">Abril</option>
    <option name="MESinicio" value="Mayo">Mayo </option>
    <option name="MESinicio" value="Junio">Junio </option>
    <option name="MESinicio" value="Julio">Julio</option>
    <option name="MESinicio" value="Agosto">Agosto</option>
    <option name="MESinicio" value="Septiembre">Septiembre</option>
    <option name="MESinicio" value="Octubre">Octube</option>
    <option name="MESinicio" value="Noviembre">Noviembre</option>
    <option name="MESinicio" value="Diciembre">Diciembre</option>
    
  </select>
  <select name="MESfin" id="MESfin">
    <!-- <option selected="selected" value="0">Mes de Termino: </option> -->
    <option name="MESfin" value="Enero">Enero </option>
    <option name="MESfin" value="Febrero">Febrero </option>
    <option name="MESfin" value="Marzo">Marzo </option>
    <option name="MESfin" value="Abril">Abril</option>
    <option name="MESfin" value="Mayo">Mayo </option>
    <option name="MESfin" value="Junio">Junio </option>
    <option name="MESfin" value="Julio">Julio</option>
    <option name="MESfin" value="Agosto">Agosto</option>
    <option name="MESfin" value="Septiembre">Septiembre</option>
    <option name="MESfin" value="Octubre">Octube</option>
    <option name="MESfin" value="Noviembre">Noviembre</option>
    <option name="MESfin" value="Diciembre">Diciembre</option>
  </select>
del  presente año, dentro del Instituto Tecnológico de Gustavo A. Madero.
Todo esto con el objetivo de poder liberar las actividades  complementarias y continuar con la residencia profesional con sus  requerimientos completos.
Sin más por el momento, agradezco la atención y quedo a su  disposición.</p>

<p align="center">ATENTAMENTE</p>
<center><div class="add-new-photo first" id="add photo">
  <span><i class="icon-camera"></i></span>
</div>
<div><input type="file"multiple id="add-new-photo"name="firma"></div>

<br/>
<p>FIRMA DEL ALUMNO<p/>
  <br/>
  <input type="text" name="na" id="na"placeholder="NOMBRE DEL ALUMNO" />
  </center> 
 
  <input align="center" type="submit" name="enviar" value="Enviar">
  <p align="center"><button>Descargar</button></p><br/>




</body>

</html>
