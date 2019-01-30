<?php
	include_once("../controllers/common.php");
	include_once("../models/course.php");
	Database::connect('school', 'root', '');
	$id = safeGet("id",0);
	if($id==0) {
		course::add(safeGet("name"),safeGet("max_degree"),safeGet("study_year"));
	} else {
		$student = new course($id);
		$student->save(safeGet("name"),safeGet("max_degree"),safeGet("study_year"));
	}
	header('Location: ../courses.php');
?>