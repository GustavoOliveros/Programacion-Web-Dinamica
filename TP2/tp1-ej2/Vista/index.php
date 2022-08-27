<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../../bootstrap-5.2.0-dist/css/bootstrap.min.css">
	<title>Ejercicio 2 - Tp 1 con Bootstrap</title>
</head>

<body class="d-flex flex-column min-vh-100">
	<?php
	include_once "../../../Estructura/navbar.php";
	?>
	<div class="col-12 col-md-7 col-lg-6 col-xxl-4 bg-light rounded-3 p-4 shadow mx-auto">
		<h1 class="text-center mb-3">
			<strong>Horas de cursada: PWD</strong>
		</h1>
		<form class="needs-validation mx-auto" action="horascursada.php" method="get" name="form" novalidate>
			<div class="row">
				<div class="col-12 col-md-4 mb-5 position-relative">
					<label for="horas-lunes" class="form-label">Lunes</label>
					<input type="number" class="form-control" name="horas-lunes" id="horas-lunes" value="0" min="0" step="0.5" required />
					<div class="invalid-tooltip">
						Número inválido
					</div>
				</div>
				<div class="col-12 col-md-4 mb-5 position-relative">
					<label for="horas-martes" class="form-label">Martes</label>
					<input type="number" class="form-control" name="horas-martes" id="horas-martes" value="0" min="0" step="0.5" required />
					<div class="invalid-tooltip">
						Número inválido
					</div>
				</div>
				<div class="col-12 col-md-4 mb-5 position-relative">
					<label for="horas-miercoles" class="form-label">Miercoles</label>
					<input type="number" class="form-control" name="horas-miercoles" id="horas-miercoles" value="0" min="0" step="0.5" required />
					<div class="invalid-tooltip">
						Número inválido
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-4 mb-5 position-relative">
					<label for="horas-jueves" class="form-label">Jueves</label>
					<input type="number" class="form-control" name="horas-jueves" id="horas-jueves" value="0" min="0" step="0.5" required />
					<div class="invalid-tooltip">
						Número inválido
					</div>
				</div>
				<div class="col-12 col-md-4 mb-5 position-relative">
					<label for="horas-viernes" class="form-label">Viernes</label>
					<input type="number" class="form-control" name="horas-viernes" id="horas-viernes" value="0" min="0" step="0.5" required />
					<div class="invalid-tooltip">
						Número inválido
					</div>
				</div>
				<div class="col-12 col-md-4 mb-5 position-relative">
					<label for="horas-sabado" class="form-label">Sábado</label>
					<input type="number" class="form-control" name="horas-sabado" id="horas-sabado" value="0" min="0" step="0.5" required />
					<div class="invalid-tooltip">
						Número inválido
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