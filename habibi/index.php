<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
    <title> Leslie & Daniel - Wedding</title>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/swiper.min.css" rel="stylesheet">
    <link href="assets/css/nice-select.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href="assets/css/jquery-ui.css" rel="stylesheet">
    <link href="assets/sass/style.css" rel="stylesheet">
</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="vertical-centered-box">
                <div class="content">
                    <div class="loader-circle"></div>
                    <div class="loader-line-mask">
                        <div class="loader-line"></div>
                    </div>
                    <img src="assets/images/preloader.gif" alt="">
                </div>
            </div>
        </div>
        <!-- end preloader -->
        <!-- Start header -->
        <header id="header">
            <div class="wpo-site-header wpo-header-style-2">
                <nav class="navigation navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-3 col-3 d-lg-none dl-block">
                                <div class="mobail-menu">
                                    <button type="button" class="navbar-toggler open-btn">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar first-angle"></span>
                                        <span class="icon-bar middle-angle"></span>
                                        <span class="icon-bar last-angle"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-6">
                                <div class="navbar-header">
                                    <a class="navbar-brand" href="index.html">Leslie & Daniel</a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-1 col-1">
                                <div id="navbar" class="collapse navbar-collapse navigation-holder">
                                    <button class="menu-close"><i class="ti-close"></i></button>
                                    <ul class="nav navbar-nav mb-2 mb-lg-0">
                                        <li class="menu-item-has-children">
                                            <a class="" href="index.html">Accueil</a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#couple">Mot du couple</a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#story">Histoire du couple</a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#gallery">Gallerie</a>
                                        </li>
                                        <li><a href="#contact">Contact</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="#event">Planning</a>
                                        </li>
                                    </ul>
                                </div><!-- end of nav-collapse -->
                            </div>
                            <div class="col-lg-2 col-md-2 col-2">
                                <div class="header-right">
                                    <div class="mini-cart">
                                        <a href="<?= $_SESSION['id'] ? 'dashboard.php' : 'login.html' ?>" class="cart-toggle-btn"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(101,113,80,1)"><path d="M12 14V22H4C4 17.5817 7.58172 14 12 14ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM21 17H22V22H14V17H15V16C15 14.3431 16.3431 13 18 13C19.6569 13 21 14.3431 21 16V17ZM19 17V16C19 15.4477 18.5523 15 18 15C17.4477 15 17 15.4477 17 16V17H19Z"></path></svg>
                                            <!-- <span class="cart-count">2</span> -->
                                            <span>Admin</span>
                                        </a>
                                        <!-- <div class="mini-cart-content">
                                            <button class="mini-cart-close"><i class="ti-close"></i></button>
                                            <div class="mini-cart-items">
                                                <div class="mini-cart-item clearfix">
                                                    <div class="mini-cart-item-image">
                                                        <a href="shop.html"><img src="assets/images/shop/mini-cart/img-1.jpg" alt=""></a>
                                                    </div>
                                                    <div class="mini-cart-item-des">
                                                        <a href="shop.html">Wedding Gown</a>
                                                        <span class="mini-cart-item-price">$20.15 x 1</span>
                                                        <span class="mini-cart-item-quantity"><a href="#"><i class="ti-close"></i></a></span>
                                                    </div>
                                                </div>
                                                <div class="mini-cart-item clearfix">
                                                    <div class="mini-cart-item-image">
                                                        <a href="shop.html"><img src="assets/images/shop/mini-cart/img-2.jpg" alt=""></a>
                                                    </div>
                                                    <div class="mini-cart-item-des">
                                                        <a href="shop.html">Bridal Flower</a>
                                                        <span class="mini-cart-item-price">$13.25 x 2</span>
                                                        <span class="mini-cart-item-quantity"><a href="#"><i class="ti-close"></i></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mini-cart-action clearfix">
                                                <span class="mini-checkout-price">Subtotal:
                                                    <span>$215.14</span></span>
                                                <div class="mini-btn">
                                                    <a href="checkout.html" class="view-cart-btn s1">Checkout</a>
                                                    <a href="cart.html" class="view-cart-btn">View Cart</a>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end of container -->
                </nav>
            </div>
        </header><br/><br/><br/><br/>
        <!-- end of header -->
        <!-- start of hero -->
        <section class="static-hero-s5">
            <div class="hero-container">
                <div class="hero-inner">
                    <div class="container-fluid">
                        <div class="hero-inner-wrap">
                            <div class="row align-items-center">
                                <div class="col col-xl-6 col-lg-6 col-12">
                                    <div class="wpo-static-hero-inner">
                                        <div class="slide-title wow fadeInUp" data-wow-duration="1500ms">
                                            <h2>Leslie & Daniel</h2>
                                        </div>
                                        <div data-swiper-parallax="400" class="slide-text wow fadeInUp"
                                            data-wow-duration="1600ms">
                                            <p>Notre grand jour est le 22 septembre 2024</p>
                                        </div>
                                        <span class="shape wow fadeInUp" data-wow-duration="1400ms"><img
                                                src="assets/images/slider/date-shape.png" alt=""> </span>
                                        <div class="wpo-wedding-date wow fadeInUp" data-wow-duration="1700ms">
                                            <div class="clock-grids">
                                                <div id="clock"></div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="col col-xl-6 col-lg-6 col-12">
                                    <div class="wpo-hero-img">
                                        <img src="assets/img/img.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape-frame">
                    <img src="assets/images/slider/frame.png" alt="">
                </div>
            </div>
        </section>
        <!-- end of hero slider -->
        <!-- start couple-section -->
        <section class="wpo-couple-section-s2 section-padding" id="couple">
            <div class="container-fluid">
                <div class="couple-area clearfix">
                    <div class="row align-items-center">
                        <div class="col col-md-12 col-12">
                            <div class="couple-item-wrap pointparallax">
                                <div class="couple-img-wrap">
                                    <div class="couple-common point__item" data-position="left-top" data-point="middle"
                                        data-path="280">
                                        <div class="couple-img">
                                            <img src="assets/img/leslie.png" alt="">
                                        </div>
                                    </div>
                                    <div class="couple-common point__item" data-position="right" data-point="middle"
                                        data-path="280">
                                        <div class="couple-img">
                                            <img src="assets/img/daniel.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="couple-common couple-text-wrap">
                                    <div class="couple-text-l-item">
                                        <div class="couple-text-bg point__item top" data-position="center-top"
                                            data-point="left" data-path="280">
                                            <svg class="shape-bg" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 667 413" fill="none">
                                                <path
                                                    d="M666.082 212.859C663.967 197.547 655.652 181.032 639.387 163.277C611.196 132.471 572.902 114.388 538.985 92.1488C479.066 52.8841 411.743 4.50513 339.423 0.968758C247.811 -3.51551 167.797 56.4934 90.7001 101.19C56.2727 121.096 -3.09998 147.382 0.838745 199.188C2.55282 221.646 18.016 239.801 33.1874 255.369C86.1049 309.727 143.362 364.668 211.779 395.22C305.908 437.218 403.975 392.157 491.867 353.913C542.669 331.82 677.424 294.232 666.082 212.859Z"
                                                    fill="" />
                                            </svg>
                                            <div class="outer-shape">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 669 424"
                                                    fill="none">
                                                    <path
                                                        d="M291.648 424C273.96 424 255.689 421.703 236.761 416.526C175.383 399.829 119.475 365.85 72.9029 334.825C69.4018 332.492 65.7548 330.159 62.0349 327.752C42.4872 315.211 20.3136 300.993 8.31507 280.175C-3.68345 259.395 -2.6623 234.166 11.1232 210.979C23.3406 190.49 42.3778 174.266 57.6586 161.215C75.784 145.757 92.9248 130.189 111.853 112.909C148.942 79.0397 190.992 40.65 241.83 17.9735C292.013 -4.37495 347.483 -5.94262 411.305 13.1611C440.846 22.0202 469.766 33.8324 497.738 45.2801L498.832 45.7176C511.196 50.7852 523.96 55.4517 536.323 60.0089C553.099 66.1702 570.495 72.5502 587.126 79.9511C588.949 80.7532 589.788 82.9406 588.986 84.7635C588.183 86.6228 586.031 87.4249 584.172 86.6228C567.76 79.2949 550.51 72.9877 533.807 66.8629C521.371 62.3057 508.533 57.6027 496.061 52.4986L494.967 52.0612C467.14 40.6864 438.402 28.9107 409.19 20.1609C347.082 1.56762 293.326 3.02591 244.785 24.6452C195.003 46.8113 153.428 84.7999 116.739 118.304C98.4681 135.002 80.5615 151.262 62.3632 166.756C47.4835 179.443 28.9569 195.23 17.3596 214.698C4.95986 235.515 3.93871 258.046 14.6243 276.493C25.7476 295.743 46.2071 308.867 65.9737 321.591C69.6936 323.997 73.377 326.367 76.951 328.7C123.049 359.397 178.3 393.011 238.694 409.417C337.418 436.286 418.563 382.438 497.009 330.377C507.512 323.414 518.38 316.195 529.066 309.341C533.734 306.352 538.949 303.107 544.492 299.644C596.972 266.978 684.791 212.365 655.907 146.048C651.604 136.168 644.164 126.507 633.807 117.284C632.311 115.935 632.166 113.638 633.515 112.143C634.864 110.648 637.162 110.502 638.657 111.851C649.817 121.768 657.877 132.304 662.581 143.132C693.982 215.208 602.807 271.936 548.358 305.841C542.815 309.268 537.673 312.513 533.005 315.503C522.355 322.32 511.524 329.539 501.057 336.502C436.032 379.668 369.256 424 291.648 424Z"
                                                        fill="" />
                                                </svg>
                                            </div>
                                            <div class="couple-text">
                                                <h3>Leslie Tchouapa</h3>
                                                <p>Nos chemins se sont croisés pour la première fois en 2009 à l’époque nous étions collégiens scolarisés au Collège Alfred Saker. Depuis lors nous avons rimés entre Amour et amitié et aujourd’hui, nous avons décidé de célébrer notre amour et de s’unir pour la vie devant nos familles et nos ami(es). C’est la raison pour laquelle nous avons décidé de vous convier à une belle journée qi aura lieu le 21/09/2024. La cérémonie religieuse débutera à 14 heures à l’église Saint-Jean Baptiste de Chaumont-En-Vexin 60240.</p>
                                                <!-- <div class="social">
                                                    <ul>
                                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                                                    </ul>
                                                </div> -->
                                            </div>
                                            <div class="round-shape">
                                                <div class="inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="couple-text-r-item">
                                        <div class="couple-text-bg point__item" data-position="left-bottom"
                                            data-point="right-bottom" data-path="280">
                                            <svg class="shape-bg" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 591 440" fill="none">
                                                <path
                                                    d="M25.4114 57.986C-7.01725 96.9909 -4.11683 145.478 11.5491 183.165C41.245 254.568 93.5948 320.713 144.62 380.572C161.617 400.497 175.513 426.044 204.832 435.682C234.53 445.496 272.426 434.916 303.036 419.91C352.842 395.499 393.348 358.703 432.676 322.758C480.973 278.571 537.087 232.887 568.81 179.978C596.134 134.421 602.956 73.8999 561.072 43.6382C517.585 12.246 436.357 7.28966 376.423 4.79922C329.292 2.83538 281.155 3.3091 233.647 1.59968C173.101 -0.572324 96.6825 -2.76814 43.2131 40.5322C36.3646 46.0749 30.4711 51.9203 25.4114 57.986Z"
                                                    fill="" />
                                            </svg>
                                            <div class="outer-shape">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 566 437"
                                                    fill="none">
                                                    <path
                                                        d="M557.035 59.4958C564.478 77.5535 567.026 97.5646 565.378 115.995C561.325 160.794 539.172 206.045 517.71 249.81C513.708 257.982 509.752 266.071 505.959 274.06C494.101 299.036 480.639 327.334 463.322 353.197C462.261 354.77 460.01 355.535 458.277 354.887C456.578 354.224 456.032 352.405 457.082 350.804C474.13 325.376 487.487 297.316 499.24 272.578C503.056 264.547 507.047 256.445 511.038 248.244C532.254 204.97 554.172 160.238 558.105 116.527C561.95 73.8902 542.395 22.4993 490.402 10.3764C484.007 8.89114 477.008 7.81724 469.578 7.18048C467.633 7.00837 466.437 5.48947 466.955 3.78303C467.474 2.07659 469.472 0.798638 471.416 0.970746C479.182 1.63142 486.563 2.74259 493.328 4.33495C525.8 11.8807 546.401 33.699 557.035 59.4958ZM454.31 1.95368C454.481 2.36976 454.548 2.82888 454.441 3.35975C454.131 5.07765 452.271 6.49336 450.28 6.503C403.629 6.94372 350.887 20.7663 305.132 33.656C281.895 40.2166 258.238 47.5348 235.391 54.6482C214.876 60.9954 193.689 67.5875 172.677 73.62C119.709 88.8668 47.1546 109.753 18.4678 160.196C14.974 166.341 12.2897 172.673 10.4736 179.036C1.7929 209.646 14.5981 236.463 26.9215 253.515C27.9218 254.855 27.2747 256.842 25.4745 257.908C23.7092 258.96 21.4641 258.75 20.4871 257.368C1.93347 231.623 -3.98022 204.335 3.3325 178.507C5.27843 171.669 8.17363 164.861 11.9246 158.252C42.2591 104.891 116.854 83.4234 171.318 67.7547C192.214 61.7375 213.378 55.1875 233.847 48.8269C256.739 41.7269 280.467 34.38 303.808 27.7763C350.143 14.7125 403.557 0.742662 451.297 0.275135C452.79 0.243502 453.898 0.955088 454.31 1.95368ZM447.756 372.042C448.122 372.93 447.954 374.005 447.173 374.976C442.011 381.323 436.561 387.366 430.986 393.007C415.342 408.801 383.364 435.451 345.034 436.518C319.384 437.226 298.563 426.824 278.411 416.764C273.029 414.082 267.948 411.536 262.75 409.2C187.275 375.084 109.112 336.721 49.1376 287.453C40.214 280.13 32.2547 272.183 25.4784 263.845C24.4547 262.547 24.9397 260.563 26.6822 259.455C28.4133 258.319 30.6703 258.46 31.7055 259.786C38.2516 267.861 45.9459 275.561 54.6159 282.664C114.06 331.534 191.807 369.678 266.97 403.631C272.272 406.021 277.654 408.703 282.839 411.304C302.217 420.969 322.23 430.99 345.981 430.319C381.115 429.304 411.036 404.281 425.736 389.459C431.148 384.016 436.424 378.142 441.423 371.992C442.635 370.486 444.93 369.93 446.524 370.733C447.147 371.06 447.539 371.515 447.756 372.042Z"
                                                        fill="#" />
                                                </svg>
                                            </div>
                                            <div class="couple-text">
                                                <h3>Daniel</h3>
                                                <p>La bonne nouvelle ? On va se marier ! <br>La mauvaise ? Vous allez devoir vous mettre sur votre 31 !<br>En effet, à l’issue de la cérémonie religieuse nous serions ravis de vous recevoir à 16h pour un cocktail suivi d’une soirée au Domaine de la muette à Montchevreuil 60240</p>
                                                <!-- <div class="social">
                                                    <ul>
                                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                                                    </ul>
                                                </div> -->
                                            </div>
                                            <div class="round-shape">
                                                <div class="inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
            <div class="left-shape">
                <img src="assets/images/couple/left.svg" alt="">
            </div>
            <div class="right-shape">
                <img src="assets/images/couple/right.svg" alt="">
            </div>
        </section>
        <!-- end couple-section -->

        <!-- start wpo-story-section -->
        <section class="wpo-story-section-s2 section-padding" id="story">
            <div class="container">
                <div class="wpo-section-title">
                    <span>Notre Histoire</span>
                    <h2>Comment c'est arrivé </h2>
                </div>
                <div class="wpo-story-wrap">
                    <div class="wpo-story-item">
                        <div class="row">
                            <div class="col col-lg-6 col-12">
                                <div class="wpo-story-img">
                                    <img src="assets/img/ld5.jpeg" alt="">
                                </div>
                            </div>
                            <div class="col col-lg-6 col-12">
                                <div class="wpo-story-content wow flipInX" data-wow-duration="1000ms">
                                    <div class="thumb">
                                        <span>15 June 2014</span>
                                        <div class="pin">
                                            <img src="assets/images/story/pin.svg" alt="">
                                        </div>
                                    </div>
                                    <h2>Comment on s’est rencontré</h2>
                                    <p>Leslie sortait de ses cours d’anglais en fin d’après midi et sur le trajet de retour à la maison, elle a aperçu un beau goss du haut de son balcon chez lui, et a bloqué sur sa beauté. Ayant des amis en communs, parmi lesquels se trouvaient des petits cousins de Daniel, qui ont joué les entremetteurs, les présentations ont été faites, Daniel à son tour fut sous le charme de cette fraîche et jeune jolie Demoiselle. À noter quand-même qu’à l’époque Daniel était en Tle et Leslie en 1ière , et donc la démarche de Leslie de faire le premier pas a agréablement surpris Daniel, car en bon Camerounais et bon Sakérois, généralement les Tle ne traînent pas avec les 1ière . Depuis ce jour s’en est suivi une relation d’amitié, d’amour de jeunesse, d’amitié, d’amour d’ados, etc, et donc là vous assister à la saison 20, et notamment au dernier épisode de ce feuilleton qui aura duré aussi longtemps que les feux de l’amour…</p>
                                    <div class="flower">
                                        <img src="assets/images/story/flower.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ring-wrap">
                            <div class="ring"><img src="assets/images/story/ring.svg" alt=""></div>
                            <div class="ring"><img src="assets/images/story/ring.svg" alt=""></div>
                            <div class="ring"><img src="assets/images/story/ring.svg" alt=""></div>
                            <div class="ring"><img src="assets/images/story/ring.svg" alt=""></div>
                            <div class="ring"><img src="assets/images/story/ring.svg" alt=""></div>
                            <div class="ring"><img src="assets/images/story/ring.svg" alt=""></div>
                            <div class="ring"><img src="assets/images/story/ring.svg" alt=""></div>
                            <div class="ring"><img src="assets/images/story/ring.svg" alt=""></div>
                            <div class="ring"><img src="assets/images/story/ring.svg" alt=""></div>
                            <div class="ring"><img src="assets/images/story/ring.svg" alt=""></div>
                        </div>
                    </div>
                    <div class="wpo-story-item">
                        <div class="row">
                            <div class="col col-lg-6 col-12 order-lg-2 order-1">
                                <div class="wpo-story-img">
                                    <img src="assets/img/ld9.jpeg" alt="">
                                </div>
                            </div>
                            <div class="col col-lg-6 col-12 order-lg-1 order-2">
                                <div class="wpo-story-content wow flipInX" data-wow-duration="1000ms">
                                    <div class="thumb">
                                        <span>12 Dec 2019</span>
                                        <div class="pin">
                                            <img src="assets/images/story/pin.svg" alt="">
                                        </div>
                                    </div>
                                    <h2>Il m’a fait sa demande, j’ai dit OUI</h2>
                                    <p>Pour célébrer nos 5 ans de relations, nous avons optés pour une soirée en tête à tête dans un restaurant de la place Parisienne et nous avons évoqué le sujet du mariage suite à nos fiançailles comme ça en passant, et à y réfléchir on s’est posé la question de savoir ce qu’on attendait pour se marier, et aucune réponse pertinente n’est apparue, et on s’est donc dit que c’était le bon moment pour enclencher le projet, car comme tout le monde on a tendance souvent à attendre le moment idéal pour franchir le pas, mais bizarrement lors de cette soirée là tous les feux étaient au vert, et nous avons donc pris la décision de nous marier. Daniel a pris la décision de faire de moi sa femme, et moi Leslie j’ai pris la décision de faire de lui mon Mari, pour la vie!!!</p>
                                    <div class="flower">
                                        <img src="assets/images/story/flower-2.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ring-wrap">
                            <div class="ring"><img src="assets/images/story/ring.svg" alt=""></div>
                            <div class="ring"><img src="assets/images/story/ring.svg" alt=""></div>
                            <div class="ring"><img src="assets/images/story/ring.svg" alt=""></div>
                            <div class="ring"><img src="assets/images/story/ring.svg" alt=""></div>
                            <div class="ring"><img src="assets/images/story/ring.svg" alt=""></div>
                            <div class="ring"><img src="assets/images/story/ring.svg" alt=""></div>
                            <div class="ring"><img src="assets/images/story/ring.svg" alt=""></div>
                            <div class="ring"><img src="assets/images/story/ring.svg" alt=""></div>
                            <div class="ring"><img src="assets/images/story/ring.svg" alt=""></div>
                            <div class="ring"><img src="assets/images/story/ring.svg" alt=""></div>
                        </div>
                    </div>
                    <div class="wpo-story-item">
                        <div class="row">
                            <div class="col col-lg-6 col-12">
                                <div class="wpo-story-img">
                                    <img src="assets/img/ld7.jpeg" alt="">
                                </div>
                            </div>
                            <div class="col col-lg-6 col-12">
                                <div class="wpo-story-content wow flipInX" data-wow-duration="1000ms">
                                    <div class="thumb">
                                        <span>16 Jan 2022</span>
                                        <div class="pin">
                                            <img src="assets/images/story/pin.svg" alt="">
                                        </div>
                                    </div>
                                    <h2>Nos fiançailles</h2>
                                    <p>Je sortais d’une journée chargée, entre courses et appels téléphoniques à l’extérieur, et quand je suis arrivée à la maison, j’ai constaté qu’il y’avait une atmosphère différente du quotidien, Daniel était arrivée bien avant moi et m’attendait dans une ambiance tamisée, avec musique particulièrement douce, un chemin de pétales de rose du séjour jusqu’à la chambre me mena à lui, où je l’ai retrouvé le genou à terre avec une bague à la main, j’ai à peine entendu ce qu’il a dit que j’ai fondue en larmes. Il faut dire que durant toute cette journée là j’avais pensé à tout sauf à ça, pour le coup je ne m’y attendais pas du tout et je fus agréablement surprise par cette prise d’initiative spontanée, après 2 ans de relation et 1 an de vie commune,on était fiancés !!</p>
                                    <div class="flower">
                                        <img src="assets/images/story/flower.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ring-wrap">
                            <div class="ring"><img src="assets/images/story/ring.svg" alt=""></div>
                            <div class="ring"><img src="assets/images/story/ring.svg" alt=""></div>
                            <div class="ring"><img src="assets/images/story/ring.svg" alt=""></div>
                            <div class="ring"><img src="assets/images/story/ring.svg" alt=""></div>
                            <div class="ring"><img src="assets/images/story/ring.svg" alt=""></div>
                            <div class="ring"><img src="assets/images/story/ring.svg" alt=""></div>
                            <div class="ring"><img src="assets/images/story/ring.svg" alt=""></div>
                            <div class="ring"><img src="assets/images/story/ring.svg" alt=""></div>
                            <div class="ring"><img src="assets/images/story/ring.svg" alt=""></div>
                            <div class="ring"><img src="assets/images/story/ring.svg" alt=""></div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
            <div class="flower-shape-1">
                <img src="assets/images/story/flower-shape1.svg" alt="">
            </div>
            <div class="flower-shape-2">
                <img src="assets/images/story/flower-shape2.svg" alt="">
            </div>
            <div class="flower-shape-3">
                <img src="assets/images/story/flower-shape3.svg" alt="">
            </div>
            <div class="flower-shape-4">
                <img src="assets/images/story/flower-shape4.svg" alt="">
            </div>
        </section>
        <!-- end story-section -->

        <!-- start wpo-portfolio-section -->
        <section class="wpo-portfolio-section section-padding" id="gallery">
            <h2 class="hidden">some</h2>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="portfolio-grids gallery-container clearfix portfolio-slide owl-carousel">
                            <div class="grid">
                                <div class="img-holder">
                                    <a href="assets/img/ld1.jpeg" class="fancybox"
                                        data-fancybox-group="gall-1">
                                        <img src="assets/img/ld1.jpeg" alt class="img img-responsive">
                                        <div class="hover-content">
                                            <!-- <i class="ti-plus"></i> -->
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <a href="assets/img/ld3.jpeg" class="fancybox"
                                        data-fancybox-group="gall-1">
                                        <img src="assets/img/ld3.jpeg" alt class="img img-responsive">
                                        <div class="hover-content">
                                            <!-- <i class="ti-plus"></i> -->
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <a href="assets/img/ld4.jpeg" class="fancybox"
                                        data-fancybox-group="gall-1">
                                        <img src="assets/img/ld4.jpeg" alt class="img img-responsive">
                                        <div class="hover-content">
                                            <!-- <i class="ti-plus"></i> -->
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <a href="assets/img/ld5.jpeg" class="fancybox"
                                        data-fancybox-group="gall-1">
                                        <img src="assets/img/ld5.jpeg" alt class="img img-responsive">
                                        <div class="hover-content">
                                            <!-- <i class="ti-plus"></i> -->
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <a href="assets/img/ld8.jpeg" class="fancybox"
                                        data-fancybox-group="gall-1">
                                        <img src="assets/img/ld8.jpeg" alt class="img img-responsive">
                                        <div class="hover-content">
                                            <!-- <i class="ti-plus"></i> -->
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <a href="assets/img/ld9.jpeg" class="fancybox"
                                        data-fancybox-group="gall-1">
                                        <img src="assets/img/ld9.jpeg" alt class="img img-responsive">
                                        <div class="hover-content">
                                            <!-- <i class="ti-plus"></i> -->
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end wpo-portfolio-section -->

        <!-- start wpo-team-section -->
        <section class="wpo-team-section section-padding pt-0">
            <div class="container">
                <div class="wpo-section-title">
                    <span></span>
                    <h2>Les témoins du mariage</h2>
                </div>
                <div class="wpo-team-wrap scene-2" id="scene-2">
                    <div class="row">
                        <div class="col col-lg-3 col-md-6 col-sm-6 col-12 layer" data-depth="0.25">
                            <div class="wpo-team-item wow fadeInUp" data-wow-duration="1600ms">
                                <div class="wpo-team-img-wrap">
                                    <div class="wpo-team-img"
                                        style="mask-image: url(./assets/images/team/mask-4.svg); -webkit-mask-image: url(./assets/images/team/mask-4.svg);">
                                        <img src="assets/generic-icons/SVG/1.svg" alt="">
                                    </div>
                                    <div class="team-shape">
                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 257 255" fill="none">
                                            <path
                                                d="M30.7743 183.077C30.4007 182.817 30.0138 182.547 29.6402 182.287C28.9064 181.775 28.7337 180.743 29.2585 180.019C29.7698 179.285 30.7794 179.116 31.5132 179.628L31.5265 179.637C45.18 189.37 60.9235 197.071 76.1443 204.526C80.9454 206.881 85.4918 209.118 89.889 211.369C125.803 229.777 158.251 242.32 189.114 249.715C213.597 255.598 234.577 244.152 245.208 219.113C247.849 212.905 249.693 206.163 250.705 199.078C250.932 197.473 251.146 195.857 251.347 194.233C251.455 193.337 252.267 192.714 253.162 192.822C254.058 192.931 254.682 193.742 254.573 194.638C254.377 196.285 254.153 197.913 253.93 199.542C252.876 206.914 250.963 213.926 248.204 220.388C236.899 247.02 214.525 259.158 188.359 252.875C157.249 245.408 124.55 232.769 88.4082 214.262C84.0377 212.029 79.5047 209.802 74.7169 207.456C59.8002 200.133 44.3967 192.57 30.7743 183.077ZM17.7738 172.749C17.7204 172.711 17.6537 172.665 17.5963 172.605C13.9789 169.291 10.7569 165.837 7.99578 162.347C1.59458 154.239 -0.96387 145.082 0.396814 135.108C4.93918 101.683 51.3402 67.6956 73.6429 51.3646L74.9438 50.408C77.2158 48.7406 79.5982 46.9717 82.0724 45.128C117.855 18.5276 177.723 -25.9955 215.161 21.0858C242.864 55.9119 257.939 109.114 256.572 167.052C256.422 173.468 256.054 179.912 255.479 186.171C255.392 187.062 254.612 187.727 253.72 187.641C252.829 187.555 252.164 186.775 252.25 185.883C252.824 179.683 253.181 173.311 253.335 166.976C254.695 109.787 239.861 57.3477 212.638 23.1134C177.148 -21.5006 121.092 20.1689 84.0123 47.7485C81.5155 49.5962 79.1238 51.3785 76.8518 53.0459L75.5509 54.0025C55.3367 68.8157 7.96459 103.514 3.60853 135.563C2.37514 144.614 4.70676 152.958 10.5362 160.351C13.1918 163.708 16.299 167.043 19.7882 170.228C20.4569 170.833 20.4897 171.866 19.885 172.535C19.336 173.124 18.4275 173.204 17.7738 172.749Z"
                                                fill="" />
                                        </svg> -->
                                    </div>
                                </div>
                                <div class="wpo-team-text">
                                    <h3><a>Jeatsa</a></h3>
                                    <span>Témoin Daniel</span>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-sm-6 col-12 layer" data-depth="0.25">
                            <div class="wpo-team-item wow fadeInUp" data-wow-duration="1600ms">
                                <div class="wpo-team-img-wrap">
                                    <div class="wpo-team-img"
                                        style="mask-image: url(./assets/images/team/mask-4.svg); -webkit-mask-image: url(./assets/images/team/mask-4.svg);">
                                        <img src="assets/generic-icons/SVG/2.svg" alt="">
                                    </div>
                                    <div class="team-shape">
                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 257 255" fill="none">
                                            <path
                                                d="M30.7743 183.077C30.4007 182.817 30.0138 182.547 29.6402 182.287C28.9064 181.775 28.7337 180.743 29.2585 180.019C29.7698 179.285 30.7794 179.116 31.5132 179.628L31.5265 179.637C45.18 189.37 60.9235 197.071 76.1443 204.526C80.9454 206.881 85.4918 209.118 89.889 211.369C125.803 229.777 158.251 242.32 189.114 249.715C213.597 255.598 234.577 244.152 245.208 219.113C247.849 212.905 249.693 206.163 250.705 199.078C250.932 197.473 251.146 195.857 251.347 194.233C251.455 193.337 252.267 192.714 253.162 192.822C254.058 192.931 254.682 193.742 254.573 194.638C254.377 196.285 254.153 197.913 253.93 199.542C252.876 206.914 250.963 213.926 248.204 220.388C236.899 247.02 214.525 259.158 188.359 252.875C157.249 245.408 124.55 232.769 88.4082 214.262C84.0377 212.029 79.5047 209.802 74.7169 207.456C59.8002 200.133 44.3967 192.57 30.7743 183.077ZM17.7738 172.749C17.7204 172.711 17.6537 172.665 17.5963 172.605C13.9789 169.291 10.7569 165.837 7.99578 162.347C1.59458 154.239 -0.96387 145.082 0.396814 135.108C4.93918 101.683 51.3402 67.6956 73.6429 51.3646L74.9438 50.408C77.2158 48.7406 79.5982 46.9717 82.0724 45.128C117.855 18.5276 177.723 -25.9955 215.161 21.0858C242.864 55.9119 257.939 109.114 256.572 167.052C256.422 173.468 256.054 179.912 255.479 186.171C255.392 187.062 254.612 187.727 253.72 187.641C252.829 187.555 252.164 186.775 252.25 185.883C252.824 179.683 253.181 173.311 253.335 166.976C254.695 109.787 239.861 57.3477 212.638 23.1134C177.148 -21.5006 121.092 20.1689 84.0123 47.7485C81.5155 49.5962 79.1238 51.3785 76.8518 53.0459L75.5509 54.0025C55.3367 68.8157 7.96459 103.514 3.60853 135.563C2.37514 144.614 4.70676 152.958 10.5362 160.351C13.1918 163.708 16.299 167.043 19.7882 170.228C20.4569 170.833 20.4897 171.866 19.885 172.535C19.336 173.124 18.4275 173.204 17.7738 172.749Z"
                                                fill="" />
                                        </svg> -->
                                    </div>
                                </div>
                                <div class="wpo-team-text">
                                    <h3><a>Moukory</a></h3>
                                    <span>Témoin Daniel</span>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-sm-6 col-12 layer" data-depth="0.10">
                            <div class="wpo-team-item wow fadeInUp" data-wow-duration="1000ms">
                                <div class="wpo-team-img-wrap">
                                    <div class="wpo-team-img"
                                        style="mask-image: url(./assets/images/team/mask-1.svg); -webkit-mask-image: url(./assets/images/team/mask-1.svg);">
                                        <img src="assets/generic-icons/SVG/3.svg" alt="">
                                    </div>
                                    <div class="team-shape">
                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 265 236" fill="none">
                                            <path
                                                d="M151.285 236C133.89 236 115.923 232.537 98.1199 225.675C71.5047 215.399 46.7662 197.903 28.4734 176.424C-1.79698 140.848 -8.47116 96.8976 11.0455 61.7114C28.4897 30.2812 62.954 7.30616 100.992 1.76157C133.694 -3.00254 166.95 1.97295 194.643 15.7612C224.44 30.6064 246.225 54.5083 257.647 84.8978C268.434 113.596 267.308 146.181 254.563 174.31C251.642 180.749 247.905 186.944 243.45 192.716C242.896 193.432 241.884 193.562 241.166 193.009C240.448 192.456 240.317 191.448 240.872 190.733C245.18 185.156 248.787 179.172 251.61 172.977C264.012 145.628 265.105 113.938 254.612 86.0523C232.893 28.3463 169.92 -4.98624 101.465 4.98101C64.4063 10.3793 30.8559 32.7202 13.9012 63.2886C-4.94641 97.2553 1.59722 139.791 30.9538 174.31C69.5139 219.626 131.54 242.065 181.784 228.894C192.081 226.195 201.937 222.082 211.108 216.683C211.891 216.228 212.886 216.472 213.343 217.252C213.8 218.033 213.539 219.025 212.772 219.48C203.356 225.041 193.206 229.268 182.616 232.049C172.515 234.683 162.006 236 151.285 236ZM228.258 207.984C227.801 207.984 227.344 207.789 227.034 207.432C226.447 206.749 226.512 205.724 227.197 205.139C230.869 201.952 234.312 198.521 237.413 194.944C238 194.261 239.028 194.196 239.714 194.781C240.399 195.367 240.464 196.391 239.877 197.074C236.662 200.781 233.121 204.326 229.335 207.594C229.025 207.854 228.633 207.984 228.258 207.984Z"
                                                fill="" />
                                        </svg> -->
                                    </div>
                                </div>
                                <div class="wpo-team-text">
                                    <h3><a>Tafida</a></h3>
                                    <span>Témoin Leslie</span>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-sm-6 col-12 layer" data-depth="0.25">
                            <div class="wpo-team-item wow fadeInUp" data-wow-duration="1600ms">
                                <div class="wpo-team-img-wrap">
                                    <div class="wpo-team-img"
                                        style="mask-image: url(./assets/images/team/mask-4.svg); -webkit-mask-image: url(./assets/images/team/mask-4.svg);">
                                        <img src="assets/generic-icons/SVG/4.svg" alt="">
                                    </div>
                                    <div class="team-shape">
                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 257 255" fill="none">
                                            <path
                                                d="M30.7743 183.077C30.4007 182.817 30.0138 182.547 29.6402 182.287C28.9064 181.775 28.7337 180.743 29.2585 180.019C29.7698 179.285 30.7794 179.116 31.5132 179.628L31.5265 179.637C45.18 189.37 60.9235 197.071 76.1443 204.526C80.9454 206.881 85.4918 209.118 89.889 211.369C125.803 229.777 158.251 242.32 189.114 249.715C213.597 255.598 234.577 244.152 245.208 219.113C247.849 212.905 249.693 206.163 250.705 199.078C250.932 197.473 251.146 195.857 251.347 194.233C251.455 193.337 252.267 192.714 253.162 192.822C254.058 192.931 254.682 193.742 254.573 194.638C254.377 196.285 254.153 197.913 253.93 199.542C252.876 206.914 250.963 213.926 248.204 220.388C236.899 247.02 214.525 259.158 188.359 252.875C157.249 245.408 124.55 232.769 88.4082 214.262C84.0377 212.029 79.5047 209.802 74.7169 207.456C59.8002 200.133 44.3967 192.57 30.7743 183.077ZM17.7738 172.749C17.7204 172.711 17.6537 172.665 17.5963 172.605C13.9789 169.291 10.7569 165.837 7.99578 162.347C1.59458 154.239 -0.96387 145.082 0.396814 135.108C4.93918 101.683 51.3402 67.6956 73.6429 51.3646L74.9438 50.408C77.2158 48.7406 79.5982 46.9717 82.0724 45.128C117.855 18.5276 177.723 -25.9955 215.161 21.0858C242.864 55.9119 257.939 109.114 256.572 167.052C256.422 173.468 256.054 179.912 255.479 186.171C255.392 187.062 254.612 187.727 253.72 187.641C252.829 187.555 252.164 186.775 252.25 185.883C252.824 179.683 253.181 173.311 253.335 166.976C254.695 109.787 239.861 57.3477 212.638 23.1134C177.148 -21.5006 121.092 20.1689 84.0123 47.7485C81.5155 49.5962 79.1238 51.3785 76.8518 53.0459L75.5509 54.0025C55.3367 68.8157 7.96459 103.514 3.60853 135.563C2.37514 144.614 4.70676 152.958 10.5362 160.351C13.1918 163.708 16.299 167.043 19.7882 170.228C20.4569 170.833 20.4897 171.866 19.885 172.535C19.336 173.124 18.4275 173.204 17.7738 172.749Z"
                                                fill="" />
                                        </svg> -->
                                    </div>
                                </div>
                                <div class="wpo-team-text">
                                    <h3><a>Eboumbou</a></h3>
                                    <span>Témoin Daniel</span>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-sm-6 col-12 layer" data-depth="0.15">
                            <div class="wpo-team-item wow fadeInUp" data-wow-duration="1200ms">
                                <div class="wpo-team-img-wrap">
                                    <div class="wpo-team-img"
                                        style="mask-image: url(./assets/images/team/mask-2.svg); -webkit-mask-image: url(./assets/images/team/mask-2.svg);">
                                        <img src="assets/generic-icons/SVG/5.svg" alt="">
                                    </div>
                                    <div class="team-shape">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 261 241" fill="none">
                                            <path
                                                d="M59.0013 241C58.546 241 58.0744 241 57.619 241C56.7246 241 55.9928 240.252 56.0091 239.358C56.0091 238.463 56.7409 237.748 57.6353 237.748H57.6516C74.4181 237.927 91.7375 235.243 108.488 232.658C113.773 231.845 118.782 231.08 123.677 230.413C163.666 224.982 197.459 216.721 227.008 205.142C250.458 195.97 261.126 174.585 255.532 147.963C254.15 141.361 251.808 134.774 248.588 128.383C247.856 126.936 247.108 125.489 246.344 124.041C245.921 123.244 246.23 122.269 247.027 121.846C247.824 121.423 248.799 121.732 249.222 122.529C250.003 123.992 250.751 125.456 251.499 126.92C254.849 133.571 257.288 140.417 258.72 147.296C264.672 175.609 253.255 198.36 228.195 208.167C198.402 219.827 164.349 228.153 124.116 233.633C119.253 234.3 114.261 235.064 108.992 235.878C92.5669 238.398 75.6052 241 59.0013 241ZM42.43 239.959C42.3649 239.959 42.2836 239.959 42.2023 239.943C37.3399 239.293 32.7213 238.301 28.4606 237.016C18.5731 234.024 11.2388 227.974 6.65277 219.014C-8.73144 188.993 9.90524 134.579 18.8658 108.429L19.3862 106.901C20.2969 104.234 21.2401 101.42 22.2159 98.4931C36.3641 56.2109 60.0259 -14.5467 117.66 2.67517C160.3 15.4086 203.086 50.4378 235.09 98.7533C238.635 104.104 242.018 109.6 245.124 115.064C245.563 115.845 245.303 116.837 244.522 117.276C243.742 117.715 242.75 117.455 242.311 116.674C239.237 111.259 235.887 105.827 232.391 100.542C200.809 52.8446 158.657 18.3033 116.749 5.78129C62.1237 -10.5299 39.9581 55.7068 25.3057 99.5339C24.3137 102.477 23.3705 105.307 22.4598 107.974L21.9394 109.503C13.8245 133.213 -5.2025 188.766 9.54747 217.55C13.7106 225.681 20.3945 231.194 29.4038 233.926C33.5019 235.162 37.9578 236.122 42.6414 236.74C43.5358 236.853 44.1538 237.683 44.04 238.577C43.9261 239.374 43.2268 239.959 42.43 239.959Z"
                                                fill="" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="wpo-team-text">
                                    <h3><a>Atikou</a></h3>
                                    <span>Témoin Leslie</span>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-sm-6 col-12 layer" data-depth="0.25">
                            <div class="wpo-team-item wow fadeInUp" data-wow-duration="1600ms">
                                <div class="wpo-team-img-wrap">
                                    <div class="wpo-team-img"
                                        style="mask-image: url(./assets/images/team/mask-4.svg); -webkit-mask-image: url(./assets/images/team/mask-4.svg);">
                                        <img src="assets/generic-icons/SVG/6.svg" alt="">
                                    </div>
                                    <div class="team-shape">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 257 255" fill="none">
                                            <path
                                                d="M30.7743 183.077C30.4007 182.817 30.0138 182.547 29.6402 182.287C28.9064 181.775 28.7337 180.743 29.2585 180.019C29.7698 179.285 30.7794 179.116 31.5132 179.628L31.5265 179.637C45.18 189.37 60.9235 197.071 76.1443 204.526C80.9454 206.881 85.4918 209.118 89.889 211.369C125.803 229.777 158.251 242.32 189.114 249.715C213.597 255.598 234.577 244.152 245.208 219.113C247.849 212.905 249.693 206.163 250.705 199.078C250.932 197.473 251.146 195.857 251.347 194.233C251.455 193.337 252.267 192.714 253.162 192.822C254.058 192.931 254.682 193.742 254.573 194.638C254.377 196.285 254.153 197.913 253.93 199.542C252.876 206.914 250.963 213.926 248.204 220.388C236.899 247.02 214.525 259.158 188.359 252.875C157.249 245.408 124.55 232.769 88.4082 214.262C84.0377 212.029 79.5047 209.802 74.7169 207.456C59.8002 200.133 44.3967 192.57 30.7743 183.077ZM17.7738 172.749C17.7204 172.711 17.6537 172.665 17.5963 172.605C13.9789 169.291 10.7569 165.837 7.99578 162.347C1.59458 154.239 -0.96387 145.082 0.396814 135.108C4.93918 101.683 51.3402 67.6956 73.6429 51.3646L74.9438 50.408C77.2158 48.7406 79.5982 46.9717 82.0724 45.128C117.855 18.5276 177.723 -25.9955 215.161 21.0858C242.864 55.9119 257.939 109.114 256.572 167.052C256.422 173.468 256.054 179.912 255.479 186.171C255.392 187.062 254.612 187.727 253.72 187.641C252.829 187.555 252.164 186.775 252.25 185.883C252.824 179.683 253.181 173.311 253.335 166.976C254.695 109.787 239.861 57.3477 212.638 23.1134C177.148 -21.5006 121.092 20.1689 84.0123 47.7485C81.5155 49.5962 79.1238 51.3785 76.8518 53.0459L75.5509 54.0025C55.3367 68.8157 7.96459 103.514 3.60853 135.563C2.37514 144.614 4.70676 152.958 10.5362 160.351C13.1918 163.708 16.299 167.043 19.7882 170.228C20.4569 170.833 20.4897 171.866 19.885 172.535C19.336 173.124 18.4275 173.204 17.7738 172.749Z"
                                                fill="" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="wpo-team-text">
                                    <h3><a>Ulrich</a></h3>
                                    <span>Témoin Daniel</span>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-sm-6 col-12 layer" data-depth="0.20">
                            <div class="wpo-team-item wow fadeInUp" data-wow-duration="1400ms">
                                <div class="wpo-team-img-wrap">
                                    <div class="wpo-team-img"
                                        style="mask-image: url(./assets/images/team/mask-3.svg); -webkit-mask-image: url(./assets/images/team/mask-3.svg);">
                                        <img src="assets/generic-icons/SVG/7.svg" alt="">
                                    </div>
                                    <div class="team-shape">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 246 254" fill="none">
                                            <path
                                                d="M131.937 252.602C121.041 250.837 110.559 246.734 102.019 241.452C81.2753 228.594 65.364 208.806 49.9852 189.654C47.1118 186.08 44.2666 182.545 41.4244 179.096C32.5393 168.313 22.4797 156.086 14.6852 143.024C14.2133 142.226 14.4678 141.185 15.2683 140.696C16.0662 140.224 17.107 140.479 17.5957 141.279C25.2526 154.131 35.2254 166.258 44.0236 176.941C46.8797 180.409 49.7223 183.961 52.6124 187.538C67.8202 206.473 83.5437 226.041 103.79 238.579C123.536 250.812 154.089 256.448 174.523 239.937C177.033 237.905 179.512 235.541 181.897 232.904C182.524 232.216 183.599 232.15 184.288 232.776C184.976 233.403 185.043 234.479 184.416 235.167C181.925 237.924 179.322 240.422 176.656 242.567C163.906 252.885 147.502 255.123 131.937 252.602ZM188.711 228.478C188.46 228.437 188.217 228.346 187.988 228.172C187.236 227.62 187.064 226.562 187.615 225.81C200.423 208.132 208.397 184.777 214.877 164.288C218.16 153.879 221.191 143.12 224.096 132.718C226.723 123.388 229.419 113.742 232.339 104.305C239.682 80.5034 249.738 47.901 233.115 24.3398C231.089 21.4697 228.747 18.8575 226.147 16.5641C213.624 5.55255 196.955 3.59094 185.188 3.91772C184.254 3.95543 183.465 3.20922 183.446 2.2616C183.426 1.33071 184.155 0.538559 185.103 0.520304C202.853 0.0463956 217.829 4.72227 228.399 14.009C231.195 16.4715 233.711 19.2836 235.891 22.3677C253.478 47.2875 243.136 80.8054 235.583 105.277C232.688 114.667 229.978 124.293 227.369 133.609C224.445 144.025 221.409 154.817 218.117 165.276C211.561 186.028 203.471 209.674 190.372 227.768C189.971 228.338 189.314 228.575 188.711 228.478ZM9.82859 132.395C9.29302 132.309 8.81485 131.973 8.55874 131.434C6.9008 127.885 5.47128 124.304 4.27337 120.778C0.928071 110.892 -3.1574 92.11 7.02199 77.4076C13.8369 67.5706 24.7285 62.3615 35.2669 57.3185C38.0788 55.9705 40.7405 54.7013 43.3321 53.3348C81.061 33.5454 121.614 13.8183 162.414 3.69817C168.481 2.19043 174.583 1.20376 180.546 0.761268C181.466 0.704118 182.3 1.3888 182.354 2.32511C182.425 3.26413 181.727 4.07844 180.79 4.13288C175.02 4.55498 169.112 5.50452 163.223 6.97243C122.766 16.9934 82.4353 36.6192 44.8733 56.3326C42.226 57.7244 39.4141 59.0724 36.6968 60.367C26.5673 65.2185 16.0872 70.2195 9.78469 79.3322C0.4722 92.8182 4.33764 110.414 7.47114 119.698C8.61838 123.113 10.014 126.586 11.6212 130.023C12.018 130.861 11.6491 131.866 10.8119 132.263C10.4781 132.415 10.1466 132.447 9.82859 132.395Z"
                                                fill="" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="wpo-team-text">
                                    <h3><a>Adama</a></h3>
                                    <span>Témoin Leslie</span>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-sm-6 col-12 layer" data-depth="0.25">
                            <div class="wpo-team-item wow fadeInUp" data-wow-duration="1600ms">
                                <div class="wpo-team-img-wrap">
                                    <div class="wpo-team-img"
                                        style="mask-image: url(./assets/images/team/mask-4.svg); -webkit-mask-image: url(./assets/images/team/mask-4.svg);">
                                        <img src="assets/generic-icons/SVG/8.svg" alt="">
                                    </div>
                                    <div class="team-shape">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 257 255" fill="none">
                                            <path
                                                d="M30.7743 183.077C30.4007 182.817 30.0138 182.547 29.6402 182.287C28.9064 181.775 28.7337 180.743 29.2585 180.019C29.7698 179.285 30.7794 179.116 31.5132 179.628L31.5265 179.637C45.18 189.37 60.9235 197.071 76.1443 204.526C80.9454 206.881 85.4918 209.118 89.889 211.369C125.803 229.777 158.251 242.32 189.114 249.715C213.597 255.598 234.577 244.152 245.208 219.113C247.849 212.905 249.693 206.163 250.705 199.078C250.932 197.473 251.146 195.857 251.347 194.233C251.455 193.337 252.267 192.714 253.162 192.822C254.058 192.931 254.682 193.742 254.573 194.638C254.377 196.285 254.153 197.913 253.93 199.542C252.876 206.914 250.963 213.926 248.204 220.388C236.899 247.02 214.525 259.158 188.359 252.875C157.249 245.408 124.55 232.769 88.4082 214.262C84.0377 212.029 79.5047 209.802 74.7169 207.456C59.8002 200.133 44.3967 192.57 30.7743 183.077ZM17.7738 172.749C17.7204 172.711 17.6537 172.665 17.5963 172.605C13.9789 169.291 10.7569 165.837 7.99578 162.347C1.59458 154.239 -0.96387 145.082 0.396814 135.108C4.93918 101.683 51.3402 67.6956 73.6429 51.3646L74.9438 50.408C77.2158 48.7406 79.5982 46.9717 82.0724 45.128C117.855 18.5276 177.723 -25.9955 215.161 21.0858C242.864 55.9119 257.939 109.114 256.572 167.052C256.422 173.468 256.054 179.912 255.479 186.171C255.392 187.062 254.612 187.727 253.72 187.641C252.829 187.555 252.164 186.775 252.25 185.883C252.824 179.683 253.181 173.311 253.335 166.976C254.695 109.787 239.861 57.3477 212.638 23.1134C177.148 -21.5006 121.092 20.1689 84.0123 47.7485C81.5155 49.5962 79.1238 51.3785 76.8518 53.0459L75.5509 54.0025C55.3367 68.8157 7.96459 103.514 3.60853 135.563C2.37514 144.614 4.70676 152.958 10.5362 160.351C13.1918 163.708 16.299 167.043 19.7882 170.228C20.4569 170.833 20.4897 171.866 19.885 172.535C19.336 173.124 18.4275 173.204 17.7738 172.749Z"
                                                fill="" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="wpo-team-text">
                                    <h3><a>Thierry</a></h3>
                                    <span>Témoin Daniel</span>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-sm-6 col-12 layer" data-depth="0.25">
                            <div class="wpo-team-item wow fadeInUp" data-wow-duration="1600ms">
                                <div class="wpo-team-img-wrap">
                                    <div class="wpo-team-img"
                                        style="mask-image: url(./assets/images/team/mask-4.svg); -webkit-mask-image: url(./assets/images/team/mask-4.svg);">
                                        <img src="assets/generic-icons/SVG/9.svg" alt="">
                                    </div>
                                    <div class="team-shape">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 257 255" fill="none">
                                            <path
                                                d="M30.7743 183.077C30.4007 182.817 30.0138 182.547 29.6402 182.287C28.9064 181.775 28.7337 180.743 29.2585 180.019C29.7698 179.285 30.7794 179.116 31.5132 179.628L31.5265 179.637C45.18 189.37 60.9235 197.071 76.1443 204.526C80.9454 206.881 85.4918 209.118 89.889 211.369C125.803 229.777 158.251 242.32 189.114 249.715C213.597 255.598 234.577 244.152 245.208 219.113C247.849 212.905 249.693 206.163 250.705 199.078C250.932 197.473 251.146 195.857 251.347 194.233C251.455 193.337 252.267 192.714 253.162 192.822C254.058 192.931 254.682 193.742 254.573 194.638C254.377 196.285 254.153 197.913 253.93 199.542C252.876 206.914 250.963 213.926 248.204 220.388C236.899 247.02 214.525 259.158 188.359 252.875C157.249 245.408 124.55 232.769 88.4082 214.262C84.0377 212.029 79.5047 209.802 74.7169 207.456C59.8002 200.133 44.3967 192.57 30.7743 183.077ZM17.7738 172.749C17.7204 172.711 17.6537 172.665 17.5963 172.605C13.9789 169.291 10.7569 165.837 7.99578 162.347C1.59458 154.239 -0.96387 145.082 0.396814 135.108C4.93918 101.683 51.3402 67.6956 73.6429 51.3646L74.9438 50.408C77.2158 48.7406 79.5982 46.9717 82.0724 45.128C117.855 18.5276 177.723 -25.9955 215.161 21.0858C242.864 55.9119 257.939 109.114 256.572 167.052C256.422 173.468 256.054 179.912 255.479 186.171C255.392 187.062 254.612 187.727 253.72 187.641C252.829 187.555 252.164 186.775 252.25 185.883C252.824 179.683 253.181 173.311 253.335 166.976C254.695 109.787 239.861 57.3477 212.638 23.1134C177.148 -21.5006 121.092 20.1689 84.0123 47.7485C81.5155 49.5962 79.1238 51.3785 76.8518 53.0459L75.5509 54.0025C55.3367 68.8157 7.96459 103.514 3.60853 135.563C2.37514 144.614 4.70676 152.958 10.5362 160.351C13.1918 163.708 16.299 167.043 19.7882 170.228C20.4569 170.833 20.4897 171.866 19.885 172.535C19.336 173.124 18.4275 173.204 17.7738 172.749Z"
                                                fill="" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="wpo-team-text">
                                    <h3><a>Zeuong</a></h3>
                                    <span>Témoin Daniel</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end wpo-team-section -->

        <!-- start of wpo-contact-section -->
        <section class="wpo-contact-section-s2 section-padding" id="contact">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                        <div class="wpo-contact-section-wrapper">
                            <div class="wpo-section-title">
                                <h2>Serez-vous présent ?</h2>
                            </div>
                            <div class="wpo-contact-form-area">
                                <!-- id="contact-form-main" -->
                                <form method="post" action="mail-contact.php" class="contact-validation-active">
                                    <div>
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Nom" required>
                                    </div>
                                    <div>
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Email" required>
                                    </div>
                                    <div class="radio-buttons">
                                        <p>
                                            <input type="radio" id="attend" name="radio" >
                                            <label for="attend">Oui, je serai là</label>
                                        </p>
                                    </div>
                                    <!-- <div>
                                        <select name="guest" class="form-control" required>
                                            <option disabled="disabled" selected>Nombre d'invités</option>
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                            <option>04</option>
                                            <option>05</option>
                                        </select>
                                    </div>
                                    <div>
                                        <input type="text" class="form-control" name="what" id="what" placeholder="À quoi assisterez-vous ?" required> 
                                    </div>
                                    <div>
                                        <select name="meal" class="form-control last" required>
                                            <option disabled="disabled" selected>Préférences de repas</option>
                                            <option>Soupe de poulet</option>
                                            <option>Motton Kabab</option>
                                            <option>Poulet BBQ</option>
                                            <option>Salade Mixte</option>
                                            <option>Côtes de bœuf</option>
                                        </select>
                                    </div> -->
                                    <div class="submit-area">
                                        <button type="submit" name="send" class="theme-btn">Envoyer</button>
                                        <div id="c-loader">
                                            <i class="ti-reload"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix error-handling-messages">
                                        <div id="success">Merci, message envoyé</div>
                                        <div id="error"> Une erreur s'est produite lors de l'envoi du message. Veuillez réessayer.</div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-bg">
                <svg viewBox="0 0 1920 634" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="bg-path"
                        d="M207 286C162.2 87.6 39 44.6667 -17 48L-91 22L-71 726H13L1977 670L1957 424C1926.6 318.4 1815 392 1763 442C1619.8 570 1503.33 495.333 1463 442C1270.2 162.8 1197.33 325.667 1185 442C1159.4 584.4 1117 537.333 1099 496C953.4 192.8 868.333 328.333 844 434C791.2 649.2 649.333 555.667 585 482C455.4 356.4 380.333 429.667 359 482C315 616.4 273.333 547.333 258 496L207 286Z"
                        fill="" />
                    <path class="bg-stroke"
                        d="M207 266C162.2 67.6 39 24.6667 -17 28L-91 2L-71 706H13L1977 650L1957 404C1926.6 298.4 1815 372 1763 422C1619.8 550 1503.33 475.333 1463 422C1270.2 142.8 1197.33 305.667 1185 422C1159.4 564.4 1117 517.333 1099 476C953.4 172.8 868.333 308.333 844 414C791.2 629.2 649.333 535.667 585 462C455.4 336.4 380.333 409.667 359 462C315 596.4 273.333 527.333 258 476L207 266Z"
                        stroke="" stroke-width="2" />
                </svg>

                <div class="shape-1">
                    <img src="assets/images/rsvp/shape.svg" alt="">
                </div>
                <div class="shape-2 wow fadeInUp" data-wow-duration="1000ms">
                    <img src="assets/images/rsvp/shape2.svg" alt="">
                </div>
                <div class="shape-3 wow fadeInUp" data-wow-duration="1200ms">
                    <img src="assets/images/rsvp/shape3.svg" alt="">
                </div>
                <div class="shape-4 wow fadeInUp" data-wow-duration="1400ms">
                    <img src="assets/images/rsvp/shape4.svg" alt="">
                </div>
                <div class="shape-5 wow fadeInUp" data-wow-duration="1600ms">
                    <img src="assets/images/rsvp/shape5.svg" alt="">
                </div>
                <div class="shape-6 wow fadeInUp" data-wow-duration="1800ms">
                    <img src="assets/images/rsvp/shape6.svg" alt="">
                </div>
            </div>
        </section>
        <!-- end of wpo-contact-section -->

        <!-- start wpo-event-section -->
        <section class="wpo-event-section section-padding" id="event">
            <div class="container">
                <div class="wpo-section-title">
                    <span>Notre mariage</span>
                    <h2>Quand et Où ?</h2>
                </div>
                <div class="wpo-event-wrap">
                    <div class="row">
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-event-item wow fadeInUp" data-wow-duration="1000ms">
                                <div class="wpo-event-img">
                                    <div class="wpo-event-img-inner">
                                        <img src="assets/img/eglise-jean-baptiste.jpg" alt="">
                                    </div>
                                </div>
                                <div class="wpo-event-text">
                                    <div class="title">
                                        <h2>Cérémonie Religieuse</h2>
                                    </div>
                                    <ul>
                                        <li>21 Septembre 2024 à 14h</li>
                                        <li>Église Saint-Jean-Baptiste, de Chaumont-En-Vexin 60240</li>
                                        <li> <a class="popup-gmaps"
                                                href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10414.634673487803!2d1.8814691!3d49.2639152!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6e47482cf09b7%3A0x33a18371c6d55237!2s%C3%89glise%20st%20Jean-Baptiste!5e0!3m2!1sfr!2scm!4v1715616849045!5m2!1sfr!2scm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">Voir le lieu</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-event-item wow fadeInUp" data-wow-duration="1200ms">
                                <div class="wpo-event-img">
                                    <div class="wpo-event-img-inner">
                                        <img src="assets/img/domaine-de-la-muette.jpg" alt="">
                                    </div>
                                </div>
                                <div class="wpo-event-text">
                                    <div class="title">
                                        <h2>Cocktail de Bienvenue</h2>
                                    </div>
                                    <ul>
                                        <li>21 Septembre 2024 à 16h</li>
                                        <li>Au Domaine de la Muette, à Montchevreuil 60240</li>
                                        <li> <a class="popup-gmaps"
                                                href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10406.250289580752!2d2.0153045!3d49.3036289!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6fc4a4be6350f%3A0x2ef4978f91785453!2sDomaine%20de%20la%20Muette!5e0!3m2!1sfr!2scm!4v1715616513929!5m2!1sfr!2scm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">Voir le lieu</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-event-item wow fadeInUp" data-wow-duration="1400ms">
                                <div class="wpo-event-img">
                                    <div class="wpo-event-img-inner">
                                        <img src="assets/img/domaine-de-la-muette-soir.jpg" alt="">
                                    </div>
                                </div>
                                <div class="wpo-event-text">
                                    <div class="title">
                                        <h2>La Soirée</h2>
                                    </div>
                                    <ul>
                                        <li>21 Septembre 2024 à 19h</li>
                                        <li>Au Domaine de la Muette, à Montchevreuil 60240</li>
                                        <li> <a class="popup-gmaps"
                                                href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10406.250289580752!2d2.0153045!3d49.3036289!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6fc4a4be6350f%3A0x2ef4978f91785453!2sDomaine%20de%20la%20Muette!5e0!3m2!1sfr!2scm!4v1715616513929!5m2!1sfr!2scm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">Voir le lieu</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- end container -->
        </section>
        <!-- end wpo-event-section -->
        <!-- start of wpo-site-footer-section -->
        <footer class="wpo-site-footer-s2">
            <div class="wpo-upper-footer">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col col-xl-3  col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="widget link-widget">
                                <div class="widget-title">
                                    <h3>Liens</h3>
                                </div>
                                <div class="link-wrap">
                                    <ul>
                                        <li><a href="index.html">Accueil</a></li>
                                        <li><a href="#couple">Mot du couple</a></li>
                                        <li><a href="#story">Histoire du couple</a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="#gallery">Gallerie</a></li>
                                        <li><a href="#contact">Contact</a></li>
                                        <li><a href="#event">Planning</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col col-xl-6 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="widget about-widget">
                                <div class="logo widget-title">
                                    <a class="logo" href="index.html">Leslie & Daniel</a>
                                </div>
                                <p>Nous sommes impatients de voir tous nos amis et parents bien-aimés à notre mariage.</p>
                                <!-- <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-instagram"></i>
                                        </a>
                                    </li>
                                </ul> -->
                            </div>
                        </div>

                        <div class="col col-xl-3  col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="widget wpo-service-link-widget">
                                <div class="widget-title">
                                    <h3>Contact </h3>
                                </div>
                                <div class="contact-ft">
                                    <p>Habibi@wpoceans.com</p>
                                    <p>4517 Washington Ave. Manchester,
                                        Kentucky 39495</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </div>
            <div class="wpo-lower-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-xs-12">
                            <p class="copyright"> &copy; Copyright 2024 | <a href="index.html">Leslie & Daniel</a> | Conçu par <a href="https://www.comtheplug.com" target="_blank">THEPLUG-GROUP</a> | Tous droits réservés.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ft-shape-1">
                <img src="assets/images/footer-shape-1.svg" alt="">
            </div>
            <div class="ft-shape-2">
                <img src="assets/images/footer-shape-2.svg" alt="">
            </div>
        </footer>
        <!-- end of wpo-site-footer-section -->
        <div class="color-switcher-wrap">
            <div class="color-switcher-item">
                <div class="color-toggle-btn">
                    <i class="fa fa-cog"></i>
                </div>
                <ul id="switcher">
                    <li class="btn btn1" id="Button1"></li>
                    <li class="btn btn2" id="Button2"></li>
                    <li class="btn btn3" id="Button3"></li>
                    <li class="btn btn4" id="Button4"></li>
                    <li class="btn btn5" id="Button5"></li>
                    <li class="btn btn6" id="Button6"></li>
                    <li class="btn btn7" id="Button7"></li>
                    <li class="btn btn8" id="Button8"></li>
                    <li class="btn btn9" id="Button9"></li>
                    <li class="btn btn10" id="Button10"></li>
                    <li class="btn btn11" id="Button11"></li>
                    <li class="btn btn12" id="Button12"></li>
                    <li class="btn btn13" id="Button13"></li>
                    <li class="btn btn14" id="Button14"></li>
                    <li class="btn btn15" id="Button15"></li>
                </ul>
            </div>
        </div>

    </div>
    <!-- end of page-wrapper -->

    <!-- All JavaScript files
    ================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Plugins for this template -->
    <script src="assets/js/modernizr.custom.js"></script>
    <script src="assets/js/jquery.pointparallax.min.js"></script>
    <script src="assets/js/jquery-plugin-collection.js"></script>
    <script src="assets/js/moving-animation.js"></script>
    <script src="assets/js/tilt.jquery.min.js"></script>
    <!-- Custom script for this template -->
    <script src="assets/js/script.js"></script>
</body>

</html>


