<?php
/**
* Template Name: Internal Medicine
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
      <div class="main_content medicine-page">
        <h2 class="c-heading-2"><?php the_title() ?></h2>
        <div class="accordion">
          <?php if( have_rows('section') ): while ( have_rows('section') ) : the_row(); ?>
          <h3 id="section_<?php echo get_row_index() ?>" data-target="accordion-<?php echo get_row_index() ?>"><?php echo the_sub_field('title'); ?></h3>
          <div id="accordion-<?php echo get_row_index() ?>" class="accordion-content <?php echo (have_rows('item')) ? 'related_post row' : ''; ?>">
            <?php if( have_rows('info_box') ): while ( have_rows('info_box') ) : the_row(); ?>
              <div class="info-box">
                <div class="info-box-icon" style="background-color: <?php echo the_sub_field('background'); ?>">
                  <img src="<?php echo the_sub_field('icon'); ?>" alt="<?php echo the_sub_field('title'); ?>">
                </div>
                <div class="info-box-content">
                  <h4><?php echo the_sub_field('title'); ?></h4>
                  <h6><?php echo the_sub_field('subtitle'); ?></h6>
                  <?php echo the_sub_field('content'); ?>
                </div>
              </div>
            <?php endwhile; endif; ?>
            <?php if( have_rows('item') ): while ( have_rows('item') ) : the_row(); ?>
              <div class="col--6 related_post-item">
                <div class="info">
                  <div class="info-title">
                    <?php the_sub_field('item_title'); ?>
                  </div>
                </div>
                <div class="image">
                  <img class="img-responsive" src="<?php the_sub_field('item_image'); ?>">
                </div>
              </div>
            <?php endwhile; endif; ?>
          </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
endwhile;
get_footer();
