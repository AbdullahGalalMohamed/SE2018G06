<?php
include_once 'Database.php';
/**
 * 
 */
class Student extends Database
{
	
	function __construct($id)
	{
		$sql="SELECT * FROM student WHERE ID=$id ;";
		$statement=Database::$db->prepare($sql);
		$statement->execute();
		$data=$statement->fetch(PDO::FETCH_ASSOC);
		foreach ($data as $key => $value) {
		 	$this->{$key} = $value;
		 } 
		 
	}

	
	public function all()
	{
		$statement = Database::$db->prepare("SELECT ID FROM student;");
	$statement->execute();
	$students = [];
	while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
		$students[] = new Student($row['ID']);
	}
	return $students;
	}
	public function SelectData($NameStudent)
	{
		$statement=Database::$db->prepare("SELECT * FROM student WHERE Name like ('$NameStudent');");
		$statement->execute();
		$students=[];
		while ($row=$statement->fetch(PDO::FETCH_ASSOC)) {
			$students=new Student($row['ID']);		
		}
			return $students;
	}
	public function AddStudent($Name){
		$statement=Database::$db->prepare("INSERT INTO `student` (`ID`, `Name`) VALUES (NULL, '$Name') ;");
		$statement->execute();
	}

	public function DeletStudent($Name){
		$statement=Database::$db->prepare("DELETE FROM `student` WHERE `student`.`Name` = '$Name' ;") ;
		$statement->execute();
	}

}
 
?>