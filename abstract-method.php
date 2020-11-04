<?php 
	
	abstract class A{

		//abstruct method has no body like below

		public abstract function info();
			

		public function office()
		{
			
		}

	}

	class B extends A{

		function info(){
			echo "abstruct method";
		}
	}
	$obj= new B;
	echo $obj ->info();

	//we can't create instantiate of an abastruct class