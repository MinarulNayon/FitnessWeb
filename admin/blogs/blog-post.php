<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . '/app/controllers/posts.php');

if (isset($_GET['id'])) {
  $post = selectOne('posts', ['id' => $_GET['id']]);
}
$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);

?>

<?php
	$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <title><?php echo $post['title']; ?> | 𝙃𝙖𝙘𝙠𝙚𝙧𝙍𝙖𝙜𝙚</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
	<script src="https://kit.fontawesome.com/73bf4f1cb8.js" crossorigin="anonymous"></script>
    
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.14.2/styles/monokai-sublime.min.css">
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="../../assets/css/theme-1.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/contact.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/about.css">
    

</head> 

<body style="overflow-x: hidden;">
	<style>
		a {
			color:skyblue;
		}
		h1,h2,h3,h4,h5,h6{
			color:#fff;
		}
		.main_box{
				color:#fff;
				background-color:#1E2024;
				border-color:#1E2024;
				border-style: solid;
				border-radius: 5px;
				box-shadow: 3px 3px 6px #000000;

		}
	
	</style>
    
	<?php include(ROOT_PATH . "./app/includes/blog_header.php"); ?>
    
    <div class="main-wrapper" style="background-color:#292C31; color:#fff;">
	    
	    <article class="blog-post px-3 py-5 p-md-5">
		    <div class="main_box container single-col-max-width">
			    <header class="blog-post-header">
				    <h2 class="title mb-2 ">
				    	<?php echo $post['title']; ?>
				    </h2>
				    <div class="meta mb-3">
				    	<span class="date"><i class="far fa-calendar"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i></span>
				    	<span class="time">5 min read</span>
				    	<span class="comment"><a  class="text-link" href="#">4 comments</a></span>
				    </div>
			    </header>

			    <div class="col-2.5 col-xl-12">
					<img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="img-fluid post-thumb" style="width: 100%; height: auto;" >
				</div>

			    <div class="blog-post-body">
				    
				    <p><?php echo html_entity_decode($post['body']); ?></p>
				    
				    <!-- <?php include(ROOT_PATH . "/post_example.php"); ?>
 					-->

                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>


				    
				    <h3 class="mt-5 mb-3">Video Example</h3>
				    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. </p>

				    <div class="ratio ratio-16x9">
					   <iframe width="560" height="315" src="https://www.youtube.com/embed/1nxSE0R27Gg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>					
					</div>
				   
			    </div>
				<br>
				<div class="blog-comments-section">
					<div id="disqus_thread"></div>
					<script>
					    /**
					     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT 
					     *  THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR 
					     *  PLATFORM OR CMS.
					     *  
					     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: 
					     *  https://disqus.com/admin/universalcode/#configuration-variables
					     */
					    /*
					    var disqus_config = function () {
					        // Replace PAGE_URL with your page's canonical URL variable
					        this.page.url = PAGE_URL;  
					        
					        // Replace PAGE_IDENTIFIER with your page's unique identifier variable
					        this.page.identifier = PAGE_IDENTIFIER; 
					    };
					    */
					    
					    (function() {  // REQUIRED CONFIGURATION VARIABLE: EDIT THE SHORTNAME BELOW
					        var d = document, s = d.createElement('script');
					        
					        // IMPORTANT: Replace 3wmthemes with your forum shortname!
					        s.src = 'https://3wmthemes.disqus.com/embed.js';
					        
					        s.setAttribute('data-timestamp', +new Date());
					        (d.head || d.body).appendChild(s);
					    })();
					</script>
					<noscript>
					    Please enable JavaScript to view the 
					    <a href="https://disqus.com/?ref_noscript" rel="nofollow">
					        comments powered by Disqus.
					    </a>
					</noscript>
				</div><!--//blog-comments-section-->
				
		    </div><!--//container-->
	    </article>
	    
	    <?php include("./app/includes/footer.php");?>
    
    </div><!--//main-wrapper-->
     <!-- Javascript -->          
    <script src="../../assets/plugins/popper.min.js"></script> 
    <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    
    <!-- Page Specific JS -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.14.2/highlight.min.js"></script>

    <!-- Custom JS -->
    <script src="../../assets/js/blog.js"></script> 

    <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-6177e62d8343a2a6"></script>

    

</body>
</html> 

