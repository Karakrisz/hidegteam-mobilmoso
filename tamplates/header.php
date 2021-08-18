    <!-- PRELOADER -->
    <div class="loader" id="loader-fade">
        <div class="loader-container">
            <div class="loader-block"></div>
            <div class="loader-block"></div>
            <div class="loader-block"></div>
            <div class="loader-block"></div>
            <div class="loader-block"></div>
            <div class="loader-block"></div>
            <div class="loader-block"></div>
            <div class="loader-block"></div>
            <div class="loader-block"></div>
            <div class="loader-block"></div>
            <div class="loader-block"></div>
            <div class="loader-block"></div>
            <div class="loader-block"></div>
            <div class="loader-block"></div>
            <div class="loader-block"></div>
            <div class="loader-block"></div>
        </div>
    </div>
    <!-- PRELOADER -->

    <!-- START HEADER -->
    <header class="site-header">
        <nav class="navbar navbar-expand-lg nav-bottom-line center-brand static-nav">
            <div class="container">
                <a class="navbar-brand scroll" href="/">
                    <img src="karaKrisz/img/logo.png" alt="logo" class="logo-default">
                    <img src="karaKrisz/img/logo.png" alt="logo" class="logo-scrolled">
                </a>
                <button class="navbar-toggler navbar-toggler-right d-none collapsed" type="button" data-toggle="collapse" data-target="#xenav">
                    <span> </span>
                    <span> </span>
                    <span> </span>
                </button>
                <li class="top-personal-info">
                    <?php foreach ($getTelefonszam as $telefonszam) : ?>
                        <a href="tel:+<?php esc($telefonszam["telefonszam"]) ?>"><i class="las la-phone"></i> + <?php esc($telefonszam["telefonszam"]) ?></a>
                    <?php endforeach; ?>
                </li>
                <div class="collapse navbar-collapse" id="xenav">
                    <ul class="navbar-nav" id="container">
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#about">Rólunk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#all-products">Referenciák</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto mr-0 mr-lg-4">
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#reviews">Áraink</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#contact">Kapcsolat</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar-social side-icons">
                    <ul class="list-unstyled d-flex m-0">
                        <a class="social-icon-clr" href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a>
                        <a class="social-icon-clr" href="javascript:void(0);"><i class="fab fa-instagram"></i></a>
                    </ul>
                </div>
            </div>

            <!--side menu open button-->
            <a href="javascript:void(0)" class="d-inline-block sidemenu_btn" id="sidemenu_toggle">
                <span></span> <span></span> <span></span>
            </a>
        </nav>

        <!-- side menu -->
        <div class="side-menu">
            <div class="inner-wrapper">
                <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
                <nav class="side-nav w-100">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#slider-area">Kezdőlap</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#about">Rólunk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#all-products">Referenciák</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#reviews">Áraink</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#contact">Kapcsolat</a>
                        </li>
                    </ul>
                </nav>
                <div class="side-footer w-100">
                    <p>Copyright © 2021 <a href="#">karaKrisz</a> Minden jog
                        fenntartott.</p>
                </div>
            </div>
        </div>
        <a id="close_side_menu" href="javascript:void(0);"></a>
        <!-- End side menu -->
    </header>
    <!-- START HEADER -->