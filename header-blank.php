<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
                
        <!-- Stylesheets
        ============================================= -->
        <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,700" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" type="text/css" />

        <!-- One Page Module Specific Stylesheet -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/onepage.css" type="text/css" />
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/imports/shortcodes/overlay.css" rel="stylesheet" type="text/css"/>
        <!-- / -->

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/dark.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-icons.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/et-line.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css" type="text/css" />

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/fonts.css" type="text/css" />

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" type="text/css" />
        
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/custom.css" type="text/css" />
        

        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/js/fullpage/jquery.fullPage.css" />

        <style>
            #header .active > a {
                /*color: #3B3975!important;*/
                text-decoration: underline!important; 
            }
        </style>        
                
        
	<?php wp_head(); ?>
</head>

<body <?php body_class('stretched'); ?>>
	