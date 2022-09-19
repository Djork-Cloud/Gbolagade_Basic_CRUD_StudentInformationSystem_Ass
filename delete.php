<?php
require_once("connect.php");
$sql = "DELETE FROM student WHERE userID='" . $_GET["userID"] . "'";
mysqli_query($conn,$sql);
header("Location:index.php");
?>