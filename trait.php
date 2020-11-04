<?php 

	//include traits- 
	include "traits/info.php";
	include "traits/job.php";

	/**
	 * we can extends/use one more class using trait instead of extends
	 */
	class Developer
	{
		public function dev()
		{
			echo "I am php developer";
		}
	}

	/**
	 * 
	 */
	class Info
	{
		
		public function student()
		{
			echo "I am in class X";
		}


		public function teacher()
		{
			echo "I am Math Teacher";
		}

		public function exam()
		{
			echo "Our exam will start soon";
		}
	}

	/**
	 * 
	 */
	class Staff extends Info
	{
		
		public function staffDetails()
		{
			echo "We are full hearted to this college";
		}

		//using trait- 

		use DevInfo;
		use MyJob;


	}

	$obj = new Staff;

	echo $obj ->exam() . "<hr>";

	echo $obj ->testInfo() . '<hr>';

	echo $obj ->myJobInfo();



 ?>