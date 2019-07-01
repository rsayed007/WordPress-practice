<!DOCTYPE html>
<html <?php language_attributes( ); ?> >

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="CarCare  -  Car Repairing  and Servicing Html Template Responsive Template">
    <meta name="keywords" content="Repair ,Servicing ,Mechanic">
    <meta name="author" content="Theme Moor">
    <!-- Page Title -->
    <title><?php bloginfo( 'name' ); ?>  </title>

    <!-- Master css File Here -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/master.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>/css/style.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php 
        if (is_singular() && comments_open() && get_option( 'thread_comments' )) {
                wp_enqueue_script( 'comment-reply' );
        }

     ?>

    <?php  wp_head(); ?>
</head>

<body class="home">
    <!-- start preloader -->
    <div id="preLoaderBox">
        <div id="preLoaderBoxStatus"></div>
    </div>

    <!-- End preloader -->
    <!-- header start area -->
    <header id="header_area" class="header">
        <div class="header-top-bar">
            <div class="container">
                <div class="row">
                    <div class="header_top_bar_content">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-9 company">
                            <div class="company-info">
                                <ul>
                                    <li><i class="flaticon-close-envelope"></i><a href="#">example@gmail.com</a></li>
                                    <li><i class="flaticon-telephone"></i><a href="#">(000)-000-0000</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3 social">
                            <?php get_search_form() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav_area">
            <div class="header-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 logo">
                            <a href="<?php echo esc_url( home_url('/') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a>
                            <div class="responsive-menu"></div>
                        </div>
                        <div class="col-md-9">
                            <div class="nav-wrapper">
                                <nav class="main-navigation">
                                    
                                    <?php 
                                        wp_nav_menu( array(    
                                                        'theme_location'    => 'header_top_menu',
                                                        'container_class'   => 'main-navigation',
                                                        'items_wrap'        => '<ul class="main-menu">%3$s</ul>'
                                                         ) );
                                     ?>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

