 
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="index.php" class="w3-bar-item w3-button w3-wide"><h4>Marche Smoothie</h4></a>
    
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
         <a href="index.php" class="w3-bar-item w3-button"><h4><i class="fa fa-home"></i> HOME</h4></a>
      <a href="smoothies.php" class="w3-bar-item w3-button"><h4><i class="fa fa-glass"></i> SMOOTHIES</h4></a>
       <a href="contactus.php" class="w3-bar-item w3-button"><h4><i class="fa fa-phone"></i> CONTACT US</h4></a>
      <a href="how_it_work.php" class="w3-bar-item w3-button"><h4><i class="fa fa-info"></i> HOWS IT WORKS</h4></a>
    
<?php 

        if ($Name == "") { ?>
          <a href="login.php" class="w3-bar-item w3-button"><h4><i class="fa fa-user"></i> LOGIN</h4></a>
         
         
        <?php }else{ ?>
    

           <a href="cart.php" class="w3-bar-item w3-button"><h4><i class=" fa fa-shopping-cart"></i> CART</h4></a>
            <a href="my_order.php" class="w3-bar-item w3-button"><h4><i class="fa fa-list-alt "></i> MY ORDERS</h4></a>
             <a href="favourite.php" class="w3-bar-item w3-button"><h4><i class="fa fa-star"></i> FAVOURITE</h4></a>
            <a href="logout.php" class="w3-bar-item w3-button"><h4><i class="fa fa-user"></i> LOGOUT</h4></a>

               

        <?php } ?>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>