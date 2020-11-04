<?php 

	/**
	 * final class would not be extends 

	 */

	final class Test
	{
		
		public function first()
		{
			echo "Final class would not extends";
		}

		

	}

	class TestTheree{
		public final function three()
		{
			echo "I am developer";
		}
	}

	class TestFour extends TestTheree{
		public function four()
		{
			parent :: three();
		}
	}

	$obj2 =new TestFour;
	echo $obj2 -> four();

	echo "<hr>";



	/**
	 * 
	
	class TestTwo extends Test{

		public function second()
		{
			echo "It will show error if we extends Test class";
		}
	}
 */



	$obj = new Test;
	$obj -> first();


	
 ?>
