
<?php include "includes/head.php"?>
<?php include "includes/navbar.php"?>


<!-- Header with full-height image -->
<header id="home">
<div class="containe ">
<video loop muted autoplay class="containe">

        <source src="video-file.webm" class="w-100" type="video/webm">
        <source src="img/vidd.mp4"  type="video/mp4">
	
    </video>
	</div>
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Marche Smoothie</span><br>
    <span class="w3-large">Drink Smoothies Which You Never Taste.</span>
    <p><a href="smoothies.php" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Order Now!</a></p>
  </div> 
 
</header>
 
<!-- Modal Section -->


<div class="w3-container" style="padding:50px 16px">
  <h1 class="w3-center">Ready To Drink Smoothies</h1>
 
  <div class="w3-row-padding " style="margin-top:64px">

    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="img/chocolate.jpg" alt="Jane" style="width:100%; height:400px;">
        <div class="w3-container">
          <h3 class="w3-center">Aztec Chocolate</h3>
          <p><button class="w3-button w3-light-grey w3-block" data-toggle="modal" data-target="#myModal1"><i class=""></i> <h4>Details</h4></button></p>
        </div>
      </div>
    </div>

    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="img/borealberry.jpg" alt="Jane" style="width:100%; height:400px;">
        <div class="w3-container">
           <h3 class="w3-center">boreal berry</h3>
          <p><button class="w3-button w3-light-grey w3-block" data-toggle="modal" data-target="#myModal2"><i class=""></i> <h4>Details</h4></button></p>
        </div>
      </div>
    </div>

    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="img/bananapecan.jpg" alt="Mike" style="width:100%; height:400px;">
        <div class="w3-container">
            <h3 class="w3-center">Banana Pecan</h3>
          <p><button class="w3-button w3-light-grey w3-block" data-toggle="modal" data-target="#myModal3"><i class=""></i> <h4>Details</h4></button></p>
        </div>
      </div>
    </div>

    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="img/carrotginger.jpg" alt="Dan" style="width:100%; height:400px;">
        <div class="w3-container">
            <h3 class="w3-center">Carrot Ginger</h3>
          <p><button class="w3-button w3-light-grey w3-block" data-toggle="modal" data-target="#myModal4"><i class=""></i> <h4>Details</h4></button></p>
        </div>
      </div>
    </div>
  </div>
