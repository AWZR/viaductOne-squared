<?php
/**
 * Template Name: Squares
 * The template for displaying the squares page
 *
 * This is the template that displays the front page by default.
 *
 * @package viaductOne-squared
 */

get_header();

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">


<div class="container-cards">


			<?php
				dynamic_sidebar( 'square01');
				dynamic_sidebar( 'square02');
				dynamic_sidebar( 'square03');
				dynamic_sidebar( 'square04');


			?>

</div>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
//get hidden content
get_template_part( 'template-parts/cards' );

get_footer();
