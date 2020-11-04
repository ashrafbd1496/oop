<?php  


	/**
	 * Database Setup & Managements
	 */
	abstract class DB
	{
		
		private $host = 'localhost';
		private $db = 'oop395';
		private $user = 'root';
		private $pass = '';

		private $conn;

		/**
		 * Database Connection setup 
		 */
		protected final function dbConnection()
		{
			
			$this -> conn = new mysqli($this -> host, $this -> user, $this -> pass,  $this -> db );

			return $this -> conn;

		}

		
	}










?>