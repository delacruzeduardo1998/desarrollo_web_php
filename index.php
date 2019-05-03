<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Números Primos</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<style type="text/css"> 
		#capa1{ position:absolute; z-index:1;
		left: 700px;
		top:  100px;} 
		</style>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="capa1">
				<div id="ver_primo" class="primo">
					<div class="input-group mb-3">
						<input id="numero" type="text" class="form-control" placeholder="número  ej: 1" aria-label="Recipient's username" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<input class="btn btn-outline-secondary" value="verificar" onclick="accion('primo')" type="button"/>
						</div>
					</div>
					</div>
					<div id="apartir_n_mostrar_n" class="apartir_n_mostrar_n">
					<div class="input-group mb-3">
						<input id="numero2" type="text" class="form-control" placeholder="desde" aria-label="Recipient's username" aria-describedby="basic-addon2">
						<input id="numero3" type="text" class="form-control" placeholder="cuantos números" aria-label="Recipient's username" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<input class="btn btn-outline-secondary" value="verificar" onclick="accion('apartir_n_mostrar_n')" type="button"/>
						</div>
					</div>
					</div>
					
					<div id="rangos" class="rangos">
					<div class="input-group mb-3">
						<input id="menor" type="text" class="form-control" placeholder="desde" aria-label="Recipient's username" aria-describedby="basic-addon2">
						<input id="mayor" type="text" class="form-control" placeholder="hasta" aria-label="Recipient's username" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<input class="btn btn-outline-secondary" value="verificar" onclick="accion('rangos')" type="button"/>
						</div>
					</div>
				</div>

				<div id="primo_distancia_abajo_arriba" class="primo_distancia_abajo_arriba">
					<div class="input-group mb-3">
						<input id="combox_numero" type="text" class="form-control" placeholder="inicio" aria-label="Recipient's username" aria-describedby="basic-addon2">
						<input id="combox_distancia" type="text" class="form-control" placeholder="distancia" aria-label="Recipient's username" aria-describedby="basic-addon2">
						<select id="combox">
							<option value="arriba">arriba</option>							
							<option value="abajo">abajo</option>
						</select>
						<div class="input-group-append">
							<input class="btn btn-outline-secondary" value="verificar" onclick="accion('primo_distancia_abajo_arriba')" type="button"/>
						</div>
					</div>
				</div>

				<div id="formula" class="formula">
					<div class="input-group mb-3">
					<input id="x" type="text" class="form-control" placeholder="semilla" aria-label="Recipient's username" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<input class="btn btn-outline-secondary" value="ejecutar" onclick="accion('formula')" type="button"/>
						</div>
					</div>
				</div>

				<div id="criba" class="criba">
					<div class="input-group mb-3">
					<input id="num_criba" type="text" class="form-control" placeholder="semilla" aria-label="Recipient's username" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<input class="btn btn-outline-secondary" value="ejecutar" onclick="accion('criba')" type="button"/>
						</div>
					</div>
				</div>

				<div id="primo_primo" class="primo_primo">
					<div class="input-group mb-3">
					<input id="num_primo_primo" type="text" class="form-control" placeholder="número" aria-label="Recipient's username" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<input class="btn btn-outline-secondary" value="verificar" onclick="accion('primo_primo')" type="button"/>
						</div>
					</div>
				</div>
			</div>

			</section>

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
										<li><a onclick="mostrar('ver_primo')">verificar primos</a></li>
										<li><a onclick="mostrar('apartir_n_mostrar_n')">n numeros primos desde</a></li>
										<li><a onclick="mostrar('rangos')">primos en un rango</a></li>
										<li><a onclick="mostrar('primo_distancia_abajo_arriba')">primos hacia abajo o arriba</a></li>
										<li><a onclick="mostrar('formula')">Formula</a></li>
										<li><a onclick="mostrar('criba')">criba</a></li>
										<li><a onclick="mostrar('primo_primo')">Primo sin primos</a></li>
										<hr width=100%  align="right"  size=10  noshade="noshade">
										<li><a onclick="mostrar('num_perfect1')">número perfecto</a></li>

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
			<script src="assets/js/funciones_primo.js"></script>

	</body>
</html>