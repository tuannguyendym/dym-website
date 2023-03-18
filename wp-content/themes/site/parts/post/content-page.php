<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

$title = (string) get_field('title');
if( $title=='' ) {
    $title = get_the_title('','');
}
?>
<article class="section section-bg-sup section-page page-single">
  <div class="page_header">
    <div class="page_title text-center">
      <h1><?php the_title(); ?></h1>
    </div>
  </div>
  <div class="container">
    <div class="page_content">
      <?php the_content();?>
  </div>
</article>
