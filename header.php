<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?>
; ?> | Seattle, WA</title>
    <!-- Styles-->
    <link rel="stylesheet" a  href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
        <!-- Scripts-->
    <!--start WP HEAD -->
    <?php wp_head(); ?>
    <!--END WP HEAD -->

</head>
<body <?php body_class(); ?>>
    <!-- Header Begins-->
    <div id="header">
        
        <!-- The logo is here --> 
        <h1 id="logo"><a href="main.html"><img id="logo" src="<?php bloginfo('template_directory'); ?>/images/benjamin-logo.jpg" width="30" height="30" alt="logo"></a></h1>
        
         <!-- Navigation Begins-->
         
         <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div','container_id' => 'navigation', ) ); ?>
        <!--<div id="navigation">
            <ul id="navigation-items">
                <li><a href="main.html">Home</a></li>
                <li><a href="main.html">Blog</a></li>
                <li><a href="main.html">About</a></li>
                <li><a href="main.html">Contact</a></li>
            </ul>
        </div>-->
        <!-- Navigation Ends-->
    </div>
    <!-- Header Ends-->
    
    <!--blockquote and search option with big picture divider-->
    <img id="front-page" src="<?php bloginfo('template_directory'); ?>/images/seattle-space-needle.jpg" alt="seattle-front-page">
    
        <!-- Page divider begins-->
        <div class="page-break">
            <h2>The Daily</h2>
            <p>Life and news in Seattle</p>
        </div>
    
    <!-- Middle Begins-->
    <div id="middle">