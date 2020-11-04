<?php 

	class Test{

		public $name = 'Ashraf Uddin';

		public function student()
		{
			echo "I am in class XII" . "<hr>";
		}

		public function __construct(){

			echo "I am contructor <hr>";
		}

		public function __destruct(){

			echo "I am destructor" ;
		}


		public function university()
		{
			echo "Darul Ihsan University" . '<br>';
		}





	}


	$obj = new Test;
	echo $obj ->student();
	echo $obj ->university();

	// :: -it's scope resulation operator

	// Construct will load always at the first and 
	// destruct will load always at last, all other method will be at between

 ?>
