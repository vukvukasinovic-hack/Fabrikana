<?php

// Protection
if (!defined('ENTER')){die('Denied access!');}

class DB {

	public $connection;
	protected $link;

	public function __construct() {

		$host 		= HOSTNAME;
		$username 	= USERNAME;
		$password 	= PASSWORD;
		$database 	= DATABASE;

		$this->connection = TRUE;

		try {
			
			$this->link = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $username, $password);
			$this->link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->link->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		}
		catch (PDOException $ex) {
			
			throw new Exception($ex->getMessage());
		}
	}

	public function Disconnect() {
		
		$this->link = NULL;
		$this->connection = FALSE;
	}

	public function GetRow($query, $params = []) {
		
		try {
			
			$stmt = $this->link->prepare($query);
			$stmt->execute($params);
			return $stmt->fetch();
		}
		catch (PDOException $ex) {
			
			throw new Exception($ex->getMessage());
		}
	}

	public function GetRows($query, $params = []) {
		
		try {
			
			$stmt = $this->link->prepare($query);
			$stmt->execute($params);
			return $stmt->fetchAll();
		}
		catch (PDOException $ex) {
			
			throw new Exception($ex->getMessage());
		}
	}

	public function InsertRow($query, $params = []) {
		
		try {
			
			$stmt = $this->link->prepare($query);
			$stmt->execute($params);
			return $stmt->rowCount();
		}
		catch (PDOException $ex) {
			
			throw new Exception($ex->getMessage());
		}
	}

	public function UpdateRow($query, $params = []) {
		
		try {
			
			$stmt = $this->link->prepare($query);
			$stmt->execute($params);
			return $stmt->rowCount();
		}
		catch (PDOException $ex) {
			
			throw new Exception($ex->getMessage());
		}
	}

	public function DeleteRow($query, $params = []) {
		
		try {
			
			$stmt = $this->link->prepare($query);
			$stmt->execute($params);
			return $stmt->rowCount();
		}
		catch (PDOException $ex) {
			
			throw new Exception($ex->getMessage());
		}
	}
}

?>