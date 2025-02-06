<div class="container text-center">
  <div class="row">
    <?php 
    /*
     * Template for displaying single pages
     * Template Name: Page Template
     */
    get_header();
    $img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
    ?>

    <div class="custom-header col-12 mb-4">
        <?php if ( $img_url ) : ?>
            <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="img-fluid">
        <?php endif; ?>
    </div>

    <div class="col-12">
      <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>
              <h1 class="mb-3"><?php the_title(); ?></h1>
              <p><?php the_content(); ?></p>
          <?php endwhile; ?>
      <?php endif; ?>
    </div>

    <?php get_footer(); ?>
  </div>
</div>

