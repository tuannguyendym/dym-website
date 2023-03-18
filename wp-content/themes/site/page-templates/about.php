<?php
/**
* Template Name: About
*
* @package WordPress
* @subpackage Twenty_Twelve
* @since Twenty Twelve 1.0
*/

get_header();
// Start the Loop.
while ( have_posts() ) : the_post();
?>
<div class="page_header">
  <div class="page_title text-center">
    <h1><?php echo (get_field( "page_title" )) ? get_field( "page_title" ) : '' ?></h1>
  </div>
</div>
<div class="container">
  <div class="row page_content">
    <div class="col--4 sidebar_wrapper">
      <?php include get_theme_file_path('sidebar.php'); ?>
    </div>
    <div class="col--8 main_wrapper">
      <div class="main_content about-page">
        <h2 class="c-heading-2"><?php the_title() ?></h2>
        <div class="accordion">
        <?php if( have_rows('page_content') ): while ( have_rows('page_content') ) : the_row(); ?>
          <?php if( get_row_layout() == 'Greeting' ) : ?>
            <?php if( have_rows('section') ): while( have_rows('section') ): the_row(); ?>
              <h3 id="section_<?=get_row_index()?>" data-target="accordion-<?=get_row_index()?>">
                <?php echo the_sub_field('title'); ?>
              </h3>
              <div id="accordion-<?=get_row_index();?>" class="accordion-content">
                <?php if (get_sub_field('image')) : ?>
                <div class="info-block">
                  <div class="content-block">
                    <?php echo get_sub_field('content'); ?>
                  </div>
                  <div class="image-block">
                    <img src="<?php echo get_sub_field('image'); ?>" alt="">
                    <div class="image-caption">
                      <?php echo get_sub_field('image_caption'); ?>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <?php else : ?>
                <?php echo get_sub_field('content');?>
                <?php endif; //end section content?>
              </div>
            <?php endwhile; endif; //end layout greeting?>
          <?php elseif( get_row_layout() == 'Group' ) : ?>
            <?php if( have_rows('section') ): while( have_rows('section') ): the_row(); ?>
              <h3 id="section_<?=get_row_index()?>" data-target="accordion-<?=get_row_index()?>">
                <?php echo the_sub_field('title'); ?>
              </h3>
              <div id="accordion-<?=get_row_index();?>" class="accordion-content">
                <?php
                if( have_rows('content') ) :
                  while( have_rows('content') ): the_row();
                    if (get_sub_field('image')) {
                      echo '<img src="'.get_sub_field('image').'" alt="">';
                    }
                    if (get_sub_field('content')) {
                      echo get_sub_field('content');
                    }
                  endwhile;
                endif;
                if( have_rows('branch_info') ) : while( have_rows('branch_info') ): the_row();
                ?>
                <div class="info-box">
                  <?php if (get_sub_field('title'))
                    echo '<h5>'.get_sub_field('title').'</h5>';?>
                  <div class="row">
                  <?php if (get_sub_field('address')) : ?>
                    <div class="col--12">
                      <h6><?php site_text('Address'); ?></h6>
                      <p><?php echo get_sub_field('address'); ?></p>
                    </div>
                  <?php endif; ?>
                  <?php if (get_sub_field('tel')) : ?>
                    <div class="col--4">
                      <h6><?php site_text('Tel'); ?></h6>
                      <p><?php echo get_sub_field('tel'); ?></p>
                    </div>
                  <?php endif; ?>
                  <?php if (get_sub_field('fax')) : ?>
                    <div class="col--4">
                      <h6><?php site_text('Fax'); ?></h6>
                      <p><?php echo get_sub_field('fax'); ?></p>
                    </div>
                  <?php endif; ?>
                  <?php if (get_sub_field('contact')) : ?>
                    <div class="col--4">
                      <h6><?php site_text('Contact'); ?></h6>
                      <p><?php echo get_sub_field('contact'); ?></p>
                    </div>
                  <?php endif; ?>
                  </div>
                </div>
                <?php endwhile; endif; //End loop branch?>
              </div>
            <?php endwhile; endif; //End loop section?>
          <?php endif; //End layout group?>
        <?php endwhile; endif; //end page content?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
endwhile;
get_footer();
