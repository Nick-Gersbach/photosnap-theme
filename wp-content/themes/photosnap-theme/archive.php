<?php get_header(); ?>

  <h2 class="all-stories-from">All Stories from <?php the_author_posts_link() ?></h2>

           <section class="archive-stories" id="stories">
          
    <?php 
      while(have_posts()) {
        the_post();   
              $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
        ?>

   
              
              <div id="mountain-story" class="story"  style=" background: linear-gradient(rgba(20, 20, 20, 0.3), rgba(20, 20, 20, 0.3)),
          url('<?php echo $backgroundImg[0]; ?>') no-repeat center center/cover;">
              <div class="story-description">
                <h3 class="story-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                <p class="story-author">by <?php the_author_posts_link() ?></p>
              </div>
              <div class="gray-line"></div>
              <div class="read-story-link">
                <div>
                  <a class="story-link" href="<?php the_permalink(); ?>">READ STORY</a>
                </div>
                <div>
                  <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo get_theme_file_uri('/img/arrow.svg') ?>" alt="" />
                  </a>
                </div>
              </div>
            </div>



   <?php   }

   ?>

             </section>

  <div class="pagination-links">
    <?php echo paginate_links() ?>
  </div>

<?php get_footer();?>

