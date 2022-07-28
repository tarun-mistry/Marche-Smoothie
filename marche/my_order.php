<?php include "Classes/Database.php" ?>
<?php include "includes/head.php"?>
<?php include "includes/navbar.php"?>
<?php include "classes/User.php"?>
<?php include "classes/Cart.php"?>

<div class="w3-container w3-light-grey" style="padding:60px 16px" id="contact">
  <h1 class="w3-center">MY ORDERS</h1>
<?php

  if(!isset($_SESSION)){
          session_start();
        }
	 if(isset($_SESSION['NAME']) && !empty($_SESSION['NAME']) ){
		 
       }else{
        	 	?>
    	<script type="text/javascript" language="JavaScript">
                 window.location = 'login.php'; 
                  alert("<?php echo 'PLZ LOGIN' ?>");
                                   
             </script> <?php 

        }


?>
  

	<table  class="w3-center table table-lg  table-hover">


<?php 
 
			echo "<thead class='thead-dark text-center justify'>";
				echo '<tr>';
				    echo '<th><h4>ORDER NUMBER</h4></th>';	
				    echo '<th><h4>SMOOTHIE 1</h4></th>';	
				    echo '<th><h4>SMOOTHIE 2</h4></th>';	
				    echo '<th><h4>SMOOTHIE 3</h4></th>';	
				    echo '<th><h4>SMOOTHIE 4</h4></th>';	
				    echo '<th><h4>SMOOTHIE 5</h4></th>';	
				    echo '<th><h4>SMOOTHIE 6</h4></th>';			 			
				echo "</tr>";
            echo "</thead>"; 
            $result = Cart::MyOrder($_SESSION['ID']); 
            foreach($result as $row){
			
			echo "<tr>";
				echo "<td>";
					echo "<font color = #CC0000>";
						echo "<h4>".$row['orderid']."</h4>";
				echo "</td>";
				
				echo "<td>";
					echo "<font color = #CC0000>";
						echo "<h4>".$row['smoothie1']."</h4>";
				echo "</td>";
				echo "<td>";
					echo "<font color = #CC0000>";
						echo "<h4>".$row['smoothie2']."</h4>";
				echo "</td>";
				echo "<td>";
					echo "<font color = #CC0000>";
						echo "<h4>".$row['smoothie3']."</h4>";
				echo "</td>";
				echo "<td>";
					echo "<font color = #CC0000>";
						echo "<h4>".$row['smoothie4']."</h4>";
				echo "</td>";
				echo "<td>";
					echo "<font color = #CC0000>";
						echo "<h4>".$row['smoothie5']."</h4>";
				echo "</td>";
				echo "<td>";
					echo "<font color = #CC0000>";
						echo "<h4>".$row['smoothie6']."</h4>";
				echo "</td>";
				
				
				
					
			echo "</tr>";
		
		}
				 
    
?>
</table>

</div>
<?php include "includes/footer.php"?>
