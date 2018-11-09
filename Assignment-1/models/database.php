<?php
	class Database {
		protected static $db = null;
		
		public static function connect($database, $uid, $pwd) {
			if(!empty(Database::$db)) return;

			$dsn = "mysql:host=sql108.epizy.com;dbname=$database";
			
			try {
		   		Database::$db = new PDO($dsn, $uid, $pwd);
			} catch(PDOException $e){
		   		echo $e->getMessage();
			}
		}

		public function get($field) {
			if(isset($this->{$field}))
				return $this->{$field};
			return null;
		}
	}
?>