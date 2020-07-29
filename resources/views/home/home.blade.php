<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uinsu (Universitas Islam Negeri Sumatera Utara)</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">

    <!-- plugin scripts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,500i,600,700,800%7CSatisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('ladun/home_asset/site_style/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ladun/home_asset/site_style/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ladun/home_asset/site_style/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ladun/home_asset/site_style/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ladun/home_asset/site_style/plugins/fontawesome-free-5.11.2-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ladun/home_asset/site_style/plugins/kipso-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('ladun/home_asset/site_style/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('ladun/home_asset/site_style/css/vegas.min.css') }}">

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('ladun/home_asset/site_style/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('ladun/home_asset/site_style/css/responsive.css') }}">
</head>

<body>
    <div class="preloader"><span></span></div><!-- /.preloader -->
    <div class="page-wrapper">
        <div class="topbar-one">
            <div class="container">
                <div class="topbar-one__left">
                    <a href="#">humas@uinsu.ac.id</a>
                    <a href="#">62-61-6615683</a>
                </div><!-- /.topbar-one__left -->
                <div class="topbar-one__right">
                    <a href="#">Login</a>
                    <a href="#">Register</a>
                </div><!-- /.topbar-one__right -->
            </div><!-- /.container -->
        </div><!-- /.topbar-one -->
        <header class="site-header site-header__header-one ">
            <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
                <div class="container clearfix">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="logo-box clearfix">
                        <a class="navbar-brand" href="index.html">
                            <img src="{{ asset('ladun/home_asset/img/logo_utama.png') }}" class="main-logo" width="208" alt="Awesome Image" />
                        </a>
                       
                        <button class="menu-toggler" data-target=".main-navigation">
                            <span class="kipso-icon-menu"></span>
                        </button>
                    </div><!-- /.logo-box -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="main-navigation">
                        <ul class=" navigation-box">
                            <li class="current">
                                <a href="index.html">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Home 01</a></li>
                                    <li><a href="index-2.html">Home 02</a></li>
                                    <li><a href="index-3.html">Home 03</a></li>
                                    <li><a href="#">Header Versions</a>
                                        <ul class="sub-menu">
                                            <li><a href="index.html">Header 01</a></li>
                                            <li><a href="index-2.html">Header 02</a></li>
                                            <li><a href="index-3.html">Header 03</a></li>
                                        </ul><!-- /.sub-menu -->
                                    </li>
                                </ul><!-- /.sub-menu -->
                            </li>
                            <li>
                                <a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="about.html">About Page</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="pricing.html">Pricing Plans</a></li>
                                    <li><a href="faq.html">FAQ'S</a></li>
                                </ul><!-- /.sub-menu -->
                            </li>
                            <li>
                                <a href="courses.html">Courses</a>
                                <ul class="sub-menu">
                                    <li><a href="courses.html">Courses</a></li>
                                    <li><a href="course-details.html">Course Details</a></li>
                                </ul><!-- /.sub-menu -->
                            </li>
                            <li>
                                <a href="teachers.html">Teachers</a>
                                <ul class="sub-menu">
                                    <li><a href="teachers.html">Teachers</a></li>
                                    <li><a href="team-details.html">Teachers Details</a></li>
                                    <li><a href="become-teacher.html">Become Teacher</a></li>
                                </ul><!-- /.sub-menu -->
                            </li>
                            <li>
                                <a href="news.html">News</a>
                                <ul class="sub-menu">
                                    <li><a href="news.html">News Page</a></li>
                                    <li><a href="news-details.html">News Details</a></li>
                                </ul><!-- /.sub-menu -->
                            </li>
                            <li>
                                <a href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                    <div class="right-side-box">
                        <a class="header__search-btn search-popup__toggler" href="#"><i class="kipso-icon-magnifying-glass"></i>
                            <!-- /.kipso-icon-magnifying-glass --></a>
                    </div><!-- /.right-side-box -->
                </div>
                <!-- /.container -->
            </nav>
            <div class="site-header__decor">
                <div class="site-header__decor-row">
                    <div class="site-header__decor-single">
                        <div class="site-header__decor-inner-1"></div><!-- /.site-header__decor-inner -->
                    </div><!-- /.site-header__decor-single -->
                    <div class="site-header__decor-single">
                        <div class="site-header__decor-inner-2"></div><!-- /.site-header__decor-inner -->
                    </div><!-- /.site-header__decor-single -->
                    <div class="site-header__decor-single">
                        <div class="site-header__decor-inner-3"></div><!-- /.site-header__decor-inner -->
                    </div><!-- /.site-header__decor-single -->
                </div><!-- /.site-header__decor-row -->
            </div><!-- /.site-header__decor -->
        </header><!-- /.site-header -->
        <div class="banner-wrapper">
        <section class="banner-two banner-carousel__one no-dots owl-theme owl-carousel">
                <div class="banner-two__slide banner-two__slide-one" style="background-image: url(ladun/home_asset/img/slide_home/1.png);">
                    <div class="container">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <p class="banner-two__tag-line">High quality courses</p><!-- /.banner-two__tag-line -->
                                <h3 class="banner-two__title banner-two__light-color" style="color: #dfe6e9;">Read & learn <br>
                                    in an easy way</h3><!-- /.banner-two__title -->
                                <a href="#" class="thm-btn banner-two__btn">Learn More</a>
                            </div><!-- /.col-xl-12 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.banner-two__slide -->
                <div class="banner-two__slide banner-two__slide-two" style="background-image: url(ladun/home_asset/img/slide_home/3.png);">
                    <div class="container">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <p class="banner-two__tag-line">High quality courses</p><!-- /.banner-two__tag-line -->
                                <h3 class="banner-two__title banner-two__light-color">Read & learn <br>
                                    in an easy way</h3><!-- /.banner-two__title -->
                                <a href="#" class="thm-btn banner-two__btn">Learn More</a>
                            </div><!-- /.col-xl-12 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.banner-two__slide -->
            </section><!-- /.banner-two -->
            <div class="banner-carousel-btn">
                <a href="#" class="banner-carousel-btn__left-btn"><i class="kipso-icon-left-arrow"></i></a>
                <a href="#" class="banner-carousel-btn__right-btn"><i class="kipso-icon-right-arrow"></i></a>
            </div><!-- /.banner-carousel-btn -->
            <div class="banner-one__cta">
                <div class="banner-one__cta-icon">
                    <i class="kipso-icon-black-graduation-cap-tool-of-university-student-for-head"></i>
                    <!-- /.kipso-icon-knowledge -->
                </div><!-- /.banner-one__cta-icon -->
                <div class="banner-one__cta-title">
                    <h3 class="banner-one__cta-text"><a href="#!">Informasi pendaftaran mahasiswa baru</a></h3><!-- /.banner-one__cta-text -->
                </div><!-- /.banner-one__cta-title -->
                <div class="banner-one__cta-link">
                    <a href="#"><i class="kipso-icon-right-arrow"></i><!-- /.kipso-icon-right-arrow --></a>
                </div><!-- /.banner-one__cta-link -->
            </div><!-- /.banner-one__cta -->
        </div><!-- /.banner-wrapper -->
        <section class="about-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-two__content">
                            <div class="block-title text-left">
                                <h2 class="block-title__title">Welcome to online <br>
                                    learning center</h2><!-- /.block-title__title -->
                            </div><!-- /.block-title -->
                            <p class="about-two__text">There are many variations of passages of lorem ipsum available but the
                                majority have suffered alteration in some form by injected humour or randomised words which
                                don't look.</p><!-- /.about-two__text -->
                            <div class="about-two__single-wrap">
                                <div class="about-two__single">
                                    <div class="about-two__single-icon">
                                        <i class="kipso-icon-professor"></i><!-- /.kipso-icon-professor -->
                                    </div><!-- /.about-two__single-icon -->
                                    <div class="about-two__single-content">
                                        <p class="about-two__single-text">Start learning from
                                            our experts</p><!-- /.about-two__single-text -->
                                    </div><!-- /.about-two__single-content -->
                                </div><!-- /.about-two__single -->
                                <div class="about-two__single">
                                    <div class="about-two__single-icon">
                                        <i class="kipso-icon-knowledge"></i><!-- /.kipso-icon-professor -->
                                    </div><!-- /.about-two__single-icon -->
                                    <div class="about-two__single-content">
                                        <p class="about-two__single-text">Enhance your skills
                                            with us now</p><!-- /.about-two__single-text -->
                                    </div><!-- /.about-two__single-content -->
                                </div><!-- /.about-two__single -->
                            </div><!-- /.about-two__single-wrap -->
                            <a href="#" class="thm-btn">Learn More</a><!-- /.thm-btn -->
                        </div><!-- /.about-two__content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-xl-6 d-flex justify-content-xl-end justify-content-sm-center">
                        <div class="about-two__image">
                            <span class="about-two__image-dots"></span><!-- /.about-two__image-dots -->
                            <img src="assets/images/about-1-1.jpg" alt="">
                            <div class="about-two__count">
                                <div class="about-two__count-text">Trusted by
                                    <span class="counter">4890</span></div><!-- /.about-two__count-text -->
                            </div><!-- /.about-two__count -->
                        </div><!-- /.about-two__image -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-two -->
        <section class="course-one__top-title home-one">
            <div class="container">
                <div class="block-title mb-0">
                    <h2 class="block-title__title">Explore our <br>
                        popular courses</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
            </div><!-- /.container -->
            <div class="course-one__top-title__curve"></div><!-- /.course-one__top-title__curve -->
        </section><!-- /.course-one__top-title -->

        <section class="course-one course-one__teacher-details home-one">
            <div class="container">
                <div class="course-one__carousel owl-carousel owl-theme">
                    <div class="item">
                        <div class="course-one__single color-1">
                            <div class="course-one__image">
                                <img src="assets/images/course-1-1.jpg" alt="">
                                <i class="far fa-heart"></i><!-- /.far fa-heart -->
                            </div><!-- /.course-one__image -->
                            <div class="course-one__content">
                                <a href="#" class="course-one__category">development</a><!-- /.course-one__category -->
                                <div class="course-one__admin">
                                    <img src="assets/images/team-1-1.jpg" alt="">
                                    by <a href="teacher-details.html">Lou Guerrero</a>
                                </div><!-- /.course-one__admin -->
                                <h2 class="course-one__title"><a href="course-details.html">New react bootcamp</a></h2>
                                <!-- /.course-one__title -->
                                <div class="course-one__stars">
                                    <span class="course-one__stars-wrap">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span><!-- /.course-one__stars-wrap -->
                                    <span class="course-one__count">4.8</span><!-- /.course-one__count -->
                                    <span class="course-one__stars-count">250</span><!-- /.course-one__stars-count -->
                                </div><!-- /.course-one__stars -->
                                <div class="course-one__meta">
                                    <a href="course-details.html"><i class="far fa-clock"></i> 10 Hours</a>
                                    <a href="course-details.html"><i class="far fa-folder-open"></i> 6 Lectures</a>
                                    <a href="course-details.html">$18</a>
                                </div><!-- /.course-one__meta -->
                                <a href="#" class="course-one__link">See Preview</a><!-- /.course-one__link -->
                            </div><!-- /.course-one__content -->
                        </div><!-- /.course-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="course-one__single color-2">
                            <div class="course-one__image">
                                <img src="assets/images/course-1-2.jpg" alt="">
                                <i class="far fa-heart"></i><!-- /.far fa-heart -->
                            </div><!-- /.course-one__image -->
                            <div class="course-one__content">
                                <a href="#" class="course-one__category">It & Software</a><!-- /.course-one__category -->
                                <div class="course-one__admin">
                                    <img src="assets/images/team-1-2.jpg" alt="">
                                    by <a href="teacher-details.html">Cora Diaz</a>
                                </div><!-- /.course-one__admin -->
                                <h2 class="course-one__title"><a href="course-details.html">Improve editing skills</a></h2>
                                <!-- /.course-one__title -->
                                <div class="course-one__stars">
                                    <span class="course-one__stars-wrap">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span><!-- /.course-one__stars-wrap -->
                                    <span class="course-one__count">4.8</span><!-- /.course-one__count -->
                                    <span class="course-one__stars-count">250</span><!-- /.course-one__stars-count -->
                                </div><!-- /.course-one__stars -->
                                <div class="course-one__meta">
                                    <a href="course-details.html"><i class="far fa-clock"></i> 10 Hours</a>
                                    <a href="course-details.html"><i class="far fa-folder-open"></i> 6 Lectures</a>
                                    <a href="course-details.html">$18</a>
                                </div><!-- /.course-one__meta -->
                                <a href="#" class="course-one__link">See Preview</a><!-- /.course-one__link -->
                            </div><!-- /.course-one__content -->
                        </div><!-- /.course-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="course-one__single color-3">
                            <div class="course-one__image">
                                <img src="assets/images/course-1-3.jpg" alt="">
                                <i class="far fa-heart"></i><!-- /.far fa-heart -->
                            </div><!-- /.course-one__image -->
                            <div class="course-one__content">
                                <a href="#" class="course-one__category">marketing</a><!-- /.course-one__category -->
                                <div class="course-one__admin">
                                    <img src="assets/images/team-1-3.jpg" alt="">
                                    by <a href="teacher-details.html">Ruth Becker</a>
                                </div><!-- /.course-one__admin -->
                                <h2 class="course-one__title"><a href="course-details.html">Marketing strategies</a></h2>
                                <!-- /.course-one__title -->
                                <div class="course-one__stars">
                                    <span class="course-one__stars-wrap">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span><!-- /.course-one__stars-wrap -->
                                    <span class="course-one__count">4.8</span><!-- /.course-one__count -->
                                    <span class="course-one__stars-count">250</span><!-- /.course-one__stars-count -->
                                </div><!-- /.course-one__stars -->
                                <div class="course-one__meta">
                                    <a href="course-details.html"><i class="far fa-clock"></i> 10 Hours</a>
                                    <a href="course-details.html"><i class="far fa-folder-open"></i> 6 Lectures</a>
                                    <a href="course-details.html">$18</a>
                                </div><!-- /.course-one__meta -->
                                <a href="#" class="course-one__link">See Preview</a><!-- /.course-one__link -->
                            </div><!-- /.course-one__content -->
                        </div><!-- /.course-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="course-one__single color-4">
                            <div class="course-one__image">
                                <img src="assets/images/course-1-4.jpg" alt="">
                                <i class="far fa-heart"></i><!-- /.far fa-heart -->
                            </div><!-- /.course-one__image -->
                            <div class="course-one__content">
                                <a href="#" class="course-one__category">Photography</a><!-- /.course-one__category -->
                                <div class="course-one__admin">
                                    <img src="assets/images/team-1-4.jpg" alt="">
                                    by <a href="teacher-details.html">Ernest Rodriquez</a>
                                </div><!-- /.course-one__admin -->
                                <h2 class="course-one__title"><a href="course-details.html">Basics of photography</a></h2>
                                <!-- /.course-one__title -->
                                <div class="course-one__stars">
                                    <span class="course-one__stars-wrap">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span><!-- /.course-one__stars-wrap -->
                                    <span class="course-one__count">4.8</span><!-- /.course-one__count -->
                                    <span class="course-one__stars-count">250</span><!-- /.course-one__stars-count -->
                                </div><!-- /.course-one__stars -->
                                <div class="course-one__meta">
                                    <a href="course-details.html"><i class="far fa-clock"></i> 10 Hours</a>
                                    <a href="course-details.html"><i class="far fa-folder-open"></i> 6 Lectures</a>
                                    <a href="course-details.html">$18</a>
                                </div><!-- /.course-one__meta -->
                                <a href="#" class="course-one__link">See Preview</a><!-- /.course-one__link -->
                            </div><!-- /.course-one__content -->
                        </div><!-- /.course-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="course-one__single color-5">
                            <div class="course-one__image">
                                <img src="assets/images/course-1-5.jpg" alt="">
                                <i class="far fa-heart"></i><!-- /.far fa-heart -->
                            </div><!-- /.course-one__image -->
                            <div class="course-one__content">
                                <a href="#" class="course-one__category">marketing</a><!-- /.course-one__category -->
                                <div class="course-one__admin">
                                    <img src="assets/images/team-1-5.jpg" alt="">
                                    by <a href="teacher-details.html">Isabella Stanley</a>
                                </div><!-- /.course-one__admin -->
                                <h2 class="course-one__title"><a href="course-details.html">Affiliate bootcamp</a>
                                </h2>
                                <!-- /.course-one__title -->
                                <div class="course-one__stars">
                                    <span class="course-one__stars-wrap">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span><!-- /.course-one__stars-wrap -->
                                    <span class="course-one__count">4.8</span><!-- /.course-one__count -->
                                    <span class="course-one__stars-count">250</span><!-- /.course-one__stars-count -->
                                </div><!-- /.course-one__stars -->
                                <div class="course-one__meta">
                                    <a href="course-details.html"><i class="far fa-clock"></i> 10 Hours</a>
                                    <a href="course-details.html"><i class="far fa-folder-open"></i> 6 Lectures</a>
                                    <a href="course-details.html">$18</a>
                                </div><!-- /.course-one__meta -->
                                <a href="#" class="course-one__link">See Preview</a><!-- /.course-one__link -->
                            </div><!-- /.course-one__content -->
                        </div><!-- /.course-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="course-one__single color-6">
                            <div class="course-one__image">
                                <img src="assets/images/course-1-6.jpg" alt="">
                                <i class="far fa-heart"></i><!-- /.far fa-heart -->
                            </div><!-- /.course-one__image -->
                            <div class="course-one__content">
                                <a href="#" class="course-one__category">Health & Fitness</a><!-- /.course-one__category -->
                                <div class="course-one__admin">
                                    <img src="assets/images/team-1-6.jpg" alt="">
                                    by <a href="teacher-details.html">Katherine Collins</a>
                                </div><!-- /.course-one__admin -->
                                <h2 class="course-one__title"><a href="course-details.html">Healthy workout tips </a></h2>
                                <!-- /.course-one__title -->
                                <div class="course-one__stars">
                                    <span class="course-one__stars-wrap">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span><!-- /.course-one__stars-wrap -->
                                    <span class="course-one__count">4.8</span><!-- /.course-one__count -->
                                    <span class="course-one__stars-count">250</span><!-- /.course-one__stars-count -->
                                </div><!-- /.course-one__stars -->
                                <div class="course-one__meta">
                                    <a href="course-details.html"><i class="far fa-clock"></i> 10 Hours</a>
                                    <a href="course-details.html"><i class="far fa-folder-open"></i> 6 Lectures</a>
                                    <a href="course-details.html">$18</a>
                                </div><!-- /.course-one__meta -->
                                <a href="#" class="course-one__link">See Preview</a><!-- /.course-one__link -->
                            </div><!-- /.course-one__content -->
                        </div><!-- /.course-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="course-one__single color-1">
                            <div class="course-one__image">
                                <img src="assets/images/course-1-1.jpg" alt="">
                                <i class="far fa-heart"></i><!-- /.far fa-heart -->
                            </div><!-- /.course-one__image -->
                            <div class="course-one__content">
                                <a href="#" class="course-one__category">development</a><!-- /.course-one__category -->
                                <div class="course-one__admin">
                                    <img src="assets/images/team-1-1.jpg" alt="">
                                    by <a href="teacher-details.html">Lou Guerrero</a>
                                </div><!-- /.course-one__admin -->
                                <h2 class="course-one__title"><a href="course-details.html">New react bootcamp</a></h2>
                                <!-- /.course-one__title -->
                                <div class="course-one__stars">
                                    <span class="course-one__stars-wrap">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span><!-- /.course-one__stars-wrap -->
                                    <span class="course-one__count">4.8</span><!-- /.course-one__count -->
                                    <span class="course-one__stars-count">250</span><!-- /.course-one__stars-count -->
                                </div><!-- /.course-one__stars -->
                                <div class="course-one__meta">
                                    <a href="course-details.html"><i class="far fa-clock"></i> 10 Hours</a>
                                    <a href="course-details.html"><i class="far fa-folder-open"></i> 6 Lectures</a>
                                    <a href="course-details.html">$18</a>
                                </div><!-- /.course-one__meta -->
                                <a href="#" class="course-one__link">See Preview</a><!-- /.course-one__link -->
                            </div><!-- /.course-one__content -->
                        </div><!-- /.course-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="course-one__single color-2">
                            <div class="course-one__image">
                                <img src="assets/images/course-1-2.jpg" alt="">
                                <i class="far fa-heart"></i><!-- /.far fa-heart -->
                            </div><!-- /.course-one__image -->
                            <div class="course-one__content">
                                <a href="#" class="course-one__category">It & Software</a><!-- /.course-one__category -->
                                <div class="course-one__admin">
                                    <img src="assets/images/team-1-2.jpg" alt="">
                                    by <a href="teacher-details.html">Cora Diaz</a>
                                </div><!-- /.course-one__admin -->
                                <h2 class="course-one__title"><a href="course-details.html">Improve editing skills</a></h2>
                                <!-- /.course-one__title -->
                                <div class="course-one__stars">
                                    <span class="course-one__stars-wrap">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span><!-- /.course-one__stars-wrap -->
                                    <span class="course-one__count">4.8</span><!-- /.course-one__count -->
                                    <span class="course-one__stars-count">250</span><!-- /.course-one__stars-count -->
                                </div><!-- /.course-one__stars -->
                                <div class="course-one__meta">
                                    <a href="course-details.html"><i class="far fa-clock"></i> 10 Hours</a>
                                    <a href="course-details.html"><i class="far fa-folder-open"></i> 6 Lectures</a>
                                    <a href="course-details.html">$18</a>
                                </div><!-- /.course-one__meta -->
                                <a href="#" class="course-one__link">See Preview</a><!-- /.course-one__link -->
                            </div><!-- /.course-one__content -->
                        </div><!-- /.course-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="course-one__single color-3">
                            <div class="course-one__image">
                                <img src="assets/images/course-1-3.jpg" alt="">
                                <i class="far fa-heart"></i><!-- /.far fa-heart -->
                            </div><!-- /.course-one__image -->
                            <div class="course-one__content">
                                <a href="#" class="course-one__category">marketing</a><!-- /.course-one__category -->
                                <div class="course-one__admin">
                                    <img src="assets/images/team-1-3.jpg" alt="">
                                    by <a href="teacher-details.html">Ruth Becker</a>
                                </div><!-- /.course-one__admin -->
                                <h2 class="course-one__title"><a href="course-details.html">Marketing strategies</a></h2>
                                <!-- /.course-one__title -->
                                <div class="course-one__stars">
                                    <span class="course-one__stars-wrap">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span><!-- /.course-one__stars-wrap -->
                                    <span class="course-one__count">4.8</span><!-- /.course-one__count -->
                                    <span class="course-one__stars-count">250</span><!-- /.course-one__stars-count -->
                                </div><!-- /.course-one__stars -->
                                <div class="course-one__meta">
                                    <a href="course-details.html"><i class="far fa-clock"></i> 10 Hours</a>
                                    <a href="course-details.html"><i class="far fa-folder-open"></i> 6 Lectures</a>
                                    <a href="course-details.html">$18</a>
                                </div><!-- /.course-one__meta -->
                                <a href="#" class="course-one__link">See Preview</a><!-- /.course-one__link -->
                            </div><!-- /.course-one__content -->
                        </div><!-- /.course-one__single -->
                    </div><!-- /.item -->
                </div><!-- /.course-one__carousel -->
            </div><!-- /.container -->
        </section><!-- /.course-one course-page -->
        <section class="video-two">
            <div class="container">
                <img src="assets/images/scratch-1-1.png" class="video-two__scratch" alt="">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="video-two__content">
                            <h2 class="video-two__title">Kipso one & only <br>
                                mission is to extend <br>
                                your knowledge base</h2><!-- /.video-two__title -->
                            <a href="#" class="thm-btn">Learn More</a><!-- /.thm-btn -->
                        </div><!-- /.video-two__content -->
                    </div><!-- /.col-lg-7 -->
                    <div class="col-lg-5 d-flex justify-content-lg-end justify-content-sm-start">
                        <div class="my-auto">
                            <a href="#" class="video-two__popup"><i class="fa fa-play"></i><!-- /.fa fa-play --></a>
                            <!-- /.video-two__popup -->
                        </div><!-- /.my-auto -->
                    </div><!-- /.col-lg-5 d-flex justify-content-end -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.video-two -->
        <section class="countdown-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="countdown-one__content">
                            <h2 class="countdown-one__title">Register now </h2><!-- /.countdown-one__title -->
                            <p class="countdown-one__tag-line">get premium online courses for free!</p>
                            <!-- /.countdown-one__tag-line -->
                            <p class="countdown-one__text">Lorem ipsum gravida nibh vel velit auctor aliquetnean sollicitudin,
                                lorem
                                quis bibendum auci elit consequat is simply free text available in the psutis sem nibh id eis
                                sed
                                odio sit amet.</p><!-- /.countdown-one__text -->
                            <ul class="countdown-one__list list-unstyled">
                                <!-- content loading via js -->
                            </ul><!-- /.coundown-one__list -->
                        </div><!-- /.countdown-one__content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="become-teacher__form">
                            <div class="become-teacher__form-top">
                                <h2 class="become-teacher__form-title">
                                    Get free courses
                                </h2><!-- /.become-teacher__form-title -->
                            </div><!-- /.become-teacher__top -->
                            <div class="become-teacher__form-content">
                                <input type="text" placeholder="Your Name" name="name">
                                <input type="text" placeholder="Email Address" name="email">
                                <input type="text" placeholder="Phone Number" name="phone">
                                <input type="text" placeholder="Comment" name="message">
                                <button type="submit" class="thm-btn become-teacher__form-btn">Apply For It</button>
                            </div><!-- /.become-teacher__form-content -->
                        </div><!-- /.become-teacher__form -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.countdown-one -->
        <section class="thm-gray-bg course-category-one">
            <div class="container-fluid text-center">
                <div class="block-title text-center">
                    <h2 class="block-title__title">Browse online <br>
                        course categories</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="course-category-one__carousel owl-carousel owl-theme">
                    <div class="item">
                        <div class="course-category-one__single color-1">
                            <div class="course-category-one__icon">
                                <i class="kipso-icon-desktop"></i><!-- /.kipso-icon-camera -->
                            </div><!-- /.course-category-one__icon -->
                            <h3 class="course-category-one__title"><a href="#">IT & Software</a></h3>
                            <!-- /.course-category-one__title -->
                        </div><!-- /.course-category-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="course-category-one__single color-2">
                            <div class="course-category-one__icon">
                                <i class="kipso-icon-web-programming"></i><!-- /.kipso-icon-camera -->
                            </div><!-- /.course-category-one__icon -->
                            <h3 class="course-category-one__title"><a href="#">Development</a></h3>
                            <!-- /.course-category-one__title -->
                        </div><!-- /.course-category-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="course-category-one__single color-3">
                            <div class="course-category-one__icon">
                                <i class="kipso-icon-music-player"></i><!-- /.kipso-icon-camera -->
                            </div><!-- /.course-category-one__icon -->
                            <h3 class="course-category-one__title"><a href="#">Music</a></h3>
                            <!-- /.course-category-one__title -->
                        </div><!-- /.course-category-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="course-category-one__single color-4">
                            <div class="course-category-one__icon">
                                <i class="kipso-icon-camera"></i><!-- /.kipso-icon-camera -->
                            </div><!-- /.course-category-one__icon -->
                            <h3 class="course-category-one__title"><a href="#">Photography</a></h3>
                            <!-- /.course-category-one__title -->
                        </div><!-- /.course-category-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="course-category-one__single color-5">
                            <div class="course-category-one__icon">
                                <i class="kipso-icon-targeting"></i><!-- /.kipso-icon-camera -->
                            </div><!-- /.course-category-one__icon -->
                            <h3 class="course-category-one__title"><a href="#">Marketing</a></h3>
                            <!-- /.course-category-one__title -->
                        </div><!-- /.course-category-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="course-category-one__single color-6">
                            <div class="course-category-one__icon">
                                <i class="kipso-icon-health"></i><!-- /.kipso-icon-camera -->
                            </div><!-- /.course-category-one__icon -->
                            <h3 class="course-category-one__title"><a href="#">Health & Fitness</a></h3>
                            <!-- /.course-category-one__title -->
                        </div><!-- /.course-category-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="course-category-one__single color-1">
                            <div class="course-category-one__icon">
                                <i class="kipso-icon-desktop"></i><!-- /.kipso-icon-camera -->
                            </div><!-- /.course-category-one__icon -->
                            <h3 class="course-category-one__title"><a href="#">IT & Software</a></h3>
                            <!-- /.course-category-one__title -->
                        </div><!-- /.course-category-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="course-category-one__single color-2">
                            <div class="course-category-one__icon">
                                <i class="kipso-icon-web-programming"></i><!-- /.kipso-icon-camera -->
                            </div><!-- /.course-category-one__icon -->
                            <h3 class="course-category-one__title"><a href="#">Development</a></h3>
                            <!-- /.course-category-one__title -->
                        </div><!-- /.course-category-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="course-category-one__single color-3">
                            <div class="course-category-one__icon">
                                <i class="kipso-icon-music-player"></i><!-- /.kipso-icon-camera -->
                            </div><!-- /.course-category-one__icon -->
                            <h3 class="course-category-one__title"><a href="#">Music</a></h3>
                            <!-- /.course-category-one__title -->
                        </div><!-- /.course-category-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="course-category-one__single color-4">
                            <div class="course-category-one__icon">
                                <i class="kipso-icon-camera"></i><!-- /.kipso-icon-camera -->
                            </div><!-- /.course-category-one__icon -->
                            <h3 class="course-category-one__title"><a href="#">Photography</a></h3>
                            <!-- /.course-category-one__title -->
                        </div><!-- /.course-category-one__single -->
                    </div><!-- /.item -->
                </div><!-- /.course-category-one__carousel owl-carousel owl-theme -->

                <a href="#" class="thm-btn">View All Categories</a><!-- /.thm-btn -->
            </div><!-- /.container-fluid -->
        </section><!-- /.thm-gray-bg course-category-one -->
        <section class="cta-three">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 clearfix">
                        <img src="assets/images/cta-1.jpg" class="cta-three__image" alt="">
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="cta-three__content">
                            <div class="block-title text-left">
                                <h2 class="block-title__title">Benefits of learning
                                    with kipso</h2><!-- /.block-title__title -->
                            </div><!-- /.block-title -->
                            <p class="cta-three__text">There cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs
                                condmentum leo massa mollis estiegittis miristum nulla sed medy fringilla vitae.</p>
                            <!-- /.cta-three__text -->
                            <div class="cta-three__single-wrap">
                                <div class="cta-three__single">
                                    <i class="kipso-icon-strategy"></i><!-- /.kipso-icon-strategy -->
                                    <p class="cta-three__single-text">Professional
                                        Courses</p><!-- /.cta-three__single-text -->
                                </div><!-- /.cta-three__single -->
                                <div class="cta-three__single">
                                    <i class="kipso-icon-training"></i><!-- /.kipso-icon-training -->
                                    <p class="cta-three__single-text">Live
                                        Learning</p><!-- /.cta-three__single-text -->
                                </div><!-- /.cta-three__single -->
                                <div class="cta-three__single">
                                    <i class="kipso-icon-human-resources"></i><!-- /.kipso-icon-human-resources -->
                                    <p class="cta-three__single-text">Expert
                                        Teachers</p><!-- /.cta-three__single-text -->
                                </div><!-- /.cta-three__single -->
                            </div><!-- /.cta-three__single-wrap -->
                            <a href="#" class="thm-btn">Learn More</a><!-- /.thm-btn -->
                        </div><!-- /.cta-three__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.cta-three -->
        <section class="brand-two ">
            <div class="container">
                <div class="block-title">
                    <h2 class="block-title__title">Our company & partners</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="brand-one__carousel owl-carousel owl-theme">
                    <div class="item">
                        <img src="assets/images/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                </div><!-- /.brand-one__carousel owl-carousel owl-theme -->
            </div><!-- /.container -->
        </section><!-- /.brand-one -->
        <section class="blog-two">
            <div class="container">
                <div class="block-title text-center">
                    <h2 class="block-title__title">Our latest news <br>
                        & articles</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="blog-two__carousel owl-carousel owl-theme">
                    <div class="item">
                        <div class="blog-two__single" style="background-image: url(assets/images/blog-2-1.jpg);">
                            <div class="blog-two__inner">
                                <a href="news-details.html" class="blog-two__date">
                                    <span>25</span>
                                    Jul
                                </a><!-- /.blog-two__date -->
                                <div class="blog-two__meta">
                                    <a href="#">by Admin</a>
                                    <a href="#">3 Comments</a>
                                </div><!-- /.blog-two__meta -->
                                <h3 class="blog-two__title">
                                    <a href="news-details.html">Summer high school journalism camp</a>
                                </h3><!-- /.blog-two__title -->
                            </div><!-- /.blog-two__inner -->
                        </div><!-- /.blog-two__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="blog-two__single" style="background-image: url(assets/images/blog-2-2.jpg);">
                            <div class="blog-two__inner">
                                <a href="news-details.html" class="blog-two__date">
                                    <span>25</span>
                                    Jul
                                </a><!-- /.blog-two__date -->
                                <div class="blog-two__meta">
                                    <a href="#">by Admin</a>
                                    <a href="#">3 Comments</a>
                                </div><!-- /.blog-two__meta -->
                                <h3 class="blog-two__title">
                                    <a href="news-details.html">Get a tips to develop a quality education</a>
                                </h3><!-- /.blog-two__title -->
                            </div><!-- /.blog-two__inner -->
                        </div><!-- /.blog-two__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="blog-two__single" style="background-image: url(assets/images/blog-2-3.jpg);">
                            <div class="blog-two__inner">
                                <a href="news-details.html" class="blog-two__date">
                                    <span>25</span>
                                    Jul
                                </a><!-- /.blog-two__date -->
                                <div class="blog-two__meta">
                                    <a href="#">by Admin</a>
                                    <a href="#">3 Comments</a>
                                </div><!-- /.blog-two__meta -->
                                <h3 class="blog-two__title">
                                    <a href="news-details.html">Learn variety of programs and courses</a>
                                </h3><!-- /.blog-two__title -->
                            </div><!-- /.blog-two__inner -->
                        </div><!-- /.blog-two__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="blog-two__single" style="background-image: url(assets/images/blog-2-1.jpg);">
                            <div class="blog-two__inner">
                                <a href="news-details.html" class="blog-two__date">
                                    <span>25</span>
                                    Jul
                                </a><!-- /.blog-two__date -->
                                <div class="blog-two__meta">
                                    <a href="#">by Admin</a>
                                    <a href="#">3 Comments</a>
                                </div><!-- /.blog-two__meta -->
                                <h3 class="blog-two__title">
                                    <a href="news-details.html">Summer high school journalism camp</a>
                                </h3><!-- /.blog-two__title -->
                            </div><!-- /.blog-two__inner -->
                        </div><!-- /.blog-two__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="blog-two__single" style="background-image: url(assets/images/blog-2-2.jpg);">
                            <div class="blog-two__inner">
                                <a href="news-details.html" class="blog-two__date">
                                    <span>25</span>
                                    Jul
                                </a><!-- /.blog-two__date -->
                                <div class="blog-two__meta">
                                    <a href="#">by Admin</a>
                                    <a href="#">3 Comments</a>
                                </div><!-- /.blog-two__meta -->
                                <h3 class="blog-two__title">
                                    <a href="news-details.html">Get a tips to develop a quality education</a>
                                </h3><!-- /.blog-two__title -->
                            </div><!-- /.blog-two__inner -->
                        </div><!-- /.blog-two__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="blog-two__single" style="background-image: url(assets/images/blog-2-3.jpg);">
                            <div class="blog-two__inner">
                                <a href="news-details.html" class="blog-two__date">
                                    <span>25</span>
                                    Jul
                                </a><!-- /.blog-two__date -->
                                <div class="blog-two__meta">
                                    <a href="#">by Admin</a>
                                    <a href="#">3 Comments</a>
                                </div><!-- /.blog-two__meta -->
                                <h3 class="blog-two__title">
                                    <a href="news-details.html">Learn variety of programs and courses</a>
                                </h3><!-- /.blog-two__title -->
                            </div><!-- /.blog-two__inner -->
                        </div><!-- /.blog-two__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="blog-two__single" style="background-image: url(assets/images/blog-2-1.jpg);">
                            <div class="blog-two__inner">
                                <a href="news-details.html" class="blog-two__date">
                                    <span>25</span>
                                    Jul
                                </a><!-- /.blog-two__date -->
                                <div class="blog-two__meta">
                                    <a href="#">by Admin</a>
                                    <a href="#">3 Comments</a>
                                </div><!-- /.blog-two__meta -->
                                <h3 class="blog-two__title">
                                    <a href="news-details.html">Summer high school journalism camp</a>
                                </h3><!-- /.blog-two__title -->
                            </div><!-- /.blog-two__inner -->
                        </div><!-- /.blog-two__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="blog-two__single" style="background-image: url(assets/images/blog-2-2.jpg);">
                            <div class="blog-two__inner">
                                <a href="news-details.html" class="blog-two__date">
                                    <span>25</span>
                                    Jul
                                </a><!-- /.blog-two__date -->
                                <div class="blog-two__meta">
                                    <a href="#">by Admin</a>
                                    <a href="#">3 Comments</a>
                                </div><!-- /.blog-two__meta -->
                                <h3 class="blog-two__title">
                                    <a href="news-details.html">Get a tips to develop a quality education</a>
                                </h3><!-- /.blog-two__title -->
                            </div><!-- /.blog-two__inner -->
                        </div><!-- /.blog-two__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="blog-two__single" style="background-image: url(assets/images/blog-2-3.jpg);">
                            <div class="blog-two__inner">
                                <a href="news-details.html" class="blog-two__date">
                                    <span>25</span>
                                    Jul
                                </a><!-- /.blog-two__date -->
                                <div class="blog-two__meta">
                                    <a href="#">by Admin</a>
                                    <a href="#">3 Comments</a>
                                </div><!-- /.blog-two__meta -->
                                <h3 class="blog-two__title">
                                    <a href="news-details.html">Learn variety of programs and courses</a>
                                </h3><!-- /.blog-two__title -->
                            </div><!-- /.blog-two__inner -->
                        </div><!-- /.blog-two__single -->
                    </div><!-- /.item -->
                </div><!-- /.blog-two__carousel owl-carousel owl-theme -->
            </div><!-- /.container -->
        </section><!-- /.blog-one blog-page -->
        <section class="cta-four">
            <img src="assets/images/circle-stripe-1.png" class="cta-four__stripe" alt="">
            <img src="assets/images/line-stripe-1.png" class="cta-four__line" alt="">
            <div class="container text-center">
                <div class="block-title">
                    <h2 class="block-title__title">We’ve best teachers <br>
                        in every subject</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <p class="cta-four__text">Lorem ipsum gravida nibh vel velit auctor aliquetnean sollicitudin, lorem quis
                    bibendum auci elit <br> consequat is simply free text available in the psutis sem nibh id eis sed odio sit
                    amet.</p><!-- /.cta-four__text -->
            </div><!-- /.container text-center -->
        </section><!-- /.cta-four -->
        <section class="mailchimp-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mailchimp-one__content">
                            <div class="mailchimp-one__icon">
                                <i class="kipso-icon-email"></i><!-- /.kipso-icon-email -->
                            </div><!-- /.mailchimp-one__icon -->
                            <h2 class="mailchimp-one__title">Get latest courses <br>
                                updates by signing up</h2><!-- /.mailchimp-one__title -->
                        </div><!-- /.mailchimp-one__content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6 d-flex">
                        <div class="my-auto">
                            <form action="#" class="mailchimp-one__form">
                                <input type="text" placeholder="Enter your email ">
                                <button type="submit" class="thm-btn">Subscribe</button>
                            </form><!-- /.mailchimp-one__form -->
                        </div><!-- /.my-auto -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.mailchimp-one -->
        <footer class="site-footer">
            <div class="site-footer__upper">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-sm-12">
                            <div class="footer-widget footer-widget__contact">
                                <h2 class="footer-widget__title">Courses</h2><!-- /.footer-widget__title -->
                                <ul class="list-unstyled footer-widget__course-list">
                                    <li>
                                        <h2><a href="course-details.html">Introduction Web Design</a></h2>
                                        <p>Mike Hardson</p>
                                    </li>
                                    <li>
                                        <h2><a href="course-details.html"> Learning MBA Management </a></h2>
                                        <p>Jessica Brown</p>
                                    </li>
                                </ul><!-- /.footer-widget__course-list -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-xl-3 col-lg-6 col-sm-12">
                            <div class="footer-widget footer-widget__link">
                                <h2 class="footer-widget__title">Explore</h2><!-- /.footer-widget__title -->
                                <div class="footer-widget__link-wrap">
                                    <ul class="list-unstyled footer-widget__link-list">
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Overview</a></li>
                                        <li><a href="#">Teachers</a></li>
                                        <li><a href="#">Join Us</a></li>
                                        <li><a href="#">Our News</a></li>
                                    </ul><!-- /.footer-widget__link-list -->
                                    <ul class="list-unstyled footer-widget__link-list">
                                        <li><a href="#">Help </a></li>
                                        <li><a href="#">Contact</a></li>
                                        <li><a href="#">Register Now</a></li>
                                    </ul><!-- /.footer-widget__link-list -->
                                </div><!-- /.footer-widget__link-wrap -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-xl-3 col-lg-6 col-sm-12">
                            <div class="footer-widget footer-widget__gallery">
                                <h2 class="footer-widget__title">Gallery</h2><!-- /.footer-widget__title -->
                                <ul class="list-unstyled footer-widget__gallery-list">
                                    <li><a href="#"><img src="assets/images/footer-1-1.png" alt=""></a></li>
                                    <li><a href="#"><img src="assets/images/footer-1-2.png" alt=""></a></li>
                                    <li><a href="#"><img src="assets/images/footer-1-3.png" alt=""></a></li>
                                    <li><a href="#"><img src="assets/images/footer-1-4.png" alt=""></a></li>
                                    <li><a href="#"><img src="assets/images/footer-1-5.png" alt=""></a></li>
                                    <li><a href="#"><img src="assets/images/footer-1-6.png" alt=""></a></li>
                                </ul><!-- /.footer-widget__gallery -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-xl-3 col-lg-6 col-sm-12">
                            <div class="footer-widget footer-widget__about">
                                <h2 class="footer-widget__title">About</h2><!-- /.footer-widget__title -->
                                <p class="footer-widget__text">Lorem ipsum dolor sit ametcon, sectetur adipiscing elit.
                                    Phasellus vehic sagittis euismod.</p><!-- /.footer-widget__text -->
                                <div class="footer-widget__btn-block">
                                    <a href="#" class="thm-btn">Contact</a><!-- /.thm-btn -->
                                    <a href="#" class="thm-btn">Purchase</a><!-- /.thm-btn -->
                                </div><!-- /.footer-widget__btn-block -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__upper -->
            <div class="site-footer__bottom">
                <div class="container">
                    <p class="site-footer__copy">&copy; Copyright 2019 by <a href="#">Layerdrops.com</a></p>
                    <div class="site-footer__social">
                        <a href="#" data-target="html" class="scroll-to-target site-footer__scroll-top"><i class="kipso-icon-top-arrow"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div><!-- /.site-footer__social -->
                    <!-- /.site-footer__copy -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__bottom -->
        </footer><!-- /.site-footer -->

    </div><!-- /.page-wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.search-popup__overlay -->
        <div class="search-popup__inner">
            <form action="#" class="search-popup__form">
                <input type="text" name="search" placeholder="Type here to Search....">
                <button type="submit"><i class="kipso-icon-magnifying-glass"></i></button>
            </form>
        </div><!-- /.search-popup__inner -->
    </div><!-- /.search-popup -->

    <script src="{{ asset('ladun/home_asset/site_style/js/jquery.min.js') }}"></script>
    <script src="{{ asset('ladun/home_asset/site_style/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('ladun/home_asset/site_style/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('ladun/home_asset/site_style/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('ladun/home_asset/site_style/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('ladun/home_asset/site_style/js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('ladun/home_asset/site_style/js/wow.js') }}"></script>
    <script src="{{ asset('ladun/home_asset/site_style/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('ladun/home_asset/site_style/js/countdown.min.js') }}"></script>
    <script src="{{ asset('ladun/home_asset/site_style/js/vegas.min.js') }}"></script>

    <!-- template scripts -->
    <script src="{{ asset('ladun/home_asset/site_style/js/theme.js') }}"></script>
</body>

</html>