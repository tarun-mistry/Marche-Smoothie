<?php ob_start(); ?>
<?php include "includes/head.php"?>
<?php include "includes/navbar.php"?>
<?php include "classes/User.php"?>
<?php include "classes/Cart.php"?>



<div class="w3-container w3-light-grey" style="padding:60px 16px" id="contact">
  <h3 class="w3-center">MY CART</h3>
<?php
  if(!isset($_SESSION)){
          session_start();
        }
    if(!isset($_SESSION['CART'])){
		$_SESSION['CART'] = array();
	}   





    if (isset($_SESSION['ID']) && isset($_GET['SM_ID'])) {
    	//Cart::Add_Cart($_SESSION['ID'],$_GET['SM_ID']);	
    	 if(!in_array($_GET['SM_ID'], $_SESSION['CART'])){
					array_push($_SESSION['CART'], $_GET['SM_ID']);
					?>
					<script type="text/javascript" language="JavaScript">
                  alert("<?php echo 'Product added to cart' ?>");                                   
             		</script> 
             		<?php 
				
		}
		else{
					$_SESSION['message'] = 'Product already in cart';
		}
    
        
    } else { 
    	?><script type="text/javascript" language="JavaScript">
                 window.location = 'login.php'; 
                  alert("<?php echo 'PLZ LOGIN' ?>");
                                   
             </script> <?php   
    }

 	?>	
  



      			 
    


 
</div>
<?php include "includes/footer.php"?>