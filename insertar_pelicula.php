<?php
//conexion de equipo
$bd = new mysqli('localhost',  'root', '', 'buscar_parejas');
if ($bd->connect_errno):
	echo "Fallo la conexión a MySQL: " .$bd -> error_reporting;
endif;

if(isset($_POST))
{   
    $sql="INSERT INTO `peliculas`(`idpeliculas`, `nombre`, `descripcion`, `genero`,`duracion`) VALUES (".$_POST['ID'].",'".$_POST['NOMBRE']."','".$_POST['DESCRIPCION']."','".$_POST['GENERO']."',".$_POST['DURACION'].")";
    mysqli_query($bd,$sql);
}

?>
<script>
	alert("Guardado con exito");
	window.location = "peliculas.php";
</script>
