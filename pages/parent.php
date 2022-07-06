<?php 
   session_start();
   include "../db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
      <div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">
      
      		<!-- For Admin -->
      		<div class="card" style="width: 18rem;">
			  <div class="card-body text-center">
			    <h5 class="card-title">
                    name: <?=$_SESSION['name']?>
                    </br></br>
                    role: <?=$_SESSION['role']?>
			    </h5>
			    <a href="../logout.php" class="btn btn-dark">Logout</a>
			  </div>
			</div> 
      </div>
</body>
</html>
<?php }else{
	header("Location: ../login-index.php");
} ?>