<?php 
	
	class Developer {

		//Constant Declaration 
		const NAME = "Fahim Anam";

		public  $age = "20";

		public  $job = "Php Developer";

		public static  function info(){
				// echo "My name is ". Developer :: NAME;

			echo "My name is ". self :: NAME;
			
		}

	

	}

	//constand call
	echo Developer :: NAME . '<br>';
	Developer :: info();

	// NB- static property and method  R constant declare korar niom same
 