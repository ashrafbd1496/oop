<?php 
	
	spl_autoload_register(function ($class) {

		 require_once $class . '.php';

	    
	});





	// $stu = new App\Member\Admin;

	 $stu = new App\Stu\Student;

	echo $stu ->ourStudent();


	?>