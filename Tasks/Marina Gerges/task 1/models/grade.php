<?php
	include_once('database.php');

	class grade extends Database{
		function __construct($id) {
			$sql = "SELECT * FROM grades WHERE id = $id;";
			$statement = Database::$db->prepare($sql);
			$statement->execute();
			$data = $statement->fetch(PDO::FETCH_ASSOC);
			if(empty($data)){return;}
			foreach ($data as $key => $value) {
				$this->{$key} = $value;
			}
		}
		
		public static function add($student_id	,$course_id	,$degree ,$examine_at) {
			$sql = "INSERT INTO grades(student_id,course_id,degree,examine_at) VALUES ('$student_id','$course_id','$degree','$examine_at')";
			Database::$db->prepare($sql)->execute();
		}
		
		public function delete() {
			$sql = "DELETE FROM grades WHERE id = $this->id;";
			Database::$db->query($sql);
		}

		public function save() {
			$sql = "UPDATE grades SET student_id=?,course_id=?,degree=? ,examine_at=? WHERE id = ?;";
			Database::$db->prepare($sql)->execute([$this->student_id,$this->course_id,$this->degree,$this->examine_at,$this->id]);
		}

		public static function all($keyword) {
			$keyword = str_replace(" ", "%", $keyword);
			$sql = "SELECT * FROM grades WHERE id like ('%$keyword%');";
			$statement = Database::$db->prepare($sql);
			$statement->execute();
			$students = [];
			while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
				$students[] = new grade($row['id']);
			}
			return $students;
		}
	}
?>