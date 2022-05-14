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
			<div class="alert alert-success text-center" role="alert">
				Vista de dades productes
			</div>
			<div class="text-left">
				<form>
					<div class="form-group row">
						<label for="id" class="col-sm-2 col-form-label font-weight-bold">Id</label>
						<div class="col-sm-10">
							<input type="text" readonly class="form-control-plaintext" id="id" value="<?php echo $result[0]['id']; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="nom" class="col-sm-2 col-form-label font-weight-bold">Nom</label>
						<div class="col-sm-10">
							<input type="text" readonly class="form-control-plaintext" id="nom" value="<?php echo $result[0]['Nom']; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="preu" class="col-sm-2 col-form-label font-weight-bold">Descripció</label>
						<div class="col-sm-10">
							<input type="number" readonly class="form-control-plaintext" id="preu" value="<?php echo $result[0]['Preu']; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="stock" class="col-sm-2 col-form-label font-weight-bold">Stock</label>
						<div class="col-sm-10">
							<input type="number" readonly class="form-control-plaintext" id="stock" value="<?php echo $result[0]['Stock']; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="mides" class="col-sm-2 col-form-label font-weight-bold">Mides</label>
						<div class="col-sm-10">
							<input type="text" readonly class="form-control-plaintext" id="mides" value="<?php echo $result[0]['Mides']; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="descripcio" class="col-sm-2 col-form-label font-weight-bold">Descripció</label>
						<div class="col-sm-10">
							<input type="text" readonly class="form-control-plaintext" id="descripcio" value="<?php echo $result[0]['Descripcio']; ?>">
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-10">
							<img src="<?php echo $result[0]['Imatge']; ?>" readonly class="form-control-plaintext" id="imatge">
						</div>
					</div>
					<!-- Imatge -->
					<div class="text-right">
						<a class="btn btn-primary" role="button" href="./index.php">Tornar a la pàgina principal</a>
					</div>
				</form>				
			</div>
		</div>
	</body>
</html>