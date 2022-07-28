<?php ob_start(); ?>
<?php include "includes/head.php"?>
<?php include "includes/navbar.php"?>
<?php include "classes/User.php"?>


<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:60px 16px" id="contact">
  <h1 class="w3-center">LOGIN</h1>
    <h3 class="w3-center"><img class="" src="img/user.png" style="width:200px; height:200px;"></h3>

  <div class="w3-row-padding ">
    <div class="w3-col l4 m6 w3-margin-bottom"></div>
      <div class="w3-col l4 m6 w3-margin-bottom">

        
        <form action="#" method="post">
      <p><input class="w3-input w3-border" type="Email" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-border" type="Password" placeholder="Password" required name="Password"></p>
     
   
        
          <h4 class="w3-center"><input type= "submit" class="w3-button w3-black"  name="Submit" value="Login"/> </h4>
        
     
    </form>

    <?php       
        if(!isset($_SESSION)){
          session_start();
        }   
        if(isset($_POST["Submit"])){
          
            $Email = $_POST["Email"];
            $Password = $_POST["Password"]; 
            
            if( User::Login_User($Email, $Password) ){
              $_SESSION['Email'] = $Email;
              $_SESSION['ID']  = User::Get_ID($Email);
              $_SESSION['NAME']  = User::Get_NAME($Email);
              $_SESSION['SM_COUNT'] = 6;

              ?>
              <script type="text/javascript" language="JavaScript">
                 window.location = 'index.php'; 
                  alert("<?php echo 'Welcome '.$_SESSION['NAME'] ?>");
                                   
             </script>

              <?php

            }else{
               ?>
              <script type="text/javascript" language="JavaScript">
                 window.location = 'login.php'; 
                  alert("<?php echo 'Please Enter Correct Credentials!'?>");
                                   
             </script>

              <?php
             
            }
            
          }
          

        ?>
 
      <h4><a href="register.php">Not Registered.?</a><br></h4>
         <h4><a href="reset_password.php">forgot password.?</a></h4>
   
      </div>
        <div class="w3-col l4 m6 w3-margin-bottom"></div>
       
 </div>
 
 
</div>
<?php include "includes/footer.php"?>