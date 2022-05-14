<?php
	require("UsuariModel.php");
	
	function getUsuaris()
	{
		return modQuery();
	}
	
	function addUsuari($nom, $rol, $usuari, $contrassenya)
	{
		return modAdd($nom, $rol, $usuari, $contrassenya);
	}
	
	function upUsuari($id, $nom, $rol, $usuari, $contrassenya)
	{
		return modUpdate($id, $nom, $rol, $usuari, $contrassenya);
	}
	
	function getUsuari($id)
	{
		return modQuery($id);
	}
	
	function deleteUsuari($id)
	{
		modDelete($id);
	}
	
	
	/**** FUNCIONS PER CARREGAR LES VISTES ***/
	
	function loadMainView()
	{
		$result = getUsuaris();
		require_once("MainView.php");
	}
	
	function loadNewUsuariView()
	{
		require_once("NewView.php");
	}
	
	function loadEditUsuariView($id)
	{
		$result = getUsuari($id);
		require_once("EditView.php");
	}
	
	function loadShowUsuariView($id)
	{
		$result = getUsuari($id);
		require_once("ShowView.php");
	}
?>