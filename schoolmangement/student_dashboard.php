<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<style type="text/css">
		#header{
			height: 10%;
			width: 100%;
			top: 2%;
			background-color: black;
			position: fixed;
			color: white;
		}
		#left_side{
			height: 75%;
			width: 15%;
			top: 10%;
			position: fixed;
		}
		#right_side{
			height: 75%;
			width: 80%;
			background-color: whitesmoke;
			position: fixed;
			left: 17%;
			top: 21%;
			color: red;
			border: solid 1px black;
		}
		#top_span{
			top: 15%;
			width: 80%;
			left: 17%;
			position: fixed;
		}
		#td{
			border: 1px solid black;
			padding-left: 2px;
			text-align: left;
			width: 200px;
		}
		#button{

		}
	</style>
<body>
<?php
		session_start();
		$name = "";
        $connection = mysqli_connect("localhost","root","");
	    $db = mysqli_select_db($connection,"schoolmanagement");
	?>
</head>
<body>
	<div id="header"><br>
		<center>Student Management System &nbsp;&nbsp;&nbsp;Student Panel
		<a href="logout.php">Logout</a>
		</center>
	</div>
	<span id="top_span"><marquee>Note:- Welcome to School Management.</marquee></span>
	<div id="left_side">
		<br><br><br>
		<form action="" method="post">
			<table><br><br><br><br>
				<tr>
					<td>
						<input type="submit"   style="width: 100%" class="btn btn-outline-info" name="edit_student" value="Edit Student"><br></br>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit"  style="width: 100%" class="btn btn-outline-success" name="add_new_student" value="Add New Student"><br></br>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit"  style="width: 100%" class="btn btn-outline-danger" name="delete_student" value="Delete Student"><br></br>
					</td>
				</tr>
			</table>
		</form>
	</div>
	<div id="right_side"><br><br>
		<div id="demo">
            <?php
			if(isset($_POST['edit_student']))
			{
				?>
				<center>
				<form action="" method="post">
				&nbsp;&nbsp;<b>Enter Roll No:</b>&nbsp;&nbsp; <input type="text" name="roll_no">
				<input type="submit" name="search_by_roll_no_for_edit" value="Search">
				</form><br><br>
				<h4><b><u>Student's details</u></b></h4><br><br>
				</center>
                <?php 
$username = "root"; 
$password = ""; 
$database = "schoolmanagement"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM students";


echo '<table id="listTable" style="border-collapse: collapse;border: 1px solid black;">
      <tr> 
          <td id="td"><b>Roll_no</b></td> 
          <td id="td"><b>Name</b></td> 
          <td id="td"><b>Subject</b></td> 
          <td id="td"><b>Class</b></td> 
          <td id="td"><b>Teacher</b></td> 
          <td id="td"><b>Email</b></td> 
          <td id="td"><b>Password</b></td> 
          <td id="td"><b>Remarks</b></td> 
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $Roll_no = $row["roll_no"];
        $Name = $row["name"];
        $Subject = $row["subject"];
        $Class = $row["class"];
        $Teacher = $row["teacher"]; 
        $Email = $row["email"]; 
        $Password = $row["password"]; 
        $Remarks = $row["remarks"]; 

        echo '<tr> 
                  <td>'.$Roll_no.'</td> 
                  <td>'.$Name.'</td> 
                  <td>'.$Subject.'</td> 
                  <td>'.$Class.'</td> 
                  <td>'.$Teacher.'</td> 
                  <td>'.$Email.'</td>
                  <td>'.$Password.'</td>
                  <td>'.$Remarks.'</td>   
              </tr>';
    }
    $result->free();
} 
?>
				<?php
			}
			if(isset($_POST['search_by_roll_no_for_edit']))
			{
				$query = "select * from students where roll_no = $_POST[roll_no]";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					?>
					<form action="student_edit.php" method="post">
						<table>
						<tr>
							<td>
								<b>Roll No:</b>
							</td> 
							<td>
								<input type="text" name="roll_no" value="<?php echo $row['roll_no']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Name:</b>
							</td> 
							<td>
								<input type="text" name="name" value="<?php echo $row['name']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Subject:</b>
							</td> 
							<td>
								<input type="text" name="subject" value="<?php echo $row['subject']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Class:</b>
							</td> 
							<td>
								<input type="text" name="class" value="<?php echo $row['class']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Teacher:</b>
							</td> 
							<td>
								<input type="text" name="teacher" value="<?php echo $row['teacher']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Email:</b>
							</td> 
							<td>
								<input type="text" name="email" value="<?php echo $row['email']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Password:</b>
							</td> 
							<td>
								<input type="password" name="password" value="<?php echo $row['password']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Remark:</b>
							</td> 
							<td>
								<textarea rows="3" cols="40" name="remarks"><?php echo $row['remarks']?></textarea>
							</td>
						</tr><br>
						<tr>
							<td></td>
							<td>
								<input type="submit" name="edit" value="Save">
							</td>
						</tr>
					</table>
					</form>
					<?php
				}
			}
		?>
		<?php
			if(isset($_POST['delete_student']))
			{
				?>
				<center>
				<form action="student3.php" method="post">
				&nbsp;&nbsp;<b>Enter Roll No:</b>&nbsp;&nbsp; <input type="text" name="roll_no">
				<input type="submit" name="search_by_roll_no_for_delete" value="Delete">
				</form><br><br>
				</center>
				<?php
			}
			?>

			<?php 
				if(isset($_POST['add_new_student'])){
					?>
					<center><h4>Fill the given details</h4></center>
					<form action="student_add.php" method="post">
						<table>
						<tr>
							<td>
								<b>Roll No:</b>
							</td> 
							<td>
								<input type="text" name="roll_no" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Name:</b>
							</td> 
							<td>
								<input type="text" name="name" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Subject:</b>
							</td> 
							<td>
								<input type="text" name="subject" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Class:</b>
							</td> 
							<td>
								<input type="text" name="class" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Teacher:</b>
							</td> 
							<td>
								<input type="text" name="teacher" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Email:</b>
							</td> 
							<td>
								<input type="email" autocomplete="off" name="email" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Password:</b>
							</td> 
							<td>
								<input type="password" name="password" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Remark:</b>
							</td> 
							<td>
								<textarea rows="3" cols="40" placeholder="Optional" name="remarks"></textarea>
							</td>
						</tr>
						<tr>
							<td></td>
							<td><br><input type="submit" name="add" value="Add Student"></td>
						</tr>
					</table>
					</form>
					<?php
				}
			?>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
	<script>
		$(".showTable").click(function() {
			// $("#listTable").show();
		})
	</script>
</body>
</html>