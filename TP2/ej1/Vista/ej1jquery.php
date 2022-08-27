<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Ejercicio 1 con JQuery y Bootstrap</title>
	<link rel="stylesheet" href="../../../bootstrap-5.2.0-dist/css/bootstrap.min.css" />
	<style>
		.container {
			max-width: 768px;
		}

		.btn-warning {
			font-weight: 700;
		}

		.error {
			color: red;
		}
	</style>
</head>

<body class="d-flex flex-column min-vh-100">
	<?php
	include_once "../../../Estructura/navbar.php";
	?>
	<div class="container d-flex justify-content-center align-items-center">
		<form action="" method="post" name="form" id="form" class="needs-validation col-lg-6 col-md-8 col-12 p-4 mt-3 bg-light rounded-3 shadow" novalidate>
			<h1 class="text-center mb-5" style="font-size: 2rem">
				Formulario de prueba con JQuery
			</h1>
			<div class="row mb-3 d-flex justify-content-center align-items-center">
				<div class="col-12">
					<label for="email" class="form-label">E-mail</label>
					<input type="email" name="email" id="email" class="form-control" required />
					<div class="invalid-feedback">Ingrese su e-mail</div>
				</div>
			</div>
			<div class="row mb-5 d-flex justify-content-center align-items-center">
				<div class="col-12">
					<label for="name" class="form-label">Nombre</label>
					<input type="text" name="name" id="name" class="form-control" required />
					<div class="invalid-feedback">Ingrese su nombre</div>
				</div>
			</div>
			<div class="row d-flex justify-content-center align-items-center">
				<div class="col-6 text-center">
					<input type="submit" class="btn btn-warning col-12" />
				</div>
			</div>
		</form>
	</div>

	<?php
	include_once "../../../Estructura/footer.php";
	?>
	<script src="../../../bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
	<script src="../../../jquery-3.6.0.slim.min.js"></script>
	<script src="../../../jquery-validation-1.19.5/dist/jquery.validate.js"></script>
	<script>
		$("#form").validate({
			rules: {
				email: {
					required: true,
					email: true,
				},
				name: {
					required: true,
				},
			},
			messages: {
				email: {
					required: "Obligatorio",
					email: "Ingrese un e-mail válido",
				},
				name: {
					required: "Obligatorio",
				},
			},
			submitHandler: function(form) {
				form.submit();
			},
		});
	</script>
</body>

</html>