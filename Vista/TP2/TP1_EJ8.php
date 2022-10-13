<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../lib/bootstrap-5.2.0-dist/css/bootstrap.min.css">
	<title>Ejercicio 8 - Tp 1 con Bootstrap</title>
</head>

<body class="d-flex flex-column min-vh-100">
	<?php
	include_once "../Estructura/navbar.php";
	?>
	<div class="container-sm p-4 mt-3 bg-light rounded-3 shadow" style="max-width: 576px;">
		<h1 class="fw-bold text-center mb-5">Cine Cinem@s</h1>
		<h4>Calcule su entrada</h4>
		<form action="TP1_EJ8_Resultado.php" method="post" class="needs-validation" name="form" id="form" novalidate>
			<div class="row mb-3">
				<div class="col-12 col-md-6">
					<label for="edad" class="form-label">Su edad</label>
					<input type="number" class="form-control" name="edad" id="edad" min="0" max="150" required />
					<div class="invalid-feedback">Edad inválida</div>
				</div>
			</div>
			<div class="row mb-4">
				<div class="col-12 col-md-6">
					¿Es estudiante?
					<div class="form-check">
						<input type="radio" class="form-check-input" name="esEstudiante" id="esEstudiante" value="true" required />
						<label for="edad" class="form-check-label">Si</label>
					</div>
					<div class="form-check">
						<input type="radio" class="form-check-input" name="esEstudiante" id="esEstudiante" value="false" required />
						<label for="edad" class="form-check-label">No</label>
						<div class="invalid-feedback">Obligatorio</div>
					</div>
				</div>
			</div>
			<div class="row mb-2">
				<input type="submit" class="btn btn-primary col-8 col-md-4 mx-auto" />
			</div>
			<div class="row">
				<input type="reset" class="btn btn-secondary col-8 col-md-4 mx-auto" />
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
				form.addEventListener("reset", () => {
					form.classList.remove("was-validated");
				});
			});
		})();
	</script>
</body>

</html>