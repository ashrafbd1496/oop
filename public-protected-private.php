<?php 
	
	//public, Private, Protected

	class Ashraf {

		public $name = 'Md Ashraf Uddin';

		private $salary = '20000';

		Protected $phone = '01558917333';
							
		}

	class Jakir extends Ashraf {
		public $father_name = 'Muhammd Ali';

	public function phoneNumber()
		{
			echo $this ->phone;
		}

	}

	
	


	$as = new Ashraf;
	echo $as ->name .'<br>';
	// echo $as ->salary; //(priave property can't call from outside the class)

	echo "<hr>";

	$jk = new Jakir;
	echo $jk ->phoneNumber();


