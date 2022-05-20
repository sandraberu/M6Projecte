<?php
	/**
	* Aquest arxiu espera 3 tipus de peticions:
	* - Peticions sense cap paràmetre: retornarà la vista principal (MainView.php)
	* - Peticions per GET: accions per mostrar les vistes de formulari de nou usuari, editar usuari i esborrar usuari. També la petició d'esborrar un usuari.
	* - Peticions per POST: accions que venen d'un formulari: afegir un nou usuari o modificar un usuari.
	*
	* En funció de la petició, farà unes crides o unes altres al controlador (UsuariController.php)
	*/
	
	require("UsuariController.php");
	
	if (isset($_GET['action']))
	{
		if ($_GET['action'] == 'delete')
		{
			if (isset($_GET['id'])) {
				deleteUsuari($_GET['id']);
			}
			loadMainView();
		}
		else if ($_GET['action'] == 'new')
		{	
			loadNewUsuariView();
		}
		else if ($_GET['action'] == 'edit')
		{
			if (isset($_GET['id'])) {
				loadEditUsuariView($_GET['id']);
			}
		}
		else if ($_GET['action'] == 'show')
		{
			if (isset($_GET['id'])) {
				loadShowUsuariView($_GET['id']);
			}
		}
		else 
		{
			loadMainView();
		}
	}
	else if (isset($_POST['action']))
	{
		if ($_POST['action'] == 'add')
		{
			if (isset($_POST['nom']) && isset($_POST['rol']) && isset($_POST['usuari']) && isset($_POST['contrassenya'])) {
				addUsuari($_POST['nom'], $_POST['rol'], $_POST['usuari'], $_POST['contrassenya']);
			}
			loadMainView();
		}
		else if ($_POST['action'] == 'up')
		{
			if (isset($_POST['id']) && isset($_POST['nom']) && isset($_POST['rol']) && isset($_POST['usuari']) && isset($_POST['contrassenya'])) {
				upUsuari($_POST['id'], $_POST['nom'], $_POST['rol'], $_POST['usuari'], $_POST['contrassenya']);
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