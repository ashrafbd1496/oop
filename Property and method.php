<?php 
	
	class B {

		public $name = "Ahmadullah";

		public $age = "20";

		public $job = "Php Developer";

		public function info(){
			echo "My name is " . $this ->name . " and I am " . $this ->job . '<br>';
		}

		public function test()
		{
			return $this ->info();
		}

	}
	
	$obj2 = new B;

	 echo $obj2 ->info();







// Calss A
	class A {

		public $name = "Ashraf Uddin";

		public $age = "20";

		public $job = "Php Developer";

		public function info(){
			echo "My name is Ashraf and I am php developer";
		}

	}

	//created object 
	$obj = new A; 

	//call property
	echo $obj -> name . '<br>';
	echo $obj -> age . '<br>';
	echo $obj -> job . '<br>';

	//call a method- 
	echo "<h2>The way to call a method</h2> ";
	echo $obj -> info() . '<br>';

	//concate onject with string 
	echo "My name is " . $obj ->name .  ' and My age is ' . $obj ->age;

	




 ?>