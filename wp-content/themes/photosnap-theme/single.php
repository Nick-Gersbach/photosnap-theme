<?php

get_header();

  while(have_posts()) {
    the_post(); ?>


<div class="post-page-content">
  <h1 class="blog-title-heading"><?php the_title()?></h1>
  <p class="blog-post-meta">by <?php the_author_posts_link() ?></p>
  <?php the_content();?>
</div>


   <?php }


get_footer();

?>
