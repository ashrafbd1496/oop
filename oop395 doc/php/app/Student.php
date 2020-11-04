<?php  



	/**
	 * Student Data managements 
	 */
	class Student extends DB
	{
		
		/**
		 * Student add to Database by Dua of Pritom 
		 */
		public function pritomVaiErDua($name, $email, $cell, $uname)
		{
			$sql = "INSERT INTO students (name, email, cell, uname) VALUES ('$name','$email','$cell','$uname')";
			$data = parent::dbConnection() -> query($sql);

			if ( $data ) {
				return "<p class=\" alert alert-success \"> Student added successfull  ! <button class=\" close \" data-dismiss=\"alert\">&times;</button></p>";
			}

		}



		/**
		 * Student data fetch
		 */
		public function pritomVaiErAsirbad()
		{
			$sql = "SELECT * FROM students";
			$data = parent::dbConnection() -> query($sql);

			return $data;
		}


		/**
		 * Student data delete by id
		 */
		public function pritomVaiErObisap($id)
		{
			$sql = "DELETE FROM students WHERE id='$id'";
			$data = parent::dbConnection() -> query($sql);


			if ( $data ) {
				return "<p class=\" alert alert-success \"> Data deleted successfull  ! <button class=\" close \" data-dismiss=\"alert\">&times;</button></p>";
			}
		}



		
	}









?>