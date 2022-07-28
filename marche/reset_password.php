
<?php include "includes/head.php"?>
<?php include "includes/navbar.php"?>
<?php include "classes/User.php"?>


<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:60px 16px" id="contact">
  <h1 class="w3-center">RESET PASSWORD</h1>
    <h3 class="w3-center"><img class="" src="img/user.png" style="width:200px; height:200px;"></h3>

  <div class="w3-row-padding ">
    <div class="w3-col l4 m6 w3-margin-bottom"></div>
      <div class="w3-col l4 m6 w3-margin-bottom">

        
        <form action="#" method="post">
      <p><input class="w3-input w3-border" type="Email" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Contact Number" maxlength="10" required name="Contact"></p>
      <p><input class="w3-input w3-border" type="Password" placeholder="Password" required name="Password"></p>
      <p><input class="w3-input w3-border" type="Password" placeholder="Confirm Password" required name="Confirm_Password"></p>
     
   
        
          <h4 class="w3-center"><input type= "submit" class="w3-button w3-black"  name="Submit" value="Reset Password"/> </h4>
        
     
    </form>

    <?php       
       
        if(isset($_POST["Submit"])){
          
           
            $Email = $_POST["Email"];
            $Contact = $_POST["Contact"];
            $Password = $_POST["Password"]; 
            $Confirm_Password = $_POST["Confirm_Password"]; 
            
            if($Password==$Confirm_Password){

              if(User::Email_Contact_Exists($Email,$Contact)){
                
                User::Update_Password($Email,$Password); ?>
        
                <script type="text/javascript" language="JavaScript">
                 alert("<?php echo 'Password Updated Successfully!'?>");
                 window.location = 'login.php';
                 </script>

             <?php }else{
                echo "Email and Contact Number dont match";

              }

            }else{
              echo "Your password and confirm password dont match";
            }
          }
          

        ?>
   
      </div>
        <div class="w3-col l4 m6 w3-margin-bottom"></div>
       
 </div>
 
 
</div>
<?php include "includes/footer.php"?>