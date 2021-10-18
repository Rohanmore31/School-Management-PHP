<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"schoolmanagement");
	$query = "INSERT INTO `students`(`roll_no`, `name`, `subject`, `class`, `teacher`, `email`, `password`, `remarks`) VALUES('$_POST[roll_no]', '$_POST[name]', '$_POST[subject]',  '$_POST[class]', '$_POST[teacher]', '$_POST[email]', '$_POST[password]', '$_POST[remarks]')";
    $query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Student added successfully.");
	window.location.href = "student_dashboard.php";
</script>
