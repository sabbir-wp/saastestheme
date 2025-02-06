
<?php
    /*
     * Template for displaying single posts
     * Template Name: Single Template
     */
    get_header();
    ?>



<div class="container">
  <div class="row">
  

    <div class="post-content card">
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <div class="post-image mb-4 card-img-top">
            <?php the_post_thumbnail('home-featured', array('class' => 'img-fluid')); ?>
          </div>
          
          <div class="post-title mb-3 card-body">
            <h1 class="card-title"><?php the_title(); ?></h1>
          </div>
          
          <div class="post-meta-row d-flex justify-content-center mb-4">
            <div class="post-meta mx-3">
              <strong>Author:</strong> <?php the_author(); ?>
            </div>
            <div class="post-meta mx-3">
              <strong>Posted on:</strong> <?php the_time(); ?>
            </div>
          </div>
          <div class="col-8 card-text">
          <div class="post-content text-start">
            <?php the_content(); ?>
          </div>

          </div>
          
        <?php endwhile; ?>
      <?php endif; ?>
    </div>

    <?php get_footer(); ?>
  </div>
</div>

