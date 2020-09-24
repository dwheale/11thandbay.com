<?php
/**
 * The template for displaying the restaurant menu
 * Template Name: Menu Page
 *
 * @package wt_11bay
 */


get_header();
?>
<section id="menu-intro" data-type="background" data-speed="2">
    <article>
		<div class="parallax-container">
      		<h2 class="parallax-title">Our Menu</h2>
		</div>
      <!-- /.parallax-title -->
    </article>
  </section>
  <!-- /#menu-intro -->
  <section id="menu">


<div class="container text-center menu-section">
  <div class="container">
    <div id="primary" class="content-area">
      <main id="main" class="site-main">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              
              <?php while( have_posts() ) : the_post(); ?>
                <?php the_content() ?>
              <?php endwhile; //end of the loop ?>
            </div><!-- /.col-md-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </main><!-- #main -->
    </div><!-- #primary -->
  </div><!-- /.container -->
</div><!-- /.container -->

</section>
<!-- /#menu-content -->
  

<?php
get_footer();
?>