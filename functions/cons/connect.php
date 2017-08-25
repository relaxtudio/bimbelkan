<?php
/**
* 
*/
class Connect {
	
	var $server;
	var $username;
	var $password;
	var $database;
	var $conn;

	function __construct() {
		$this->server = Config::$SERVER;
		$this->username = Config::$USERNAME;
		$this->password = Config::$PASSWORD;
		$this->database = Config::$DATABASE;
	}

	function connect() {
		$this->conn = mysqli_connect($this->server, $this->username, $this->password, $this->database);
		if (!$this->conn) {
			echo json_encode(array('code'=>500,'message'=>'DB connection failed.'));
			die();
        }
	}
}