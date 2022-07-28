<?php include "includes/head.php"?>
<?php include "includes/navbar.php"?>
<?php include "classes/User.php"?>



<div class="w3-container w3-light-grey" style="padding:60px 16px" id="contact">
  <h1 class="w3-center">Register</h1>
    <h3 class="w3-center"><img class="" src="img/register.png" style="width:200px; height:200px;"></h3>

  <div class="w3-row-padding">
    <div class="w3-col l4  w3-margin-bottom"></div>

    <form action="#" method="post">
    <div class="w3-col l4  w3-margin-bottom">
      <div class="w3-row">
        <div class="w3-col m5" style="margin-right: 10px;"> 
          <p><input class="w3-input w3-border" type="text" placeholder="First Name" style="text-transform: capitalize;" required name="Fname"></p>
        </div>
        <div class="w3-col m5" style="margin-left: 80px;">
          <p><input class="w3-input w3-border" type="text" placeholder="Last Name" style="text-transform: capitalize;" required name="Lname"></p>
        </div>
      </div>
         <p><input class="w3-input w3-border" type="text" placeholder="Contact Number" maxlength="10" required name="Contact"></p>
       <p><input class="w3-input w3-border" type="Email" placeholder="Email" style="text-transform: capitalize;" required name="Email"></p>
        <div class="w3-row">
        <div class="w3-col m5" style="margin-right: 10px;"> 
          <p><input class="w3-input w3-border" type="Password" placeholder="Password" required name="Password"></p>
        </div>
        <div class="w3-col m5" style="margin-left: 80px;">
          <p><input class="w3-input w3-border" type="Password" placeholder="Confirm Password" required name="Confirm_Password"></p>
        </div>
      </div>
       
    
        <p><input class="w3-input w3-border" type="text" placeholder="Address Line 1" style="text-transform: capitalize;" required name="Address1"></p>
       <p><input class="w3-input w3-border" type="text" placeholder="Address Line 2" style="text-transform: capitalize;" required name="Address2"></p>
       <div class="w3-row">
        <div class="w3-col m5" style="margin-right: 10px;"> 
                 <p><input class="w3-input w3-border" type="text" placeholder="City" style="text-transform: capitalize;" required name="City"></p>
        </div>
        <div class="w3-col m5" style="margin-left: 80px;">
                <p><input class="w3-input w3-border" type="text" placeholder="Province" style="text-transform: capitalize;" required name="Province"></p>
        </div>
      </div>
      


       <p><input class="w3-input w3-border" type="text" placeholder="Postal Code" required name="Pcode"></p>
    
       
          <h4 class="w3-center"><input type= "Submit" class="w3-button w3-black"  name="Submit" value="Create Account"/> </h4>


    </div>
  </form>
  <?php if(isset($_POST["Submit"]) && ($_POST['Password'] == $_POST['Confirm_Password'])){ 

  
              
              $User = new User($_POST['Fname'],$_POST['Lname'],$_POST['Contact'],$_POST['Email'],$_POST['Password'],$_POST['Address1'],$_POST['Address2'],$_POST['City'],$_POST['Province'],$_POST['Pcode']);
        
              $User->Register_User(); ?>

              <script type="text/javascript" language="JavaScript">
                  alert("Successfully Registered!");
                  window.location = 'login.php';                   
             </script>

              <?php } ?>

               
    <div class="w3-col l4  w3-margin-bottom"></div>
       
  </div>
 
 
</div>
<?php include "includes/footer.php"?>