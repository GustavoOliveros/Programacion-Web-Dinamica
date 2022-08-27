<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../../bootstrap-5.2.0-dist/css/bootstrap.min.css">
	<title>Ejercicio 3 - Tp 2</title>
</head>

<body class="d-flex flex-column">
	<?php
	include_once "../../../Estructura/navbar.php";
	?>
	<main class="bg-secondary vh-100 d-flex align-items-center justify-content-center">
		<div class="col-12 col-sm-9 col-md-6 col-lg-4 col-xxl-3 rounded-3 shadow-lg p-3 text-left position-relative" style="background-color: white">
			<button type="button" class="btn-close disabled position-absolute end-0 top-0 p-3" aria-label="Close" style="font-size: 0.8rem"></button>
			<div class="row">
				<div class="col">
					<h1 class="fw-5 text-center mb-5 mt-5">Member Login</h1>
				</div>
			</div>
			<form action="../Control/validarPass.php" method="post" class="needs-validation" name="form" id="form" novalidate>
				<div class="row">
					<div class="col-12 col-md-9 mx-auto">
						<div class="input-group mb-3">
							<span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
									<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
								</svg>
							</span>
							<input type="text" name="username" id="username" class="form-control" placeholder="Username" required />
							<div class="invalid-feedback" id="feedback-username">
								Obligatorio
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-9 mx-auto">
						<div class="input-group mb-3">
							<span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
									<path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
								</svg>
							</span>
							<input type="password" name="password" id="password" placeholder="Password" class="form-control" pattern="^(?=.*\d).{8,16}$" required />
							<div class="invalid-feedback" id="feedback-password">
								Contraseña inválida
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-9 mx-auto mb-5 pb-5">
						<input type="submit" class="btn btn-success border-0 col-12" style="background-color: #01ce80" value="Login" />
					</div>
				</div>
			</form>
		</div>
	</main>
	<?php
	include_once "../../../Estructura/footer.php";
	?>
	<script src="../../../bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
	<script>
		// Variables globales
		let form = document.getElementById("form");
		let username = document.getElementById("username");
		let password = document.getElementById("password");

		/**
		 * Valida el input de la contraseña
		 * @param {event} submitEvent
		 */
		function validarContrasenia(submitEvent) {
			let feedback = document.getElementById("feedback-password");

			if (password.value === "") {
				// Que no este vacía
				feedback.innerHTML = "Obligatorio";
				password.classList.add("is-invalid");
				submitEvent.preventDefault();
				submitEvent.stopPropagation();
			} else if (password.value === username.value) {
				// Que no sea igual al username
				feedback.innerHTML = "No puede ser igual al nombre de usuario";
				password.classList.add("is-invalid");
				submitEvent.preventDefault();
				submitEvent.stopPropagation();
			} else {
				// Que sea correcta
				if (!password.checkValidity()) {
					feedback.innerHTML =
						"Debe tener entre 8 y 16 caracteres e incluir al menos un número";
					password.classList.add("is-invalid");
					submitEvent.preventDefault();
					submitEvent.stopPropagation();
				} else {
					password.classList.remove("is-invalid");
					password.classList.add("is-valid");
				}
			}
		}

		/**
		 * Valida el input del usuario
		 * @param {event} submitEvent
		 */
		function validarUsuario(submitEvent) {
			if (!username.checkValidity()) {
				username.classList.add("is-invalid");
				submitEvent.preventDefault();
				submitEvent.stopPropagation();
			} else {
				username.classList.remove("is-invalid");
				username.classList.add("is-valid");
			}
		}

		// Creación del event listener para el submit del formulario
		form.addEventListener("submit", (event) => {
			// Validación inicial
			validarUsuario(event);
			validarContrasenia(event);

			// Event listeners para validar cada vez que haya un cambio
			// de ahora en adelante
			username.addEventListener("input", () => {
				validarUsuario(event);
				validarContrasenia(event);
			});
			password.addEventListener("input", () => {
				validarUsuario(event);
				validarContrasenia(event);
			});
		});
	</script>
</body>

</html>
