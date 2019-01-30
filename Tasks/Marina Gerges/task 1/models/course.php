<?php
	include_once('database.php');

	class course extends Database{
		function __construct($id) {
			$sql = "SELECT * FROM courses WHERE id = $id;";
			$statement = Database::$db->prepare($sql);
			$statement->execute();
			$data = $statement->fetch(PDO::FETCH_ASSOC);
			if(empty($data)){return;}
			foreach ($data as $key => $value) {
				$this->{$key} = $value;
			}
		}

		public static function add($name,$max,$year) {
			$sql = "INSERT INTO courses (name,max_degree,study_year) VALUES ('$name','$max','$year')";
			Database::$db->prepare($sql)->execute();
		}
		
		public function delete() {
			$sql = "DELETE FROM courses WHERE id = $this->id;";
			Database::$db->query($sql);
		}

		public function save($name,$max,$year) {
			$sql = "UPDATE courses SET  name = '$name' ,max_degree = '$max' ,study_year = '$year' WHERE id = ? ;";
			Database::$db->prepare($sql)->execute([$this->id]);
		}

		public static function all($keyword) {
			$keyword = str_replace(" ", "%", $keyword);
			$sql = "SELECT * FROM courses WHERE name like ('%$keyword%');";
			$statement = Database::$db->prepare($sql);
			$statement->execute();
			$students = [];
			while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
				$students[] = new course($row['id']);
			}
			return $students;
		}
	}
?>