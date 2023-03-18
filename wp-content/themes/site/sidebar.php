<?php $contact = get_field('contact', 'option'); ?>
<div class="sidebar">
  
      <?php
      if (is_page()) {
        switch (get_page_template_slug()) :
          case 'page-templates/doctor.php' :
            break;

          case 'page-templates/about.php' :
            include get_theme_file_path('parts/sidebar/sidebar-about.php');
            break;
          case 'page-templates/why-choose.php' :
            include get_theme_file_path('parts/sidebar/sidebar-about.php');
            break;
            
          default:
            include get_theme_file_path('parts/sidebar/sidebar.php');
          break;
        endswitch;
      } elseif (is_singular()) {
        include get_theme_file_path('parts/sidebar/sidebar-post.php');
      }
      ?>

  <div class="widget widget-block">
    <p><b><?php site_text('Opening Hours');?></b></p>
    <?php echo $contact['opening_hours_'.pll_current_language()]; ?>
  </div>
  <div class="widget widget-block">
    <p><b><?php site_text('Address');?></b></p>
    <?php echo '<p>'.$contact['address_'.pll_current_language()].'</p>'; ?>
  </div>
  <div class="widget widget-hotline">
    <p><b><?php site_text('Hotline');?><a href="tel:<?php echo $contact['hotline']; ?>"><?php echo $contact['hotline']; ?></a></b></p>
  </div>
</div>
