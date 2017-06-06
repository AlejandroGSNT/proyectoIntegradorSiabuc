<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
}
else {

	echo "<link href='css/bootstrap.min.css' rel='stylesheet' media='screen'>";
	echo "<center>";
   	echo "<h1>Esta página es sólo para usuarios registrados.</h1><br>";
   	echo "<br><br><a href='index.html' class='btn btn-primary'>Iniciar Sesión</a>";
   	echo "</center>";

exit;
}

$now = time();

if($now > $_SESSION['expire']) {
	echo "<link href='css/bootstrap.min.css' rel='stylesheet' media='screen'>";

	session_destroy();

	echo "Su sesion a terminado, <a href='index.html' class='btn btn-primary'>Necesita Hacer Login</a>";
exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Carrito</title>
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

      <li class="nav-item active"><a class="nav-link " href="carrito.php">Carrito</a></li>
      <li class="nav-item"><a class="nav-link " href="perfil.php">Perfil</a></li>
      <li class="nav-item"><a class="nav-link " href="buscar.php">Buscar</a></li>

    </ul>

				<form action="logout.php">
			<button type="submit" class="btn btn-danger" style="margin-left: 10px"><img src="img/logout.png" width="25"> Cerrar sesión</button>
			</form>

  </div>
</nav>
</header>

<!--BODY-->
<div>

	<div class="bodyCarrito">
		<center>
			<img src="img/cart.png" width="100" height="100" />
		</center>

			<table class="searchingTable table table-hover table-striped" style="width: 100%; display: block-flex;	">
			<thead style="background-color: #999999">
			<tr>
				<th>Portada</th>
				<th>Nombre</th>
				<th>Cantidad</th>
				<th>Facultad</th>
				<th>Carrera</th>
				<th>Materia</th>
				<th></th>
			</tr>
			</thead>
			<tr>
				<td><img src="img/libro1.png" class="portada"></td>
				<td>Jari poter</td>
				<td>
					<input id="carritoInput" type="number" min="1" name="cant#" placeholder="1" value="1">
				</td>
				<td>
					<select name="fac" id="carritoInput">
						<option value="1">Telemática</option>
						<option value="2">Medicina</option>
						<option value="3">Psicología</option>
					</select>
				</td>
				<td>
					<select name="car" id="carritoInput">
						<option value="1">Software</option>
						<option value="2">Telemática</option>
						<option value="3">Psicología</option>
					</select>
				</td>
				<td>
					<select name="mat" id="carritoInput">
						<option value="1">Progra</option>
						<option value="2">Redes</option>
						<option value="3">Cómo tratar con locos</option>
					</select>
				</td>
				<td>
					<input id="deleteBtn" type="button" name="delete#" value="Eliminar">
				</td>
			</tr>
			<tr>
				<td><img src="img/libro3.png" class="portada"></td>
				<td>Principitou</td>
				<td>
					<input id="carritoInput" type="number" min="1" name="cant#" placeholder="1" value="1">
				</td>
				<td>
					<select name="fac" id="carritoInput">
						<option value="1">Telemática</option>
						<option value="2">Medicina</option>
						<option value="3">Psicología</option>
					</select>
				</td>
				<td>
					<select name="car" id="carritoInput">
						<option value="1">Software</option>
						<option value="2">Telemática</option>
						<option value="3">Psicología</option>
					</select>
				</td>
				<td>
					<select name="mat" id="carritoInput">
						<option value="1">Progra</option>
						<option value="2">Redes</option>
						<option value="3">Cómo tratar con locos</option>
					</select>
				</td>
				<td>
					<input id="deleteBtn" type="button" name="delete#" value="Eliminar">
				</td>
			</tr>
			<tr>
				<td><img src="img/libro2.png" class="portada"></td>
				<td>KING</td>
				<td>
					<input id="carritoInput" type="number" min="1" name="cant#" placeholder="1" value="1">
				</td>
				<td>
					<select name="fac" id="carritoInput">
						<option value="1">Telemática</option>
						<option value="2">Medicina</option>
						<option value="3">Psicología</option>
					</select>
				</td>
				<td>
					<select name="car" id="carritoInput">
						<option value="1">Software</option>
						<option value="2">Telemática</option>
						<option value="3">Psicología</option>
					</select>
				</td>
				<td>
					<select name="mat" id="carritoInput">
						<option value="1">Progra</option>
						<option value="2">Redes</option>
						<option value="3">Cómo tratar con locos</option>
					</select>
				</td>
				<td>
					<input id="deleteBtn" type="button" name="delete#" value="Eliminar">
				</td>
			</tr>
		</table>

		<br><br>
		<center><input id="inputEnviar" type="submit" name="pedir" value="Enviar pedido"> </center>
		<br><br>
	</div>

</div>




<!--footer-->
	<div class="footer" style="bottom: 0;">
		<center>Desarrollado por MENSOFT</center>
	</div>


</body>
</html>
