<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- SEO Meta Tags -->
        <meta name="description" content="Your description">
        <meta name="author" content="Your name">

        <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
        <meta property="og:site_name" content="" /> <!-- website name -->
        <meta property="og:site" content="" /> <!-- website link -->
        <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
        <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
        <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
        <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
        <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

        <!-- Webpage Title -->
        <title>CRM</title>
        
        <!-- Styles -->
        <link href="<?php echo e(url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,400&display=swap')); ?>" rel="stylesheet">
        <link href="<?php echo e(url('css/bootstrap.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(url('css/fontawesome-all.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(url('css/swiper.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(url('css/styles.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(url('css/alert.css')); ?>" rel="stylesheet">
        
        <!-- Favicon  -->
        <link rel="icon" href="<?php echo e(url('images/favicon.png')); ?>">
    </head>
    <body data-bs-spy="scroll" data-bs-target="#navbarExample">
        
        <!-- Navigation -->
        <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
            <div class="container">

                <!-- Image Logo -->
                <a class="" href="<?php echo e(url('/')); ?>"><img src="<?php echo e(url('images/logoBG.png')); ?>"></a> 


                <!-- Text Logo - Use this if you don't have a graphic logo -->

                <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav ms-auto navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('/')); ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('products')); ?>">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('signup')); ?>">Contact us</a>
                        </li>
                        </li>
                    </ul>
                    <span class="nav-item">
                        <a class="btn-outline-sm" href="<?php echo e(url('login')); ?>">Log in</a>
                    </span>
                </div> <!-- end of navbar-collapse -->
            </div> <!-- end of container -->
        </nav> <!-- end of navbar -->
        <!-- end of navigation -->

        
        <?php echo $__env->yieldContent('content'); ?>


        <!-- Footer -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-col first">
                        </div> <!-- end of footer-col -->

                        <div class="footer-col second">                            
                        </div> <!-- end of footer-col -->
                        
                        <div class="footer-col third">
                            <span class="fa-stack">
                                <a href="/">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="/">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="/">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-pinterest-p fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="/">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-instagram fa-stack-1x"></i>
                                </a>
                            </span>
                            <p class="p-large">We prospect a large spectrum of clients.</p>
                            <a href="mailto:prospectrum@site.com"><strong>prospectrum@site.com</strong></a>
                        </div> <!-- end of footer-col -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of footer -->  
        <!-- end of footer -->
        

        <!-- Back To Top Button -->
        <button onclick="topFunction()" id="myBtn">
            <img src="images/up-arrow.png" alt="alternative">
        </button>
        <!-- end of back to top button -->
            
        <!-- Scripts -->
        <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
        <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
        <script src="js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
        <script src="js/replaceme.min.js"></script> <!-- ReplaceMe for rotating text -->
        <script src="js/scripts.js"></script> <!-- Custom scripts -->
    </body>
</html><?php /**PATH C:\laragon\www\GRC\resources\views/layout/public/index.blade.php ENDPATH**/ ?>