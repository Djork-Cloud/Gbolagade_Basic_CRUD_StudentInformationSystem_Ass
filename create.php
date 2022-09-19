<?php

if(count($_POST)>0) {
	require_once("connect.php");
	$sql = "INSERT INTO student (studentNo, lastname, firstname, middlename, gender, homeAddress, contactNo, course, department, year) VALUES 
	                            ('" . $_POST["studentNo"] . "','" . $_POST["lastname"] . "','" . $_POST["firstname"] . "','" . $_POST["middlename"] . "','" . $_POST["gender"] . "','" . $_POST["homeAddress"] . "','" . $_POST["contactNo"] . "','" . $_POST["course"] . "','" . $_POST["department"] . "','" . $_POST["year"] . "')";
	mysqli_query($conn,$sql);
	$current_id = mysqli_insert_id($conn);
		
	if(!empty($current_id)) {
		$message = "New Student Added Successfully!";
	}
	else{
		$message = "The student no. is already taken!";
	}			
}
?>

<html>
<head>
<title>Add New Student</title>
<link rel="stylesheet" type="text/css" href="_css\style.css"/>
</head>
<body>
	<center>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="right" style="padding-bottom:15px;"><a href="index.php" class="link"><img alt='List' title='List' src='_icon/read.png' width='16px' height='16px'/>Go Back Student Homepage</a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">

<tr class="tableheader">
<td colspan="2">Add New Student</td>
</tr>
<tr>
<td><label>Student No.</label></td>
<td><input type="text" name="studentNo" class="txtField"required></td>
</tr>
<tr>
<td><label>Last Name</label></td>
<td><input type="text" name="lastname" class="txtField" required></td>
</tr>
<td><label>First Name</label></td>
<td><input type="text" name="firstname" class="txtField"required></td>
</tr>
<td><label>Middle Name</label></td>
<td><input type="text" name="middlename" class="txtField"required></td>
</tr>
<td><label>Gender</label></td>
<td><input type ="radio" name="gender" value="Male"required> Male 
    <input type ="radio" name="gender" value="Female"> Female
</tr>
<td><label>Home Address</label></td>
<td><input type="text" name="homeAddress" class="txtField"required></td>
</tr>
<td><label>Contact No.</label></td>
<td><input type="text" name="contactNo" class="txtField"required></td>
</tr>
<td><label>Course</label></td>
<td><input type="text" name="course" class="txtField"required></td>
</tr>
<td><label>Department</label></td>
<td><input type="text" name="department" class="txtField"required></td>
</tr>
<td><label for="year">Year</label>
<td><select name="year" id="year">
  <option value="1">1st</option>
  <option value="2">2nd</option>
  <option value="3">3rd</option>
  <option value="4">4th</option>
</td></select>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Add New Student" class="btnSubmit"></td>
</tr>

</table>
</div>
</form>
</center>
</body>
</html>