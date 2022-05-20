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
			<div class="alert alert-warning text-center" role="alert">
					Vista d'edició d'usuaris
				</div>
			<div class="text-left">
				<form method="POST" action="./index.php">
					<div class="form-group row">
						<label for="id" class="col-sm-2 col-form-label font-weight-bold">Id</label>
						<div class="col-sm-10">
							<input type="text" readonly class="form-control-plaintext" id="id" name="id" value="<?php echo $result[0]['id']; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="nom" class="col-sm-2 col-form-label font-weight-bold">Nom</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="nom" name="nom" value="<?php echo $result[0]['Nom']; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="rol" class="col-sm-2 col-form-label font-weight-bold">Rol</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="rol" name="rol" value="<?php echo $result[0]['Rol']; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="usuari" class="col-sm-2 col-form-label font-weight-bold">Usuari</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="usuari" name="usuari" value="<?php echo $result[0]['Usuari']; ?>">
						</div>
					</div>
					<!--- Contrassenya -->
					<div class="form-group row">
						<label for="contrassenya" class="col-sm-2 col-form-label font-weight-bold">Contrassenya</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="usuari" name="contrassenya" value="<?php echo $result[0]['Contrassenya']; ?>">
						</div>
					</div>
					<input type="hidden" name="action" value="up">
					<div class="text-right">
						<button type="submit" class="btn btn-primary">Desar</button>
						<a class="btn btn-secondary" role="button" href="./index.php">Sortir</a>
					</div>
				</form>				
			</div>
		</div>
	</body>
</html>