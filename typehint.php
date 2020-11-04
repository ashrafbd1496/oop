<?php 
	
	class Teacher{
		public function info()
		{
			echo "Teacher need to learn new things always";
		}

		public function University()
		{
			echo "University Name- Chittagong University";
		}




	}


	class Studnet2{


		public function age2(Teacher $tec) //here Teacher class used as typehinting
		
		{
			return $year2;
		}
	}

	$stu =new Studnet2;

	$tec= new Teacher;

	echo $stu ->age2($tec);

	


	

	/**

	class Studnet{

		public function age(float $year)
		//typehint make fix the data type by writing type inside the function parameter
		{
			return $year;
		}
	}

	$obj =new Studnet;

	echo $obj ->age(50);
	

*/