<?php
session_start();
$ses = 0;

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  $ses = 1;
}


$now = time();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Contacto</title>
	<meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet" media="screen">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>
<body>

<header>

<!--Navigation Bar-->

<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#"><img src="img/logo2.png" width="40" width="40" alt="SIABUC"></a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <?php
      if($ses==0){
      echo '<li class="nav-item ">
        <a class="nav-link" href="index.html">Inicio </a>
      </li>';}
      ?>
      <li class="nav-item">
        <a class="nav-link active" href="#">Contacto <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="queEs.php">¿Qué es SIABUC?</a>
      </li>
      <?php
      if ($ses==1){
      echo '<li class="nav-item"><a class="nav-link " href="perfil.php">Perfil</a></li>';
      echo '<li class="nav-item"><a class="nav-link " href="buscar.php">Buscar</a></li>';

      }
      ?>
    </ul>
    <?php
    if($ses==1){
    echo '
        <form action="logout.php">
    	<button type="submit" class="btn btn-danger" style="margin-left: 10px"><img src="img/logout.png" width="25"> Cerrar sesión</button>
    	</form>'
        ;}
     ?>
  </div>
</nav>

<!--BODY-->
<div class="body">
<img class="rounded float-right col-md-4 col-xs-12 col-sm-6 col-lg-4" src="img/tel.png">
	<p><strong> Capacitación, asesoría y soporte técnico </strong></p>
	<p>Departamento de SIABUC<br>
	Dirección General de Tecnologías de Información<br>
	Universidad de Colima<br>
	Av. Gonzalo de Sandoval #444<br>
	C.P. 28040, Colima, México<br>
	Tel: +52 (312) 31-611-21 Ext. 49004 / 49007<br>
	E-mail: siabuc@ucol.mx</p>
<br>
<img class="rounded float-right col-md-4 col-xs-12 col-sm-6 col-lg-4" src="img/profile.png">
	<p><strong> Coordinación y convenios</strong></p>
	<p>M.C. Alejandro Sánchez Rodríguez<br>
	Director General de Tecnologías de Información<br>
	Universidad de Colima<br>
	Av. Gonzalo de Sandoval #444<<br>
	C.P. 28040, Colima, México<br>
	Tel: +52 (312) 31-611-21 Ext. 49001<br>
	E-mail: dgti@ucol.mx</p>
</div>


<!--footer-->
	<div class="footer" style="bottom: 0px;">
		<center>Desarrollado por MENSOFT</center>
	</div>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/js.js"></script>
</body>
</html>
