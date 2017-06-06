<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['Tipo']==1) {
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
	<title>Perfil</title>
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
      <li class="nav-item">
        <a class="nav-link" href="contacto.php">Contacto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="queEs.php">¿Qué es SIABUC?</a>
      </li>
	     <!--<li class="nav-item">
        <a class="nav-link " href="carrito.php">Carrito</a>
      </li>-->
      <li class="nav-item active">
            <a class="nav-link " href="perfil.php">Perfil</a>
          </li>
    </ul>
    <form action="logout.php">
	<button type="submit" class="btn btn-danger" style="margin-left: 10px"><img src="img/logout.png" width="25"> Cerrar sesión</button>
	</form>
  </div>
</nav>
</header>
<?php echo "<p class='Bienvenida'>Bienvenid@ ".$_SESSION['nombre']." ".$_SESSION['AP']." ".$_SESSION['AM']."</p>";?>
<!--BODY-->
<div class="imgBackgroundInner">
<br>
<center><p style="font-size: 40px;">Lista de Solicitud de Compra (LSCU)</p></center>
<div class='table-responsive'>
	<center>
	<table class="table table-hover table-striped table-bordered" >
		<thead style="background-color: #0275d8; color: white; font-size: 20px">
		<tr>
			<th>Nombre</th>
			<th>ISBN</th>
			<th>Costo</th>
			<th>Cantidad</th>
			<!-- ??????
			<th>ID Solicitud</th>
			-->
		</tr>
		</thead>
		<tr>
			<td>Jari poter</td>
			<td>1111111</td>
			<td>$500</td>
			<td>2</td>
		</tr>
		<tr>
			<td>Principitou</td>
			<td>1111112</td>
			<td>$500</td>
			<td>8</td>
		</tr>
		<tr>
			<td>KING</td>
			<td>1122112</td>
			<td>$800</td>
			<td>1</td>
		</tr>
	</table>
	</center>
</div>
</div>

<!--footer-->
<footer>
	<div class="footer" style="bottom: 0;">
    <center>Desarrollado por MENSOFT</center>

  </div>
  </footer>
  <script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/js.js"></script>
</body>
</html>
