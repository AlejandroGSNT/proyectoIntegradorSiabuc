<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['Tipo']==0) {
}
else {

	echo "<link href='css/bootstrap.min.css' rel='stylesheet' media='screen'>";
	echo "<center>";
   	echo "<h1>Esta página es sólo para usuarios registrados.</h1><br>";
   	echo "<br><br><a href='index.html' class='btn btn-primary'>Iniciar Sesión</a>";
	header('Location: index.html');
   	echo "</center>";

exit;
}

$now = time();

if($now > $_SESSION['expire']) {
	echo "<link href='css/bootstrap.min.css' rel='stylesheet' media='screen'>";

	session_destroy();

	header('Location: index.html');
	echo "Su sesion a terminado, <a href='index.html' class='btn btn-primary'>Necesita Hacer Login</a>";
exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Buscar</title>
	<meta charset="utf-8">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/js.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
      <li class="nav-item">
        <a class="nav-link" href="contacto.php">Contacto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="queEs.php">¿Qué es SIABUC?</a>
      </li>

     <!--<li class="nav-item"><a class="nav-link " href="carrito.php">Carrito</a></li>-->
     <li class="nav-item"><a class="nav-link " href="perfil.php">Perfil</a></li>
     <li class="nav-item active"><a class="nav-link " href="#">Buscar</a></li>
    </ul>
				<form action="logout.php">
			<button type="submit" class="btn btn-danger" style="margin-left: 10px"><img src="img/logout.png" width="25"> Cerrar sesión</button>
			</form>
  </div>
</nav>
</header>

<!--BODY-->

<iframe src="buscarLibro.html" style="width:100%;" height="1000">

</iframe>





<!--footer-->
	<div class="footer" style="bottom: 0;">
		<center>Desarrollado por MENSOFT</center>
	</div>


</body>
</html>
