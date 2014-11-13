<?php

// make code easier to read and to maintain
class Database {

	// create instanace variables 
	// private means that these variables can only  
	// be used or access in this class; cannot be access anywhere else
	// these variables are hidden; no one can modify them.
	// global variable which stay within the object
	private $connection;
	private $host;
	private $username;
	private $password;
	private $database;

	// constructor has four local variables or parameter
	// assign information to the global variables
	public function __construct($host, $username, $password, $database) {
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;
	}

	// this function will open the connection
	public function openConnection() {

	}
	// this function will close the connection
	public function closeConnection() {

	}
	// query function will run the query for creating database 
	public function query($string) {

	}
}