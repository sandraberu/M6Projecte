<?php
	require("ProducteModel.php");
	
	function getProductes()
	{
		return modQuery();
	}
	
	function addProducte($nom, $preu, $stock, $mides, $descripcio, $imatge)
	{
		return modAdd($nom, $preu, $stock, $mides, $descripcio, $imatge);
	}
	
	function upProducte($id, $nom, $preu, $stock, $mides, $descripcio, $imatge)
	{
		return modUpdate($id, $nom, $preu, $stock, $mides, $descripcio, $imatge);
	}
	
	function getProducte($id)
	{
		return modQuery($id);
	}
	
	function deleteProducte($id)
	{
		modDelete($id);
	}
	
	
	/**** FUNCIONS PER CARREGAR LES VISTES ***/
	
	function loadMainView()
	{
		$result = getProductes();
		require_once("MainView.php");
	}
	
	function loadNewProducteView()
	{
		require_once("NewView.php");
	}
	
	function loadEditProducteView($id)
	{
		$result = getProducte($id);
		require_once("EditView.php");
	}
	
	function loadShowProducteView($id)
	{
		$result = getProducte($id);
		require_once("ShowView.php");
	}
?>