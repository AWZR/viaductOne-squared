<?php
/**
 * Template part: cards
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


<div class="toggle cardOne-toggle">
  <div class="toggle-content">  <span class="close">x</span>

      <?php
        $post  = get_page_by_title( 'card01' );
        $output =  apply_filters( 'the_content', $post->post_content );
        echo $output;
      ?>

    </div>
</div> <!--toggle -->



<div class="toggle cardTwo-toggle">
  <div class="toggle-content">  <span class="close">x</span>

      <?php
        $post  = get_page_by_title( 'card02' );
        $output =  apply_filters( 'the_content', $post->post_content );
        echo $output;
      ?>

    </div>
</div> <!--toggle -->


<div class="toggle cardThree-toggle">
  <div class="toggle-content">  <span class="close">x</span>

      <?php
        $post  = get_page_by_title( 'card03' );
        $output =  apply_filters( 'the_content', $post->post_content );
        echo $output;
      ?>

    </div>
</div> <!--toggle -->

<div class="toggle cardFour-toggle">
  <div class="toggle-content">  <span class="close">x</span>

      <?php
        $post  = get_page_by_title( 'card04' );
        $output =  apply_filters( 'the_content', $post->post_content );
        echo $output;
      ?>

    </div>
</div> <!--toggle -->
