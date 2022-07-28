<?php 
require_once "Database.php";


class Favourite{

public static function AddToFavourite($SM_ID,$U_ID){
		$database = Database::Get_Instance();
		
		try{
                            $query = "INSERT INTO favourite(SM_ID,U_ID)";
                            $query .=" VALUES(?,?)";
                           $connection = $database->Get_Connection();
                            $statement = $connection->prepare($query);
                            $statement->bindParam(1,$SM_ID);
                            $statement->bindParam(2,$U_ID);
                            $statement->execute(); 
                            	
                        }catch(PDOException $e)
                        {
                            echo"Connection Failed".$e->getMessage();
                        }


	}
	public static function RemoveFavourite($SM_ID,$U_ID){
		$database = Database::Get_Instance();
		
		try{
                            $query = "DELETE FROM favourite WHERE SM_ID = $SM_ID AND U_ID = $U_ID";
                           $connection = $database->Get_Connection();
                            $statement = $connection->prepare($query);
                            $statement->bindParam(1,$SM_ID);
                            $statement->bindParam(2,$U_ID);
                            $statement->execute(); 
                            	
                        }catch(PDOException $e)
                        {
                            echo"Connection Failed".$e->getMessage();
                        }


	}
	public static function ReadFavourite($U_ID){
		$database = Database::Get_Instance();
			try{
		
				//$query = "SELECT * FROM favourite where U_ID = ".$U_ID;
				$query = "SELECT s.ID ,s.S_NAME , s.INGREDIENT, s.DESCRIPTION, s.IMAGE FROM smoothies s ,favourite f where s.ID = f.SM_ID AND f.U_ID =".$U_ID;
				$database = Database::Get_Instance();
		    	$connection = $database->Get_Connection();
				$statement  = $connection->prepare($query);
				$statement->execute();
			
				$result = $statement->fetchAll(PDO::FETCH_ASSOC); 
			
			return $result;
			
		}catch(PDOException $e){
			echo "Query Failed : ".$e->getMessage();
		}	
		


	}
	public static function IsFavorite($SM_ID,$U_ID){
	
			
		
		try{
			$query = "SELECT count(*) FROM favourite WHERE SM_ID = '$SM_ID' AND U_ID = '$U_ID'";
            
			$database = Database::Get_Instance();
			$connection = $database->Get_Connection();
			$stmt = $connection->prepare($query);	
			$stmt->execute();
			$result = $stmt->fetch(PDO::FETCH_ASSOC);
			
					
				return $result['count(*)'];

			
			
			
			
		}catch(PDOException $e){
			echo "Query Failed ".$e->getMessage();
		}
	}
    
}
?>