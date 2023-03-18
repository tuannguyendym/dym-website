<?php
/**
* Template Name: Inquiry
*
* Description: Twenty Twelve loves the no-sidebar look as much as
* you do. Use this page template to remove the sidebar from any page.
*
* Tip: to remove the sidebar from all posts and pages simply remove
* any active widgets from the Main Sidebar area, and the sidebar will
* disappear everywhere.
*
* @package WordPress
* @subpackage Twenty_Twelve
* @since Twenty Twelve 1.0
*/

get_header();

?>
<div class="page_header">
  <div class="page_title text-center">
    <h1><?php (get_field('page_title')) ? the_field('page_title') : the_title();?></h1>
  </div>
</div>
<div class="container">
  <div class="row page_content">
    <div class="col--4 sidebar_wrapper">
      <?php include get_theme_file_path('sidebar.php'); ?>
    </div>
    <div class="col--8 main_wrapper">
      <div class="main_content access-page inquiry-page">
          <h2  class="c-heading-2"><?php the_title(); ?> <span><sup>*</sup> <?php site_text('is required fields');?></span></h2>

          <?php while ( have_posts() ) : the_post();
            the_content();
          endwhile;
          ?>
      </div>
    </div>
  </div>
</div>
<div class="jpopup thanks">
  <p><img src="<?php site_the_assets();?>img/common/icon_check.png" alt=""></p>
  <h3><?php site_text('THANK YOU FOR YOUR MESSAGE!');?></h3>
</div>
<div class="jpopup error">
  <h3><?php site_text('THERE WAS AN ERROR');?></h3>
  <p><?php site_text('PLEASE TRY AGAIN. THANK YOU!');?></p>
</div>
<style>
<?php
$hide_button = get_field( 'hide_button' );
if ($hide_button == 'inquiry') { ?>
  .footer_1 .inquiry{
    display: none;
  }
  .footer_1 .visit {
    margin: 0 auto;
  }
<?php } elseif ($hide_button == 'visit') { ?>
  .footer_1 .visit {
    display: none;
  }
  .footer_1 .inquiry{
    margin: 0 auto;
  }
<?php } ?>
</style>
<?php get_footer(); ?>
