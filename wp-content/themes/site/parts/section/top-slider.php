<?php

$slider 		= (array) get_field('slider');
$contact = get_field('contact', 'option');

if( count($slider)>0 ):
?>
<div class="top-slider">
  <div class="owl-carousel">
    <?php
    foreach( $slider as $item ):
      extract(shortcode_atts(array(
        'title'       => '',
        'image'	      => 0,
        'image_sp'	  => 0,
        'description'	=> '',
        'link'	      => '',
      ), (array) $item ));
    ?>
    <div class="top-slider_item">
      <div class="left-slider container">
        <div class="row">
        <div class="desc">
          <?php if ($title) { ?>
            <div class="c-heading-1"><?php echo $title;?></div>
          <?php }
          if ($description) { ?>
            <p class="sub-heading"><?php echo $description;?></p>
          <?php }
           ?>
          <?php if($link) { ?>
          <p class="read-more">
            <a href="<?php echo $link;?>"><?php site_text('Read more');?></a>
          </p>
        <?php } ?>
        </div><!-- end .desc -->
        </div><!-- end .row -->
      </div><!-- end .left-slider -->
      <?php if( $image_sp>0 && site_is_mobile() == false ):?>
      <div class="<?php echo $image_sp>0?'hidden-sp':'';?>">
        <img class="owl-lazy" data-src="<?php echo wp_get_attachment_image_url($image>0?$image:$image,'banner');?>" alt="">
      </div>
      <?php endif;?>
      <?php if( $image_sp>0 ):?>
      <div class="hidden-pc">
        <img class="owl-lazy" data-src="<?php echo wp_get_attachment_image_url($image_sp>0?$image_sp:$image,'banner');?>" alt="">
      </div><!-- end .hidden-pc -->
      <?php endif;?>
    </div><!-- end .slider_item -->
    <?php endforeach;?>
  </div><!-- end .owl-carousel -->


	<?php echo $contact['top_text_'.pll_current_language()]; ?>
	
	
<!--	
<div class="top-listcontent container" style="font-size: large;" >
<ul>
<?php
global $post;
$args = array( 'posts_per_page' => 5, 'offset'=> 1, 'category' => 1 );
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : 
  setup_postdata( $post ); ?>
	<li><?php the_date(); ?><br>
		<b style="font-size: large;" ><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></b></li>
<?php endforeach;
wp_reset_postdata(); ?>
</ul>
</div>
-->	
	
	
	
<!--	
<div class="hidden-pc">
<video width="100%" src="http://dymmedicalcenter.com.vn/vn_mo/dym_medicalcenter_shortver.mp4" loop muted playsinline controls></video>
</br>
</div>

<div class="hidden-sp" style="text-align:center">
<video width="850" src="http://dymmedicalcenter.com.vn/vn_mo/dym_medicalcenter_shortver.mp4" loop muted playsinline controls></video>
</br>
</div>
-->

</div><!-- end .top-slider -->
<?php 
endif;