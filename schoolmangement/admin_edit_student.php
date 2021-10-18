<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"schoolmanagement");
    try{
        $roll_no = $_POST['roll_no'];
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $class = $_POST['class'];
        $teacher=$_POST['teacher'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $remarks=$_POST['remarks'];
        $roll_no =$_POST['roll_no'];
    
		$sql = "UPDATE students SET name = '$name', subject = '$subject',class = '$class',teacher = '$teacher',email = '$email',password = '$password',remarks = '$remarks' WHERE roll_no = '$roll_no'";
		if($sql = mysqli_query($connection,$sql)){
			$output['message'] = 'Member updated successfully';
		} 
		else{
			$output['error'] = true;
			$output['message'] = 'Something went wrong. Cannot update member';
		}
    }
    catch(PDOException $e){
		$output['error'] = true;
		$output['message'] = $e->getMessage();
	}

?>
<script type="text/javascript">
	alert("Details edited successfully.");
	window.location.href = "admin_dashboard.php";
</script> 
