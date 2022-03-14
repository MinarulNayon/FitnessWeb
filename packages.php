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

$packages = array();
$packages = selectAll('subscriptions');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fitness_Web</title>

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
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">

    <style>
        #packages {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #packages td,
        #packages th {
            border: 1px solid #ddd;
            padding: 8px;
            background-color: #f2f2f2;
        }

        #packages tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #packages tr:hover {
            background-color: #ddd;
        }

        #packages th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>


</head>

<body style="overflow-x: hidden; background: #292C31;">
    <?php include(ROOT_PATH . "/app/includes/blog_header.php"); ?>
    <div class="main-wrapper" style="background-color:#292C31;border-color: #1E2024;">
        <style>
            .main_box {
                color: #fff;
                background-color: #1E2024;
                border-color: #1E2024;
                border-style: solid;
                border-radius: 5px;
                box-shadow: 3px 3px 6px #000000;

            }

            a {
                color: skyblue;
            }

            img {
                box-shadow: 2px 2px 4px #000000;
            }

            h3,
            h2 {
                text-shadow: 1px 1px 2px #000000;
                font-style: italic, bold;
                color: #36A749;
            }
        </style>
        <section class="blog-list px-3 py-5 p-md-5" style="margin-top: -80px;">

            <div class="container single-col-max-width">
                <?php include(ROOT_PATH . "/slider.php"); ?><br>
                <h2 class="text-center">Subscription Packages</h2>
                <table id="packages">
                    <tr>
                        <th>Package ID</th>
                        <th>Package Name</th>
                        <th>Price</th>
                    </tr>
                    <?php foreach ($packages as $package) : ?>
                        <tr>
                            <td><?php echo $package['id']; ?></td>
                            <td><?php echo $package['package_name']; ?></td>
                            <td><?php echo number_format($package['amount'], 2); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
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