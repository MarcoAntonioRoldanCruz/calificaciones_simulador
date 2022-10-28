<!DOCTYPE html>
<html lang="en">

<head>
	<title>Seguimiento semestral</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/bootstrap.bundle.min.js"></script>
	<!-- <script src="js/jquery-3.1.1.min.js"></script> -->
	<script src="js/jquery-3.6.0.min.js"></script>
</head>

<style>
	
</style>

<body style="background-image: url('img/bg.jpg');">

	<div class="p-5 bg-secondary text-white text-center mb-3">
		<h1>Simulador de calificaciones Fátima</h1>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm">
				<br><br>
				<h4 class="text-center">Inicia sesión</h4>
				<form class="mt-lg-5" id="formdata" method="post">
					<div id="logError" class="alert alert-danger" style="display:none;">
						<div class="text-center">
							<span id="aler_content"></span>
						</div>
					</div>
					<div class="form-floating mb-5">
						<input type="text" class="form-control" id="usuario_log" name="usuario_log" placeholder="Usuario">
						<label for="floatingUsuario">Usuario</label>
					</div>
					<div class="form-floating mb-3">
						<input type="password" class="form-control" id="password_log" name="password_log" placeholder="Contraseña">
						<label for="floatingPassword">Contraseña</label>
					</div>
					<div class="text-center mb-5">
						<button type="button" id="login_ss" class="btn btn-primary">Entrar</button>
					</div>
				</form>
				<!--
				<div class="alert alert-info" role="alert">
					Tenemos objetivos claros.
					<ul>
						<li>Realizar el documento FAC-53 con mayor eficacia.</li>
						<li>Obtener información detallada y reportes.</li>
						<li>Facilitar procesos en el seguimiento semestral.</li>
					</ul> 
				</div> -->
				<div class="text-center">
					<!-- <img src="img/coyote_gris-removebg-preview.png" class="w-75"> -->
					<img src="img/Fati_Portada.jpeg" alt="Fátima Castulo León" class="rounded-circle yo">
				</div>
				<br>
			</div>
			<div class="col-sm text-center mt-3">
				<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="img/carrusel_1.jpg" class="d-block w-100">
						</div>
						<div class="carousel-item">
							<img src="img/carrusel_2.jpg" class="d-block w-100">
						</div>
						<div class="carousel-item">
							<img src="img/carrusel_3.jpg" class="d-block w-100">
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previo</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Siguiente</span>
					</button>
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="mt-5 p-4 bg-dark text-white text-center">

	</div>

</body>

</html>