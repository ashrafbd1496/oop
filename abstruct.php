<?php 

	abstract  class One{

		public $name = 'Robiul Hossain';

		public function job()
		{
			echo "Company Name is -Unilever Bangladesh Limited";
		}

	}


	

	class Two extends One {
		
	}



	$obj = new Two;
	echo  $obj ->job();

	// or we can use abstruct class property and method by declaring static like below-

	abstract  class Test{

		public static $name = 'Shamim Hossain';

		public static  function job()
		{
			echo "Company Name is -Smar Jeans";
		}

	}
	echo "<hr>";
	echo Test :: job();





	//abstrcu class restrict class to instantiate as object
	//abstruct class is use by extends 

	
 ?>
