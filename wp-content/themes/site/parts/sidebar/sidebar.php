<?php if (get_field( "related_page" ) != '') :  ?>
 <div class="widget widget-menu">
  <ul class="navigation"> 
    <?php foreach (get_field( "related_page" ) as $key => $related_page) : ?>
    <li class="menu-item has-child <?php echo ($related_page->ID === get_the_ID()) ? 'submenu-show current-item' : '' ?>">
      <a class="nav-link"><?php echo $related_page->post_title?></a>
      <?php if( have_rows('section', $related_page->ID) ) : ?>
        <img src="<?php site_the_assets('img/common/icon_down.png') ?>" alt="">
        <ul class="submenu">
          <?php while( have_rows('section', $related_page->ID) ): the_row(); ?>
            <li><a href="<?php echo get_page_link($related_page->ID).'#section_'.get_row_index();?>" rel="#section_<?php echo get_row_index() ?>">
              <?php echo the_sub_field('title', $related_page->ID); ?>
            </a></li>
          <?php endwhile; // end loop section?>
        </ul>
      <?php endif; //if exit section?>
    </li>
  <?php endforeach; ?>
  </ul>
</div>
<?php
endif //End loop related page?>
