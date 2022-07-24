<!DOCTYPE html>
<html lang="en">
<head>
  <?php wp_head();?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PhotoSnap</title>
</head>
<body>
   <!-- Mobile Menu Buttons -->
    <div class="open-mobile">
      <img class="open-menu" src="<?php echo get_theme_file_uri('/img/menu.svg') ?>" alt="open mobile menu" />
    </div>
    <div class="container">
      <header>
        <nav>
          <div class="logo">
            <a href="<?php echo site_url()?>">
              <img src="<?php echo get_theme_file_uri('/img/logo.svg') ?>" alt="photo snap logo" />
            </a>
          </div>
          <ul class="nav-menu">
            <li><a href="<?php echo site_url('/blog')?>">STORIES</a></li>
            <li><a href="<?php echo site_url('/features')?>">FEATURES</a></li>
            <li><a href="<?php echo site_url('/pricing')?>">PRICING</a></li>
            <li><a class="mobile-nav-btn" href="#">GET AN INVITE</a></li>
          </ul>
          <div class="nav-cta-btn">
            <a href="#">
              <button class="nav-btn">GET AN INVITE</button>
            </a>
          </div>
        </nav>
      </header>
    </div>
  
