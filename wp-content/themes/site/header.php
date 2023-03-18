<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<title><?php echo strip_tags(get_the_title()); ?> - <?php echo get_bloginfo( 'description' ); ?></title>
<?php if ( 0 && is_singular() && pings_open( get_queried_object() ) ) : ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif; ?>
  <?php if (is_singular()) : ?>
  <meta property="og:type" content="article">
  <?php else: ?>
  <meta property="og:type" content="website">
  <?php endif; ?>
  <meta property="og:url" content="<?php the_permalink(); ?>">
  <meta property="og:image" content="<?php site_the_assets();?>img/common/ogp.jpg">
  <meta property="og:title" content="<?php echo the_title(); ?>">
  <meta property="og:description" content="<?php echo get_bloginfo('description'); ?>">
  <meta property="og:site_name" content="<?php echo get_bloginfo(); ?>">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo the_title(); ?>">
  <meta name="twitter:description" content="<?php echo get_bloginfo('description'); ?>">
<?php wp_head(); ?>
<link href="<?php site_the_assets('favicon.png');?>" type="image/png"  rel="shortcut icon"/>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js'></script>
<script src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js'></script>
<![endif]-->
<style>body { opacity: 0; }</style>
<noscript>
<link rel="stylesheet" href="//fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600&amp;display=swap" />
<link rel="stylesheet" href="<?php site_the_assets('css/style.css');?>" />
</noscript>
</head>
<body <?php body_class(); ?>>
<div class="site site-lang-<?php echo getCurrentLanguageCode();?>">
	<?php
	site_get_template_part( 'parts/section/header');
	?>
