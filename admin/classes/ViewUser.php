<?php require_once "Database.php";
class ViewUser{
 public static function ReadUser($ID){

    try{
     
      $query = "SELECT * from users where ID=".$ID ;
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