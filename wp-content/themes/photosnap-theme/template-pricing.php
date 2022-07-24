<?php

/*
Template Name: Pricing
*/
?>

<?php get_header(); ?>



<section id="create-and-share">
      <div class="text-dark">
        <div class="home-page-text">
          <h2>PRICING</h2>
          <p>
            Create a your stories, Photosnap is a platform for photographers and
            visual storytellers. It’s the simple way to create and share your
            photos.
          </p>
        </div>
      </div>
      <div class="photographer-img" style="background: url(<?php echo get_theme_file_uri('/img/pricing-hero.jpg') ?>) no-repeat center center/cover;"></div>
    </section>
    <section id="monthly-yearly-pricing">
      <div class="toggle-switch-container">
        <p>Monthly</p>
        <label class="switch">
          <input type="checkbox" />
          <span class="slider round"></span>
        </label>
        <p>Yearly</p>
      </div>
      <div class="pricing-boxes">
        <div class="price-box">
          <div class="price-box-text">
            <p class="price-box-title">Basic</p>
            <p class="price-box-description">
              Includes basic usage of our platform. Recommended for new and
              aspiring photographers.
            </p>
            <p class="price-box-price">$19.00</p>
            <p class="price-box-price-year">$200.00</p>
            <p class="price-per-month">Per month</p>
            <p class="price-per-year">Per year</p>
          </div>
          <div class="price-box-btn-dark">PICK PLAN</div>
        </div>
        <div class="price-box dark">
          <div class="price-box-text">
            <p class="price-box-title">Pro</p>
            <p class="price-box-description">
              More advanced features available. Recommended for photography
              veterans and professionals.
            </p>
            <p class="price-box-price">$39.00</p>
            <p class="price-box-price-year">$400.00</p>
            <p class="price-per-month">Per month</p>
            <p class="price-per-year">Per year</p>
          </div>
          <div class="price-box-btn-light">PICK PLAN</div>
        </div>
        <div class="price-box">
          <div class="price-box-text">
            <p class="price-box-title">Business</p>
            <p class="price-box-description">
              Additional features available such as more detailed metrics.
              Recommended for business owners.
            </p>
            <p class="price-box-price">$99.00</p>
            <p class="price-box-price-year">$1000.00</p>
            <p class="price-per-month">Per month</p>
            <p class="price-per-year">Per year</p>
          </div>
          <div class="price-box-btn-dark">PICK PLAN</div>
        </div>
      </div>
    </section>

    <section id="compare">
      <h2>COMPARE</h2>
      <table class="desktop-table">
        <tr class="table-headings">
          <th>THE FEATURES</th>
          <th>BASIC</th>
          <th>PRO</th>
          <th>BUSINESS</th>
        </tr>

        <tr>
          <td>UNLIMITED STORY POSTING</td>
          <td><img src="<?php echo get_theme_file_uri('/img/check.svg') ?>" alt="check" /></td>
          <td><img src="<?php echo get_theme_file_uri('/img/check.svg') ?>" alt="check" /></td>
          <td><img src="<?php echo get_theme_file_uri('/img/check.svg') ?>" alt="check" /></td>
        </tr>
        <tr>
          <td>UNLIMITED PHOTO UPLOAD</td>
          <td><img src="<?php echo get_theme_file_uri('/img/check.svg') ?>" alt="check" /></td>
          <td><img src="<?php echo get_theme_file_uri('/img/check.svg') ?>" alt="check" /></td>
          <td><img src="<?php echo get_theme_file_uri('/img/check.svg') ?>" alt="check" /></td>
        </tr>
        <tr>
          <td>EMBEDDING CUSTOM CONTENT</td>
          <td></td>
          <td><img src="<?php echo get_theme_file_uri('/img/check.svg') ?>" alt="check" /></td>
          <td><img src="<?php echo get_theme_file_uri('/img/check.svg') ?>" alt="check" /></td>
        </tr>
        <tr>
          <td>CUSTOMIZE METADATA</td>
          <td></td>
          <td><img src="<?php echo get_theme_file_uri('/img/check.svg') ?>" alt="check" /></td>
          <td><img src="<?php echo get_theme_file_uri('/img/check.svg') ?>" alt="check" /></td>
        </tr>
        <tr>
          <td>ADVANCED METRICS</td>
          <td></td>
          <td></td>
          <td><img src="<?php echo get_theme_file_uri('/img/check.svg') ?>" alt="check" /></td>
        </tr>
        <tr>
          <td>PHOTO DOWNLOADS</td>
          <td></td>
          <td></td>
          <td><img src="<?php echo get_theme_file_uri('/img/check.svg') ?>" alt="check" /></td>
        </tr>
        <tr>
          <td>SEARCH ENGINE INDEXING</td>
          <td></td>
          <td></td>
          <td><img src="<?php echo get_theme_file_uri('/img/check.svg') ?>" alt="check" /></td>
        </tr>
        <tr>
          <td>CUSTOM ANALYTICS</td>
          <td></td>
          <td></td>
          <td><img src="<?php echo get_theme_file_uri('/img/check.svg') ?>" alt="check" /></td>
        </tr>
      </table>

      <h3 class="mobile-table-heading">THE FEATURES</h3>

      <div class="mobile-features">
        <div class="mobile-features-container">
          <h4 class="mobile-feature-heading">UNLIMITED STORY POSTING</h4>
          <div class="mobile-features-titles">
            <p>BASIC</p>
            <p>PRO</p>
            <p>BUSINESS</p>
          </div>
          <div class="mobile-features-checks">
            <div class="check">
              <img src="<?php echo get_theme_file_uri('/img/check.svg') ?>" alt="check mark" />
            </div>
            <div class="check">
              <img src="<?php echo get_theme_file_uri('/img/check.svg') ?>" alt="check mark" />
            </div>
            <div class="check">
              <img src="<?php echo get_theme_file_uri('/img/check.svg') ?>" alt="check mark" />
            </div>
          </div>
        </div>
        <div class="mobile-features-line"></div>
        <div class="mobile-features-container">
          <h4 class="mobile-feature-heading">UNLIMITED PHOTO UPLOAD</h4>
          <div class="mobile-features-titles">
            <p>BASIC</p>
            <p>PRO</p>
            <p>BUSINESS</p>
          </div>
          <div class="mobile-features-checks">
            <div class="check">
              <img src="<?php echo get_theme_file_uri('/img/check.svg') ?>" alt="check mark" />
            </div>
            <div class="check">
              <img src="<?php echo get_theme_file_uri('/img/check.svg') ?>" alt="check mark" />
            </div>
            <div class="check">
              <img src="<?php echo get_theme_file_uri('/img/check.svg') ?>" alt="check mark" />
            </div>
          </div>
        </div>
        <div class="mobile-features-line"></div>
        <div class="mobile-features-container">
          <h4 class="mobile-feature-heading">EMBEDDING CUSTOM CONTENT</h4>
          <div class="mobile-features-titles">
            <p>BASIC</p>
            <p>PRO</p>
            <p>BUSINESS</p>
          </div>
          <div class="mobile-features-checks">
            <div class="check"></div>
            <div class="check">
              <img src="<?php echo get_theme_file_uri('/img/check.svg') ?>" alt="check mark" />
            </div>
            <div class="check">
              <img src="<?php echo get_theme_file_uri('/img/check.svg') ?>" alt="check mark" />
            </div>
          </div>
        </div>
        <div class="mobile-features-line"></div>
        <div class="mobile-features-container">
          <h4 class="mobile-feature-heading">CUSTOMIZE METADATA</h4>
          <div class="mobile-features-titles">
            <p>BASIC</p>
            <p>PRO</p>
            <p>BUSINESS</p>
          </div>
          <div class="mobile-features-checks">
            <div class="check"></div>
            <div class="check">
              <img src="<?php echo get_theme_file_uri('/img/check.svg') ?>" alt="check mark" />
            </div>
            <div class="check">
              <img src="<?php echo get_theme_file_uri('/img/check.svg') ?>" alt="check mark" />
            </div>
          </div>
        </div>
        <div class="mobile-features-line"></div>
        <div class="mobile-features-container">
          <h4 class="mobile-feature-heading">ADVANCED METRICS</h4>
          <div class="mobile-features-titles">
            <p>BASIC</p>
            <p>PRO</p>
            <p>BUSINESS</p>
          </div>
          <div class="mobile-features-checks">
            <div class="check"></div>
            <div class="check"></div>
            <div class="check">
              <img src="<?php echo get_theme_file_uri('/img/check.svg') ?>" alt="check mark" />
            </div>
          </div>
        </div>
        <div class="mobile-features-line"></div>
        <div class="mobile-features-container">
          <h4 class="mobile-feature-heading">PHOTO DOWNLOADS</h4>
          <div class="mobile-features-titles">
            <p>BASIC</p>
            <p>PRO</p>
            <p>BUSINESS</p>
          </div>
          <div class="mobile-features-checks">
            <div class="check"></div>
            <div class="check"></div>
            <div class="check">
              <img src="<?php echo get_theme_file_uri('/img/check.svg') ?>" alt="check mark" />
            </div>
          </div>
        </div>
        <div class="mobile-features-line"></div>
        <div class="mobile-features-container">
          <h4 class="mobile-feature-heading">SEARCH ENGINE INDEXING</h4>
          <div class="mobile-features-titles">
            <p>BASIC</p>
            <p>PRO</p>
            <p>BUSINESS</p>
          </div>
          <div class="mobile-features-checks">
            <div class="check"></div>
            <div class="check"></div>
            <div class="check">
              <img src="<?php echo get_theme_file_uri('/img/check.svg') ?>" alt="check mark" />
            </div>
          </div>
        </div>
        <div class="mobile-features-line"></div>
        <div class="mobile-features-container">
          <h4 class="mobile-feature-heading">CUSTOM ANALYTICS</h4>
          <div class="mobile-features-titles">
            <p>BASIC</p>
            <p>PRO</p>
            <p>BUSINESS</p>
          </div>
          <div class="mobile-features-checks">
            <div class="check"></div>
            <div class="check"></div>
            <div class="check">
              <img src="<?php echo get_theme_file_uri('/img/check.svg') ?>" alt="check mark" />
            </div>
          </div>
        </div>
        <div class="mobile-features-line"></div>
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