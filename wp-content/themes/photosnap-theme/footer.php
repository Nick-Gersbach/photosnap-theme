   <footer>
      <div class="footer-logo-socials-container">
        <ul class="social-links">
          <li>
            <a href="#"><img src="<?php echo get_theme_file_uri('/img/facebook.svg') ?>" alt="" /></a>
          </li>
          <li>
            <a href="#"><img src="<?php echo get_theme_file_uri('/img/youtube.svg') ?>" alt="" /></a>
          </li>
          <li>
            <a href="#"><img src="<?php echo get_theme_file_uri('/img/twitter.svg') ?>" alt="" /></a>
          </li>
          <li>
            <a href="#"><img src="<?php echo get_theme_file_uri('/img/pinterest.svg') ?>" alt="" /></a>
          </li>
          <li>
            <a href="#"><img src="<?php echo get_theme_file_uri('/img/instagram.svg') ?>" alt="" /></a>
          </li>
        </ul>
      </div>
      <ul class="footer-nav">
        <li><a href="<?php echo site_url()?>">HOME</a></li>
        <li><a href="<?php echo site_url('/stories')?>">STORIES</a></li>
        <li><a href="<?php echo site_url('/features')?>">FEATURES</a></li>
        <li><a href="<?php echo site_url('/pricing')?>">PRICING</a></li>
      </ul>
      <div class="footer-invite-footer-copyright">
        <div class="get-an-invite-container">
          <a href="#"
            >GET AN INVITE
            <img class="footer-arrow" src="<?php echo get_theme_file_uri('/img/arrow.svg') ?>" alt="" />
          </a>
        </div>
        <p>Copyright 2022. All Rights Reserved</p>
      </div>
    </footer>
<?php wp_footer(); ?>
</body>
</html>