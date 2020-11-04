<?php 
	
	interface StudentInterface{

		public function teacher();

		public function school();
	
	} 


	interface StaffInterface{

		public function work($job_name,$post);
		
	}