


<?php
include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php");

$posts = array();
$postsTitle = 'Recent Posts';

if (isset($_GET['t_id'])) {
  $posts = getPostsByTopicId($_GET['t_id']);
  $postsTitle = "You searched for posts under '" . $_GET['name'] . "'";
} else if (isset($_POST['search-term'])) {
  $postsTitle = "You searched for '" . $_POST['search-term'] . "'";
  $posts = searchPosts($_POST['search-term']);
} else {
  // $posts = getPublishedPosts();
  $posts = posts_list();
}

?>

<?php

$numberOfPages = ceil(totalRows() / 5);
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$prevPage = $currentPage > 1 ? $currentPage - 1 : false;
$nextPage = $currentPage + 1 <= $numberOfPages ? $currentPage + 1 : false;

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Fitness Web</title>

  <!-- Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Blog Template">
  <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
  <link rel="shortcut icon" href="favicon.ico">

  <!-- FontAwesome JS-->
  <script src="https://kit.fontawesome.com/73bf4f1cb8.js" crossorigin="anonymous"></script>

  <!-- Theme CSS -->
  <link id="theme-style" rel="stylesheet" href="assets/css/theme-1.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/blog_box.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/footer.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/contact.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/about.css">


</head>

<style type="text/css">
  body {
    overflow-x: hidden;
    font-size: 18px;
  }

  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    color: #36A749;
  }

  .main_box {
    color: #fff;
    background-color: #1E2024;
    border-color: #1E2024;
    border-style: solid;
    border-radius: 5px;
    box-shadow: 3px 3px 6px #000000;

  }

  img {
    box-shadow: 3px 3px 6px #000000;
  }
</style>

<style>
  .container {
    width: 100%;
  }

  .skills {
    text-align: right;
    padding-top: 10px;
    padding-bottom: 10px;
    color: white;
  }


  .column {
    float: left;
    width: 33.33%;
    padding: 5px;
  }
  .row::after {
    content: "";
    clear: both;
    display: table;
  }

  .img_desc {
    text-align: center;
  }

  .html {
    width: 90%;
    background-color: #04AA6D;
  }

  .css {
    width: 75%;
    background-color: #2196F3;
  }

  .js {
    width: 90%;
    background-color: #f44336;
  }

  .php {
    width: 85%;
    background-color: #04AA6D;
  }

  .php {
    width: 99%;
    background-color: #2196F3;
  }
</style>

<body>
  <?php include(ROOT_PATH . "/app/includes/blog_header.php"); ?>

  <div class="main-wrapper" style="background-color:#292C31; color: #fff;">

    <section class="blog-list px-3 py-5 p-md-5">

      <div>

        <div class="main_box container">
          <h1 class="title mb-3" style="text-align: center;">About Website</h1>
          <div class="row text-center">
            <img class="profile-image mb-3 rounded-circle mx-auto" src="assets/images/gym.jpg" alt="image" style="width:250px;">
          </div>
          <p>
            Regular exercise and physical activity promotes strong muscles and bones. It improves respiratory, cardiovascular health, and overall health. Staying active can also help you maintain a healthy weight, reduce your risk for type 2 diabetes, heart disease, and reduce your risk for some cancers.
          </p>
          <br>
          <center>
            <img src="assets/images/1574521288_image_5.png">
          </center>
          <br><br><br><br><br><br><br><br>
          <p>


          </p>

        </div>

      </div>


    </section>

    <?php include("./app/includes/footer.php"); ?>

  </div>
  <!--//main-wrapper-->


  <!-- Javascript -->
  <script src="assets/plugins/popper.min.js"></script>
  <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Slick Carousel -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- Custom Script -->
  <script src="assets/js/scripts.js"></script>

  <!-- Go to www.addthis.com/dashboard to customize your tools -->
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-6177e62d8343a2a6"></script>

</body>

</html>