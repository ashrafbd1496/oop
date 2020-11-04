<?php 
		
		namespace App\Stu;

		//if we want to extends Teacher class we need to use like below
		use App\Member\Teacher;
		


	/**
	 * 
	 */
	class User extends Teacher
	{
		
		public function usr()
		{
			return parent :: mathTeacher();
		}
	}





