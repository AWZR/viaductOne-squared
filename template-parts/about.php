<?php
/**
 * Template part: menu-1
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package viaductOne
 */

?>



<div class="toggle about-toggle">
  <div class="toggle-content">  <span class="close">x</span>

    <div class="about-container">

      <?php
        $post  = get_page_by_title( 'about' );
        $output =  apply_filters( 'the_content', $post->post_content );
        echo $output;
      ?>

    </div>

  </div>
</div> <!--toggle -->
