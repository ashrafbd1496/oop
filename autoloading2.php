<?php 
	
	spl_autoload_register(function ($class) {

		 require_once $class . '.php';

	    
	});




	use App\Stu\Student;
	use App\Stu\User;

	// $stu = new App\Member\Admin;

	$stu = new Student;
	$ur = new User;

	$stu ->ourStudent();

	echo "<hr>";

	$ur ->usr();


	?>