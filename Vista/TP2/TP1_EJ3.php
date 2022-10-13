<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../lib/bootstrap-5.2.0-dist/css/bootstrap.min.css">
	<title>Ejercicio 3 - Tp 1 con Bootstrap</title>
</head>

<body class="d-flex flex-column min-vh-100">
	<?php
	include_once "../Estructura/navbar.php";
	?>
	<div class="col-12 col-md-9 mx-auto bg-light rounded-3 p-4 shadow" style="max-width: 992px">
		<form action="TP1_EJ3_Resultado.php" method="post" name="form" class="needs-validation col-12 mx-auto" novalidate>
			<h1 class="text-center mb-4"><strong>Datos</strong></h1>
			<div class="row">
				<hr />
				<div class="col-12 col-md-6 mb-4">
					<label for="nombre-form" class="form-label">Nombre</label>
					<input type="text" class="form-control" name="nombre-form" id="nombre-form" required />
					<div class="invalid-feedback">Ingrese su nombre</div>
				</div>
				<div class="col-12 col-md-6 mb-4">
					<label for="apellido-form" class="form-label">Apellido</label>
					<input type="text" class="form-control" name="apellido-form" id="nombre-form" required />
					<div class="invalid-feedback">Ingrese su apellido</div>
				</div>
			</div>
			<div class="row">
				<div class="col-5 col-md-3 mb-4">
					<label for="edad-form" class="form-label">Edad</label>
					<input type="number" class="form-control" min="0" max="150" name="edad-form" id="edad-form" required />
					<div class="invalid-feedback">Ingrese su edad</div>
				</div>
				<div class="col-12 col-md-9 mb-4">
					<label for="direccion-form" class="form-label">Direccion</label>
					<input type="text" class="form-control" name="direccion-form" id="direccion-form" required />
					<div class="invalid-feedback">Ingrese su dirección</div>
				</div>
			</div>
			<div class="row mb-3">
				<div class="col text-center">
					<input type="submit" class="btn btn-primary" />
				</div>
			</div>
		</form>
	</div>
	<?php
	include_once "../Estructura/footer.php";
	?>
	<script src="../lib/bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
	<script>
		(() => {
			"use strict";
			const forms = document.querySelectorAll(".needs-validation");
			Array.from(forms).forEach((form) => {
				form.addEventListener(
					"submit",
					(event) => {
						if (!form.checkValidity()) {
							event.preventDefault();
							event.stopPropagation();
						}

						form.classList.add("was-validated");
					},
					false
				);
			});
		})();
	</script>
</body>

</html>