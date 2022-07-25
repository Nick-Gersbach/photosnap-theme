<?php

get_header();
 
 $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );

  while(have_posts()) {
    the_post(); ?>


<div class="post-page-content">
  <div class="header-wrap" style="background: linear-gradient(rgba(20, 20, 20, 0.5), rgba(20, 20, 20, 0.5)), url('<?php echo $backgroundImg[0]; ?>')  no-repeat; background-size: cover; background-position: center;">
    <h1 class="blog-title-heading"><?php the_title()?></h1>
  </div>
  <p class="blog-post-meta">by <?php the_author_posts_link() ?></p>
  <?php the_content();?>
</div>


   <?php }


get_footer();

?>
