<?php
	header('Content-Type: application/json; charset=utf-8');
	include_once("../models/course.php");
	Database::connect('school', 'root', '');
	$student = new course($_GET['id']);
	$student->delete();
	echo json_encode(['status'=>1]);
?>