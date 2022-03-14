<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/clients.php");
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

    <title>Trainer Section - Add Client</title>
</head>

<body>

    <?php include(ROOT_PATH . "/app/includes/trainerHeader.php"); ?>

    <!-- Admin Page Wrapper -->
    <div class="admin-wrapper">

        <?php include(ROOT_PATH . "/app/includes/trainerSidebar.php"); ?>


        <!-- Admin Content -->
        <div class="admin-content">
            <div class="button-group">
                <a href="index.php" class="btn btn-big">Manage Client</a>
            </div>


            <div class="content">

                <h2 class="page-title">Add Client</h2>

                <?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>

                <form action="create.php" method="post">
                    <div>
                        <label>Client name</label>
                        <input type="text" name="ClientName" value="<?php echo $ClientName ?>" class="text-input">
                    </div>
                    <div>
                        <label>Addess</label>
                        <input type="text" name="Address" value="<?php echo $Address ?>" class="text-input">
                    </div>
                    <div>
                        <label>Groups</label>
                        <input type="text" name="Groups" value="<?php echo $Groups ?>" class="text-input">
                    </div>
                    <div>
                        <label>Joining Date</label>
                        <input type="date" name="Date" value="<?php echo $Date ?>" class="text-input">
                    </div>

                    <div>
                        <button type="submit" name="add-client" class="btn btn-big">Save</button>
                    </div>
                </form>

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