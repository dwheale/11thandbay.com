<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wt_11bay
 */

$sunday_hours = get_field('sunday_hours');
$monday_hours = get_field('monday_hours');
$tuesday_hours = get_field('tuesday_hours');
$wednesday_hours = get_field('wednesday_hours');
$thursday_hours = get_field('thursday_hours');
$friday_hours = get_field('friday_hours');
$saturday_hours = get_field('saturday_hours');

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <?php
		if ( have_posts() ) :


			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */

			endwhile;
		?>
          </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();