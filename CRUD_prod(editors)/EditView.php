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
					Vista d'edició de productes
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
						<label for="preu" class="col-sm-2 col-form-label font-weight-bold">Preu</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" id="preu" name="preu" value="<?php echo $result[0]['Preu']; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="stock" class="col-sm-2 col-form-label font-weight-bold">Stock</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" id="stock" name="stock" value="<?php echo $result[0]['Stock']; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="mides" class="col-sm-2 col-form-label font-weight-bold">Mides</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="mides" name="mides" value="<?php echo $result[0]['Mides']; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="descripcio" class="col-sm-2 col-form-label font-weight-bold">Descripcio</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="descripcio" name="descripcio" value="<?php echo $result[0]['Descripcio']; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="imatge" class="col-sm-2 col-form-label font-weight-bold">Imatge</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="imatge" name="imatge" value="<?php echo $result[0]['Imatge']; ?>">
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