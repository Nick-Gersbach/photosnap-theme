<?php

get_header();

  while(have_posts()) {
    the_post(); ?>


<div class="generic-page-content">
  <h1 class="the-title-heading"><?php the_title()?></h1>
  <?php the_content();?>
</div>


   <?php }


get_footer();

?>
