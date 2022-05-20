<!doctype html>
<html lang="ca">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<title>Projecte M6</title>
	</head>
	<body>
		<div class="container">
			<div class="py-5 text-center">
				<h1>Projecte M6</h1>
			</div>
			<div class="alert alert-primary text-center" role="alert">
				Vista de creació d'usuari
			</div>
			<div class="text-left">
				<form method="POST" action="./index.php">
					<div class="form-group row">
						<label for="nom" class="col-sm-2 col-form-label font-weight-bold">Nom</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="nom" id="nom" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="rol" class="col-sm-2 col-form-label font-weight-bold">Rol</label>
						<div class="col-sm-10">
						<?php
                            $ensenyament = $result[0]['Rol'];
							echo "<select class='form-control' name='rol' id='rol'>";
									echo "<option value='SMX'" . ($ensenyament == 'admin' ? 'selected' : '') . ">Editor</option>";
									echo "<option value='ASIX'" . ($ensenyament == 'editor' ? 'selected' : '') . ">Admin</option>";
							echo "</select>";
						?>
						</div>
					</div>
					<div class="form-group row">
						<label for="usuari" class="col-sm-2 col-form-label font-weight-bold">Usuari</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="usuari" id="usuari" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="contrassenya" class="col-sm-2 col-form-label font-weight-bold">Contrassenya</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" name="contrassenya" id="contrassenya" required>
						</div>
					</div>
					<input type="hidden" name="action" value="add">
					<div class="text-right">
						<button type="submit" class="btn btn-primary">Desar</button>
						<a class="btn btn-secondary" role="button" href="./index.php">Sortir</a>
					</div>
				</form>				
			</div>
		</div>
		<footer class="footer fixed-bottom mt-auto py-3 px-3 bg-light text-right">
            <a href="?action=logout" class="btn btn-secondary btn-sm" tabindex="-1" role="button" aria-disabled="true">Logout</a>
        </footer>
	</body>
</html>