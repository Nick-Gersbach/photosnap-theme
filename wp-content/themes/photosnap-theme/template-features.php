<?php

/*
Template Name: Features
*/

?>

<?php get_header(); ?>


<section id="create-and-share">
      <div class="text-dark">
        <div class="home-page-text">
          <h2>FEATURES</h2>
          <p>
            We make sure all of our features are designed to be loved by every
            aspiring and even professional photograpers who wanted to share
            their stories.
          </p>
        </div>
      </div>
      <div class="picture-img" style="background: url(<?php echo get_theme_file_uri('/img/features-hero.jpg') ?>) no-repeat center center/cover;"></div>
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
      <div class="home-feature">
        <div class="home-feature-img">
          <img src="<?php echo get_theme_file_uri('/img/custom-domain.svg') ?>" alt="" />
        </div>
        <div class="home-feature-text">
          <h3>Custom Domain</h3>
          <p>
            With Photosnap subscriptions you can host your stories on your own
            domain. You can also remove our branding!
          </p>
        </div>
      </div>
      <div class="home-feature">
        <div class="home-feature-img">
          <img src="<?php echo get_theme_file_uri('/img/boost-exposure.svg') ?>" alt="" />
        </div>
        <div class="home-feature-text">
          <h3>Boost Your Exposure</h3>
          <p>
            Users that viewed your story or gallery can easily get notifed of
            new and featured stories with our built in mailing list.
          </p>
        </div>
      </div>
      <div class="home-feature">
        <div class="home-feature-img">
          <img src="<?php echo get_theme_file_uri('/img/drag-drop.svg') ?>" alt="" />
        </div>
        <div class="home-feature-text">
          <h3>Drag & Drop Image</h3>
          <p>
            Easily drag and drop your image and get beautiful shots everytime.
            No over the top tooling to add friction to creating stories.
          </p>
        </div>
      </div>
    </section>
    <section id="beta-showcase" style="  background: linear-gradient(rgba(20, 20, 20, 0.7), rgba(20, 20, 20, 0.7)),
    url(<?php echo get_theme_file_uri('/img/bg-beta.jpg') ?>) no-repeat center center/cover;">
      <div class="beta-showcase-text">
        <h2 class="beta-showcase-heading">
          We’re in beta. Get your invite today!
        </h2>
      </div>
      <div class="get-an-invite-text-link-dark">
        <a href="#"
          >GET AN INVITE
          <img class="arrow-img" src="<?php echo get_theme_file_uri('/img/arrow.svg') ?>" alt="arrow" />
        </a>
      </div>
    </section>


<?php get_footer();?>

