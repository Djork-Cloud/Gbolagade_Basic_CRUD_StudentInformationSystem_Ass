<?php
require_once("connect.php");

if(count($_POST)>0) {
	$sql = "UPDATE student set studentNo='" . $_POST["studentNo"] . "', lastname='" . $_POST["lastname"] . "', firstname='" . $_POST["firstname"] . "', middlename='" . $_POST["middlename"] . "', gender='" . $_POST["gender"] . "', homeAddress='" . $_POST["homeAddress"] . "', contactNo='" . $_POST["contactNo"] . "', course='" . $_POST["course"] . "', department='" . $_POST["department"] . "', year='" . $_POST["year"] . "' WHERE userID='" . $_GET["userID"] . "'";
	mysqli_query($conn,$sql);
	$message = "Record Modified Successfully!";
}

$select_query = "SELECT * FROM student WHERE userID='" . $_GET["userID"] . "'";
$result = mysqli_query($conn,$select_query);
$row = mysqli_fetch_array($result);
?>

<html>
<head>
<title>Update Student Information</title>
<link rel="stylesheet" type="text/css" href="_css/style.css"/>
</head>

<body>
  <center>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="right" style="padding-bottom:15px;"><a href="index.php" class="link"><img alt='List' title='List' src='_icon/read.png' width='16px' height='16px'/>Go Back Student Homepage</a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">

<tr class="tableheader">
<td colspan="2">Update New Student Information</td>
</tr>
<tr>
<td><label>Student No.</label></td>
<td><input type="text" name="studentNo" class="txtField" readonly value="<?php echo $row['studentNo']; ?>"></td>
</tr>
<tr>
<td><label>Last Name</label></td>
<td><input type="text" name="lastname" class="txtField" value="<?php echo $row['lastname']; ?>"></td>
</tr>
<td><label>First Name</label></td>
<td><input type="text" name="firstname" class="txtField" value="<?php echo $row['firstname']; ?>"></td>
</tr>
<td><label>Middle Name</label></td>
<td><input type="text" name="middlename" class="txtField" value="<?php echo $row['middlename']; ?>"></td>
</tr>
<td><label for="gender">Gender</label>
<td><select name="gender">
  <option <?php if($row['gender']=="Male"){echo "selected";}?>>Male</option>
  <option <?php if($row['gender']=="Female"){echo "selected";}?>>Female</option>
</td></select>
<tr>
<td><label>Home Address</label></td>
<td><input type="text" name="homeAddress" class="txtField" value="<?php echo $row['homeAddress']; ?>"></td>
</tr>
<td><label>Contact No.</label></td>
<td><input type="text" name="contactNo" class="txtField"value="<?php echo $row['contactNo']; ?>"></td>
</tr>
<td><label>Course</label></td>
<td><input type="text" name="course" class="txtField" value="<?php echo $row['course']; ?>"></td>
</tr>
<td><label>Department</label></td>
<td><input type="text" name="department" class="txtField" value="<?php echo $row['department']; ?>"></td>
</tr>
<td><label for="year">Year</label>
<td><select name="year">
  <option <?php if($row['year']=="1"){echo "selected";}?>>1st</option>
  <option <?php if($row['year']=="2"){echo "selected";}?>>2nd</option>
  <option <?php if($row['year']=="3"){echo "selected";}?>>3rd</option>
  <option <?php if($row['year']=="4"){echo "selected";}?>>4th</option>
</td></select>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Update Student Information" class="btnSubmit"></td>
</tr>

</table>
</div>
</form>
</center>
</body>
</html>