
<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"schoolmanagement");
	$query = "INSERT INTO `teachers`(`name`, `mobile`, `subjects`) VALUES( '$_POST[name]', '$_POST[mobile]',  '$_POST[subject]')";
	//   echo $query;die();
    $query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("New Subject added successfully.");
	window.location.href = "admin_dashboard.php";
</script>
