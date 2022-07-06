
<?php 
// this code is for redirecting to different pages if the credentials are correct.
   session_start();
   include "db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   
         //admin
      	if ($_SESSION['role'] == 'admin'){
			header("Location: pages/admin.php");
      	 }
		 //teacher
		 else if ($_SESSION['role'] == 'teacher'){ 
			header("Location: pages/teacher.php");
      	} 
		//student
		  else if ($_SESSION['role'] == 'student'){ 
			header("Location: pages/student.php");	
		}
		//parent
		else if ($_SESSION['role'] == 'parent'){ 
			header("Location: pages/parent.php");
		}
 }
else{
	header("Location:login-index.php");
} ?>
