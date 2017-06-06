<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	session_start();
	if(isset($_SESSION['Usuario']))
		echo "Bienvenido,".$_SESSION['Usuario'];
	else
		echo "aqui no prro";
	session_destroy();

?>
</body>
</html>