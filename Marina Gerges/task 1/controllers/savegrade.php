<?php
	include_once("../controllers/common.php");
	include_once("../models/grade.php");
	Database::connect('school', 'root', '');
	$id = safeGet("id", 0);
	if($id==0) {
		grade::add(safeGet("student_id"),safeGet("course_id"),safeGet("degree"),safeGet("examine_at"));
	} else {
		$student = new grade($id);
		$student->student_id = safeGet("student_id");
		$student->course_id  =safeGet("course_id");
		$student->degree     =safeGet("degree");
		$student->examine_at =safeGet("examine_at");
		
		$student->save();
	}
	header('Location: ../grades.php');
?>