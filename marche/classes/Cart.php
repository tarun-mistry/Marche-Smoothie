<?php
include_once "Database.php";

 if(!isset($_SESSION)){
          session_start();
        }
	 if(!isset($_SESSION['CART'])){
		$_SESSION['CART'] = array();
	}   
if(isset($_GET['U_ID'])){
	Cart::AddToOrder($_GET['U_ID']);
	

}

	if(isset($_GET['DEL_SM_INDEX'])){
	Cart::DeleteSmoothie($_GET['DEL_SM_INDEX']);

	
}


class Cart {
    public static function MyOrder($U_ID){

    try{
    
      $query = "SELECT o.ID as orderid, sm1.S_NAME AS smoothie1, sm2.S_NAME AS smoothie2, sm3.S_NAME AS smoothie3, sm4.S_NAME AS smoothie4, sm5.S_NAME AS smoothie5, sm6.S_NAME AS smoothie6 FROM smoothies_order AS o JOIN smoothies AS sm1 ON o.SM_1 = sm1.ID JOIN smoothies AS sm2 ON o.SM_2 = sm2.ID JOIN smoothies AS sm3 ON o.SM_3 = sm3.ID JOIN smoothies AS sm4 ON o.SM_4 = sm4.ID JOIN smoothies AS sm5 ON o.SM_5 = sm5.ID JOIN smoothies AS sm6 ON o.SM_6 = sm6.ID and o.U_ID = ".$U_ID ;
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
		public static function AddToOrder($U_ID){
		$database = Database::Get_Instance();
		try{
                            $query = "INSERT INTO smoothies_order(U_ID,SM_1,SM_2,SM_3,SM_4,SM_5,SM_6)";
                            $query .=" VALUES(?,?,?,?,?,?,?)";
                           $connection = $database->Get_Connection();
                            $statement = $connection->prepare($query);
                            $statement->bindParam(1,$U_ID);
                            $statement->bindParam(2,$_SESSION['CART'][0]);
                            $statement->bindParam(3,$_SESSION['CART'][1]);
                            $statement->bindParam(4,$_SESSION['CART'][2]);
                            $statement->bindParam(5,$_SESSION['CART'][3]);
                            $statement->bindParam(6,$_SESSION['CART'][4]);
                            $statement->bindParam(7,$_SESSION['CART'][5]);
                                               

                            $statement->execute();
                            

							
								 ?>
    				
    					<script type="text/javascript" language="JavaScript">
              				   window.location = '../index.php'; 
                 			 alert("<?php echo 'Order Placed Successfully' ?>");
                                   
            		 </script> <?php 
            		 	$_SESSION['CART'] = NULL;		
				
								  ?>
    				
    					<script type="text/javascript" language="JavaScript">
              				   window.location = '../index.php'; 
                 			 alert("<?php echo 'Order Placed Successfully' . count($_SESSION['CART']) ?>");
                                   
            		 </script> <?php 

        
                        }

                        catch(PDOException $e)
                        {
                            echo"Connection Failed".$e->getMessage();
                        }


	}
	public static function DeleteSmoothie($DEL_SM_INDEX){
		array_splice($_SESSION['CART'], $DEL_SM_INDEX-1 , 1);
		?>
    	<script type="text/javascript" language="JavaScript">
                 window.location = '../cart.php';
                      alert("<?php echo 'Smoothie Removed' ?>"); 
           
                                   
             </script> <?php 

	}
	public static function Add_Cart($SM_ID){
         
        	if($SM_ID == 1000){
        			return $success = 0;

        	}else{
        		array_push($_SESSION['CART'], $_GET['SM_ID'] );
        		return $success = 1;
        	}
    }
    public static function ReadCartSmoothies($value){
		
		try{
		
				$query = "SELECT  S_NAME,IMAGE FROM smoothies where ID =".$value;
				$database = Database::Get_Instance();
		    	$connection = $database->Get_Connection();
				$statement  = $connection->prepare($query);
				$statement->execute();
			
				$result = $statement->fetch(PDO::FETCH_ASSOC); 
			
			return $result;
			
		}catch(PDOException $e){
			echo "Query Failed : ".$e->getMessage();
		}	
		
	}



}


?>