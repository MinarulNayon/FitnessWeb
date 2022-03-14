<style>
  .thm{
    color:#fff;
    background-color:#1E2024;
    border-color:#1E2024;
    border-style: solid;
    border-radius: 5px;
    box-shadow: 4px 4px 8px #000000;
  }
@media only screen and (min-width:1000px){
   .sld{
    margin-left: -80px;
    margin-right: -80px;
   }
}

</style>

<!-- Post Slider -->
    <div class="post-slider sld">
      <h3 class="slider-title">GYM TRAND</h3>
      <i class="fas fa-chevron-left prev" style="color:#36A749;"></i>
      <i class="fas fa-chevron-right next"style="color:#36A749;"></i>

      <div class="post-wrapper">

        <?php foreach ($posts as $post): ?>
          <div class="post">
            <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="slider-image">
            <div class="post-info thm">
              <h4><a href="blog-post.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h4>
              <i class="far fa-user"> <?php echo $post['username']; ?></i>
              &nbsp;
              <i class="far fa-calendar"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
            </div>
          </div>
        <?php endforeach; ?>


      </div>

    </div>
    <!-- // Post Slider -->