<?php
/**
 * The template for displaying the home page
 * Template Name: Home Page
 *
 * @package wt_11bay
 */

// ACF
$welcome_title  = get_field('welcome_title');
$welcome_message   = get_field('welcome_message');
$welcome_tag    = get_field('welcome_tag');
$welcome_signature  = get_field('welcome_signature');
$second_title  = get_field('second_title');
$second_sub_title  = get_field('second_sub_title');
$second_content  = get_field('second_content');


get_header();
?>

	<section id="welcome">
    <div class="container text-center">
      <h1 class="section-title">
        <!-- If welcome field filled out -->
        <?php if(!empty($welcome_title)) :  ?>
          <?php echo $welcome_title ?>
        <?php endif; ?>
      </h1>
      <!-- /.section-title -->
      <div class="section-content">
        <?php if(!empty($welcome_message)) :  ?>
          <?php echo $welcome_message ?>
        <?php endif; ?>
        <br>
        <h3>
          <?php if(!empty($welcome_tag)) :  ?>
            <?php echo $welcome_tag ?>
          <?php endif; ?>
        </h3>
        <p>
          <?php if(!empty($welcome_signature)) :  ?>
            <?php echo $welcome_signature ?>
          <?php endif; ?>
        </p>
      </div>
      <!-- /.section-content -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /#welcome -->

  <!-- LOCAL LOVE ================================================================ -->
  <section id="local-love-intro" data-type="background" data-speed="2">
    <article>
		<div class="parallax-container">
      <h2 class="parallax-title">
        <?php if(!empty($second_title)) :  ?>
          <?php echo $second_title ?>
        <?php endif; ?>
      </h2><!-- /.parallax-title -->
		</div>
    </article>
  </section><!-- /#local-love-intro -->
  <section id="local-love">
    <div class="container text-center">
      <h2 class="section-title">
        <?php if(!empty($second_sub_title)) :  ?>
          <?php echo $second_sub_title ?>
        <?php endif; ?>
      </h2><!-- /.section-title -->
      <div class="row">
        <?php if(!empty($second_content)) :  ?>
          <?php echo $second_content ?>
        <?php endif; ?>
      </div><!-- /.row -->
    </div><!-- /.container text-center -->
  </section><!-- /#local-love -->

<?php
get_footer();
?>