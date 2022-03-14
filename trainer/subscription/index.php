<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/subscription.php");
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

    <title>Trainer Section - Manage Subscription</title>
    <style>
        .btn-danger {
            background-color: red;
            color: #fff;
        }
    </style>
</head>

<body>

    <?php include(ROOT_PATH . "/app/includes/trainerHeader.php"); ?>

    <!-- Admin Page Wrapper -->
    <div class="admin-wrapper">

        <?php include(ROOT_PATH . "/app/includes/trainerSidebar.php"); ?>


        <!-- Admin Content -->
        <div class="admin-content">

            <div class="content">
                <div class="button-group" style="margin-top: 20px;margin-bottom:10px;">
                    <a href="create.php" class="btn btn-big">Add Subscription Package</a>
                </div>

                <h2 class="page-title">Subscription Packages</h2>

                <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

                <table>
                    <thead>
                        <th>Package ID</th>
                        <th>Package Name</th>
                        <th>Price</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        <?php


                        $q = "select * from subscriptions";
                        $result = mysqli_query($conn, $q);

                        $num_rows = mysqli_num_rows($result);

                        for ($i = 1; $i <= $num_rows; $i++) {
                            $row = mysqli_fetch_array($result);

                        ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['package_name']; ?></td>
                                <td><?php echo number_format($row['amount'],2); ?></td>
                                <td><a href="edit.php?id=<?php echo $row["id"]; ?>" class="btn btn-info">Edit</a></td>
                                <td><a href="index.php?delete_id=<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a></td>
                            </tr>
                        <?php }
                        ?>

                    </tbody>
                </table>

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