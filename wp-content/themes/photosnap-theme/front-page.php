<?php get_header(); ?>


<section id="create-and-share">
      <div class="text-dark">
        <div class="home-page-text">
          <h2>CREATE AND SHARE YOUR PHOTO STORIES.</h2>
          <p>
            Photosnap is a platform for photographers and visual storytellers.
            We make it easy to share photos, tell stories and connect with
            others.
          </p>
          <div class="get-an-invite-text-link-dark">
            <a href="#"
              >GET AN INVITE
              <img class="arrow-img" src="<?php echo get_theme_file_uri('/img/arrow.svg') ?>" alt="arrow" />
            </a>
          </div>
        </div>
      </div>
      <div class="dock-man-img" style="background: url(<?php echo get_theme_file_uri('/img/create-and-share.jpg') ?>) no-repeat center center/cover;"></div>
    </section>
    <section id="beautiful-stories">
      <div class="laptop-img"  style="background: url(<?php echo get_theme_file_uri('/img/beautiful-stories.jpg') ?>) no-repeat center center/cover;"></div>
      <div class="text-light">
        <div class="home-page-text">
          <h2>BEAUTIFUL STORIES EVERY TIME</h2>
          <p>
            We provide design templates to ensure your stories look terrific.
            Easily add photos, text, embed maps and media from other networks.
            Then share your story with everyone.
          </p>
          <div class="get-an-invite-text-link">
            <a href="#"
              >GET AN INVITE
              <img class="arrow-img" src="<?php echo get_theme_file_uri('/img/arrow-dark.svg') ?>" alt="arrow" />
            </a>
          </div>
        </div>
      </div>
    </section>
    <section id="designed-for-everyone">
      <div class="text-light">
        <div class="home-page-text">
          <h2>DESIGNED FOR EVERYONE</h2>
          <p>
            Photosnap can help you create stories that resonate with your
            audience. Our tool is designed for photographers of all levels,
            brands, businesses you name it.
          </p>
          <div class="get-an-invite-text-link">
            <a href="#"
              >GET AN INVITE
              <img class="arrow-img" src="<?php echo get_theme_file_uri('/img/arrow-dark.svg') ?>" alt="arrow" />
            </a>
          </div>
        </div>
      </div>
      <div class="camera-img" style="background: url(<?php echo get_theme_file_uri('/img/designed-for-everyone.jpg') ?>) no-repeat center center/cover;"></div>
    </section>


    <section id="stories">
      <?php 
      $homepagePosts = new WP_Query(array(
        'posts_per_page' => 4
      ));
      while($homepagePosts->have_posts()) {
        $homepagePosts->the_post(); ?>

          <div id="mountain-story" class="story" style=" background: linear-gradient(rgba(20, 20, 20, 0.3), rgba(20, 20, 20, 0.3)),
    url(<?php echo get_theme_file_uri('/img/mountains.jpg') ?>) no-repeat center center/cover;">
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

      <?php
      
    } wp_reset_postdata();

      ?>
 
      
    </section>
    <section id="home-features">
      <div class="home-feature">
        <div class="home-feature-img">
          <img src="<?php echo get_theme_file_uri('/img/responsive.svg') ?>" alt="" />
        </div>
        <div class="home-feature-text">
          <h3>100% Responsive</h3>
          <p>
            No matter which the device you’re on, our site is fully responsive
            and stories look beautiful on any screen.
          </p>
        </div>
      </div>
      <div class="home-feature middle-home-feature">
        <div class="home-feature-img">
          <img src="<?php echo get_theme_file_uri('/img/no-limit.svg') ?>" alt="" />
        </div>
        <div class="home-feature-text">
          <h3>No Photo Upload Limit</h3>
          <p>
            Our tool has no limits on uploads or bandwidth. Freely upload in
            bulk and share all of your stories in one go.
          </p>
        </div>
      </div>
      <div class="home-feature">
        <div class="home-feature-img">
          <img src="<?php echo get_theme_file_uri('/img/embed.svg') ?>" alt="" />
        </div>
        <div class="home-feature-text">
          <h3>Available to Embed</h3>
          <p>
            Embed Tweets, Facebook posts, Instagram media, Vimeo or YouTube
            videos, Google Maps, and more.
          </p>
        </div>
      </div>
    </section>
  

<?php get_footer();?>

