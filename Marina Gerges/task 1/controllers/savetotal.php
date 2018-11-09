<?php
	include_once("../controllers/common.php");
	include_once("../models/total.php");
	Database::connect('school', 'root', '');
	$id = safeGet("id", 0);
	if($id==0) {
		total::add(safeGet("student_name"),safeGet("course_name"),safeGet("degree"),safeGet("max_degree"),safeGet("examine_at"));
	} else {
		$student = new total($id);
		$student->student = safeGet("student_name");
		$student->course=safeGet("course_name");
		$student->degree=safeGet("degree");
		$student->max_degree=safeGet("max_degree");
		$student->examine_at=safeGet("examine_at");
		
		$student->save();
	}
	header('Location: ../totals.php');
?>