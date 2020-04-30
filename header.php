<?php

/**

 * The template for displaying the header

 *

 * @package WordPress

 * @subpackage Dynasty3

 * @since Dynasty3 1.0

 */

?>

<!doctype html>
<html lang="en-US">
<head>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<meta charset="utf-8">

<!-- Responsive View  -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo of_get_option('fav','no entry');?>">

<!-- Google fonts-->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,300,200,500,600,800,700,900' rel='stylesheet' type='text/css'>


<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- FONT awesome STYLES -->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.min.css" type="text/css" />
<!-- BOOTSTRAP STYLES -->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.css" type="text/css" />

<!-- jquery-ui CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/jquery-ui.css" media="all" />

<!-- Menu CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/menu.css" media="all" />

<!--slider-->
<link rel="stylesheet" media="all" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/jquery.bxslider.css" type="text/css">

<!-- fancyBox main CSS files -->

<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/jquery.fancybox.css?v=2.1.5" media="screen" />

<!-- CSS STYLES -->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/templates.css" type="text/css" />

<!-- Responsive Devices Styles -->
<link rel="stylesheet" media="screen" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/responsive-leyouts.css" type="text/css" />

<!-- Video Styles -->
<link rel="stylesheet" media="screen" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/stylev.css" type="text/css" />

<?php wp_head(); ?>
</head>

<body>
	<div class="fix">
	<!--header starts..-->
    <header>
    	<div class="row">
        	<div class="container">
            	<div class="col-md-2 col-sm-2">
                	<div class="logo_area">
                    	<a href="<?php bloginfo('url'); ?>" title="<?php echo of_get_option('sitename','no entry');?>"><img src="<?php echo of_get_option('logo','no entry');?>" alt="<?php echo of_get_option('sitename','no entry');?>"></a>
                    </div>
                    <!--logo_area ends...-->
                </div>
                <!--col-md-4 ends...-->
            	<div class="col-md-10 col-sm-10">
                	<div class="menu_area">
                    	<div class="nav dnt3-menu">
                        	 <?php
							  $url=get_post_permalink();
								 $pageid = url_to_postid( $url );
							?>   
                            <ul class="dropdown clear">
                            	<li><a href="<?php bloginfo('url'); ?>">Home</a></li>
                                <li><a href="<?php bloginfo('url');?>/about/" <?php echo $pageid== '7'?'class="active"':'';?>>About Us</a></li>
                                <li><a href="<?php bloginfo('url');?>/offering/" <?php echo $pageid== '13'?'class="active"':'';?>>Offering </a></li>
                                 <li><a href="<?php bloginfo('url');?>/articles/" <?php echo $pageid== '18'?'class="active"':'';?>>Articles </a></li>
                                <li><a href="<?php bloginfo('url');?>/testimonial/" <?php echo $pageid== '43'?'class="active"':'';?>>Testimonials </a></li>
                                <li><a href="<?php bloginfo('url');?>/video/" <?php echo $pageid== '15'?'class="active"':'';?>>Videos </a></li>
                                 <li><a href="<?php bloginfo('url');?>/contact-us/" <?php echo $pageid== '15'?'class="active"':'';?>>Contact us </a></li>
                            </ul>
     					 </div>
                    </div>
                    <!--menu_area ends...-->
                </div>
                <!--col-md-8 ends...-->
            </div>
        </div>
    </header>
    </div>
    <!--header ends..-->
 
