<?php
/**
* Template Name: Why Choose
*
* @package WordPress
* @subpackage Twenty_Twelve
* @since Twenty Twelve 1.0
*/

get_header();
// Start the Loop.
?>
<div class="page_header">
  <div class="page_title text-center">
    <h1><?php the_title(); ?></h1>
  </div>
</div>
<div class="container">
  <div class="row page_content">
    <div class="col--4 sidebar_wrapper">
      <?php include get_theme_file_path('sidebar.php'); ?>
    </div>
    <div class="col--8 main_wrapper">
      <div class="main_content about-page">
        <h2 class="c-heading-2">
        <?php // Get First Repeater Row
        $first_row = true;
        if ( have_rows( 'section' ) ) : ?>
          <?php while ( $first_row && have_rows( 'section' ) ) : the_row(); ?>
            <div><?php the_sub_field( 'title' ); ?></div>
            <?php $first_row = false;
          endwhile; ?>
        <?php endif;  ?>
      </h2>
        <div class="why-content">
          <?php
          if( have_rows('whychose') ):?>
              <?php
              $i=0;
              while( have_rows('whychose') ) : the_row();
                $i++;
                $img_value = get_sub_field('image');
                $title_value = get_sub_field('title');
                $content_value = get_sub_field('content');
                $url_value = get_sub_field('url');
                ?>
                <div class="choose-group">
                  <div class="image"><img src="<?php echo $img_value;?>" alt=""></div>
                  <div class="content">
                    <h3><span><?php echo $i; ?>.</span> <?php echo $title_value; ?></h3>
                    <?php if ($url_value) { ?>
                      <p><a href="<?php echo $url_value; ?>" title=""><?php echo $content_value; ?></a> <img src="<?php site_the_assets();?>img/common/arrow-forward_blue.png" alt=""></p>
                    <?php } else { ?>
                      <p><?php echo $content_value; ?></p>
                    <?php } ?>
                  </div>
                </div>
                <?php
              endwhile;
              ?>
            <?php
          endif;
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
get_footer();
