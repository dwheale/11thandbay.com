<?php
/**
 * The template for displaying custom pagesx
 * Template Name: Custom Page
 *
 * @package wt_11bay
 */


get_header();
?>
  <div class="container">
    <div id="primary" class="content-area">
      <main id="main" class="site-main">
        <div class="container pt-5">
          <div class="row mt-5">
            <div class="col-md-12">
              <h2 class="text-center"><?php the_title() ?></h2>
              <?php while( have_posts() ) : the_post(); ?>
                <?php the_content() ?>
              <?php endwhile; //end of the loop ?>
            </div><!-- /.col-md-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
        

      

      </main><!-- #main -->
    </div><!-- #primary -->
  </div><!-- /.container -->
	

<?php
get_footer();
