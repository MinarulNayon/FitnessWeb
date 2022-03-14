<?php

$table = 'helps';

$errors = array();
$id = "";
$client_email = "";
$message = "";

if (isset($_POST['help'])) {
    if (count($errors) == 0) {
        unset($_POST['help']);
        $help_id = create($table, $_POST);
        $_SESSION['message'] = "Message Sent successfully";
        $_SESSION['type'] = "success";
        echo("<script>location.href = 'index.php';</script>"); 
        exit();    
    } else {
        $client_email = $_POST['client_email'];
        $message = $_POST['message'];
    }
}

?>

<style>
  footer{
    box-shadow: 3px 3px 6px #101010;
  }
  .btn_alt{
    color:#fff;
    background-color:#1E2024;
    border-color:#36A749;
    border-style: solid;
    border-radius: 5px;
    box-shadow: 3px 3px 6px #000000;
  }
</style>
<footer style="width: 100%;">
      <div class="main-content">
        <div class="left box">
          <h2 class="clr">DESCRIPTION</h2>
          <div class="content">
            <p>Regular exercise and physical activity promotes strong muscles and bones. It improves respiratory, cardiovascular health, and overall health. Staying active can also help you maintain a healthy weight, reduce your risk for type 2 diabetes, heart disease, and reduce your risk for some cancers.</p>
            <div class="social">
              <a href="#"><span class="fab fa-linkedin"></span></a>
              <a href="#"><span class="fab fa-twitter"></span></a>
              <a href="#"><span class="fab fa-github"></span></a>
              <a href="#"><span class="fab fa-stack-overflow"></span></a>
              <a href="#"><span class="fab fa-youtube"></span></a>
            </div>
          </div>
        </div>

        <div class="center box">
          <h2 class="clr">Address</h2>
          <div class="content">
            <div class="place">
              <span class="fas fa-map-marker-alt"></span>
              <span class="text">Location</span>
            </div>
            <div class="phone">
              <span class="fas fa-envelope"></span>
              <span class="text">fitnessweb@gmail.com</span>
            </div>
            <div class="email">
              <span class="fas"><i class="fab fa-telegram-plane"></i></span>
              <span class="text">FitnessWeb</span>
            </div>
          </div>
        </div>

    <div class="right box">
      <h2 class="clr">Contact us</h2>
      <div class="content">

        <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) 
        { ?>
          <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;"><?php echo $_SESSION['success_message']; ?></div>
        <?php
          unset($_SESSION['success_message']);
        }?>

        <form name="contactForm" id="contactForm" method="post">
          <div class="email">
            <div class=" clr">Email *</div>
            <input name="client_email" type="email" id="contactEmail" placeholder="Email" required style="color: #D9D9D9;">
          </div>
          <div class="msg">
            <div class=" clr">Message *</div>
            <textarea name="message" id="contactMessage" placeholder="message" rows="2" cols="25" required style="color: #D9D9D9;"></textarea>            
          </div>

          <div class="btn btn_alt button-S container" id="button-5" style="width: 85%;">
            <div id="translate"></div>
            <a><button type="submit" name="help">SEND</button></a>
          </div>
        </form>
      </div>
    </div>


      </div>
      <div class="bottom">
        <center>
          <span class="credit">Created By <i class="fas fa-heart"> </i><a href="">Fitness Web</a> </span>
        </center>
      </div>
</footer>
