<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../../bootstrap-5.2.0-dist/css/bootstrap.min.css">
	<title>Ejercicio 6 - Tp 1 con Bootstrap</title>
</head>

<body class="d-flex flex-column min-vh-100">
	<?php
	include_once "../../../Estructura/navbar.php";
	?>
	<div class="col-12 col-md-9 mx-auto bg-light rounded-3 p-4 shadow" style="max-width: 992px">
		<form action="../Control/saludo.php" method="post" name="form" class="needs-validation col-12 mx-auto" novalidate>
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
			<hr />
			<div class="row">
				<div class="col-6 mb-4">
					Estudios
					<div class="form-check">
						<input type="radio" class="form-check-input" name="estudios" id="estudios" value="sin-estudios" required />
						<label for="estudios" class="form-check-label">
							Sin estudios
						</label>
					</div>
					<div class="form-check">
						<input type="radio" class="form-check-input" name="estudios" id="estudios" value="sin-estudios" required />
						<label for="estudios" class="form-check-label">
							Primarios
						</label>
					</div>
					<div class="form-check">
						<input type="radio" class="form-check-input" name="estudios" id="estudios" value="primarios" required />
						<label for="estudios" class="form-check-label">
							Secundarios
						</label>
						<div class="invalid-feedback">Seleccione uno</div>
					</div>
				</div>
				<div class="col-6 mb-4">
					Sexo
					<div class="form-check">
						<input type="radio" class="form-check-input" name="sexo" id="sexo" value="masculino" required />
						<label for="estudios" class="form-check-label">
							Masculino
						</label>
					</div>
					<div class="form-check">
						<input type="radio" class="form-check-input" name="sexo" id="sexo" value="femenino" required />
						<label for="estudios" class="form-check-label">
							Femenino
						</label>
					</div>
					<div class="form-check">
						<input type="radio" class="form-check-input" name="sexo" id="sexo" value="otro" required />
						<label for="estudios" class="form-check-label"> Otro </label>
						<div class="invalid-feedback">Seleccione uno</div>
					</div>
				</div>
			</div>
			<hr />
			<div class="row">
				<div class="col-12">¿Qué deportes practica?</div>
				<div class="col-6 mb-4">
					<div class="form-check">
						<input type="checkbox" class="form-check-input" name="deportes[]" id="deportes" value="Futbol" />
						<label for="Futbol" class="form-check-label">Futbol</label>
					</div>
					<div class="form-check">
						<input type="checkbox" class="form-check-input" name="deportes[]" id="deportes" value="Basket" />
						<label for="Basket" class="form-check-label">Basket</label>
					</div>
					<div class="form-check">
						<input type="checkbox" class="form-check-input" name="deportes[]" id="deportes" value="Voley" />
						<label for="Voley" class="form-check-label">Voley</label>
					</div>
					<div class="form-check">
						<input type="checkbox" class="form-check-input" name="deportes[]" id="deportes" value="Hockey" />
						<label for="Hockey" class="form-check-label">Hockey</label>
					</div>
				</div>
				<div class="col-6 mb-2">
					<div class="form-check">
						<input type="checkbox" class="form-check-input" name="deportes[]" id="deportes" value="Golf" />
						<label for="Golf" class="form-check-label">Golf</label>
					</div>
					<div class="form-check">
						<input type="checkbox" class="form-check-input" name="deportes[]" id="deportes" value="Natación" />
						<label for="Natación" class="form-check-label">Natación</label>
					</div>
					<div class="form-check">
						<input type="checkbox" class="form-check-input" name="deportes[]" id="deportes" value="Atletismo" />
						<label for="Atletismo" class="form-check-label">Atletismo</label>
					</div>
					<div class="form-check">
						<input type="checkbox" class="form-check-input" name="deportes[]" id="deportes" value="Handball" />
						<label for="Handball" class="form-check-label">Handball</label>
					</div>
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
	include_once "../../../Estructura/footer.php";
	?>
	<script src="../../../bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
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