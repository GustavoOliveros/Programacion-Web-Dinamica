<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../lib/bootstrap-5.2.0-dist/css/bootstrap.min.css">
	<title>Ejercicio 4 - Tp 2</title>
</head>

<body class="d-flex flex-column">
	<?php
	include_once "../Estructura/navbar.php";
	?>
	<main class="col-12 my-3 d-flex align-items-center justify-content-center">
		<div class="row">
			<div class="col-12 bg-light bg-gradient rounded-top p-3 border">
				<p class="text-primary p-0 m-0">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
						<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
						<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
					</svg>
					Cinem@s
				</p>
			</div>
			<div class="col-12 rounded-bottom shadow p-5">
				<form action="TP2_EJ4_Resultado.php" method="get" id="form" name="form" class="needs-validation" novalidate>
					<div class="row">
						<div class="col-12 col-md-6 mb-5 position-relative">
							<label for="titulo" class="form-label">Titulo</label>
							<input type="text" name="titulo" id="titulo" class="form-control" placeholder="El Maravilloso Mundo de Jack..." required />
							<div class="invalid-tooltip">Obligatorio</div>
						</div>
						<div class="col-12 col-md-6 mb-5 position-relative">
							<label for="actores" class="form-label">Actores</label>
							<input type="text" name="actores" id="actores" class="form-control" placeholder="Danny Elfman, Chris Sarandon..." required />
							<div class="invalid-tooltip">Obligatorio</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-md-6 mb-5 position-relative">
							<label for="director" class="form-label">Director</label>
							<input type="text" name="director" id="director" class="form-control" placeholder="Tim Burton..." required />
							<div class="invalid-tooltip">Obligatorio</div>
						</div>
						<div class="col-12 col-md-6 mb-5 position-relative">
							<label for="guion" class="form-label">Gui??n</label>
							<input type="text" name="guion" id="guion" class="form-control" placeholder="Caroline Thompson, Michael McDowell..." required />
							<div class="invalid-tooltip">Obligatorio</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-md-6 mb-5 position-relative">
							<label for="produccion" class="form-label">Producci??n</label>
							<input type="text" name="produccion" id="produccion" class="form-control" placeholder="Touchstone Pictures, Walt Disney Pictures..." required />
							<div class="invalid-tooltip">Obligatorio</div>
						</div>
						<div class="col-6 col-md-3 mb-5 position-relative">
							<label for="anio" class="form-label">A??o</label>
							<input type="number" min="0" max="9999" name="anio" id="anio" class="form-control" placeholder="1998" required />
							<div class="invalid-tooltip">A??o inv??lido</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-md-6 mb-5 position-relative">
							<label for="nacionalidad" class="form-label">Nacionalidad</label>
							<input type="text" name="nacionalidad" id="nacionalidad" class="form-control" placeholder="Estados Unidos..." required />
							<div class="invalid-tooltip">Obligatorio</div>
						</div>
						<div class="col-12 col-md-6 mb-5 position-relative">
							<label for="genero" class="form-label">G??nero</label>
							<select name="genero" id="genero" class="form-select" required>
								<option value="">Seleccione uno</option>
								<option value="Comedia">Comedia</option>
								<option value="Terror">Terror</option>
								<option value="Acci??n">Acci??n</option>
								<option value="Aventura">Aventura</option>
								<option value="Ciencia-ficcion">Ciencia Ficci??n</option>
								<option value="Documental">Documental</option>
								<option value="Drama">Drama</option>
								<option value="Fantas??a">Fantas??a</option>
								<option value="Musical">Musical</option>
							</select>
							<div class="invalid-tooltip">Obligatorio</div>
						</div>
					</div>
					<div class="row">
						<div class="col-6 col-md-3 mb-5 position-relative">
							<label for="duracion" class="form-label">Duraci??n</label>
							<input type="number" min="000" max="999" name="duracion" id="duracion" class="form-control d-inline" placeholder="73" required />(minutos)
							<div class="invalid-tooltip">Duraci??n inv??lida</div>
						</div>
						<div class="col-12 col-md-9 mb-5">
							<label for="edad-recomendada" class="form-label d-block">Restricci??n de edad</label>
							<div class="col-12">
								<div class="form-check form-check-inline position-relative">
									<input type="radio" class="form-check-input" name="edad-recomendada" id="edad-recomendada-todos" value="Todo p??blico" required />
									<label for="edad-recomendada-todos" class="form-check-label">Todo p??blico</label>
								</div>
								<div class="form-check form-check-inline">
									<input type="radio" class="form-check-input" name="edad-recomendada" id="edad-recomendada-mas7" value="Mayores de 7" required />
									<label for="edad-recomendada-mas7" class="form-check-label">Mayores de 7 a??os</label>
								</div>
								<div class="form-check form-check-inline">
									<input type="radio" class="form-check-input" name="edad-recomendada" id="edad-recomendada-mas18" value="Mayores de 18" required />
									<label for="edad-recomendada-mas18" class="form-check-label">Mayores de 18 a??os</label>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 mb-5 position-relative">
							<label for="sinopsis" class="form-label">Sinopsis</label>
							<textarea class="form-control" name="sinopsis" id="sinopsis" placeholder="El Se??or de Halloween, Jack Skellington, aburrido de hacer cada a??o lo mismo, descubre..." required></textarea>
							<div class="invalid-tooltip">Obligatorio</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 text-right d-flex justify-content-end">
							<input type="submit" class="btn btn-primary mx-1" />
							<input type="reset" value="Borrar" class="btn btn-secondary" />
						</div>
					</div>
				</form>
			</div>
		</div>
	</main>
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
				})

			});
		})();
	</script>

</body>

</html>