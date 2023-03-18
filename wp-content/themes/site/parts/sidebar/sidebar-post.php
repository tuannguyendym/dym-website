<div class="widget widget-menu">
  <ul class="navigation"> 
    <?php
    $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => -1) );
    if( $related ) foreach( $related as $post ) {  setup_postdata($post);?>
      <li class="menu-item">
        <a class="nav-link" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
      </li>
    <?php }
    wp_reset_postdata(); ?>
</ul>
</div>