<?php
/**
 * Template part: menu-2
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package viaductOne
 */

?>



<div class="toggle contact-toggle">
  <div class="toggle-content">  <span class="close">x</span>

    <?php
      $post  = get_page_by_title( 'contact' );
      $output =  apply_filters( 'the_content', $post->post_content );
      echo $output;
     ?>

  </div>
</div> <!--toggle -->
