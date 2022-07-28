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
	
	public static function Get_Images($array){
		$images = array();
		foreach($array as $row){
			array_push($images, $row['IMAGE']);
		}
		return $images;		
	}	

public static function Display($array){
		
		echo "<table border = '0' class='table table-sm table-responsive table-hover'>";
			echo "<thead class='thead-dark text-center justify'>";
				echo '<tr>';
				    echo '<th><h4>No</h4></th>';
                    echo '<th><h4>Smoothie Name</h4></th>';
					echo '<th><h4>Ingredient</h4></th>';
					echo '<th><h4>Description</h4></th>';
					echo '<th><h4>Image</h4></th>';
					echo '<th><h4>Add To Cart</h4></th>';
					echo '<th><h4>Add To Favourite</h4></th>';
				
				echo "</tr>";
            echo "</thead>";
			
		foreach($array as $row){
			
			echo "<tr>";
				echo "<td>";
					echo "<font color = #CC0000>";
						echo "<h4>". $row['ID']."</h4>";
				echo "</td>";
				
				echo "<td>";
					echo "<font color = #CC0000>";
						echo "<h4>". $row['S_NAME']."</h4>";
				echo "</td>";
				
				echo "<td>";
						echo "<h4>". $row['INGREDIENT']."</h4>";
					echo "</font>";
				echo "</td>";
				
				echo "<td>";
					echo "<h4>". $row['DESCRIPTION']."</h4>";
				echo "</td>";
						
				echo "<td >";
					echo '<img src= "img/'.$row['IMAGE']." \" height = '250px' width = '300px'>";
				echo "</td>";
		
				echo "<td>";
					echo "<a href='cart.php?SM_ID=".$row['ID']."' ><button type='button' class='btn btn-push btn-info btn-xs' title='ADD TO CART' ><i class='fa fa-plus'></i></button></a>";
				echo "</td>";
				echo "<td>";
					echo "<a href='favourite.php?SM_ID=".$row['ID']."' ><button type='button' class='btn btn-push btn-warning btn-xs' title='ADD TO FAVOURITE' ><i class='fa fa-heart' style='color:red'></i></button></a>";
				echo "</td>";
				
				
					
			echo "</tr>";
		
		}
		echo "</table>";
		//echo "</div>";
	}



	
}
?>