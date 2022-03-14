<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
  header{
    box-shadow: 3px 3px 6px #000000;
  }
  
</style>

<header class="header text-center"> 

      <div style="width: 80%; border-color:#000;" class="btn_alt button-S" id="button-5">
        <div id="translate"></div>
        <h3><a href="./index.php"class="no-text-decoration" href="index.php" style="text-shadow: 2px 2px 4px #000000; color:#36A749 ;">Fitness Web</a></h3>
      </div>
        
      <nav class="navbar navbar-expand-lg navbar-dark" >
           
      <button style="border-color:#000 ;" class="main_box navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span style="color:#36A749;"><i class="fas fa-angle-double-down"></i></span>
      </button>

      <div id="navigation" class="collapse navbar-collapse flex-column" >
        <div class="profile-section pt-3 pt-lg-0">
            <img class="profile-image mb-3 rounded-circle mx-auto" src="assets/images/gym.jpg" alt="image" >      
          
          <div class="bio mb-3">Image result for fitness important
Regular exercise and physical activity promotes strong muscles and bones. It improves respiratory, cardiovascular health, and overall health. Staying active can also help you maintain a healthy weight, reduce your risk for type 2 diabetes, heart disease, and reduce your risk for some cancers.<br></div><!--//bio-->

          <ul class="social-list list-inline py-3 mx-auto" >
            <li class="list-inline-item"><a style="color:#001F42;" href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
            <li class="list-inline-item" ><a style="color:#001F42;" href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
            <li class="list-inline-item"><a style="color:#001F42;" href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
            <li class="list-inline-item"><a style="color:#001F42;" href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
            <li class="list-inline-item"><a style="color:#001F42;" href="#"><i class="fab fa-youtube fa-fw"></i></a></li>
          </ul><!--//social-list-->
              <hr> 
        </div><!--//profile-section-->
        
        <ul class="navbar-nav flex-column text-start nav">

        <?php if (isset($_SESSION['id'])): ?>

          <div class="w3-dropdown-hover"style=" background-color: #1E2024;">

            <button class="w3-button nav-link" style=" color: #fff;background-color: #1E2024;font-weight: bold;"><i class="fas fa-user fa-fw me-2"></i>Hey! <?php echo $_SESSION['username'];?></button>

            <div class="main_box w3-dropdown-content w3-bar-block w3-card-4">

              <a href="<?php echo BASE_URL . '/logout.php' ?>" class="w3-bar-item w3-button"><i class="fas fa-sign-out-alt me-2"></i> Logout</a>
              
            </div>
          </div>

          <li class="nav-item">
              <a class="nav-link" href="index.php"><i class="fas fa-home fa-fw me-2"></i>Blog Home <span class="sr-only">(current)</span></a>
          </li>

          <?php if ($_SESSION['admin'] == 0): ?>
          <li class="nav-item">
              <a class="nav-link" href="packages.php"><i class="fas fa-star fa-fw me-2"></i>Packages</a>
          </li>
          <?php endif; ?>


          <?php if($_SESSION['admin'] == 2): ?>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo BASE_URL . '/trainer/dashboard.php' ?>"><i class="fas fa-user fa-fw me-2"></i>Dashboard</a>
          </li>
          <?php endif; ?>

          <li class="nav-item">
              <a class="nav-link" href="about.php"><i class="fas fa-user fa-fw me-2"></i>About Me</a>
          </li>

          <?php else: ?>
         
          <div class="dropdown">

              <li class="nav-item">
              <a class="nav-link active" href="index.php"><i class="fas fa-home fa-fw me-2"></i>Blog Home <span class="sr-only">(current)</span></a>
          </li>


          <!-- <li class="nav-item">
              <a class="nav-link" href="about.php"><i class="fas fa-user fa-fw me-2"></i>About Me</a>
          </li>
 -->
          <div class="w3-dropdown-hover">

            <button class="w3-button nav-link" style=" color: #fff;background-color: #1E2024;font-weight: bold;"><i class="fas fa-sign-in-alt me-2"></i> Login <i class="fas fa-caret-down"></i></button>

            <div class="main_box w3-dropdown-content w3-bar-block w3-card-4">

              <a href="<?php echo BASE_URL . '/register.php' ?>" class="w3-bar-item w3-button"><i class="fas fa-user-plus me-2"></i> Sign Up</a>
              <a href="<?php echo BASE_URL . '/login.php' ?>" class="w3-bar-item w3-button"><i class="fas fa-sign-in-alt me-2"></i> Login</a>
              
            </div>
          </div>

        </div>
        <?php endif; ?>

        </ul>

        <div></div>
        <div></div>

      </div>
    </nav>
    </header>