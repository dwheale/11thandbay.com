<?php
/**
 * The template for displaying the events page
 * Template Name: Events Page
 *
 * @package wt_11bay
 */
 get_header();
 ?>

  <section id="events-intro" data-type="background" data-speed="2">
    <article>
      <h1 class="parallax-title">GET TOGETHER</h1>
      <!-- /.parallax-title -->
    </article>
  </section>
  <!-- /#events-intro -->
  <section id="events">
    <div class="container text-center">

      <div class="upcomming-events"> 
      <div class="row">
        <div class="col-12 text-left">
          <?php while( have_posts() ) : the_post(); ?>
            <?php the_content() ?>
          <?php endwhile; //end of the loop ?>
          
        </div>
        <!-- /.col-12 text-left -->
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
    
    
    
  </section>
  <!-- /#events -->

  <?php
get_footer();
?>