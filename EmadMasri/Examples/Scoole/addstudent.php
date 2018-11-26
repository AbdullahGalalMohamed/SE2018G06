<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="get">
	<input type="text" name="name1" >
	<input type="submit" value="Add">
</form>
<?php 
include_once("student.php");
	DataBase::Connect("school");
	
	student::AddStudent($_GET["name1"]);
 ?>
</body>
</html>
