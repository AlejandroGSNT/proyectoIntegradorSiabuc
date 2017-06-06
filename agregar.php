<?php
        session_start();
        include_once('db.php');
        $Titulo = $_POST['Titulo'];
        $Autor = $_POST['Autor'];
        $Editorial = $_POST['Editorial'];
        $Fecha = $_POST['Fecha'];
        $Categoria= $_POST['Categoria'];
        if(isset($_POST['ISBN_10'])){
            $ISBN_10 = $_POST['ISBN_10'];
        }else {$ISBN_10="";}
        if(isset($_POST['ISBN_13'])){
            $ISBN_13 = $_POST['ISBN_13'];
        }else{$ISBN_13 ="";}
        $Paginas = $_POST['Paginas'];
        $Origen = $_POST['Origen'];
        $Idioma = $_POST['Idioma'];
        $Cantidad = $_POST['cant'];
        $Facultad = $_POST['fac'];
        $Carrera = $_POST['car'];
        $Materia = $_POST['mat'];
        $host="localhost";
        $user="root";
        $pass="";
        $nombre_db="rab-siabuc-colima";
        $nombre_tabla="libros";
        $conexion=new mysqli($host,$user,$pass,$nombre_db);
        if($conexion->connect_error){
            die("La conexion falló". $conexion->connect_error);
        }
        $sql="SELECT * FROM $nombre_tabla WHERE titulo = '$Titulo' && (ISBN10= '$ISBN_10' || ISBN13 = '$ISBN_13')";    
        $res=$conexion->query($sql);

        if($res->num_rows > 0)
        {
            echo "ya estaba";
            echo "Agregado con exito :)";
            $id = mysql_insert_id();
            $ses = $_SESSION['id'];
            if(mysql_query("INSERT INTO solicitudes VALUES
                  ('', '$id', '$ses', '$Facultad', '$Carrera', '$Materia', 0, '$Cantidad', NOW())"))
                echo "si"; 
           else 
            {
                mysql_error();
                echo "no";
            }
        }
        else
        {    
    	   if(mysql_query("INSERT INTO libros VALUES
              ('','$Titulo','$Autor','$Editorial','$ISBN_10','$ISBN_13',' ','$Fecha','$Paginas','$Origen','$Idioma','$Categoria')"))
            {
                echo "Agregado con exito :)";
                $id = mysql_insert_id();
                $ses = $_SESSION['id']; 
                
            }
            else
            {
                echo "Agregado fallido :(";
    	    }
    	   if(mysql_query("INSERT INTO solicitudes VALUES
                  ('', '$id', '$ses', '$Facultad', '$Carrera', '$Materia', 0, '$Cantidad', NOW())"))
                echo "si"; 
    	   else 
            {
                mysql_error();
                echo "no";
            }
        }    

?>