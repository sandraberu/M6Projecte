<?php
	// Variable global perquè totes les funcions tinguin accés a aquest objecte.
	// S'instancia en modConnect() i per cridar-lo es farà amb $GLOBALS['conn']
	$conn;
	
	/**
	* Funció bàsica per connectar-nos a la base de dades.
	* Inicialització de l'objecte global $conn.
	* Qualsevol variació dels paràmetres d'accés a la BD es canvia aquí.
	*
	* @return (Array) associatiu amb resultats o bé un missatge d'error.
	*/
	function modConnect()
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "PROJECTE";

		try {
			$GLOBALS['conn'] = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			// set the PDO error mode to exception
			$GLOBALS['conn']->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return ["Connection" => "Success"];
		}
		catch(PDOException $e) {
			return ["Connection failed" => $e->getMessage()];
		}
	}
	
	/**
	* Funció que retorna l'usuari o usuaris de la BD
	*
	* @param (Integer) $id - opcional
	* @return (Array) associatiu amb resultats o bé un missatge d'error.
	*/
	function modQuery($id = null)
	{
		modConnect();
		
		try {
			if ($id != null) {
				$stmt = $GLOBALS['conn']->prepare("SELECT * FROM Productes WHERE id=" . $id); 
			}
			else {
				$stmt = $GLOBALS['conn']->prepare("SELECT * FROM Productes ORDER BY id ASC"); 
			}
			$stmt->execute();

			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			
			return $result;
		}
		catch(PDOException $e) {
			return ["Error" => $e->getMessage()];
		}
	}
	
	/**
	* Funció que afegeix un producte a la BD
	*
	* @param (String) $nom
	* @param (Integer) $preu
	* @param (Integer) $stock
	* @param (String) $mides
	* @param (String) $descripcio
	* @param (String) $imatge
	* @return (Array) associatiu amb resultats o bé un missatge d'error.
	*/
	function modAdd($nom, $preu, $stock, $mides, $descripcio, $imatge)
	{
		modConnect();
		
		try {
			$sql = "INSERT INTO Productes (Nom, Preu, Stock, Mides, Descripcio, Imatge) 
			VALUES ('" . $nom . "', '" . $preu . "', '" . $stock . "', '" . $mides . "','" . $descripcio . "','" . $imatge . "')";
			// use exec() because no results are returned
			if ($GLOBALS['conn']->exec($sql)) {
				return ["Success" => "Producte afegit correctament"];
			}
			else {
				return ["Error" => "El producte no s'ha afegit"];
			}
		}
		catch(PDOException $e) {
			return ["Error" => $e->getMessage()];
		}
	}
	
	/**
	* Funció que modifica el producte a la BD
	*
	* @param (Integer) $id
	* @param (String) $nom
	* @param (Integer) $preu
	* @param (Integer) $stock
	* @param (String) $mides
	* @param (String) $descripcio
	* @param (String) $imatge
	* @return (Array) associatiu amb resultats o bé un missatge d'error.
	*/
	function modUpdate($id, $nom, $preu, $stock, $mides, $descripcio, $imatge)
	{
		modConnect();
		
		try {
			$sql = "UPDATE Productes SET Nom='" . $nom . "', Preu='" . $preu . "', Stock'" . $stock . "', Mides'" . $mides . "', 
					Descripcio'" . $descripcio . "', Imatge'" . $imatge . "' WHERE id='" . $id . "'";
			// use exec() because no results are returned
			if ($GLOBALS['conn']->exec($sql)) {
				return ["Success" => "Producte modificat correctament"];
			}
			else {
				return ["Error" => "El producte no s'ha modificat"];
			}
		}
		catch(PDOException $e) {
			return ["Error" => $e->getMessage()];
		}
	}
	
	/**
	* Funció que elimina el producte a la BD
	*
	* @param (Integer) $id
	* @return (Array) associatiu amb resultats o bé un missatge d'error.
	*/
	function modDelete($id)
	{
		modConnect();
		
		try {
			$sql = "DELETE FROM Productes WHERE id=".$id;
			// use exec() because no results are returned
			if ($GLOBALS['conn']->exec($sql)){
				return ["Success" => "Producte eliminat correctament"];
			}
			else {
				return ["Error" => "El producte no s'ha eliminat"];
			}
		}
		catch(PDOException $e) {
			return ["Error" => $e->getMessage()];
		}
	}
?>