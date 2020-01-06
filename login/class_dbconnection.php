<?php
//database connection class
	class Connection
	{
		private $server;
		private $username;
		private $password;
		private $db;

		//constructor method of Connection class
		public function Connection()
		{
			$this->server = "localhost";
			$this->username = "root";
			$this->password = "";
			$this->db = "nhk_epms";
		}

		function db_con()
		{
			$con = new mysqli($this->server,$this->username,$this->password,$this->db);
			if($con->connect_errno)
			{
				echo("Connection error: ");
				echo($con->connect_errno);
				echo(" ".$con->connect_error);
				exit;
			}
			
			return $con; //return connection object
		}
	}
?>
