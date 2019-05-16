<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Tipo De Números</title>
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
				<div id="num_perfect1" class="num_perfect1">
					<div class="input-group mb-3">
					<input id="num_perfectoo" type="text" class="form-control" placeholder="número1" aria-label="Recipient's username" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<input class="btn btn-outline-secondary" value="verificar" onclick="accion('num_perfect')"  type="button"/>
						</div>
					</div>
				</div>

				<div id="num_abundante" class="num_abundante">
					<div class="input-group mb-3">
					<input id="num_abundant" type="text" class="form-control" placeholder="número" aria-label="Recipient's username" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<input class="btn btn-outline-secondary" value="verificar"  onclick="accion('num_abundante')" type="button"/>
						</div>
					</div>
				</div>

                <div id="num_amigos" class="num_amigos">
					<div class="input-group mb-3">
					<input id="num_amigo1" type="text" class="form-control" placeholder="número 1" aria-label="Recipient's username" aria-describedby="basic-addon2">
					<input id="num_amigo2" type="text" class="form-control" placeholder="número 2" aria-label="Recipient's username" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<input class="btn btn-outline-secondary" value="verificar"  onclick="accion('num_amigos')" type="button"/>
						</div>
					</div>
				</div>


                <div id="num_deficiente" class="num_deficiente">
					<div class="input-group mb-3">
					<input id="num_deficient" type="text" class="form-control" placeholder="número" aria-label="Recipient's username" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<input class="btn btn-outline-secondary" value="verificar"  onclick="accion('num_deficiente')" type="button"/>
						</div>
					</div>
				</div>


                <div id="num_curioso" class="num_curioso">
					<div class="input-group mb-3">
					<input id="num_curios" type="text" class="form-control" placeholder="número" aria-label="Recipient's username" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<input class="btn btn-outline-secondary" value="verificar"  onclick="accion('num_curioso')" type="button"/>
						</div>
					</div>
				</div>


                <div id="num_malvado" class="num_malvado">
					<div class="input-group mb-3">
					<input id="num_mal" type="text" class="form-control" placeholder="número evil" aria-label="Recipient's username" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<input class="btn btn-outline-secondary" value="verificar"  onclick="accion('num_malvado')" type="button"/>
						</div>
					</div>
				</div>

                <div id="num_palindromo" class="num_palindromo">
					<div class="input-group mb-3">
					<input id="num_pali" type="text" class="form-control" placeholder="número palin" aria-label="Recipient's username" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<input class="btn btn-outline-secondary" value="verificar"  onclick="accion('num_palindromo')" type="button"/>
						</div>
					</div>
				</div>


                <div id="num_semiperfecto" class="num_semiperfecto">
					<div class="input-group mb-3">
					<input id="num_semi" type="text" class="form-control" placeholder="número" aria-label="Recipient's username" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<input class="btn btn-outline-secondary" value="verificar"  onclick="accion('num_semiperfecto')" type="button"/>
						</div>
					</div>
				</div>
                
                <div id="num_odioso" class="num_odioso">
					<div class="input-group mb-3">
					<input id="num_odio" type="text" class="form-control" placeholder="número" aria-label="Recipient's username" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<input class="btn btn-outline-secondary" value="verificar"  onclick="accion('num_odioso')" type="button"/>
						</div>
					</div>
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
										<li><a onclick="mostrar('num_perfect1')">número perfecto</a></li>
										<li><a onclick="mostrar('num_abundante')">número abundante</a></li>
										<li><a onclick="mostrar('num_amigos')">números amigos</a></li>
										<li><a onclick="mostrar('num_deficiente')">números deficiente</a></li>
										<li><a onclick="mostrar('num_curioso')">números curioso</a></li>
										<li><a onclick="mostrar('num_malvado')">números malvado</a></li>
										<li><a onclick="mostrar('num_palindromo')">números palindromo</a></li>
										<li><a onclick="mostrar('num_semiperfecto')">números semiperfecto</a></li>
										<li><a onclick="mostrar('num_odioso')">números odioso</a></li>
										
										<li><a href="index.php">primos</a></li>


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
			<script src="assets/js/funciones_numeros.js"></script>

	</body>
</html>