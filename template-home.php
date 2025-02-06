<?php
/*
 * Template for displaying single pages
 * Template Name:Homepage Template
 */
get_header();

// Define the $img_url variable outside of the <div> to avoid undefined variable warning
$img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
?>


<div class="container text-center">

    <div class="custom-header">
        <?php if ($img_url) : ?>
            <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="img-fluid">
        <?php endif; ?>
    </div>

    <!-- <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
    <?php endwhile; ?>
<?php endif; ?> -->




<div class="row">
    <div class="col-6">

        <!-- Tab Navigation template-home -->
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#home"><?php echo get_theme_mod('saas_featured_block_1', 'WordPress') ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#menu1"><?php echo get_theme_mod('saas_featured_block_2', 'Categorized') ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#menu2"><?php echo get_theme_mod('saas_featured_block_3', 'Subscribers') ?></a>
            </li>
        </ul>

        <!-- Tab Panes -->
        <div class="tab-content"> 
            <!-- Home Tab Content with Dynamic Posts -->
            <div class="tab-pane container active bg-success" id="home">
                <?php render_posts_by_category(1); ?>
            </div>

            <!-- Menu 1 Tab Content with Dynamic List -->
            <div class="tab-pane container fade bg-danger" id="menu1">
                <?php render_posts_by_category(31); ?>
            </div>

            <!-- Menu 2 Tab Content with Static Content -->
            <div class="tab-pane container fade bg-info" id="menu2">
                <?php render_posts_by_category(32); ?>
            </div>
        </div>
    </div>

    <div class="col-4">
        <?php render_custom_post(); ?>
    </div>
</div>

<?php
function render_posts_by_category($category_id) {
    $args = array(
        'cat' => $category_id,
    );
    $tech_posts = new WP_Query($args);

    if ($tech_posts->have_posts()) : 
        while ($tech_posts->have_posts()) : $tech_posts->the_post(); 
            ?>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid rounded-start', 'alt' => get_the_title())); ?>
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h5>
                            <p class="card-text"><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p>
                            <p class="card-text">
                                <small class="text-body-secondary">Last updated <?php the_modified_time('F j, Y'); ?></small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
        endwhile; 
    else : 
        echo '<p>No posts found in this category.</p>';
    endif;
    wp_reset_postdata();
}

function render_custom_post() {
    $args = array(
        'post_type' => 'coustompost', // Ensure this is the correct post type
        'posts_per_page' => 1,
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            ?>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid rounded-start" alt="<?php the_title(); ?>">
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
    else :
        echo '<p>No custom posts found.</p>';
    endif;
}
?>

</div>
</div>
</div>

<?php get_footer(); ?>