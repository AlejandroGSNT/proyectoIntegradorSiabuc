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
	<title>¿Qué es?</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet" media="screen">

</head>
<body>

<header>

	<!-- NavBar -->
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
        <a class="nav-link" href="contacto.php">Contacto</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link " href="#">¿Qué es SIABUC? <span class="sr-only">(current)</span></a>
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

</header>

<!--BODY-->
<div class="body">
  <img class="rounded float-left" src="img/inter.png" height="80" style="margin-right: 3px">
  <p><strong>SIABUC</strong> es un software auxiliar en las labores cotidianas de un centro de información o biblioteca, ya sea universitaria, pública o particular, sin importar que sea pequeña o grande.  </p>
  <p>Nos lleva un control de las compras y las donaciones, pudiéndose capturar desde la solicitud de compra, imprimir las listas de pedidos, registrar la recepción de material y llevar un catálogo de los proveedores. Este módulo genera otros productos impresos como son: Listas de pedidos por fecha, Lista de donaciones, Lista de material ingresado, etc.</p>

  <br>
  <center><h4>Historia</h4></center><br>
  <img src="img/libroIcon.png" height="80" class="rounded float-left" style="margin-right: 7px">
  <p> SIABUC es un software auxiliar en las labores cotidianas de un centro de información o biblioteca, ya sea universitaria, pública o particular, sin importar que sea pequeña o grande. El funcionamiento de SIABUC está basado en módulos, cada módulo corresponde a una tarea específica dentro de la biblioteca, los módulos principales de SIABUC son:

  En 1983 la Universidad de Colima trabajó por primera vez en el desarrollo de los programas del paquete denominado Sistema Integral Automatizado de Bibliotecas de la Universidad de Colima (SIABUC), con la finalidad de aplicar la tecnología computacional a sus procesos bibliotecarios.

  Han pasado más de 25 años desde entonces, durante los cuales el proceso de evolución de SIABUC no se ha detenido, por el contrario, se ha procurado mantenerlo en constante actualización, fundamentalmente porque ya son casi 2500 las instituciones que tanto en México como en América Latina lo manejan cotidianamente en sus bibliotecas. Además ya contamos con representantes en México, Costa Rica y Venezuela.</p>
</div>


	<div class="footer" style="bottom: 0;">
		<center>Desarrollado por MENSOFT</center>
	</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/js.js"></script>

</body>
</html>
