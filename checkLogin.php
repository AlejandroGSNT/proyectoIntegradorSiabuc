<?php
session_start();

$host="localhost";
$user="root";
$pass="";
$nombre_db="rab-siabuc-colima";
$nombre_tabla="usuarios";

$conexion=new mysqli($host,$user,$pass,$nombre_db);
if($conexion->connect_error){
	die("La conexion falló". $conexion->connect_error);
}
$usuario = $_POST['user'];
$contraseña = $_POST['password'];

$sql= "SELECT * FROM $nombre_tabla WHERE idUsuario = '$usuario'";
$result = $conexion->query($sql);
if($result->num_rows > 0)
{
}
$row=$result->fetch_array(MYSQLI_ASSOC);
if($contraseña==$row['password'])
{
	$_SESSION['loggedin'] = true;
    $_SESSION['username'] = $usuario;
    $_SESSION['nombre']=$row['nombre'];
    $_SESSION['AP']=$row['apellidoPaterno'];
    $_SESSION['AM']=$row['apellidoMaterno'];
    $_SESSION['id']=$row['idUsuario'];
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
    if($row['tipo']==0)
     {
       $_SESSION['Tipo']=0;
        header('Location: perfil.php');
    }
    elseif ($row['tipo']==1)
    {
        $_SESSION['Tipo']=1;
        header('Location: admin.php');
    }
}
else
{
	echo "No se puede iniciar sesion con los datos proporcionados";
}
?>
