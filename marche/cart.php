
<?php include "Classes/Database.php" ?>
<?php include "includes/head.php"?>
<?php include "includes/navbar.php"?>
<?php include "classes/User.php"?>
<?php include "classes/Cart.php"?>



<div class="w3-container w3-light-grey" style="padding:60px 16px" id="contact">
  <h1 class="w3-center">MY CART</h1>
<?php

  if(!isset($_SESSION)){
          session_start();
        }
	 if(isset($_SESSION['NAME']) && !empty($_SESSION['NAME']) ){
		 if((count($_SESSION['CART']) < $_SESSION['SM_COUNT']) ){
			if(isset($_GET['SM_ID'])){

        			Cart::Add_Cart($_GET['SM_ID']);

        		}
				 }else{

        	 	?>
    	<script type="text/javascript" language="JavaScript">
                
                  alert("<?php echo 'Your Cart Is Full ' ?>");
                                
             </script> <?php 

		 }

       
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
				    echo '<th><h4>No</h4></th>';	
				    echo '<th><h4>Name</h4></th>';				 
                    echo '<th><h4>Smoothie Name</h4></th>';		
					echo '<th><h4>Delete</h4></th>';				
				echo "</tr>";
            echo "</thead>";
            $count = 0   ;
            foreach ($_SESSION['CART'] as $key => $value) {
            $count += 1;
           $result = Cart::ReadCartSmoothies($value); 
  			  			 	
			
					echo "<tr>";
				echo "<td>";
					echo "<font color = #CC0000>";
				echo "<h4>".$count."</h4>";	
				echo "</td>";
				echo "<td>";
					echo "<font color = #CC0000>";
					echo "<h4>". $result['S_NAME']."</h4>";	
				echo "</td>";
				
				echo "<td>";
					echo "<font color = #CC0000>";
				echo '<img src= "img/'.$result['IMAGE']." \" height = '150px' width = '200px'>";
				echo "</td>";
				echo "<td>";
					echo "<a href='classes/Cart.php?DEL_SM_INDEX=".$count."' ><button type='button' name='delete_smoothie' class='btn btn-push btn-danger btn-xs'  title='DELETE' ><i class='fa fa-trash'></i></button></a>";
				echo "</td>";
				
				
					 
			echo "</tr>";
					
			

			
  			  }
				

				
  		


      		
					
				 
    
?>
</table>
<?php 
if(count($_SESSION['CART']) == 6){
echo " <h3 class='w3-center'><a href='classes/Cart.php?U_ID=".$_SESSION['ID']."' ><button type='button' name='delete_smoothie' class='btn btn-push btn-success btn-lg'  title='DELETE' >CHECKOUT</button> </a></h3>";	
 }?>
</div>
<?php include "includes/footer.php"?>