<?php
//get_template_part( 'template-parts/homepage.php', 'content-homepage.php');
get_header();
?>
<div class="container text-center">
  <div class="row">
    <div class="col-md-8">

      <div class="row">

        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>

            <div class="col-md-4">
              <div class="card">
                <div class="card-img-top">
                  <a href="<?php the_permalink();?>"><?php the_post_thumbnail('thumbnail') ?></a>
                </div>
                <div class="card-body">

                  <h5 class="card-title"><a href="<?php the_permalink();?>"><?php the_title(''); ?></a></h5>
                  <p class="card-text"><?php the_excerpt();?></p>
                  <a href="<?php the_permalink();?>"><button type="button" class="btn btn-success">Go somewhere</button> </a>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>

            <div class="col-12">
                <div class="btn"> <?php echo paginate_links()?> </div>
            </div>
      </div>



    </div>
    <div class="col-md-4 ">
    <div class="sidebar">
    <?php
      get_sidebar()
      ?>
    </div>
      
    </div>

  </div>


  <div class="col"> <?php get_footer() ?> </div>

</div>
</div>