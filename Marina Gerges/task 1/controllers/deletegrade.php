<?php
	header('Content-Type: application/json; charset=utf-8');
	include_once("../models/grade.php");
	Database::connect('school', 'root', '');
	$student = new grade($_GET['id']);
	$student->delete();
	echo json_encode(['status'=>1]);
?>