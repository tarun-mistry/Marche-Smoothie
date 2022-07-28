<?php include "includes/head.php"?>
<?php include "includes/navbar.php"?>


<!-- Contact Section --> 
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h1 class="w3-center">CONTACT</h1>
  <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
  <div class="w3-center" style="margin-top:48px">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right "></i> Montreal, CA</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +1 514 576 1298</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: vaibhi298@gmail.com</p>
    <br>
 <div class="w3-row-padding ">
    <div class="w3-col l4 m6 w3-margin-bottom"></div>
      <div class="w3-col l4 m6 w3-margin-bottom">
        
        <form action="/action_page.php" >
      <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-border" type="email" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
      <p><textarea class="w3-input w3-border" placeholder="Message" required rows="3"></textarea></p>
   
      <p>
        <button class="w3-button w3-black" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
      </div>
        <div class="w3-col l4 m6 w3-margin-bottom"></div>
       
 </div>
    

  </div>
</div>
<?php include "includes/footer.php"?>