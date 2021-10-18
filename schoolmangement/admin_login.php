<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
<style>
	body {
  background-image: url('desk.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
<body>
	<center><br><br>
		<h3><div class="p-3 mb-2 bg-light text-dark">Admin login Page</div></h3>
		<form action="" method="post">
        <h1>Email:<input type="text" name="email" required="email"><br><br>
		Password:<input type="text" name="password" required="password"><br><br>
		<input type="submit" name="submit">
</h1>
		</form><br>
		<?php 
		session_start();
		$email = "";
		$password = "";
		    if(isset($_POST['submit'])){
		        $connection = mysqli_connect("localhost","root","");
		        $db = mysqli_select_db($connection,"schoolmanagement");
		        $query = " select * from login where email = '$_POST[email]'";
		        $query_run = mysqli_query($connection,$query);
		        while($row = mysqli_fetch_assoc($query_run)){
					if($row['email'] == $_POST['email']){
						if($row['password'] == $_POST['password']){
                            $_SESSION['email'] == $row['email'];
							$_SESSION['name'] == $row['name']; 
							header("Location: admin_dashboard.php");
							echo "Login was Successful";
						}else{
							echo "UNAUTHORISED USER";
						}
					}
		    
	           } 
            } 
		?>
	</center>
</body>
</html>