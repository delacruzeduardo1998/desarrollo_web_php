<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Buscar pareja</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--link rel="stylesheet" href="assets/css/bootstrap.min.css"/-->

		<style type="text/css"> 
		#registrar{ position:absolute; z-index:1;
		left: 500px;
		top:  100px;} 

		#buscar{ position:absolute; z-index:1;
		left: 500px;
		top:  100px;} 
		#ver_persona{ position:absolute; z-index:1;
		left: 500px;
		top:  100px;}
		
		#ver_perfil{ position:absolute; z-index:1;
		left: 500px;
		top:  100px;}
		
		
		
		</style>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="registrar">
            <form method="post" action="insertar_pelicula.php">
                <div class="input-group mb-3">
                    <label for="id"><h3 id="elements">ID</h3></label>
                    <input id="id" name="ID" type="text" class="form-control" placeholder="id" aria-label="Recipient's username" aria-describedby="basic-addon2">
                </div>
                <div class="input-group mb-3">
                    <label for="nombre"><h3 id="elements">NOMBRE</h3></label>
                    <input id="nombre" name="NOMBRE" type="text" class="form-control" placeholder="nombre" aria-label="Recipient's username" aria-describedby="basic-addon2">
                </div>
                <div class="input-group mb-3">
                    <label for="desripcion"><h3 id="elements">DESCRIPCIÓN</h3></label>
                    <input id="desripcion" name="DESCRIPCION" type="text" class="form-control" placeholder="descripción" aria-label="Recipient's username" aria-describedby="basic-addon2">
                </div>
                <div class="input-group mb-3">
                    <label for="genero"><h3 id="elements">GENERO</h3></label>
                    <input id="genero" name="GENERO" type="text" class="form-control" placeholder="genero" aria-label="Recipient's username" aria-describedby="basic-addon2">
                </div>
                <div class="input-group mb-3">
                    <label for="duracion"><h3 id="elements">DURACIÓN</h3></label>
                    <input id="duracion" name="DURACION" type="text" class="form-control" placeholder="min" aria-label="Recipient's username" aria-describedby="basic-addon2">
                </div>
                <button type="submit" >Guardar</button>
            </form>

			</div>
            <div id="buscar">
                <div class="table-wrapper">
					<table class="alt">
						<thead>
							<tr>
								<th>ID</th>
								<th>NOMBRE</th>
								<th>DESCRPCIÓN</th>
								<th>GENERO</th>
								<th>DURACIÓN</th>
							</tr>
						</thead>
                        <tbody id="filas_tabla">
                        <?php
                        $bd = new mysqli('localhost',  'root', '', 'buscar_parejas');
                        if ($bd->connect_errno):
                            echo "Fallo la conexión a MySQL: " .$bd -> error_reporting;
                        endif;
                       
                        $sql="SELECT * FROM `peliculas`";
                        $datos=mysqli_query($bd,$sql);
                        $todos_ponderados=array();
                        while ($fila = mysqli_fetch_array($datos)){
                            echo('
                            <tr>
                            <th>'.$fila['idpeliculas'].'</th>
                            <th>'.$fila['nombre'].'</th>
                            <th>'.$fila['descripcion'].'</th>
                            <th>'.$fila['genero'].'</th>
                            <th>'.$fila['duracion'].'</th>
                            </tr>
                            
                            ');
                        }
                        
                        ?>
						</tbody>
					</table>
				</div>
            </div>
			<aside>
				<div class="inner">
					<div id="sidebar">
						<div class="inner">
							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>
							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a onclick="mostrar('registrar')">Registrar pelicula</a></li>
										<li><a onclick="mostrar('buscar')"> Mostrar pelicula</a></li>
										
									
									</ul>
								</nav>

							<!-- Section -->
								
						</div>
					</div>
				</div>
			</aside>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
    		<script src="assets/js/popper.min.js"></script>
    		<script src="assets/js/bootstrap.min.js"></script>
			<script src="assets/js/funciones_parejas.js?v=<?php echo time();?>"></script>
	</body>
</html>


    
