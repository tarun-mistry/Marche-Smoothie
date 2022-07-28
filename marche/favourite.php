<?php include "includes/head.php"?>
<?php include "includes/navbar.php"?>
<?php include "classes/Favourite.php"?>
<?php


if(!isset($_SESSION)){
          session_start();
   }
	 if(isset($_SESSION['NAME']) && !empty($_SESSION['NAME']) ){
if (isset($_SESSION['ID']) && isset($_GET['SM_ID'])){
	$result = Favourite::IsFavorite($_GET['SM_ID'], $_SESSION['ID']);
		
			
			if($result == 0 ){
					Favourite::AddToFavourite($_GET['SM_ID'], $_SESSION['ID']);
			}else{	 
						?>
    	<script type="text/javascript" language="JavaScript">
                
                  alert("<?php echo 'smooothie already added'?> ");
                                
             </script> <?php
				}        			  

        		}
        	}else{
        		?>
    	<script type="text/javascript" language="JavaScript">
                 window.location = 'login.php'; 
                  alert("<?php echo 'PLZ LOGIN' ?>");
                                   
             </script> <?php 
        	}
if (isset($_SESSION['ID']) && isset($_GET['DEL_FAV_SM_ID'])){
		Favourite::RemoveFavourite($_GET['DEL_FAV_SM_ID'],$_SESSION['ID']);
		?>
    	<script type="text/javascript" language="JavaScript">
                
                  alert("<?php echo 'smooothie removed from favourie'?> ");
                                
             </script> <?php

}


?>






 
<div class="w3-container" style="padding:50px 16px">
  <h1 class="w3-center">Your Favourite Smoothies</h1>
 
  <div class="w3-row-padding " style="margin-top:64px">
<?php 
echo "<table border = '0' class='table table-sm table-responsive table-hover'>";
			echo "<thead class='thead-dark text-center justify'>";
				echo '<tr>';
				   echo '<th><h4>Smoothie Name</h4></th>';
					echo '<th><h4>Ingredient</h4></th>';
					echo '<th><h4>Description</h4></th>';
					echo '<th><h4>Image</h4></th>';
					echo '<th><h4>Delete Favourite</h4></th>';
					
				
				echo "</tr>";
            echo "</thead>";
			$result = Favourite::ReadFavourite($_SESSION['ID']);
		foreach($result as $row){
			
			echo "<tr>";
				echo "<td>";
					echo "<font color = #CC0000>";
						echo "<h4>". $row['S_NAME']."</h4>";
				echo "</td>";
				echo "<td>";
					echo "<font color = #CC0000>";
						echo "<h4>". $row['INGREDIENT']."</h4>";
				echo "</td>";
				echo "<td>";
					echo "<font color = #CC0000>";
						echo "<h4>". $row['DESCRIPTION']."</h4>";
				echo "</td>";
				echo "<td >";
					echo '<img src= "img/'.$row['IMAGE']." \" height = '250px' width = '300px'>";
				echo "</td>";
				echo "<td>";
					echo "<a href='favourite.php?DEL_FAV_SM_ID=".$row['ID']."' ><button type='button' class='btn btn-push btn-warning btn-xs' title='ADD TO FAVOURITE' ><i class='fa fa-heart-o' style='color:red'></i></button></a>";
				echo "</td>";
		
					
			echo "</tr>";
		
		}
		echo "</table>";
    
    ?>
  </div>
</div>

<?php include "includes/footer.php"?>