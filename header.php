<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Theam-sweeft
 */

$check_color = get_field("add_menu_color");


?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'theam-sweeft' ); ?></a>


<header id="fixed_id">
    <div class="container">
 
      <!-- menu  -->
      <nav class="navbar navbar-expand-lg navbar-brand-main">
                <div id="logo-main"> 
                  <?php  $check_color ? dynamic_sidebar('box1') : the_custom_logo()?> 
                </div>
                <div id="logo-main-two"> 
                    <?php if(is_active_sidebar('box1')) : ?>
                        <?php dynamic_sidebar('box1'); ?>
                    <?php endif; ?>
                </div>
            <div id="navbarSupportedContent" class="<?php echo $check_color ? 'show-color' : " "; ?>">
 
                <?php
                    wp_nav_menu(
                        array(
                        'theme_location'  => 'menu-1',
                        'menu_id'         => 'navbarSupportedContent',
                        'menu_class'      => 'navbar-nav me-auto mb-2 mb-lg-0 main-navbar my-nav-link',
                        
                        )
                    );
                    

                ?>


                <a class="nav-link my-nav-link btn-main <?php echo $check_color ? 'show-color' : " "; ?>" href="http://localhost:10003/contact/">contact</a>
                
            </div>
 

            <!------------------- mobile menu  ------------------>

            <div id="menumobile">
              <button class="btn btnmain-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <span class="navbar-toggler-icon"></span>
              </button>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasRightLabel">
    
                        <?php if(is_active_sidebar('box1')) : ?>
                            <?php dynamic_sidebar('box1'); ?>
                        <?php endif; ?>

                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body">
                        <?php
                            wp_nav_menu(
                                array(
                                'theme_location'  => 'menu-1',
                                'menu_id'         => 'menumobile',
                                'menu_class'      => 'navbar-nav me-auto mb-2 mb-lg-0 main-navbar my-nav-link mobilemenumain',
                                )
                            );
                        ?>
                        <a class="nav-link my-nav-link-mob" href="#">contact</a>
                    
                        <div class="social-icons"> 
                            <a class="nav-link my-nav-link" aria-current="page" href="#">
                                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path class="header-social-icon" d="M22.286 0H1.70902C1.25318 0.00343638 0.817309 0.187469 0.49695 0.511765C0.17659 0.83606 -0.00211188 1.27415 1.88373e-05 1.73V22.27C-0.00211188 22.7258 0.17659 23.1639 0.49695 23.4882C0.817309 23.8125 1.25318 23.9966 1.70902 24H22.286C22.7424 23.9968 23.1789 23.813 23.5001 23.4888C23.8214 23.1646 24.0011 22.7264 24 22.27V1.73C24.0011 1.27361 23.8214 0.835379 23.5001 0.511169C23.1789 0.18696 22.7424 0.00317177 22.286 0V0ZM7.25402 20.571H3.70002V9.118H7.25902V20.572L7.25402 20.571ZM5.47502 7.554C5.06695 7.554 4.66805 7.43298 4.32877 7.20625C3.98949 6.97952 3.72507 6.65727 3.56896 6.28024C3.41285 5.90322 3.37205 5.48838 3.45173 5.08817C3.53141 4.68796 3.728 4.32037 4.01661 4.03189C4.30523 3.74341 4.67291 3.547 5.07316 3.46751C5.47341 3.38803 5.88824 3.42903 6.26519 3.58533C6.64213 3.74162 6.96426 4.00619 7.19083 4.34558C7.41739 4.68497 7.53822 5.08394 7.53802 5.492C7.53775 6.03897 7.32029 6.56345 6.93343 6.95012C6.54657 7.33679 6.02199 7.554 5.47502 7.554V7.554ZM20.587 20.572H17.03V15C17.03 13.671 17.003 11.962 15.182 11.962C13.328 11.962 13.045 13.408 13.045 14.903V20.571H9.48802V9.118H12.9V10.682H12.948C13.2905 10.0984 13.7847 9.61837 14.378 9.293C14.9714 8.96762 15.6418 8.80901 16.318 8.834C19.918 8.834 20.588 11.207 20.588 14.293L20.587 20.572Z"></path>
                                </svg>
                            </a>
                            <a class="nav-link my-nav-link" href="#">
                                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path class="header-social-icon" d="M24,129.323v21.348a1.323,1.323,0,0,1-1.323,1.323H16.559v-9.289h3.118l.466-3.621H16.554V136.77c0-1.05.289-1.762,1.795-1.762h1.918v-3.241a25.784,25.784,0,0,0-2.8-.145c-2.764,0-4.661,1.688-4.661,4.789v2.673H9.68v3.621h3.129V152H1.323A1.326,1.326,0,0,1,0,150.677V129.323A1.326,1.326,0,0,1,1.323,128H22.671A1.327,1.327,0,0,1,24,129.323Z" transform="translate(0 -128)"></path>
                                </svg>
                            </a>
                            <a class="nav-link my-nav-link" href="#">
                                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path class="header-social-icon" d="M1427.065-626a7.062,7.062,0,0,1-5.032-1.887,6.963,6.963,0,0,1-2.032-5.177v-9.92a6.628,6.628,0,0,1,7.016-7.016h9.968a6.89,6.89,0,0,1,5.08,1.984,6.936,6.936,0,0,1,1.936,5.032v9.968a6.926,6.926,0,0,1-1.984,5.129,7.145,7.145,0,0,1-5.08,1.887Zm-3.532-20.516a4.822,4.822,0,0,0-1.307,3.532v9.92a4.862,4.862,0,0,0,1.307,3.58,5,5,0,0,0,3.532,1.258h9.871a5,5,0,0,0,3.532-1.258,4.729,4.729,0,0,0,1.4-3.532v-9.968a4.992,4.992,0,0,0-1.307-3.484,4.823,4.823,0,0,0-3.532-1.306h-9.968A4.921,4.921,0,0,0,1423.533-646.516Zm2.274,8.468a6.205,6.205,0,0,1,6.193-6.193,6.237,6.237,0,0,1,6.194,6.193,6.205,6.205,0,0,1-6.194,6.194A6.174,6.174,0,0,1,1425.807-638.048Zm2.225,0A3.986,3.986,0,0,0,1432-634.08a3.986,3.986,0,0,0,3.968-3.968,3.986,3.986,0,0,0-3.968-3.968A3.986,3.986,0,0,0,1428.032-638.048Zm9-6.339a1.4,1.4,0,0,1,1.4-1.4,1.4,1.4,0,0,1,1.4,1.4,1.4,1.4,0,0,1-1.4,1.4A1.4,1.4,0,0,1,1437.032-644.387Z" transform="translate(-1420 650)"></path>
                                </svg>
                            </a>
                        </div>

                        <div class="Copyright">
                            <p>Copyright © 2021 Sweeft Agency</p>
                        </div>
                    </div>

                </div>
              </div>
            </div>
        </nav>
	</div>
</header>






 
 

 