<?php
class db {

protected $servername = "localhost"; //assigned server
protected $database = "dishapro"; // this is the database name
protected $name = "root";
protected $pwd = "";
protected $dbh;

	function db() // when class name is equal to db then it is called construre or it can also be written as function __construct()
	{
		$this->dbh = mysqli_connect($this->servername, $this->name, $this->pwd, $this->database);
	  	
			if (mysqli_connect_error()) {
				die("Database connection failed: " . mysqli_connect_error());
	              }
				 
		
			
	} // function db() ends here
}

?>
