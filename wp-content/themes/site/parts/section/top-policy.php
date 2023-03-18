<!--/000t/-->

<?php

$list_content     = (array) get_field('policy_01');

if($list_content){
echo $field_name;
}else{
//echo "aaa";
}

if( count($list_content)>0 ):
?>


<div  class="hidden-pc">
    <?php 
    foreach( $list_content as $item ):
      extract(shortcode_atts(array(
        'img_01'       => 0,
        'test_01'       => '',
        'test_e02'    => '',
      ), (array) $item ));
    ?>
<p>
<img width="50%" style="display: block; margin: auto;"  src="<?php echo $img_01;?>" alt="">
<b><?php echo $test_01;?></b><br>
<?php echo $test_e02;?>
</p>
</br>
    <?php endforeach;?>
</div>
<div  class="hidden-sp">
<ul style="list-style-type: none;">
    <?php 
    foreach( $list_content as $item ):
      extract(shortcode_atts(array(
        'img_01'       => 0,
        'test_01'       => '',
        'test_e02'    => '',
      ), (array) $item ));
    ?>
<li style="display: inline; width: 19%; height: 400px; display: inline-block; vertical-align: top;" >
<img width="80%"  src="<?php echo $img_01;?>" alt="">
<b><?php echo $test_01;?></b><br>
<?php echo $test_e02;?></li>
    <?php endforeach;?>
</ul>
</div>








<?php 
endif;