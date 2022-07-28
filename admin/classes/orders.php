<?php 
require_once "Database.php";
class Orders{
 public static function ReadOrders(){

    try{
    
      $query = "SELECT o.ID AS orderid, o.U_ID AS orderuserid, orderuserfname.F_NAME AS userfname, orderuserlname.L_NAME AS userlname, sm1.S_NAME AS smoothie1, sm2.S_NAME AS smoothie2, sm3.S_NAME AS smoothie3, sm4.S_NAME AS smoothie4, sm5.S_NAME AS smoothie5, sm6.S_NAME AS smoothie6 FROM smoothies_order AS o JOIN smoothies AS sm1 ON o.SM_1 = sm1.ID JOIN smoothies AS sm2 ON o.SM_2 = sm2.ID JOIN smoothies AS sm3 ON o.SM_3 = sm3.ID JOIN smoothies AS sm4 ON o.SM_4 = sm4.ID JOIN smoothies AS sm5 ON o.SM_5 = sm5.ID JOIN smoothies AS sm6 ON o.SM_6 = sm6.ID JOIN users AS orderuserfname ON o.U_ID = orderuserfname.ID JOIN users AS orderuserlname ON o.U_ID = orderuserlname.ID";
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
}


?>
