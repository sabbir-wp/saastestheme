<?php
/*
 * Template for displaying single pages
 * Template Name: About Template
 */
get_header();

// Define the $img_url variable outside of the <div> to avoid undefined variable warning
$img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
?>

<div class="custom-header">
    <?php if ( $img_url ) : ?>
        <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="img-fluid">
    <?php endif; ?>
</div>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
