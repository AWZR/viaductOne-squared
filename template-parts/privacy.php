<?php
/**
 * Template part: privacy
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package viaductOne
 */

?>

<!--
      This template part contains the code to display the content of pages named "card01 - card04"
      Place content in those pages to appear in the toggles for the front-page grid
-->


<div class="privacy-toggle"><span class="close">x</span>
  <div class="privacy">

      <?php
        $post  = get_page_by_title( 'privacy policy' );
        $output =  apply_filters( 'the_content', $post->post_content );
        echo $output;
      ?>
</div>
</div> <!--toggle -->
