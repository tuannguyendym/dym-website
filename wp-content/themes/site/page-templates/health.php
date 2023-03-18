<?php
/**
* Template Name: Health Check-up
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
      <div class="main_content health-page">
        <h2 class="c-heading-2"><?php the_title();?></h2>
        <div class="accordion">
        <?php if( have_rows('section') ): while ( have_rows('section') ) : the_row(); ?>
          <h3 id="section_<?php echo get_row_index() ?>" data-target="accordion-<?php echo get_row_index() ?>"><?php echo the_sub_field('title'); ?></h3>
          <div id="accordion-<?php echo get_row_index() ?>" class="accordion-content <?php echo (have_rows('item')) ? 'related_post row' : '';?>">
            <?php echo the_sub_field('content'); ?>
            <?php if( have_rows('exam') ): ?>
              <table class="hidden-sp">
                <thead>
                  <tr>
                    <th width="25%"><?php site_text('Categories'); ?></th>
                    <th><?php site_text('Detail'); ?></th>
                    <th width="25%"><?php site_text('Price'); ?></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    while ( have_rows('exam') ) : the_row();
                    $exam_title = get_sub_field('exam_title');
                    if (get_sub_field('exam_item') != null) {
                      $count = count(get_sub_field('exam_item'));
                    } else {
                      $count = 1;
                    }
                    if( have_rows('exam_item') ):
                      while ( have_rows('exam_item') ) : the_row();
                      echo '<tr>';
                      if (get_row_index() == 1) {
                        echo '<td class="category" rowspan="'.$count.'">'.$exam_title.'</td>';
                      }
                      echo '<td><a href="'.get_sub_field('exam_item-url').'">'.get_sub_field('exam_item-title').'</a></td>
                      <td>'.get_sub_field('exam_item-price').'</td></tr>';
                    endwhile; endif;
                  endwhile;?>
                </tbody>
              </table>
              <div class="hidden-pc">
                <div class="card">
                  <?php while ( have_rows('exam') ) : the_row(); ?>
                  <div class="card-header"><?php echo the_sub_field('exam_title'); ?></div>
                  <div class="card-body">
                    <ul>
                      <?php if( have_rows('exam_item') ): while ( have_rows('exam_item') ) : the_row(); ?>
                      <li>
                        <a href="<?php echo the_sub_field('exam_item-url'); ?>">
                          <h5><?php echo the_sub_field('exam_item-title'); ?></h5>
                          <p><?php echo the_sub_field('exam_item-price'); ?></p>
                          <img src="<?php site_the_assets();?>img/common/icon_arrow-forward.png" alt="">
                        </a>
                      </li>
                      <?php endwhile; endif;?>
                    </ul>
                  </div>
                  <?php endwhile;?>
                </div>
              </div>
            <?php endif; ?>
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
        <?php endwhile; endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
endwhile;
get_footer();
