<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package viaductOne-squared
 */

?>




</div><!-- #content -->

<footer id="colophon" class="site-footer">
	<div class="site-info">


	<span>&copy;</span>
	<?php echo date('Y');
	?>
	<a href="http://viaduct.one"><span class="footer-logo">viaduct<sup>1</sup></span></a>
	<span>&middot;</span>


	<a class="privacy">legal</a>
	<span>&middot;</span>
	<a class="login">login</a>






	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php
get_template_part( 'template-parts/about', 'page' );
get_template_part( 'template-parts/contact', 'page' );
get_template_part( 'template-parts/login-form', 'page' );
get_template_part( 'template-parts/privacy', 'page' );


 ?>

<?php wp_footer(); ?>




</body>
</html>
