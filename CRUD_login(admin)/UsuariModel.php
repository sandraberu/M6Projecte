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
				$stmt = $GLOBALS['conn']->prepare("SELECT * FROM Usuaris WHERE id=" . $id); 
			}
			else {
				$stmt = $GLOBALS['conn']->prepare("SELECT * FROM Usuaris ORDER BY id ASC"); 
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
	* Funció que afegeix un usuari a la BD
	*
	* @param (String) $nom
	* @param (String) $rol
	* @param (String) $usuari
	* @param (String) $contrassenya
	* @return (Array) associatiu amb resultats o bé un missatge d'error.
	*/
	function modAdd($nom, $rol, $usuari, $contrassenya)
	{
		modConnect();
		
		try {
			$sql = "INSERT INTO Usuaris (Nom, Rol, Usuari, Contrassenya) VALUES ('" . $nom . "', '" . $rol . "', '" . $usuari . "', '" . $contrassenya . "')";
			// use exec() because no results are returned
			if ($GLOBALS['conn']->exec($sql)) {
				return ["Success" => "Usuari afegit correctament"];
			}
			else {
				return ["Error" => "L'usuari no s'ha afegit"];
			}
		}
		catch(PDOException $e) {
			return ["Error" => $e->getMessage()];
		}
	}
	
	/**
	* Funció que modifica l'usuari a la BD
	*
	* @param (Integer) $id
	* @param (String) $nom
	* @param (String) $rol
	* @param (String) $usuari
	* @param (String) $contrassenya
	* @return (Array) associatiu amb resultats o bé un missatge d'error.
	*/
	function modUpdate($id, $nom, $rol, $usuari, $contrassenya)
	{
		modConnect();
		
		try {
			$sql = "UPDATE Usuaris SET Nom='" . $nom . "', Rol='" . $rol . "', Usuari='" . $usuari . "', Contrassenya='" . $contrassenya . "' WHERE id='" . $id . "'";
			// use exec() because no results are returned
			if ($GLOBALS['conn']->exec($sql)) {
				return ["Success" => "Usuari modificat correctament"];
			}
			else {
				return ["Error" => "L'usuari no s'ha modificat"];
			}
		}
		catch(PDOException $e) {
			return ["Error" => $e->getMessage()];
		}
	}
	
	/**
	* Funció que elimina l'usuari a la BD
	*
	* @param (Integer) $id
	* @return (Array) associatiu amb resultats o bé un missatge d'error.
	*/
	function modDelete($id)
	{
		modConnect();
		
		try {
			$sql = "DELETE FROM Usuaris WHERE id=".$id;
			// use exec() because no results are returned
			if ($GLOBALS['conn']->exec($sql)){
				return ["Success" => "Usuari eliminat correctament"];
			}
			else {
				return ["Error" => "L'usuari no s'ha eliminat"];
			}
		}
		catch(PDOException $e) {
			return ["Error" => $e->getMessage()];
		}
	}
?>