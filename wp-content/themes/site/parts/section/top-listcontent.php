<?php

$list_content     = (array) get_field('top-listcontent');

if( count($list_content)>0 ):
?>
<div class="top-listcontent container">
  <div class="row text-center">
    <?php 
    foreach( $list_content as $item ):
      extract(shortcode_atts(array(
        'listcontent_image'       => 0,
        'listcontent_title'       => '',
        'listcontent_link'    => '',
      ), (array) $item ));
    ?>
    <div class="col--4">
      <div class="listcontent-item">
        <a href="<?php echo $listcontent_link;?>" title="">
          <div class="listcontent-img">
            <img src="<?php echo $listcontent_image;?>" alt="">
          </div>
          <h4 class="listcontent-title"><?php echo $listcontent_title;?></h4>
        </a>
      </div>
    </div>
    <?php endforeach;?>
  </div>
</div>
<?php 
endif;