<?php

function site_install_plugins_notices() 
{
    
    $plugins = array( 
        'advanced-custom-fields-pro',
        'classic-editor',
        'duplicate-post',
        'polylang',
        'tinymce-advanced'
    );

    foreach( $plugins as $i => $name ) {
        if( file_exists( WP_CONTENT_DIR. "/plugins/$name/readme.txt" ) ) {
            unset($plugins[$i]);
        } else {
            $plugins[$i] = ucwords( str_replace('-',' ', $name ) ) . '.';
        }
    }
    
    if( count($plugins)>0 ):
	?>
	<div class="notice notice-success is-dismissible">
        <p>
            <b><?php _e( 'Please install plugins', 'site' ); ?>:</b>
            <ul><li><?php echo implode('</li><li>',$plugins); ?></li></ul>
        </p>
	</div>
	<?php
	endif;
}
add_action( 'admin_notices', 'site_install_plugins_notices' );