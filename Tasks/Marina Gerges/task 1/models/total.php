<?php
	include_once('database.php');

	class total extends Database{
		

		public static function all($keyword) {
			$keyword = str_replace(" ", "%", $keyword);
			$sql = " SELECT students.id as id,courses.id as idcourse,grades.id as idgrade,students.name as student, courses.name as course,grades.degree as     					degree, courses.max_degree as max_degree, grades.examine_at as examine_at  FROM grades  JOIN students ON students.id =         	         				grades.student_id JOIN courses ON courses.id =   grades.course_id WHERE students.id like('%$keyword%');";	 
			
			$statement = Database::$db->prepare($sql);
			$statement->execute();
			$students = [];
			while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
				$students[] = (object)$row;
			}
			return $students;
		}
		
	}
?>