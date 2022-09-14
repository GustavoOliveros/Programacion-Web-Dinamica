<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../lib/bootstrap-5.2.0-dist/css/bootstrap.min.css">
	<title>Ejercicio 1 - Tp 3</title>
</head>

<body class="d-flex flex-column">
	<?php
	include_once "../Estructura/navbar.php";
	?>
	<div class="d-flex justify-content-center align-items-center vh-100">
		<div class="col-12 col-md-7 col-lg-5 col- bg-light shadow rounded p-3 border border-primary">
			<form action="TP3_EJ1_Resultado.php" method="post" class="needs-validation" enctype="multipart/form-data" name="form" id="form" novalidate>
				<div class="row">
					<h1 class="text-center my-4"><strong>Archivos</strong></h1>
					<div class="col-12 mb-4">
						<label for="archivo" class="form-label">Ingrese un archivo .pdf, .doc o .docx (máximo 2MB):</label>
						<input type="file" class="form-control" name="archivo" id="archivo" accept=".doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,.pdf,application/pdf" required />
						<div class="invalid-feedback">Obligatorio</div>
					</div>
					<div class="col-12 mb-3 d-flex justify-content-center">
						<input type="submit" class="btn btn-primary" />
					</div>
				</div>
			</form>
		</div>
	</div>
	<?php
	include_once "../Estructura/footer.php";
	?>
	<script src="../lib/bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>}
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