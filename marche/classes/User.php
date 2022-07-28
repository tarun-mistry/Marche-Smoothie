<?php
require_once "Database.php";
class User{
	private static $database;
	private $ID;
	private $First_Name;
	private $Last_Name;
	private $Contact_Number;
	private $Email;
	private $Password;
	private $Address1;
	private $Address2;
	private $City;
	private $Province;
	private $Postalcode;
	
	

	function __construct($first_Name,$last_Name,$contact_number,$email,$password,$address1, $address2, $city, $province, $postalcode){
	//$this->ID = $id;
	$this->First_Name = $first_Name;
	$this->Last_Name = $last_Name;
	$this->Contact_Number= $contact_number;
	$this->Email=$email;
	$this->Password=$password;
	$this->Address1=$address1;
	$this->Address2= $address2;
	$this->City= $city;
	$this->Province=$province;
	$this->Postalcode= $postalcode;

	
	}

	public static function Get_ID($email){
		try{
			
			$query = "SELECT * FROM users WHERE EMAIL = '$email' ";
			
			$database = Database::Get_Instance();
			$connection = $database->Get_Connection();
			$statement = $connection->prepare($query);
			$statement->execute();
			$result = $statement->fetch(PDO::FETCH_ASSOC);
			return $result['ID'];
			
		}catch(PDOException $e){
			echo "SELECT Query Failed : ".$e->getMessage();
		}
	}
	public static function Get_NAME($email){
		try{
			
			$query = "SELECT * FROM users WHERE EMAIL = '$email' ";
			
			$database = Database::Get_Instance();
			$connection = $database->Get_Connection();
			$statement = $connection->prepare($query);
			$statement->execute();
			$result = $statement->fetch(PDO::FETCH_ASSOC);
			return $result['F_NAME'];
			
		}catch(PDOException $e){
			echo "SELECT Query Failed : ".$e->getMessage();
		}
	}
	public static function Email_Contact_Exists($Email,$Contact_Number){
			try{
			$database = Database::Get_Instance();
		   

			$query = "SELECT * FROM users WHERE EMAIL = '$Email' and CONTACT_NO = '$Contact_Number'";
		
		     $connection = $database->Get_Connection();
			$statement  = $connection->prepare($query);
			$statement->execute();
				
			$result = $statement->fetch(PDO::FETCH_ASSOC);
				
			if(!empty($result['ID'])){
					
				return true;
			}
			return false;
	}catch(PDOException $e){
			echo "Update Query Failed : ".$e->getMessage();
		}
}
public static function Update_Password($Email, $Password){

		try{

			
			$query="Update users SET PASSWORD ='$Password'";
			$query .="WHERE EMAIL='$Email'";
			$database = Database::Get_Instance();
		    $connection = $database->Get_Connection();
		
			$connection->exec($query);
		

		}catch(PDOException $e){
			echo "UPDATE Query Failed : ".$e->getMessage();
		}
	}
	public function Register_User(){
		
			$database = Database::Get_Instance();
		try{
                            $query = "INSERT INTO users(F_NAME, L_NAME,CONTACT_NO,EMAIL,PASSWORD,ADDRESS1,ADDRESS2,CITY,PROVINCE,POSTAL_CODE)";
                            $query .=" VALUES(?,?,?,?,?,?,?,?,?,?)";
                           $connection = $database->Get_Connection();
                            $statement = $connection->prepare($query);
                            $statement->bindParam(1,$this->First_Name);
                            $statement->bindParam(2,$this->Last_Name);
                            $statement->bindParam(3,$this->Contact_Number);
                            $statement->bindParam(4,$this->Email);
                            $statement->bindParam(5,$this->Password);
                            $statement->bindParam(6,$this->Address1);
                            $statement->bindParam(7,$this->Address2);
                            $statement->bindParam(8,$this->City);
                            $statement->bindParam(9,$this->Province);
                            $statement->bindParam(10,$this->Postalcode);
                         

                            $statement->execute();
                            
                          
        
                        }
                        catch(PDOException $e)
                        {
                            echo"Connection Failed".$e->getMessage();
                        }
		
	}
	
	public static function Login_User($Email , $Password){
		try{
		
			$query = "SELECT * FROM users WHERE EMAIL = '$Email'";
		
			$database = Database::Get_Instance();
		    $connection = $database->Get_Connection();
			$statement  = $connection->prepare($query);
			$statement->execute();
			
			$result = $statement->fetch(PDO::FETCH_ASSOC);
			if($Password == $result['PASSWORD']){
				return true;
			}
	
			return false;
			
		}catch(PDOException $e){
			echo "SELECT Query Failed : ".$e->getMessage();
		}	
	}



}

?>