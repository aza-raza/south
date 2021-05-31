<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>South - Real Estate Agency Template | Home</title>

    <!-- Favicon  -->
    <link rel="icon" href="<?php bloginfo('template_directory');?>/img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/style.css"> 

	<?php wp_head(); ?>

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="south-load"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="h-100 d-md-flex justify-content-between align-items-center">
                <div class="email-address">
                    <a href=""><?php the_field('email', 'option'); ?></a>
                </div>
                <div class="phone-number d-flex">
                    <div class="icon">
                        <img src="<?php bloginfo('template_directory');?>/images/icons/phone-call.png" alt="">
                    </div>
                    <div class="number">
                        <a href=""><?php the_field('phone', 'option'); ?></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="southNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.html"><img src="<?php bloginfo('template_directory');?>/images/core-img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
							<!-- main menu -->
                            <ul>   
								<?php
								wp_nav_menu( array( 
									'theme_location' => 'my-custom-menu', 
									'container_class' => 'custom-menu-class' ) ); 
								?>
                            </ul>

                            <!-- Search Form -->
                            <div class="south-search-form">
                                <form action="#" method="post">
									<?php get_search_form(); ?>
                                </form>
                            </div>

                            <!-- Search Button -->
                            <a href="#" class="searchbtn"><i class="fa" aria-hidden="true"></i></a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->


	