<?php include "includes/head.php"?>
<?php include "includes/navbar.php"?>
<?php include "classes/Smoothies.php"?>
<?php
$smths = Smoothie::ReadSmoothies();

if(!isset($_SESSION)){
          session_start();
   }


?>


<!-- Modal Section -->
<?php 
if(isset($_SESSION['CART'])){
$a = $_SESSION['SM_COUNT'];
$b = count($_SESSION['CART']);
$c = $_SESSION['SM_COUNT']-count($_SESSION['CART']); 

}


if (isset( $_SESSION['ID']) && count($_SESSION['CART'])<6){ ?>
<script type="text/javascript">
	 alert("<?php echo 'Please Order '.$c.' Smoothies.!' ?>");
</script>

<?php }?>



 
<div class="w3-container" style="padding:50px 16px">
  <h1 class="w3-center">Ready To Drink Smoothies</h1>
 
  <div class="w3-row-padding " style="margin-top:64px">

    <?php   
      Smoothie::Display($smths);
    ?>
    
  </div>
</div>

<?php include "includes/footer.php"?>