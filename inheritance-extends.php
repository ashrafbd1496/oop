<?php 
	
	class Ahmad {

		public $name1 = "Ahmad Ullah";

		public  $age = "20";

		public  $job = "Php Developer";

		public  function about(){

			echo "My name is Ahmad Ullah";
			
			// echo "My name is Ahmad Ullah " . $this -> info();
			
		}

	

	}

	class Umar extends Ahmad {

		public $name2 = "Umar Farooque";

		public  $age = "30";

		public  $job = "Javascript Developer";

		public  function info(){
				
			echo "I am Javascript Developer " . parent :: about();
			
		}

	

	}

	$obj = new Umar;

	echo $obj ->name1 . '<br>';

	echo $obj ->age . '<br>';

	//called class Ahamd method
	echo $obj ->about() . '<br>';

	echo $obj ->info();

	