<?php 
require_once "Database.php";

class Smoothie{
	
	
	private $ID;
	private $S_NAME;
	private $INGREDIENT;
	private $DESCRIPTION;
	private $IMAGE;
	
	function smoothie($s_name, $ingredient, $description, $image, $id = NULL)
	{
		$this->S_NAME  = $s_name;		
		$this->INGREDIENT = $ingredient;
		$this->DESCRIPTION = $description;
		$this->IMAGE = $image;
		$this->ID = $id;
	}
	
	public static function Get_ID($id){
		try{
			
			$query = "SELECT * FROM smoothies WHERE ID = '$id' ";
			
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
	
	public function Insert(){
		try{
			
			$query = "INSERT INTO smoothies(S_NAME, INGREDIENT, DESCRIPTION, IMAGE)";
			$query .= " VALUES(?,?,?,?)";
			
		    $database = Database::Get_Instance();
			$connection = $database->Get_Connection();
			$statement  = $connection->prepare($query);
			$statement->bindParam(1, $this->S_NAME);
			$statement->bindParam(2, $this->INGREDIENT);
			$statement->bindParam(3, $this->DESCRIPTION);
			$statement->bindParam(4, $this->IMAGE);
			
			$statement->execute();
			
		}catch(PDOException $e){
			echo "INSERT Query Failed : ".$e->getMessage();
		}	
	}
	
	public function Update($id){
		try{
			
			//$query = " UPDATE smoothies SET S_NAME='".$S_NAME."', INGREDIENT='".$INGREDIENT."', DESCRIPTION='".$DESCRIPTION."', IMAGE='".$IMAGE."' ";
			//$query .= " WHERE ID = '".$id."' ";
			$query = " UPDATE smoothies SET S_NAME= ? , INGREDIENT= ? , DESCRIPTION= ? , IMAGE= ? WHERE ID = $id ";
		    $database = Database::Get_Instance();
			$connection = $database->Get_Connection();
			$statement  = $connection->prepare($query);
			$statement->bindParam(1, $this->S_NAME);
			$statement->bindParam(2, $this->INGREDIENT);
			$statement->bindParam(3, $this->DESCRIPTION);
			$statement->bindParam(4, $this->IMAGE);
			
			$statement->execute();
			
		}catch(PDOException $e){
			echo "INSERT Query Failed : ".$e->getMessage();
		}	
	}
	
	
	public static function ReadSmoothies(){
		
		try{
		
			$query = "SELECT * FROM smoothies";
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
	
	public static function ReadSmoothiesEdit($id){
		
		try{
		
			$query = "SELECT * FROM smoothies WHERE ID = '$id' ";
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
	
	 public static function DeleteSmoothies($ID){
	
		try{
			$query = "Delete FROM smoothies WHERE ID = $ID";
			$database = Database::Get_Instance();
			$connection = $database->Get_Connection();
			$statement  = $connection->prepare($query);
			$statement->execute();
			//$connection->exec($query);
			
		}catch(PDOException $e){
			echo "Delete Query Failed ".$e->getMessage();
		}
	}
	
	 public static function Display_Delete_Form($ID){
        echo "<form action = '#' method = 'POST'>";
			echo "<input type = 'hidden' name= 'ID' value =".$ID." >";
			//echo "<button type ='submit' name = 'Delete' class='btn btn-danger'><span class='fa fa-trash'></span></button>";
			  echo "<button type ='submit' name = 'delete' class='btn btn-push btn-danger btn-xs' value =".$ID."><span class='fa fa-backspace'></span></button>";
        echo "</form>";
	}
	
	public static function Get_Images($array){
		$images = array();
		foreach($array as $row){
			array_push($images, $row['IMAGE']);
		}
		return $images;		
	}	
	
	public static function Display($array){
		//echo "<div class='table-responsive mb-20'>";
		echo "<table border = '0' class='table table-sm table-responsive table-hover'>";
			echo "<thead class='thead-dark text-center justify'>";
				echo "<tr>";
					echo "<th>ID</th>";
                    echo "<th>Smoothie Name</th>";
					echo "<th>Ingredient</th>";
					echo "<th>Description</th>";
					echo "<th>Image</th>";
					// echo "<th>View</th>";
					echo "<th>Edit</th>";
					echo "<th>Delete</th>";
				echo "</tr>";
            echo "</thead>";
			
		foreach($array as $row){
			
			echo "<tr>";
				echo "<td>";
					echo "<font color = #CC0000>";
						echo "<h6>". $row['ID']."</h6>";
				echo "</td>";
				
				echo "<td>";
					echo "<font color = #CC0000>";
						echo "<h6>". $row['S_NAME']."</h6>";
				echo "</td>";
				
				echo "<td>";
						echo "<h6>". $row['INGREDIENT']."</h6>";
					echo "</font>";
				echo "</td>";
				
				echo "<td>";
					echo "<h6>". $row['DESCRIPTION']."</h6>";
				echo "</td>";
						
				echo "<td>";
					echo '<img src= "'.$row['IMAGE']." \" height = 'auto' width = '150px'>";
				echo "</td>";
		
				echo "<td>";
					echo "<a href='edit-smoothies.php?ID=".$row['ID']."'><button type='button' class='btn btn-push btn-info btn-xs'><i class='fa fa-edit'></i></button></a>";
				echo "</td>";
				
				echo "<td>";
					// echo "<a href='#'><button type='button' value ='ID=".$row['ID']."' name = 'delete' class='btn btn-push btn-danger btn-xs'><i class='fa fa-backspace'></i></button></a>";
					Smoothie::Display_Delete_Form($row['ID']);
				echo "</td>";
					
			echo "</tr>";
		
		}
		echo "</table>";
		//echo "</div>";
	}
	
}
?>