<?php

// site_get_options in inc/admin/setting
// extract( site_get_options() );
extract(shortcode_atts(array(
    'hotline'		=> '',
    'appointment_url'		=> '',
    'logo' => ''
), (array) get_field('top', 'option') ));

$languages = site_pll_the_languages( array(
	'hide_if_empty' => 0,
	'echo' => 0,
	'raw' => 1,
) );
extract(shortcode_atts(array(
    'facebook_url'      => '',
    'youtube_url'       => '',
), (array) get_field('social', 'option') ));

extract(shortcode_atts(array(
    'appointment_url'   => '',
    'inquiry_url'   => '',
), (array) get_field('top', 'option') ));

?>
<header id="top-nav">
    <div class="nav_top">
        <div class="logo">
            <a href="<?php echo home_url();?>">
                <img src="<?php echo $logo ?>" alt="DYM">
            </a>
        </div><!-- end .logo -->
        <div class="nav_menu hidden-sp">
            <div class="menu-wrapper">
                <div class="menu-second hidden-sp text-right">
                    <div class="hotline">
                        hotline <a href="tel:<?php echo $hotline;?>"><?php echo $hotline;?></a>
                    </div><!-- end .hotline -->
                    <div class="language">
                        <ul>


                            <?php $i = 1; foreach( $languages as $lang ): ?>
                            <li>
                                <a href="<?php echo $lang['url'];?>"><?php echo $lang['name'];?></a>
                                <?php
                                if( $i++<count($languages) ) {
                                    echo '/';
                                }
                                ?>
                            </li>
                            <?php endforeach;?>

                            <li>
                                /
<a href="https://jp-dymmedicalcenter.com.vn/">日本語</a>
                            </li>
                        </ul>
                    </div><!-- end .language -->
                </div><!-- end .menu-second -->
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_class' => 'main_menu menu-lang-'.getCurrentLanguageCode(),
                        'container' => false,
                        'depth' => 2,
                        'link_before' => '<span>',
                        'link_after' => '</span>',
                        'walker' => new Site_Walker_Nav_Menu()
                    ) );
                ?>
                <div class="nav_booking hidden-pc">
                    <a href="<?php site_the_permalink($inquiry_url);?>" title="book reservation">
                        <img src="<?php site_the_assets();?>img/common/icon_file.png" alt="DYM">
                        <?php site_text('Inquiry');?>
                    </a>
                    <a href="<?php site_the_permalink($appointment_url);?>" title="book reservation">
                        <img src="<?php site_the_assets();?>img/common/icon_calendar.png" alt="DYM">
                        <?php site_text('Appointment');?>
                    </a>
                </div><!-- end .nav_booking -->
                <div class="menu-second hidden-pc">
                    <div class="hotline">
                        hotline <a href="tel:<?php echo $hotline;?>"><?php echo $hotline;?></a>
                    </div><!-- end .hotline -->
                    <div class="language">
                        <ul>
<li>
<a href="https://dymmedicalcenter.com.vn/">VN</a>
/</li><li>
<a href="https://dymmedicalcenter.com.vn/en/">EN</a>
</li>

<!--
                            <?php $i = 1; foreach( $languages as $code => $lang ): ?>
                            <li>
                                <a href="<?php echo $lang['url'];?>"><?php echo $code;?></a>
                                <?php
                                if( $i++<count($languages) ) {
                                    echo '/';
                                }
                                ?>
                            </li>
                            <?php endforeach;?>
-->
                            <li>
                                /
<a href="https://jp-dymmedicalcenter.com.vn/">JP</a>
                            </li>
                        </ul>
                    </div><!-- end .language -->
                </div><!-- end .menu-second -->
            </div><!-- end .menu-wrapper -->
        </div><!-- end .nav_menu -->
        <div class="nav_booking hidden-sp">
                <a class="bg-blue" href="<?php site_the_permalink($inquiry_url);?>" title="<?php site_text('Inquiry');?>">
                    <img src="<?php site_the_assets();?>img/common/icon_file.png" alt="DYM">
                    <?php site_text('Inquiry');?>
                </a>
                <a class="bg-ogrange" href="<?php site_the_permalink($appointment_url);?>" title="<?php site_text('Appointment');?>">
                    <img src="<?php site_the_assets();?>img/common/icon_calendar.png" alt="DYM">
                    <?php site_text('Appointment');?>
                </a>
        </div><!-- end .nav_booking -->
<div class="hidden-pc" style="border: 2px solid; border-radius: 8px;">
<b>●<a href="https://jp-dymmedicalcenter.com.vn/">日本語<br>はこちら</a></b>
</div>
        <div class="hidden-pc show-menu">
            <img class="open-menu" src="<?php site_the_assets();?>img/common/icon_menu.svg" alt="">
            <img class="close-menu" src="<?php site_the_assets();?>img/common/icon_close.svg" alt="">
        </div>

    </div><!-- end .nav_top -->
</header>

