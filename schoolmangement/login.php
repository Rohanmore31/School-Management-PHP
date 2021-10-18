<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
<style>
	body {
  background-image: url('school1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
<body>
	<center><br><br>
		<h3><div class="p-3 mb-2 bg-light text-dark">School Management System</div></h3>
		<form action="" method="post">
		<input type="submit"  class="btn btn-outline-primary" name="admin_login" value="Admin_login">
		<input type="submit"  class="btn btn-outline-primary" name="student_login" value="student_login">
		</form>
		<?php 
		    if(isset($_POST['admin_login'])){
		    	header("Location: admin_login.php");
		    }
		     if(isset($_POST['student_login'])){
		    	header("Location: student_login.php");
		    }
		?>
	</center>
</body>
</html>