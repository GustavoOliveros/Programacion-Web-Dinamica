<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../lib/bootstrap-5.2.0-dist/css/bootstrap.min.css">
	<title>Ejercicio 7 - Tp 1 con Bootstrap</title>
</head>

<body class="d-flex flex-column min-vh-100">
	<?php
	include_once "../Estructura/navbar.php";
	?>
	<div class="col-12 col-md-9 mx-auto bg-light rounded-3 p-4 shadow" style="max-width: 768px;">
		<h1 class="text-center mb-4">Calculadora</h1>
		<form action="TP1_EJ7_Resultado.php" method="get" name="form" id="form" class="needs-validation col-12 mx-auto" novalidate>
			<div class="row mb-2">
				<div class="col-12 col-md-6 mx-auto">
					<input type="number" class="form-control" name="form-numero-uno" id="form-numero-uno" required />
					<div class="invalid-feedback">
						Debe ingresar un número
					</div>
				</div>
			</div>
			<div class="row mb-2">
				<div class="col-12 col-md-6 mx-auto">
					<input type="number" class="form-control" name="form-numero-dos" id="form-numero-dos" required />
					<div class="invalid-feedback">
						Debe ingresar un número
					</div>
				</div>
			</div>
			<div class="row mb-4 d-flex justify-content-center">
				<div class="col-8 col-md-4">
					<select name="operador" id="operador" class="form-select">
						<option default>SUMA</option>
						<option>RESTA</option>
						<option>MULTIPLICACION</option>
						<option>DIVISION</option>
					</select>
				</div>
				<div class="col-4 col-md-2 d-flex justify-content-end">
					<input type="submit" class="btn btn-primary col-12" />
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