<?php
/**
* Template Name: Facility
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
      <div class="main_content facility-page">
        <h2 class="c-heading-2"><?php the_title();?></h2>
        <div class="accordion">
          <?php if( have_rows('section') ): while ( have_rows('section') ) : the_row(); ?>
            <h3 id="section_<?php echo get_row_index() ?>" data-target="accordion-<?php echo get_row_index() ?>"><?php echo the_sub_field('title'); ?></h3>
            <div id="accordion-<?php echo get_row_index() ?>" class="accordion-content row<?php echo (have_rows('item')) ? ' related_post' : '';?>">
              <?php if( have_rows('facility') ): while ( have_rows('facility') ) : the_row(); ?>
              <div class="facility_list-item col--6">
                <p class="item_info-title"><?php echo the_sub_field('facility_title'); ?></p>
                <div class="item_image">
                  <img src="<?php echo the_sub_field('facility_image'); ?>" alt="<?php echo the_sub_field('facility_title'); ?>">
                </div>
                <div class="item_info">
                  <div class="item_content">
                    <p><?php echo the_sub_field('facility_excerpt'); ?></p>
                    <?php if(get_sub_field('facility_url')) : ?>
                    <a class="more" href="<?php echo the_sub_field('facility_url'); ?>"><?php site_text('More detail');?></a>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
              <?php endwhile; endif;?>
              <?php if( have_rows('item') ): while ( have_rows('item') ) : the_row(); ?>
                <div class="col--6 related_post-item">
                  <div class="info">
                    <div class="info-title">
                      <?php echo the_sub_field('item_title'); ?>
                    </div>
                  </div>
                  <div class="image">
                    <img class="img-responsive" src="<?php echo the_sub_field('item_image'); ?>" alt="">
                  </div>
                </div>
              <?php endwhile; endif;?>
            </div>
          <?php endwhile; endif;?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
endwhile;
get_footer();
