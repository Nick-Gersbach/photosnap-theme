
<?php get_header(); ?>


<section id="stories-showcase" style="background: linear-gradient(rgba(20, 20, 20, 0.5), rgba(20, 20, 20, 0.5)), url(<?php echo get_theme_file_uri('/img/moon-of-appalacia.jpg') ?>) no-repeat center center/cover;">
      <div class="stories-showcase-text">
        <h4>LAST MONTH'S FEATURED STORY</h4>
        <h2>HAZY FULL MOON OF APPALACHIA</h2>
        <p class="story-showcase-author">
          March 2nd 2022 <span class="bold-text">by John Appleseed</span>
        </p>
        <p class="story-showcase-exerpt">
          The dissected plateau area, while not actually made up of geological
          mountains, is popularly called "mountains," especially in eastern
          Kentucky and West Virginia, and while the ridges are not high, the
          terrain is extremely rugged.
        </p>
        <div class="showcase-read-story-link">
          <a href="#"
            >READ THE STORY
            <span class="arrow-span">
              <img src="<?php echo get_theme_file_uri('/img/arrow.svg') ?>" alt="arrow" />
            </span>
          </a>
        </div>
      </div>
    </section>

    <div class="stories-text-dark-container">
      <div class="stories-text-dark">
        <h4 class="mobile-stories-h4">LAST MONTH'S FEATURED STORY</h4>
        <h2 class="mobile-stories-h2">HAZY FULL MOON OF APPALACHIA</h2>
        <p class="mobile-story-showcase-author">
          March 2nd 2022 <span class="bold-text">by John Appleseed</span>
        </p>
        <p class="mobile-story-showcase-exerpt">
          The dissected plateau area, while not actually made up of geological
          mountains, is popularly called "mountains," especially in eastern
          Kentucky and West Virginia, and while the ridges are not high, the
          terrain is extremely rugged.
        </p>
        <div class="get-an-invite-text-link-dark">
          <a href="#"
            >READ THE STORY
            <img class="arrow-img" src="<?php echo get_theme_file_uri('/img/arrow.svg') ?>" alt="arrow" />
          </a>
        </div>
      </div>
    </div>
           <section id="stories">
            
    <?php 



      while(have_posts()) {
        the_post();

            $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );

           ?>



   
              
              <div id="mountain-story" class="story"  style=" background: linear-gradient(rgba(20, 20, 20, 0.5), rgba(20, 20, 20, 0.5)),
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