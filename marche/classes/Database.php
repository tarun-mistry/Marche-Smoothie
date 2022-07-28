<?php

$HOST = 'localhost';
$DB = 'marche_smoothie_db';
$USER = 'root';
$PASSWORD = '';

class Database{
	private $Connection;

//step 1
	private static $instance;
//step 2
	private function Database(){
	
		$this->Open_Connection();
	}
	
	public static function Get_Instance(){

		if(!isset(self::$instance)){

			self::$instance = new Database();
		}
		return self::$instance;
	}
    	
    public function Close_Connection(){
		$this->Connection = NULL;
	}
	public function Get_Connection(){

		return $this->Connection;
	}
	public function Open_Connection(){
		global $USER, $PASSWORD,$DB,$HOST;
		try{
				$this->Connection = new PDO("mysql:host=$HOST;dbname=$DB", $USER, $PASSWORD);
				$this->Connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(PDOException $e){

			echo " Connection failed ".$e->getMessage();
		}	
	}
}
?>