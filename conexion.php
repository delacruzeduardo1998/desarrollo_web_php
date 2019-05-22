
<?php
//conexion de equipo
$bd = new mysqli('localhost',  'root', '', 'peliculas');
if ($bd->connect_errno):
	echo "Fallo la conexión a MySQL: " .$bd -> error_reporting;
endif;
?>	