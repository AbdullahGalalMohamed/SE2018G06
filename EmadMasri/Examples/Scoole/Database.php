<?php
	
	 class DataBase 
	 {
	 	protected static $db=null;
	 	public function Connect ($database)
	 	{
	 		if(!empty(DataBase::$db)) 
	 			return;
	 		$dsn="mysql:host=localhost;dbname=$database";
	 		try {
	 			DataBase::$db=new PDO($dsn,"root","");
	 			
	 		} catch (Exception $e) {
	 			echo $e->getMassge();
	 			
	 		}
	 	}
	 } 

?>