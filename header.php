<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <title>Powerful and easy to use SaaS platform</title> -->
  <?php wp_head(); ?>
  
  <style type="text/css">
     body {
      background: <?php echo get_theme_mod('saas_bodybg_bg_color', '#8275fa)'); ?>;
     
    }
    .navmenu {
      background: <?php echo get_theme_mod('saas_nav_bg_color', 'linear-gradient(135deg, #084afd, #8275fa)'); ?>;
     
    }
  </style>
</head>

<body class="bodybg">
  <header class="header">
    <div class="container">


      <!-- <img src="<?php echo get_theme_file_uri('img/images/brands.png'); ?>" alt=""> -->


      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <!-- coustom logo -->
          <a href="<?php bloginfo('charset'); ?>">
            <?php the_custom_logo() ?>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navmenu">
            <?php
            wp_nav_menu(array(
              'theme_location' => 'primary'
            ));
            ?>
            </div>
           

          </div>
        </div>
      </nav>




      <section class="hero">
        <div class="container text-center">
          <h1>The Fastest Way For Startups To Do Any Analysis</h1>
          <p>Powerful and easy to use SaaS platform.</p>
          <a href="#pricing" class="btn btn-primary">Get Started</a>
        </div>
      </section>


                <div class="card mb-3">
                  <div class="custom-header">
                    <!-- <img alt="" src="<?php header_image(); ?>" width="<?php echo absint(get_custom_header()->width); ?>" height="<?php echo absint(get_custom_header()->height); ?>"> -->
                  </div>

      </div>


      <!-- Content here -->


      <div class="container text-center">
        <div class="row">
          <div class="col">
            <div class="card" style="width: 18rem;">
              <img src="<?php echo get_theme_file_uri('img/Group 7866.png'); ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem;">
              <img src="<?php echo get_theme_file_uri('img/Group 7865.png'); ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem;">
              <img src="<?php echo get_theme_file_uri('img/Group 7864.png'); ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container text-center">
        <div class="row row-cols-2">
          <div class="col">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="<?php echo get_theme_file_uri('img/Group 7863.png'); ?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="<?php echo get_theme_file_uri('img/Group 38595.png'); ?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="<?php echo get_theme_file_uri('img/Group 36755.png'); ?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="<?php echo get_theme_file_uri('img/Group 36750.png'); ?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container text-center">
    <div class="row">
        <?php
        // Set up a custom query (customize arguments as needed)
        $args = array(
            'post_type' => 'your_custom_post_type', // or 'post' if standard posts
            'posts_per_page' => 1,
        );
        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
        ?>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-img-top" alt="<?php the_title(); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
</div>



      <!-- <div class="container text-center alert alert-success" role="alert">
        <div class="row row-cols-12">
          <div class="col">
            <div id="carouselExample" class="carousel slide">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="<?php echo get_theme_file_uri('img/about-1.png'); ?>" class="d-block w-100" alt="">
                </div>
                <div class="carousel-item">
                  <img src="<?php echo get_theme_file_uri('img/blog-1.png'); ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="<?php echo get_theme_file_uri('img/blog-2.png'); ?>" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev alert-primary" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next  alert-primary" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon " aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div> -->
     <div class="container text-center alert alert-success" role="alert">
  <div class="row row-cols-12">
    <div class="col">
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">

          <?php
          // Custom WP Query to fetch 'project' post type
          $args = array(
            'post_type'      => 'carousel',
            'posts_per_page' => 3,
            'order'          => 'ASC',
          );
          $tech_posts = new WP_Query( $args );
          $is_first = true; // Track the first item to add 'active' class

          if ( $tech_posts->have_posts() ) :
            while ( $tech_posts->have_posts() ) : $tech_posts->the_post();
          ?>
              <div class="carousel-item <?php echo $is_first ? 'active' : ''; ?>">
                <?php
                  if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'medium', array( 'class' => 'd-block w-100' ) );
                  }
                ?>
              </div>
          <?php
              $is_first = false;
            endwhile;
          endif;
          wp_reset_postdata();
          ?>

        </div>

        <button class="carousel-control-prev alert-primary" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next alert-primary" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
</div>


 <!-- <div class="owl-carousel owl-theme row row-cols-12 ">
    <div class="item col"><h4>Card title</h4></div>
    <div class="item col"><h4>Card title</h4></div>
    <div class="item col"><h4>Card title</h4></div>
    <div class="item col"><h4>Card title</h4></div>
    <div class="item col"><h4>Card title</h4></div>
    <div class="item col"><h4>Card title</h4></div>
    <div class="item col"><h4>Card title</h4></div>
    <div class="item col"><h4>Card title</h4></div>
    <div class="item col"><h4>Card title</h4></div>
    <div class="item col"><h4>Card title</h4></div>
    <div class="item col"><h4>Card title</h4></div>
    <div class="item col"><h4>Card title</h4></div>
</div> -->


  






    </div>




  </header>
</body>