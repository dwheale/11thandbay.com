<?php
/**
 * The template for displaying custom pages
 * Template Name: Custom Page
 *
 * @package wt_11bay
 */
$header_image = get_field('header_image');

$sunday_hours = get_field('sunday_hours');
$monday_hours = get_field('monday_hours');
$tuesday_hours = get_field('tuesday_hours');
$wednesday_hours = get_field('wednesday_hours');
$thursday_hours = get_field('thursday_hours');
$friday_hours = get_field('friday_hours');
$saturday_hours = get_field('saturday_hours');

get_header();
?>

<?php if(!empty($header_image)) :  ?>    
<style>
.parallax-background {
  /*background-image:url('<?php echo $header_image ?>') 100% 0 repeat fixed; */
  background: url('<?php echo $header_image ?>') 0 0 repeat fixed;
  filter:blur(0px);
}
</style>
  <section id="parallax-intro" class="parallax-intro parallax-background" data-type="background" data-speed="0" >
      <article>
		  <div class="parallax-container">
        <h2 class="parallax-title"><?php the_title() ?></h2><!-- /.parallax-title -->
		  </div>
      </article>
  </section><!-- /.parallax-intro.parallax-background -->
<?php endif; ?>

  <div class="container">
    <div id="primary" class="content-area">
      <main id="main" class="site-main">
        <div class="container pt-5">
          <div class="row mt-5">
            <div class="col-md-12">
				<?php if(empty($header_image)) : ?>
              <h2 class="text-center"><?php the_title() ?></h2>
				<?php endif; ?>
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
