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


</head>

<body style="overflow-x: hidden; background: #292C31;">
	<?php include(ROOT_PATH . "/app/includes/blog_header.php"); ?>
	<div class="main-wrapper" style="background-color:#292C31;border-color: #1E2024;">

		<section class="cta-section py-5" style="background-color:#292C31;">
			<div class="container text-center single-col-max-width" style="color:#fff;">
				<h2 class="heading">Welcome to Fitness world</h2>
				<div class="intro">Image result for fitness important
					Regular exercise and physical activity promotes strong muscles and bones. It improves respiratory, cardiovascular health, and overall health. </div>

				<div class="section search single-form-max-width pt-3 mx-auto">
					<form action="index.php" method="post" class="signup-form row g-2 g-lg-2 align-items-center">
						<div class="col-12 col-md-9">

							<input type="search-input" name="search-term" class="main_box form-control me-md-1 text-input" placeholder="Search..." style="background:#151515;color: #fff;">
						</div>
						<div class="main_box col-12 col-md-2">
							<button id="search-button" type="submit" class="btn btn-primary" style="height:37px;">Search</button>
						</div>
					</form>
					<!--//signup-form-->

				</div>
				<!--//single-form-max-width-->

			</div>
			<!--//container-->
		</section>
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
				<h2 class="text-center">Fitness Blogs</h2>
				<?php foreach ($posts as $post) : ?>

					<article class="main_box" onclick="location.href = 'blog-post.php?id=<?php echo $post['id']; ?>';"><br>
						<div class="row g-3 g-xl-0">
							<div class="col-2.5 col-xl-3">
								<img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="img-fluid post-thumb" style="width: 100%; height: auto;">
							</div>

							<div class="col">
								<h3 class="title mb-1">
									<a class="text-link" style="color:#fff;" href="blog-post.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a>
								</h3>

								<div class="meta mb-1">
									<i class="far fa-user"> <?php echo $post['username']; ?></i>&nbsp;
									<i class="far fa-calendar"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
								</div>

								<div class="intro"><?php echo html_entity_decode(substr($post['body'], 0, 150) . '...'); ?></div>

								<a href="blog-post.php?id=<?php echo $post['id']; ?>" class=" text-success ">Read More</a>


							</div>
							<!--//col-->
						</div>
						<!--//row-->
						<div><br></div>
					</article>
					<!--//item-->
					<style type="text/css">
						.HOver {
							border-radius: 25px;
							border-color: #36A749;
							border-style: solid;
						}
					</style>

				<?php endforeach; ?>

				<nav class="blog-nav nav nav-justified my-5">
					<?php if ($prevPage) : ?>
						<a class="HOver nav-link-prev nav-item nav-link rounded-left" href="index.php?page=<?php echo "$prevPage"; ?>">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
					<?php else : ?>
					<?php endif; ?>


					<?php if ($nextPage) : ?>
						<a class="HOver nav-link-next nav-item nav-link rounded-right" href="index.php?page=<?php echo "$nextPage"; ?>">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
					<?php else : ?>
					<?php endif; ?>
				</nav>

				<!--  
			    <nav class="blog-nav nav nav-justified my-5">
				  <a class="nav-link-prev nav-item nav-link d-none rounded-left" href="#">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
				  <a class="nav-link-next nav-item nav-link rounded" href="#">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
				</nav>
				 -->

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