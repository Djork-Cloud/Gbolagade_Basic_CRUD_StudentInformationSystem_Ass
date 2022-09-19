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

<body style="background-image: url('back.jpg');">
    <center>
<h1>Student Information System (Basic CRUD Application)</h1>
<form name="frmUser" method="post" action="">
<div style="width:877px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="left" style="padding-bottom:1;"><a href="create.php" class="link"><img alt='Add' title='Add' src='_icon/add.png' width='16px' height='16px'/>Add/Create New Student</a></div>
<div align="right" style="padding-bottom:20px;"><a href="view.php" class="link"><img alt='Add' title='Add' src='_icon/update.png' width='16px' height='16px'/>View/Read Students List</a></div>
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
<td>Actions</td>
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
<td><a href="update.php?userID=<?php echo $row["userID"]; ?>" class="link"><img alt='Update' title='Update' src='_icon/update.png' width='15px' height='15px' hspace='10'/>UPDATE</a>
    <a href="delete.php?userID=<?php echo $row["userID"]; ?>"  class="link"><img alt='Delete' title='Delete' src='_icon/delete.png' width='15px' height='15px'hspace='10'/>DELETE</a>
</td>
</tr>

<?php
$i++;
}
?>

</table>
</form>
</div>
</center>
<footer>
   <marquee> <p style="font-weight:bold;"> Developed By: GBOLAGADE HALIMAH ADEWUMI - HC20200202881 - HND II - DPT || Computer Science Department || The Federal Polytechnic Ede || Osun State </p> </marquee>
   
</footer>
</body>

</html>