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
				Vista de creació de productes
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
						<label for="preu" class="col-sm-2 col-form-label font-weight-bold">Preu</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" id="preu" name="preu" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="stock" class="col-sm-2 col-form-label font-weight-bold">Stock</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" id="stock" name="stock" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="mides" class="col-sm-2 col-form-label font-weight-bold">Mides</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="mides" name="mides" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="descripcio" class="col-sm-2 col-form-label font-weight-bold">Descripcio</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="descripcio" name="descripcio" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="imatge" class="col-sm-2 col-form-label font-weight-bold">Imatge</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="imatge" name="imatge" required>
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
	</body>
</html>