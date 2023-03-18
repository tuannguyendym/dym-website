<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

// site_get_options in inc/admin/setting
// extract( site_get_options() );

extract(shortcode_atts(array(
    'facebook_url'		=> '',
    'youtube_url'	    => '',
), (array) get_field('social', 'option') ));

extract(shortcode_atts(array(
    'appointment_url'	=> '',
    'inquiry_url'	=> '',
), (array) get_field('top', 'option') ));

?>
<footer>
    <div class="footer_1">
        <div class="container">
            <div class="row">
<!--
                <div class="col--6 inquiry">
                    <a class="bg-blue" href="<?php site_the_permalink($inquiry_url);?>">
                        <img class="btn_icon" src="<?php site_the_assets();?>img/common/icon_file.png">
                        <span><?php site_text('Inquiry');?></span>
                        <img class="btn_arrow" src="<?php site_the_assets();?>img/common/arrow-forward_white.png">
                    </a>
                </div>
                <div class="col--6 visit">
                    <a class="bg-ogrange" href="<?php site_the_permalink( $appointment_url );?>">
                        <img class="btn_icon" src="<?php site_the_assets();?>img/common/icon_calendar.png">
                        <span><?php site_text('Appointment');?></span>
                        <img class="btn_arrow" src="<?php site_the_assets();?>img/common/arrow-forward_white.png">
                    </a>
                </div>
-->
            </div>
        </div>
    </div>
    <div class="footer_2">
        <div class="container">
            <div class="address text-center">
                <?php
                // Post Type `Info` ID : 39
                $p = site_get_post(  498  );
                if( is_object($p) ) {
                    echo $p->post_content;
                }
                ?>
            </div><!-- end .address -->
            <div class="row copyright">
                <div class="col--6">
                    <?php the_privacy_policy_link(); ?>
                    <a href="<?php echo $facebook_url;?>" target="_blank"><img src="<?php site_the_assets();?>img/common/icon-facebook.png" alt="Facebook">Facebook</a>
                    <a href="<?php echo $youtube_url;?>" target="_blank"><img src="<?php site_the_assets();?>img/common/icon-youtube.png" alt="Youtube">Youtube</a>
                </div><!-- end .col--6 -->
                <div class="col--6">
                    <?php site_text('© Copyright 2020 DYM Medical Center Vietnam. All rights reserved.');?>
                </div><!-- end .col--6 -->
            </div><!-- end .row -->
        </div><!-- end .container -->
    </div>
    <div class="overlay" style="display: none; opacity: 1;"></div><!-- end .overlay -->
    <div class="backtop">
        <img src="<?php site_the_assets();?>img/common/icon-up.png" alt="">
    </div><!-- end .backtop -->
</footer>
</div>
<?php wp_footer(); ?>

<script type="text/javascript">
  (function () {
    var tagjs = document.createElement("script");
    var s = document.getElementsByTagName("script")[0];
    tagjs.async = true;
    tagjs.src = "//s.yjtag.jp/tag.js#site=lzQZQhV";
    s.parentNode.insertBefore(tagjs, s);
  }());
</script>
<noscript>
  <iframe src="//b.yjtag.jp/iframe?c=lzQZQhV" width="1" height="1" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</noscript>
</body>
</html>
