<?php
/**
 * Template Name: User guide
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

// If you not admin, it will use 404 page.
if( !is_user_logged_in() ) {
    $current_user_id = get_current_user_id();
    if ( 0 == $current_user_id || is_super_admin($current_user_id) == false ) {
        // Not logged in.

        // wp_redirect( home_url('wp-login.php') );

        get_template_part( '404' );
        die;
    }
}

$url = site_get_template_directory_assets('userguide/');
$site = get_bloginfo('site');

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title><?php echo $site?> | Documentation</title>
<meta content="" name="description">
<meta content="" property="og:title" />
<meta content="website" property="og:type" />
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $url;?>css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $url;?>css/docs.css" />
</head>
<body data-target="#docs_navigation">
    <div class="header">
        <div class="container">
            <div class="row">
                <h1><?php echo $site?></h1>
                <p class="date"><span class="version">Version 1.0</span> Last Update : Aug 14, 2020</p>
            </div>
        </div><!-- class="container" -->
    </div><!-- class="header" -->
    <div class="container">
        <div class="row">
            <div class="sidebar col-sm-3">
                <div class="sidebar_overlayer"></div>
                <div id="docs_navigation" class="bs-sidebar hidden-print affix">
                    <ul class="nav bs-sidenav">
                        <li class="active" data-title="Login">
                            <a class="pa scrollto" href="#login">Login</a>
                            <ul class="nav">
                                <li><a class="scrollto" href="#url">Login URL</a></li>
                                <li><a class="scrollto" href="#account">Account</a></li>
                            </ul>
                        </li>
                        <li data-title="Page Management">
                            <a class="pa scrollto" href="#page">Page Management</a>
                            <ul class="nav">
                                <li><a class="scrollto" href="#top">Top</a></li>
                                <li>
                                    <a class="scrollto" href="#about">About</a>
                                    <ul>
                                        <li><a class="scrollto" href="#about">Greeting</a></li>
                                        <li><a class="scrollto" href="#group">Group</a></li>
                                        <li><a class="scrollto" href="#whychoose">Why Choose Us</a></li>
                                    </ul>
                                </li>
                                <li><a class="scrollto" href="#facility">Facilities</a></li>
                                <li><a class="scrollto" href="#health">Health Check-up</a></li>
                                <li><a class="scrollto" href="#medicine">Internal Medicine</a></li>
                                <li><a class="scrollto" href="#vaccination">Vaccination</a></li>
                                <li><a class="scrollto" href="#access">Access</a></li>
                            </ul>
                        </li>
                        <li data-title="Article Management">
                            <a class="pa scrollto" href="#article">Article Management</a>
                            <ul class="nav">
                                <li><a class="scrollto" href="#article-news">News</a></li>
                                <li><a class="scrollto" href="#article-doctor">Doctor</a></li>
                            </ul>
                        </li>
                        <li data-title="Common Management">
                            <a class="pa scrollto" href="#common">Common Management</a>
                            <ul class="nav">
                                <li><a class="scrollto" href="#theme">Theme Setting</a></li>
                                <li><a class="scrollto" href="#menu">Menu</a></li>
                                <li><a class="scrollto" href="#footer">Footer</a></li>
                            </ul>
                        </li>
                        <li data-title="Recommend" style="color: red; padding: 10px;">
                            Recommend:
                            <br/ >
                            Should use english name for file name when you upload file, image, etc ...
                            <p align="center">(image max size: 1600px - 1600px)</p>
                        </li>
                    </ul>
                </div><!-- class="sidebar" -->
            </div><!-- class="sidebar" -->
            <div class="primary_content col-sm-9">
                <div class="bs-docs-section">
                    <!-- Login -->
                    <div class="vg-content" id="login">
                        <div class="page-header">
                            <h2>Login</h2>
                        </div>

                        <div class="page-header">
                            <h3 id="url" class="accent entry-title">Login URL</h3>
                        </div>
                        <p>Access to http://dymmedicalcenter.com.vn//wp-admin</p>
                        <p><img src="<?php echo $url;?>img/img_login.png" alt=""></p>

                        <div class="page-header">
                            <h3 id="account" class="accent entry-title">Login Account</h3>
                        </div>
                        <ul>
                            <li><span class="accent">Username:</span> user</li>
                            <li><span class="accent">Password:</span> <i>will be sent via email</i></li>
                        </ul>
                    </div>
                    <!-- Page -->
                    <div class="vg-content" id="page">
                        <div class="page-header">
                            <h2>Page Management</h2>
                        </div>
                        <!-- Top Page -->
                        <div class="page-header">
                            <h3 id="top" class="accent entry-title">Top</h3>
                        </div>
                        <p>Manage sections in Page</p>
                        <ul>
                            <li><span class="accent">Step 1</span> - Login to Wordpress Daskboard</li>
                            <li><span class="accent">Step 2</span> - Navigate to <strong>Pages  ►  All pages</strong></li>
                            <li>
                                <span class="accent">Step 3</span> - Select <strong>Homepage</strong> to <strong>Edit</strong>
                            </li>
                            <li><span class="accent">Step 4</span> - Input/ Edit language</li>
                            <li>
                                <span class="accent">Step 5</span> - Edit <strong>Homepage</strong>
                                <ul>
                                    <li>Click <strong>Add Slide</strong> for more slide</li>
                                    <li>Update Image for <strong>PC and Mobile</strong></li>
                                    <li>Update content <strong></strong></li>
                                </ul>
                            </li>
                            <li><span class="accent">Step 6 - Click <strong>Update</strong> to save your work</li>
                        </ul>
                        <div class="photo">
                            <img src="<?php echo $url;?>img/img_top.png" alt="">
                        </div>
                        <!-- Greeting Page -->
                        <div class="page-header">
                            <h3 id="about" class="accent entry-title">Greeting</h3>
                        </div>
                        <p>Please, follow the steps below to manage Page</p>
                        <ul>
                            <li><span class="accent">Step 1</span> - Login to Wordpress Daskboard</li>
                            <li><span class="accent">Step 2</span> - Navigate to <strong>Pages  ►  All pages</strong></li>
                            <li>
                                <span class="accent">Step 3</span> - Select <strong>Greeting</strong> to <strong>Edit</strong>
                            </li>
                            <li><span class="accent">Step 4</span> - Input/ Edit language</li>
                            <li>
                                <span class="accent">Step 5</span> - Edit <strong>Greeting</strong>
                                <ol>
                                    <li><strong>Page Name</strong></li>
                                    <li><strong>Slug</strong></li>
                                    <li><strong>Page Title</strong></li>
                                    <li><strong>Section Item</strong> Content</li>
                                    <li>Click to add more <strong>Section Item</strong></li>
                                    <li>Choose <strong>Related Page</strong> with this page</li>
                                </ol>
                            </li>
                            <li><span class="accent">Step 6</span> - Click <strong>Update</strong> to save your work</li>
                        </ul>
                        <div class="photo">
                            <img src="<?php echo $url;?>img/img_greeting.png" alt="">
                        </div>
                        <!-- whychoose Page -->
                        <div class="page-header">
                            <h3 id="whychoose" class="accent entry-title">Why Choose DYM</h3>
                        </div>
                        <p>Please, follow the steps below to manage Page</p>
                        <ul>
                            <li><span class="accent">Step 1</span> - Login to Wordpress Daskboard</li>
                            <li><span class="accent">Step 2</span> - Navigate to <strong>Pages  ►  All pages</strong></li>
                            <li>
                                <span class="accent">Step 3</span> - Select <strong>Why Choose DYM</strong> to <strong>Edit</strong>
                            </li>
                            <li><span class="accent">Step 4</span> - Input/ Edit language</li>
                            <li>
                                <span class="accent">Step 5</span> - Edit <strong>Greeting</strong>
                                <ol>
                                    <li><strong>Page Name</strong></li>
                                    <li><strong>Slug</strong></li>
                                    <li><strong>Page Title</strong></li>
                                    <li><strong>Group Item</strong> Content</li>
                                    <li>Click to add more <strong>Group Item</strong></li>
                                    <li>Choose <strong>Related Page</strong> with this page</li>
                                </ol>
                            </li>
                            <li><span class="accent">Step 6</span> - Click <strong>Update</strong> to save your work</li>
                        </ul>
                        <div class="photo">
                            <img src="<?php echo $url;?>img/img_whychoose.png" alt="">
                        </div>
                        <!-- Group Page -->
                        <div class="page-header">
                            <h3 id="group" class="accent entry-title">Group</h3>
                        </div>
                        <p>Please, follow the steps below to manage Page</p>
                        <ul>
                            <li><span class="accent">Step 1</span> - Login to Wordpress Daskboard</li>
                            <li><span class="accent">Step 2</span> - Navigate to <strong>Pages  ►  All pages</strong></li>
                            <li>
                                <span class="accent">Step 3</span> - Select <strong>Group</strong> to <strong>Edit</strong>
                            </li>
                            <li><span class="accent">Step 4</span> - Input/ Edit language</li>
                            <li>
                                <span class="accent">Step 5</span> - Edit <strong>Group</strong>
                                <ol>
                                    <li><strong>Page Name</strong></li>
                                    <li><strong>Slug</strong></li>
                                    <li><strong>Page Title</strong></li>
                                    <li><strong>Group Item</strong> Content</li>
                                    <li>Click to add more <strong>Group Item</strong></li>
                                    <li>Choose <strong>Related Page</strong> with this page</li>
                                </ol>
                            </li>
                            <li><span class="accent">Step 6</span> - Click <strong>Update</strong> to save your work</li>
                        </ul>
                        <div class="photo">
                            <img src="<?php echo $url;?>img/img_group.png" alt="">
                        </div>
                        <!-- Facility Page -->
                        <div class="page-header">
                            <h3 id="facility" class="accent entry-title">Facilities</h3>
                        </div>
                        <p>Please, follow the steps below to manage Page</p>
                        <ul>
                            <li><span class="accent">Step 1</span> - Login to Wordpress Daskboard</li>
                            <li><span class="accent">Step 2</span> - Navigate to <strong>Pages  ►  All pages</strong></li>
                            <li>
                                <span class="accent">Step 3</span> - Select <strong>Facility</strong> to <strong>Edit</strong>
                            </li>
                            <li><span class="accent">Step 4</span> - Input/ Edit language</li>
                            <li>
                                <span class="accent">Step 5</span> - Edit <strong>Facility</strong>
                                <ol>
                                    <li><strong>Page Name</strong></li>
                                    <li><strong>Slug</strong></li>
                                    <li><strong>Page Title</strong></li>
                                    <li><strong>Group Item</strong> Content</li>
                                    <li>Click to add more <strong>Group Item</strong></li>
                                    <li>Choose <strong>Related Page</strong> with this page</li>
                                </ol>
                            </li>
                            <li><span class="accent">Step 6</span> - Click <strong>Update</strong> to save your work</li>
                        </ul>
                        <div class="photo">
                            <img src="<?php echo $url;?>img/img_facility.png" alt="">
                        </div>
                        <!-- Health Page -->
                        <div class="page-header">
                            <h3 id="health" class="accent entry-title">Health Check-up</h3>
                        </div>
                        <p>Please, follow the steps below to manage Page</p>
                        <ul>
                            <li><span class="accent">Step 1</span> - Login to Wordpress Daskboard</li>
                            <li><span class="accent">Step 2</span> - Navigate to <strong>Pages  ►  All pages</strong></li>
                            <li>
                                <span class="accent">Step 3</span> - Select <strong>Health Check-up</strong> to <strong>Edit</strong>
                            </li>
                            <li><span class="accent">Step 4</span> - Input/ Edit language</li>
                            <li><span class="accent">Step 5</span> - Edit <strong>Health Check-up</strong> and click <strong>Update</strong> to save your work</li>
                        </ul>
                        <div class="photo">
                            <img src="<?php echo $url;?>img/img_health.png" alt="">
                        </div>
                        <!-- Medicine Page -->
                        <div class="page-header">
                            <h3 id="medicine" class="accent entry-title">Internal Medicine</h3>
                        </div>
                        <p>Please, follow the steps below to manage Page</p>
                        <ul>
                            <li><span class="accent">Step 1</span> - Login to Wordpress Daskboard</li>
                            <li><span class="accent">Step 2</span> - Navigate to <strong>Pages  ►  All pages</strong></li>
                            <li>
                                <span class="accent">Step 3</span> - Select <strong>Internal Medicine</strong> to <strong>Edit</strong>
                            </li>
                            <li><span class="accent">Step 4</span> - Input/ Edit language</li>
                            <li><span class="accent">Step 5</span> - Edit <strong>Internal Medicine</strong> and click <strong>Update</strong> to save your work</li>
                        </ul>
                        <div class="photo">
                            <img src="<?php echo $url;?>img/img_medicine.png" alt="">
                        </div>
                        <!-- Vaccination Page -->
                        <div class="page-header">
                            <h3 id="vaccination" class="accent entry-title">Vaccination</h3>
                        </div>
                        <p>Please, follow the steps below to manage Page</p>
                        <ul>
                            <li><span class="accent">Step 1</span> - Login to Wordpress Daskboard</li>
                            <li><span class="accent">Step 2</span> - Navigate to <strong>Pages  ►  All pages</strong></li>
                            <li>
                                <span class="accent">Step 3</span> - Select <strong>Vaccination</strong> to <strong>Edit</strong>
                            </li>
                            <li><span class="accent">Step 4</span> - Input/ Edit language</li>
                            <li><span class="accent">Step 5</span> - Edit <strong>Vaccination</strong> and click <strong>Update</strong> to save your work</li>
                        </ul>
                        <div class="photo">
                            <img src="<?php echo $url;?>img/img_vaccination.png" alt="">
                        </div>
                        <!-- Access Page -->
                        <div class="page-header">
                            <h3 id="access" class="accent entry-title">Access</h3>
                        </div>
                        <p>Please, follow the steps below to manage Page</p>
                        <ul>
                            <li><span class="accent">Step 1</span> - Login to Wordpress Daskboard</li>
                            <li><span class="accent">Step 2</span> - Navigate to <strong>Pages  ►  All pages</strong></li>
                            <li>
                                <span class="accent">Step 3</span> - Select <strong>Access</strong> to <strong>Edit</strong>
                            </li>
                            <li><span class="accent">Step 4</span> - Input/ Edit language</li>
                            <li><span class="accent">Step 5</span> - Edit <strong>Access</strong> and click <strong>Update</strong> to save your work</li>
                        </ul>
                        <div class="photo">
                            <img src="<?php echo $url;?>img/img_access.png" alt="">
                        </div>
                    </div>
                    <!-- Article -->
                    <div class="vg-content" id="article">
                        <div class="page-header">
                            <h2>Article Management</h2>
                        </div>

                        <div class="page-header">
                            <h3 id="article-news" class="accent entry-title">News</h3>
                        </div>
                        <p>Please, follow the steps below to manage Article</p>
                        <ul>
                            <li><span class="accent">Step 1</span> - Navigate to <strong>Posts</strong></li>
                            <li><span class="accent">Step 2</span> - Input/ Edit title</li>
                            <li>
                                <span class="accent">Step 3</span> - Input/ Edit content
                                <em style="color: #f00;">( Max Image Size: Width 1200px - Height 800px )</em>
                            </li>
                            <li><span class="accent">Step 4</span> - Choose Category <strong>Examinations</strong> if it's a examination</li>
                            <li><span class="accent">Step 5</span> - Input/ Edit language</li>
                            <li><span class="accent">Step 6</span> - Click <strong>Update</strong> to save your work</li>
                        </ul>
                        <div class="photo">
                            <img src="<?php echo $url;?>img/img_news.png" alt="">
                        </div>

                        <div class="page-header">
                            <h3 id="article-doctor" class="accent entry-title">Doctor</h3>
                        </div>
                        <p>Please, follow the steps below to manage Article</p>
                        <ul>
                            <li><span class="accent">Step 1</span> - Navigate to <strong>Doctors</strong></li>
                            <li><span class="accent">Step 2</span> - Input/ Edit title</li>
                            <li>
                                <span class="accent">Step 3</span> - Input/ Edit content. Add <strong>More</strong> block
                                to seperate content
                                <em style="color: #f00;">( Max Image Size: Width 1200px - Height 800px )</em>
                            </li>
                            <li><span class="accent">Step 4</span> - Input/ Edit language</li>
                            <li><span class="accent">Step 6</span> - Click <strong>Update</strong> to save your work</li>
                        </ul>
                        <div class="photo">
                            <img src="<?php echo $url;?>img/img_doctor.png" alt="">
                        </div>
                    </div>
                    <!-- Common -->
                    <div class="vg-content" id="common">
                        <div class="page-header">
                            <h2>Common Management</h2>
                        </div>
                        <div class="page-header">
                            <h3 id="theme" class="accent entry-title">Theme Setting</h3>
                        </div>
                        <p>- Login to Wordpress Daskboard</p>
                        <p>- Navigate to <strong>Theme Setting</strong></p>
                        <ul>
                            <li>
                                <span class="accent">Step 1</span> - Edit <strong>Setting</strong>
                                <ul>
                                    <li>Info use on header</li>
                                    <li>Links out site</li>
                                    <li>Contat Info use in sidebar</li>
                                </ul>
                            </li>
                            <li><span class="accent">Step 2</span> - Click <strong>Update</strong> to save</li>
                        </ul>
                        <div class="photo">
                            <img src="<?php echo $url;?>img/img_setting.png" alt="">
                        </div>

                        <div class="page-header">
                            <h3 id="menu" class="accent entry-title">Menu</h3>
                        </div>
                        <p>- Login to Wordpress Daskboard</p>
                        <p>- Navigate to <strong>Appearance</strong> -> <strong>Menu</strong></p>
                        <ul>
                            <li><span class="accent">Step 1</span> - Select a <strong>Menu</strong> to show Menu (jp, vi)</li>
                            <li>
                                <span class="accent">Step 2</span> - Edit <strong>Menu Item</strong>
                                <ul>
                                    <li>Click `icon down` to show `menu item` info</li>
                                    <li>Change `Navigation Label`</li>
                                    <li>Change `Menu Image`</li>
                                    <li>Click `icon up` to hide `menu item` info</li>
                                </ul>
                            </li>
                            <li><span class="accent">Step 3</span> - Click <strong>Save Menu</strong> to update</li>
                        </ul>
                        <div class="photo">
                            <img src="<?php echo $url;?>img/img_menu.png" alt="">
                        </div>
                        <div class="page-header">
                            <h3 id="footer" class="accent entry-title">Footer</h3>
                        </div>
                        <p>- Login to Wordpress Daskboard</p>
                        <p>- Navigate to <strong>Info</strong> -> <strong>All Info</strong> -> <strong>Footer address</strong></p>
                        <ul>
                            <li><span class="accent">Step 1</span> - Edit language</li>
                            <li><span class="accent">Step 2</span> - Edit info <strong>(keep html tag)</strong></li>
                            <li><span class="accent">Step 3</span> - Click <strong>Update</strong></li>
                        </ul>
                        <div class="photo">
                            <img src="<?php echo $url;?>img/img_footer.png" alt="">
                        </div>
                    </div>
                </div>
            </div><!-- class="sidebar" -->
        </div><!-- class="row" -->
    </div><!-- class="container" -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="m_logo col-md-2 col-sm-12 col-xs-12"></div>
                <div class="links col-md-8 col-sm-12 col-xs-12">
                    <p class="copyright small muted">©<?php echo date('Y');?> <?php echo $site?></p>
                </div>
                <div class="coming col-md-2 col-sm-12 col-xs-12">
                </div>
            </div>
        </div><!-- class="container" -->
    </div><!-- class="footer" -->
    <script type="text/javascript" src="<?php echo $url;?>js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo $url;?>js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo $url;?>js/jquery.onepagenav.js"></script>
    <script type="text/javascript" src="<?php echo $url;?>js/custom.js"></script>
</body>
</html>
