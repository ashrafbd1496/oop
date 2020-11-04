<?php 
	
	class Developer {

		public static $name = "Joshim Uddin";

		public static $age = "20";

		public static $job = "Php Developer";

		public static function info(){
			// return "My name is " . Developer :: $name . " and I am " . Developer :: $job;

			return "My name is " . self :: $name . " and I am " . self :: $job;
		}

	

	}

	echo Developer :: $name . '<br>';
	echo Developer :: info();