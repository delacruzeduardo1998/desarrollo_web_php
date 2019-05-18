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
		<style type="text/css"> 
		#registrar{ position:absolute; z-index:1;
		left: 500px;
		top:  100px;} 

		#buscar{ position:absolute; z-index:1;
		left: 500px;
		top:  100px;}
        #foto{ position:absolute; z-index:1;
		left: 500px;
		top:  100px;}  
		</style>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="registrar">
				<div class="input-group mb-3">
					<label for="nombre"><h3 id="elements">Nombre</h3></label>
					<input id="nombre" type="text" class="form-control" placeholder="Eduardo" aria-label="Recipient's username" aria-describedby="basic-addon2">
					<label for="edad"><h3 id="elements">Edad</h3></label>						
					<input id="edad" type="text" class="form-control" placeholder="18+" aria-label="Recipient's username" aria-describedby="basic-addon2">
					<label for="sexo_h"><h3 id="elements">Sexo</h3></label>
				</div>
				<div class="col-4 col-12-small">
					<input type="radio" id="sexo_h" name="sexo" value="hombre" checked>
					<label for="sexo_h">Hombre</label>
					<input type="radio" id="sexo_m" name="sexo" value="mujer">
					<label for="sexo_m">Mujer</label>
				</div>
				<label for=""><h3 id="elements">Color de ojos</h3></label>
				
				<div class="col-4 col-12-small">
					<input type="radio" id="cafe" name="color_ojos" value="cafe" checked>
					<label for="cafe">Cafe</label>

					<input type="radio" id="miel" name="color_ojos" value="miel">
					<label for="miel">Miel</label>

					<input type="radio" id="azul" name="color_ojos" value="azul">
					<label for="azul">Azul</label>

					<input type="radio" id="verde" name="color_ojos" value="verde">
					<label for="verde">Verde</label>

					<input type="radio" id="gris" name="color_ojos" value="gris">
					<label for="gris">Gris</label>
				</div>
				<label for="peso"><h3 id="elements">Peso</h3></label>						
				<input id="peso" type="text" class="form-control" placeholder="en kg" aria-label="Recipient's username" aria-describedby="basic-addon2">
				<label for="estatura"><h3 id="elements">Estatura</h3></label>						
				<input id="estatura" type="text" class="form-control" placeholder="en cm" aria-label="Recipient's username" aria-describedby="basic-addon2">
				
				<div class="col-6 col-12-small">
					<label for="optimista"><h3 id="elements">Caracteristicas</h3></label>						
					<input type="checkbox" id="optimista" name="optimista" value="optimista">
					<label for="optimista">Optimista</label>
					<input type="checkbox" id="introvertidas" name="introvertidas" value="introvertidas">
					<label for="introvertidas">Introvertid@</label>
					<input type="checkbox" id="extravertidas" name="extravertidas" value="extravertidas">
					<label for="extravertidas">Extrovertid@</label>
					<input type="checkbox" id="rebeldes" name="rebeldes" value="rebeldes">
					<label for="rebeldes">Rebelde</label>
				</div>
				<div class="col-6 col-12-small">
					<input type="checkbox" id="obsesivas" name="obsesivas" value="obsesivas">
					<label for="obsesivas">Obsesiv@</label>
				</div>
				<div class="col-12">
					<label for="pasatiempo">Pasatiempos</label>
					<select name="pasatiempo" id="pasatiempo">
						<option value="video_juegos">Jugar videojuegos</option>
						<option value="rompecabezas">Rompecabezas</option>
						<option value="leer">Leer</option>
						<option value="t_instrumento">Tocar un instrumento</option>
						<option value="bailar">Bailar</option>
					</select>
				</div>
				
				<label for="#"></label>
				<div class="input-group-append">
					<input class="btn btn-outline-secondary" value="verificar" onclick="accion('registra')" type="button"/>
				</div>
			</div>



			
			<div id="buscar">
				<div class="input-group mb-3">
					<label for="sexo_h"><h3 id="elements">Sexo</h3></label>		
						<div class="col-4 col-12-small">
							<input type="radio" id="bus_sexo_h" name="bus_sexo" value="hombre" checked>
							<label for="bus_sexo_h">Hombre</label>
							<input type="radio" id="bus_sexo_m" name="bus_sexo" value="mujer">
							<label for="bus_sexo_m">Mujer</label>
						</div>
				</div>
				<div class="input-group mb-3">
					<label for="#"><h3 id="elements">Edad</h3></label>
					<div class="col-12">
						<ul class="actions">
							<li>
								<label for="bus_min"><h5 id="elements">Minimo</h5></label>						
								<input id="bus_min" type="text" class="form-control" placeholder="18+" aria-label="Recipient's username" aria-describedby="basic-addon2">
							</li>
							<li>
								<label for="bus_max"><h5 id="elements">Maximo</h5></label>						
								<input id="bus_max" type="text" class="form-control" placeholder="100" aria-label="Recipient's username" aria-describedby="basic-addon2">
							</li>
						</ul>
					</div>	
				</div>
				<div class="col-4 col-12-small">
					<label for=""><h3 id="elements">Color de ojos</h3></label>
					<input type="radio" id="bus_cafe" name="bus_color_ojos" value="cafe" checked>
					<label for="bus_cafe">Cafe</label>

					<input type="radio" id="bus_miel" name="bus_color_ojos" value="miel">
					<label for="bus_miel">Miel</label>

					<input type="radio" id="bus_azul" name="bus_color_ojos" value="azul">
					<label for="bus_azul">Azul</label>

					<input type="radio" id="bus_verde" name="bus_color_ojos" value="verde">
					<label for="bus_verde">Verde</label>

					<input type="radio" id="bus_gris" name="bus_color_ojos" value="gris">
					<label for="bus_gris">Gris</label>
				</div>
				<div class="input-group mb-3">
					<label for="#"><h3 id="elements">Peso</h3></label>
					<div class="col-12">
						<ul class="actions">
							<li>
								<label for="bus_min_peso"><h5 id="elements">Minimo</h5></label>						
								<input id="bus_min_peso" type="text" class="form-control" placeholder="kg" aria-label="Recipient's username" aria-describedby="basic-addon2">
							</li>
							<li>
								<label for="bus_max_peso"><h5 id="elements">Maximo</h5></label>						
								<input id="bus_max_peso" type="text" class="form-control" placeholder="kg" aria-label="Recipient's username" aria-describedby="basic-addon2">
							</li>
						</ul>
					</div>	
				</div>
				<div class="input-group mb-3">
					<label for="#"><h3 id="elements">Estatura</h3></label>
					<div class="col-12">
						<ul class="actions">
							<li>
								<label for="bus_min_estatura"><h5 id="elements">Minimo</h5></label>						
								<input id="bus_min_estatura" type="text" class="form-control" placeholder="cm" aria-label="Recipient's username" aria-describedby="basic-addon2">
							</li>
							<li>
								<label for="bus_max_estatura"><h5 id="elements">Maximo</h5></label>						
								<input id="bus_max_estatura" type="text" class="form-control" placeholder="cm" aria-label="Recipient's username" aria-describedby="basic-addon2">
							</li>
						</ul>
					</div>	
				</div>
				<div class="col-6 col-12-small">
					<label for="optimista"><h3 id="elements">Caracteristicas</h3></label>						
					<input type="checkbox" id="bus_optimista" name="bus_optimista" value="optimista">
					<label for="bus_optimista">Optimista</label>
					<input type="checkbox" id="bus_introvertidas" name="bus_introvertidas" value="introvertidas">
					<label for="bus_introvertidas">Introvertid@</label>
					<input type="checkbox" id="bus_extravertidas" name="bus_extravertidas" value="extravertidas">
					<label for="bus_extravertidas">Extrovertid@</label>
					<input type="checkbox" id="bus_rebeldes" name="bus_rebeldes" value="rebeldes">
					<label for="bus_rebeldes">Rebelde</label>
				</div>
				<div class="col-6 col-12-small">
					<input type="checkbox" id="bus_obsesivas" name="bus_obsesivas" value="obsesivas">
					<label for="bus_obsesivas">Obsesiv@</label>
				</div>
				<div class="col-12">
					<label for="pasatiempo">Pasatiempos</label>
					<select name="bus_pasatiempo" id="bus_pasatiempo">
						<option value="video_juegos">Jugar videojuegos</option>
						<option value="rompecabezas">Rompecabezas</option>
						<option value="leer">Leer</option>
						<option value="t_instrumento">Tocar un instrumento</option>
						<option value="bailar">Bailar</option>
					</select>
				</div>
				<label for="#"></label>
			</div>
			<div id="foto">
                            
                <form action='foto_log.php' method='post' enctype='multipart/form-data'>
                <label for='file'>Seleccione su foto:</label>
                <input type='file' name='file' onchange="previewFile()"/>
                <img src="" height="200" alt="Imagen view">
				<label for="#"></label>
                <input type='submit' name='submit' value='Submit' />
                </form>


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
										<li><a onclick="mostrar('registrar')">Registrar Usuario</a></li>
										<li><a onclick="mostrar('buscar')">Buscar candidato</a></li>
										
									
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
			<script src="assets/js/funciones_parejas.js?v=<?php echo time();?>"></script>
	</body>
</html>