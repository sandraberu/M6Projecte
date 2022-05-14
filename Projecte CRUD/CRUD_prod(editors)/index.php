<?php
	/**
	* Aquest arxiu espera 3 tipus de peticions:
	* - Peticions sense cap paràmetre: retornarà la vista principal (MainView.php)
	* - Peticions per GET: accions per mostrar les vistes de formulari de nou Producte, editar Producte i esborrar Producte. També la petició d'esborrar un Producte.
	* - Peticions per POST: accions que venen d'un formulari: afegir un nou Producte o modificar un Producte.
	*
	* En funció de la petició, farà unes crides o unes altres al controlador (ProducteController.php)
	*/
	
	require("ProducteController.php");
	
	if (isset($_GET['action']))
	{
		if ($_GET['action'] == 'delete')
		{
			if (isset($_GET['id'])) {
				deleteProducte($_GET['id']);
			}
			loadMainView();
		}
		else if ($_GET['action'] == 'new')
		{	
			loadNewProducteView();
		}
		else if ($_GET['action'] == 'edit')
		{
			if (isset($_GET['id'])) {
				loadEditProducteView($_GET['id']);
			}
		}
		else if ($_GET['action'] == 'show')
		{
			if (isset($_GET['id'])) {
				loadShowProducteView($_GET['id']);
			}
		}
		else 
		{
			loadMainView();
		}
	}
	else if (isset($_POST['action']))
	{
		//Action login
		if ($_POST['action'] == 'add')
		{
			if (isset($_POST['nom']) && isset($_POST['preu']) && isset($_POST['stock']) && isset($_POST['mides']) && isset($_POST['descripcio']) && isset($_POST['imatge'])) {
				addProducte($_POST['nom'], $_POST['preu'], $_POST['stock'], $_POST['mides'], $_POST['descripcio'], $_POST['imatge']);
			}
			loadMainView();
		}
		else if ($_POST['action'] == 'up')
		{
			if (isset($_POST['id']) && isset($_POST['nom']) && isset($_POST['preu']) && isset($_POST['stock']) && isset($_POST['mides']) && isset($_POST['descripcio']) && isset($_POST['imatge'])) {
				upProducte($_POST['id'], $_POST['nom'], $_POST['preu'], $_POST['stock'], $_POST['mides'], $_POST['descripcio'], $_POST['imatge']);
			}
			loadMainView();
		}
		else
		{
			loadMainView();
		}
	}
	else 
	{
		loadMainView();
	}
?>