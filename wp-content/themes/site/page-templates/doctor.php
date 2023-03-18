<?php
/**
* Template Name: Doctor
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
$categories = get_terms( 'doctor-category', array('parent' => 0, 'hide_empty' => true ) );
$cat_id = (isset($_GET['id'])) ? $_GET['id'] : '';
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
      <div class="main_content doctor-page">
        <div class="row">
          <div class="col--6">
            <h2 class="c-heading-2 border-0"><?php the_title();?></h2>
          </div>
          <div class="col--6">
            <div class="filter">
              <span><?php site_text('Filter');?></span>
              <select>
              <?php if ($categories) : ?>
                <option value=""><?php site_text('All');?></option>
              <?php
              foreach ($categories as $category) {
                if ($cat_id != $category->term_id) {
                  echo '<option value="'.$category->term_id.'">'.$category->name.'</option>';
                } else {
                  echo '<option value="'.$category->term_id.'" selected>'.$category->name.'</option>';
                }
              }
              ?>
              <?php else : ?>
                <option value="a-z" <?php echo ($cat_id == 'a-z') ? 'selected' : ''; ?>>A - Z</option>
                <option value="z-a" <?php echo ($cat_id == 'z-a') ? 'selected' : ''; ?>>Z - A</option>
              <?php endif; ?>
              </select>
            </div>
          </div>
        </div>
        <div class="doctor_list">
          <?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $limit = 8;
          $args = array(
            'posts_per_page' => $limit,
            'paged' => $paged,
            'post_type' => 'doctor'
          );
          if ($cat_id != '') {
              $args['tax_query'] = array(
                'relation' => 'AND',
                array(
                  'taxonomy' => 'doctor-category',
                  'field'    => 'id',
                  'terms'    => $cat_id,
                )
              );
          }
          $doctors = new WP_Query($args);
          if ($doctors->have_posts()) : while ($doctors->have_posts()) : $doctors->the_post();
          $content = get_post_field( 'post_content', get_the_ID() );
          $thumb = get_the_post_thumbnail_url(get_the_ID(), 'full');
          if ($thumb == '') {
            $thumb = site_get_assets('img/common/default_doctor.png');
          }
          $content_parts = get_extended( $content );
          $categories = get_the_terms( get_the_ID(), 'doctor-category');
          $doctor_cat = '';
          if (is_array($categories)) {
            foreach ($categories as $key => $category) {
              if ($key == 0) {
                $doctor_cat .= $category->name;
              } else {
                $doctor_cat .= ', '.$category->name;
              }
            }
          }
          ?>
            <!-- Doctor item -->
            <div class="doctor_list-item">
              <div class="item_image">
                <img src="<?php echo $thumb ?>" alt="<?php the_title(); ?>">
                <p class="item_info-title hidden-pc"><?php the_title(); ?></p>
              </div>
              <div class="item_info">
                <div class="item_content">
                  <p class="item_info-title hidden-sp"><?php the_title(); ?></p>
                  <p class="item_info-subtitle"><?php echo $doctor_cat ?></p>
                  <div class="content">
                    <?php echo preg_replace('#^<\/p>|<p>$#', '', $content_parts['main']); ?>
                  </div>
                  <div class="content_more">
                    <?php echo preg_replace('#^<\/p>|<p>$#', '', $content_parts['extended']); ?>
                  </div>
                  <?php if ($content_parts['extended'] != ''): ?>
                    <div class="showmore" data-less="<?php site_text('Show less');?>" data-more="<?php site_text('Show more');?>"><?php site_text('Show more');?></div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          <?php endwhile; endif; ?>
        </div>
        <ul class="pagination">
        <?php
          $count_doctor = pll_count_posts( pll_current_language(), array('post_type' => 'doctor') );
          $number = ceil ($count_doctor/$limit);
          if ($number > 1) {
            for ($i=1; $i <= $number; $i++) {
              if ($i == $paged) {
                echo '<li class="active"><span>'.$i.'</span></li>';
              } else {
                echo '<li><a href="?id='.$cat.'&paged='.$i.'">'.$i.'</a></li>';
              }
            }
        }
        ?>
        </ul>
      </div>
    </div>
  </div>
</div>
<?php
endwhile;
get_footer();
