<?php
require_once("connect.php");
$sql = "SELECT * FROM student ORDER BY userID DESC";
$result = mysqli_query($conn,$sql);
?>

<html>
<head>
<title>Student Information System</title>
<link rel="stylesheet" type="text/css" href="_css/style.css"/>
</head>

<body>
    <center>
<h1>Student Information System (Basic CRUD Application)</h1>
<form name="frmUser" method="post" action="">
<div style="width:877px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="left" style="padding-bottom:1; font-weight:bold;"><a href="index.php" class="link"><img alt='' title='Add' src='' width='16px' height='16px'/> Click to Return Home</a></div>
<p align="center" style="font-weight:bold;"> Students Information List </P>

<form class="form-inline" method="POST" action="index.php">
				<div class="input-group col-md-12" style="padding-bottom:15px; width:500px;">
					<input type="text" class="form-control" placeholder="Search Students List Here..." name="keyword" required="required" value="<?php echo isset($_POST['keyword']) ? $_POST['keyword'] : '' ?>"/>

				</div>
			</form>
<table border="0" cellpadding="15" cellspacing="1" width="740px" class="tblListForm">

<tr class="listheader">
<td>Student No.</td>
<td>Last Name</td>
<td>First Name</td>
<td>Middle Name</td>
<td>Gender</td>
<td>Home Address</td>
<td>Contact No.</td>
<td>Course</td>
<td>Department</td>
<td>Year</td>
</tr>

<?php
$i=0;
while($row = mysqli_fetch_array($result)){
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>

<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["studentNo"]; ?></td>
<td><?php echo $row["lastname"]; ?></td>
<td><?php echo $row["firstname"]; ?></td>
<td><?php echo $row["middlename"]; ?></td>
<td><?php echo $row["gender"]; ?></td>
<td><?php echo $row["homeAddress"]; ?></td>
<td><?php echo $row["contactNo"]; ?></td>
<td><?php echo $row["course"]; ?></td>
<td><?php echo $row["department"]; ?></td>
<td><?php echo $row["year"]; ?></td>
</tr>

<?php
$i++;
}
?>

</table>
</form>
</div>
</center>
</body>

</html>