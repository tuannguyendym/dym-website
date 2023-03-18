<?php
/**
* Template Name: Access
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
while ( have_posts() ) : the_post();
?>
<div class="page_header">
  <div class="page_title text-center">
    <h1><?php the_title();?></h1>
  </div>
</div>
<div class="container">
  <div class="row page_content">
    <div class="col--4 sidebar_wrapper">
      <?php include get_theme_file_path('sidebar.php'); ?>
    </div>
    <div class="col--8 main_wrapper">
      <div class="main_content access-page">
        <?php if( have_rows('section') ): while ( have_rows('section') ) : the_row(); ?>
          <h2 id="section_<?php echo get_row_index() ?>" class="c-heading-2"><?php echo the_sub_field('title'); ?></h2>
          <?php if( have_rows('info_box') ): while ( have_rows('info_box') ) : the_row(); ?>
            <div class="info-box">
              <h5><?php echo the_sub_field('title'); ?></h5>
              <p><?php echo the_sub_field('content'); ?></p>
            </div>
          <?php endwhile; endif; ?>
          <?php echo the_sub_field('content'); ?>
          <?php if( have_rows('item') ): ?>
            <div class="related_post row">
              <?php while ( have_rows('item') ) : the_row(); ?>
                <div class="col--12 related_post-item">
                  <div class="info">
                    <div class="info-title">
                      <?php echo the_sub_field('item_title'); ?>
                    </div>
                  </div>
                  <div class="image">
                    <img class="img-responsive" src="<?php echo the_sub_field('item_image'); ?>">
                  </div>
                </div>
              <?php endwhile;?>
            </div>
          <?php endif; ?>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </div>
</div>
<?php
endwhile;
get_footer();