</div>

  <!-- Modal 1 -->
  <div class="modal fade modal" tabindex="1" id="myModal1" role="dialog">
    <div class="modal-dialog modal-lg" style="text-overflow:ellipsis; ">
    
      <!-- Modal content-->
      <div class="modal-content">
        
        <div class="modal-body">
            <h3 class="w3-center justify-content-center"> Aztec Chocolate</h3>
        		<div class="row justify-content-center">
                <img class="" src="img/chocolate.jpg" height="400px"  alt="">

          	</div>
            <div class="row justify-content-center">
              <div class="col-2"></div>
               <div class="col-8 justify-content-center">
                <h5>
                  Our latest “chocolate-y” creation hails from our Latin American friends. 
                  You will love the dark and rich taste of chocolate inspired by traditional recipes. 
                  What’s more? A tiny hint of spice that will wake up your tastebuds.
                </h5>
                <h3 class="w3-center">Ingredients: </h3>
                <h4>
                  100% Dark Peruvian chocolate, Raw cocoa powder, Chipotle, Corn, Pear, Banana, Carob, Almond butter, Cinnamon, Vanilla extract
                </h4>

                <h4 class="w3-center"><a href="Smoothies.php" class="w3-button w3-black">BUY IT!</a> </h4>
               </div>
                <div class="col-2"></div>
                     
            </div>
          		
        </div>
        
      </div>
      
    </div>
  </div>

    <!-- Modal 2 -->
  <div class="modal fade modal" tabindex="1" id="myModal2" role="dialog">
    <div class="modal-dialog modal-lg" style="text-overflow:ellipsis; ">
    
      <!-- Modal content-->
      <div class="modal-content">
        
        <div class="modal-body">
            <h3 class="w3-center justify-content-center"> Boreal Berry</h3>
            <div class="row justify-content-center">
                <img class="" src="img/borealberry.jpg" height="400px"  alt="">

            </div>
            <div class="row justify-content-center">
              <div class="col-2"></div>
               <div class="col-8 justify-content-center">
                <h5>
                  Berry lovers rejoice, you’ll find your little slice of heaven with this blend inspired by our homeland. 
                 Wild blueberries, strawberries, and raspberries join forces for a berry-ful supercharged breakfast packed with fibre and antioxidants.
                </h5>
                <h3 class="w3-center">Ingredients: </h3>
                <h4>
                  Blueberry, Raspberry, Strawberry, Banana, Kale, Sunflower Seeds, Maple Nuggets, Organic Chaga Powder
                </h4>

                <h4 class="w3-center"><a href="Smoothies.php" class="w3-button w3-black">BUY IT!</a> </h4>
               </div>
                <div class="col-2"></div>
                     
            </div>
              
        </div>
        
      </div>
      
    </div>
  </div>
   <!-- Modal 3 -->
  <div class="modal fade modal" tabindex="1" id="myModal3" role="dialog">
    <div class="modal-dialog modal-lg" style="text-overflow:ellipsis; ">
    
      <!-- Modal content-->
      <div class="modal-content">
        
        <div class="modal-body">
            <h3 class="w3-center justify-content-center"> Banana Pecan</h3>
            <div class="row justify-content-center">
                <img class="" src="img/bananapecan.jpg" height="400px"  alt="">

            </div>
            <div class="row justify-content-center">
              <div class="col-2"></div>
               <div class="col-8 justify-content-center">
                <h5>
                  Bananas and pecans are paired together for a rich and flavourful smoothie. 
                  But don’t be fooled by this familiar tasting decadent treat, it packs a mean punch of minerals and nutrients that will nourish your body with the goodies it needs.
                </h5>
                <h3 class="w3-center">Ingredients: </h3>
                <h4>
                  Banana, Pecans, Greek yogurt, Butternut squash, Macadamia, Dates, Sea salt
                </h4>

                <h4 class="w3-center"><a href="Smoothies.php" class="w3-button w3-black">BUY IT!</a> </h4>
               </div>
                <div class="col-2"></div>
                     
            </div>
              
        </div>
        
      </div>
      
    </div>
  </div>
   <!-- Modal 4 -->
  <div class="modal fade modal" tabindex="1" id="myModal4" role="dialog">
    <div class="modal-dialog modal-lg" style="text-overflow:ellipsis; ">
    
      <!-- Modal content-->
      <div class="modal-content">
        
        <div class="modal-body">
            <h3 class="w3-center justify-content-center"> Carrot Ginger</h3>
            <div class="row justify-content-center">
                <img class="" src="img/carrotginger.jpg" height="400px"  alt="">

            </div>
            <div class="row justify-content-center">
              <div class="col-2"></div>
               <div class="col-8 justify-content-center">
                <h5>
                  If you ever wondered what a slice of cake for breakfast would taste like, we got the perfect smoothie for you. 
                One sip and you’ll swear you're biting into a decadent slice of carrot cake. 
                But skip the sugar and carbs; instead, we got for you fibre, calcium, and potassium brought to you by powerful organic chia seeds.
                </h5>
                <h3 class="w3-center">Ingredients: </h3>
                <h4>
                 Carrot, Banana, Ginger, Red Apple, Dates, Organic Chia Seeds, Lemon Juice, Nutmeg, Cinnamon
                </h4>

                <h4 class="w3-center"><a href="Smoothies.php" class="w3-button w3-black">BUY IT!</a> </h4>
               </div>
                <div class="col-2"></div>
                     
            </div>
              
        </div>
        
      </div>
      
    </div>
  </div>




<?php include "includes/footer.php"?>


