<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="../../assets/css/style_dash.css">

    <!-- Admin Styling -->
    <link rel="stylesheet" href="../../assets/css/admin.css">

    <title>Admin Section - Manage Bliogs</title>
</head>

<body>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        html {
            box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        .column {
            float: left;
            width: 33.3%;
            margin-bottom: 16px;
            padding: 0 8px;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 8px;
        }

        .about-section {
            padding: 50px;
            text-align: center;
            background-color: #474e5d;
            color: white;
        }

        .container {
            padding: 0 16px;
        }

        .container::after,
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .title {
            color: grey;
        }

        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }

        .button:hover {
            background-color: #555;
        }

        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }
    </style>

    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

    <!-- Admin Page Wrapper -->
    <div class="admin-wrapper">

        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>


        <!-- Admin Content -->
        <div class="admin-content">
            <div class="about-section">
                <h1 style="text-align:center;color:#fff;">Blogs</h1>
            </div>

            <div class="button-group" style="margin-top: 20px;margin-bottom:10px;">
                <a href="create.php" class="btn btn-big">Add Blog</a>
            </div>

            <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

            <div class="row">
                <?php foreach ($posts as $post) : ?>
                    <div class="column">
                        <div class="card" style="cursor: pointer;" onclick="location.href = 'blog-post.php?id=<?php echo $post['id']; ?>';">
                            <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="Jane" style="width:100%;height:300px;">
                            <div class="container">
                                <h2><?php echo $post['username']; ?></h2>
                                <p class="title"><?php echo $post['title']; ?></p>
                                <p><?php echo html_entity_decode(substr($post['body'], 0, 150) . '...'); ?></p>
                                <p><i class="far fa-calendar"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i></p>
                                <p> <a href="blog-post.php?id=<?php echo $post['id']; ?>" class=" text-success ">Read More</a></p>
                                <p> <a href="edit.php?id=<?php echo $post['id']; ?>" class="text-success"><i class="fa fa-edit"></i></a></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>



        </div>
        <!-- // Admin Content -->

    </div>
    <!-- // Page Wrapper -->



    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Ckeditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
    <!-- Custom Script -->
    <script src="../../assets/js/scripts.js"></script>

</body>

</html>