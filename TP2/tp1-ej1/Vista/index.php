<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../../bootstrap-5.2.0-dist/css/bootstrap.min.css">
	<title>Ejercicio 1 - Tp 1 con Bootstrap</title>
</head>

<body class="d-flex flex-column">
	<?php
	include_once "../../../Estructura/navbar.php";
	?>
	<div class="vh-100 d-flex align-items-center justify-content-center">
		<div class="col-12 col-md-6 col-xxl-4 bg-light rounded-4 shadow">
			<h1 class="text-center p-4">VER NÚMERO</h1>
			<div class="container-sm">
				<form class="needs-validation d-flex align-items-center justify-content-center flex-column" action="../Control/vernumero.php" method="get" novalidate>
					<div class="col-11 mt-4 position-relative">
						<label for="num" class="form-label">Ingrese un número</label>
						<input type="number" class="form-control" id="num" name="num" required />
						<div class="invalid-tooltip">Por favor, ingrese un número</div>
						<div class="valid-tooltip">¡Todo bien!</div>
					</div>
					<div class="col-11 text-center m-4">
						<button class="btn btn-primary mt-3" type="submit">Enviar</button>
					</div>
				</form>
			</div>
		</div>
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