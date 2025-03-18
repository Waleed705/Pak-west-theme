<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
<div class="header">
                <div class="head-contect-wrapper">
                    <div class="head-contect">
                        <div class="web-number">
                            <div class="web_link">
                                <a href="#"><i class="fa-solid fa-envelope-open-text"></i>info@pakwestchemicals.com</a>
                                <span class="separator">|</span>
                            </div>
                            <div class="number">
                                <a href="#"><i class="fa-solid fa-phone"></i>023456789</a>
                            </div>
                        </div>
                        <div class="contact-career-fb-utube-linkedin">
                            <div class="head-contact">
                                <a href="#">CONTACT</a>
                                <span class="separator">|</span>
                            </div>
                            <div class="head-career">
                                <a href="#">CAREER</a>
                                <span class="separator">|</span>
                            </div>
                            <div class="head-fb">
                                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                                <span class="separator">|</span> 
                            </div>
                            <div class="head-utube">
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                <span class="separator">|</span>
                            </div>
                            <div class="head-linkedin">
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="logo-nav-wrapper">
                    <div class="logo-nav-search">
                        <div class="logo-wrapper">
                            <div class="logo">
                                <?php $logoimg = get_header_image() ?>
                                <a href="">
                                    <img src="<?php echo $logoimg ?>" alt="">
                                </a>
                                <div class="logo-content">
                                    <a href=""><h2>Pak West Chemicals.com</h2></a>
                                    <p>Fertilizers,Agrochemicals,<br>Microneutriants,Pesticides</p>
                                </div>
                            </div>
                        </div>                      
                            <nav id="nav-menu">
                            <?php wp_nav_menu(array('theme_location' => 'primary_menu','menu_class' => 'nav')) ?>
                            </nav>
                            <div class="nav-icon">
                                <a href="" id="menu-toggle" ><i class="fa-solid fa-bars"></i>Menu</a>
                            </div>
                        
                        <div class="search">
                            <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
                        </div>
                    </div>
                </div>
            </div>