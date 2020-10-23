<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>iPortfolio Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo e(url('/frontend')); ?>/img/favicon.png" rel="icon">
    <link href="<?php echo e(url('/frontend')); ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo e(url('/frontend')); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo e(url('/frontend')); ?>/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?php echo e(url('/frontend')); ?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo e(url('/frontend')); ?>/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?php echo e(url('/frontend')); ?>/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo e(url('/frontend')); ?>/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo e(url('/frontend')); ?>/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: iPortfolio - v2.0.1
    * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->





































































































































































































<style>
    /*@import  "compass/css3";*/

    /*.facts,*/
    /*.facts:before,*/
    /*.facts:after {*/
    /*    box-sizing: border-box;*/
    /*}*/

    /*.facts{*/
    /*    height: 100%*/
    /*}*/

    /*.facts {*/
    /*    background: #454c4f;*/
    /*    font: 1em/1.5 'Droid Sans', sans-serif;*/
    /*}*/

    .pricing {
        transform: translate(-49%, -49.1%);
        position: absolute;

        left: 58%;
        top: 20%;
        width: 600px;
        font-size: 0;
        opacity: 1;
        transition: opacity .2s ease;
    }

    .price-option {
        display: inline-block;
        width: 10em;
        vertical-align: middle;
        margin-right: 0.3125em;
        font-size: 16px;
        opacity: 1;
        transition: opacity .2s ease;
    }

    .price-option:last-child { margin-right: 0; }

    .pricing:hover .price-option { opacity: 0.6; }
    .pricing:hover .price-option:hover { opacity: 1; }

    .price-option__detail {
        padding: 2em 0;
        background: white;
        text-align: center;
    }

    .price-option--low .price-option__detail  { border-radius: .25em 0 0 0; }
    .price-option--mid .price-option__detail  { padding: 2.3em 0; border-radius: .25em .25em 0 0; }
    .price-option--high .price-option__detail { border-radius: 0 .25em 0 0; }

    .price-option__cost,
    .price-option__type {
        display: block;
    }

    .price-option__cost {
        font-size: 1.5em;
        color: #383838;
    }

    .price-option__type {
        font-size: .7em;
        text-transform: uppercase;
        color: #909090;
    }

    .price-option__purchase {
        position: relative;
        display: block;
        padding: .6em;
        font-size: .875em;
        font-weight: bold;
        text-align: center;
        text-transform: uppercase;
        text-decoration: none;
        color: rgba(0,0,0,0.6);
    }

    .price-option--low .price-option__purchase  { background: #a7d155; border-radius: 0 0 0 .25em; }
    .price-option--mid .price-option__purchase  { background: #eada42; border-radius: 0 0 .25em .25em; }
    .price-option--high .price-option__purchase { background: #e54e4b; border-radius: 0 0 .25em 0; }

    .price-option__purchase:before {
        content: '';
        position: absolute;
        bottom: 100%;
        left: 50%;
        display: block;
        width: 0;
        height: 0;
        margin-left: -5px;
        border-width: 0 5px 5px;
        border-style: solid;
    }

    .price-option--low .price-option__purchase:before  { border-color: transparent transparent #a7d155; }
    .price-option--mid .price-option__purchase:before  { border-color: transparent transparent #eada42; }
    .price-option--high .price-option__purchase:before { border-color: transparent transparent #e54e4b; }

</style>
</head>

<body>

<!-- ======= Mobile nav toggle button ======= -->
<button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
            <img src="<?php echo e(url('/admin/img/'.$my_info->min_image)); ?>" alt="" class="img-fluid rounded-circle">

            <h1 class="text-light"><a href="index.html"><?php echo e($my_info->name); ?></a></h1>
            <div class="social-links mt-3 text-center">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-vk"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-telegram"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-whatsapp"></i></a>


            </div>
        </div>

        <nav class="nav-menu">
            <ul>
                <li class="active"><a href="index.html"><i class="bx bx-home"></i> <span><?php echo app('translator')->get('site.home'); ?></span></a></li>
                <?php if(! empty($about_me)): ?>
                <li><a href="#about"><i class="bx bx-user"></i> <span><?php echo app('translator')->get('site.about'); ?></span></a></li>
                <?php endif; ?>
                <li><a href="#resume"><i class="bx bx-file-blank"></i> <span><?php echo app('translator')->get('site.resume'); ?></span></a></li>
                <li><a href="#portfolio"><i class="bx bx-book-content"></i><?php echo app('translator')->get('site.portfolio'); ?></a></li>
                <li><a href="#services"><i class="bx bx-server"></i> <?php echo app('translator')->get('site.services'); ?></a></li>
                <li><a href="#contact"><i class="bx bx-envelope"></i>  <?php echo app('translator')->get('site.contact'); ?></a></li>

            </ul>
        </nav><!-- .nav-menu -->
        <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
        <h1><?php echo e($my_info->name); ?></h1>
         <p><?php echo app('translator')->get('site.i_am'); ?> <span class="typed" data-typed-items="<?php echo app('translator')->get('site.freelancer'); ?>, <?php echo app('translator')->get('site.Web_Developer'); ?>,<?php echo app('translator')->get('site.Problem_Fixer'); ?>"></span></p>

    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <?php if(! empty($about_me)): ?>
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <h2><?php echo app('translator')->get('site.about_me'); ?></h2>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="<?php echo e(url('/frontend')); ?>/img/profile-img.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3><?php echo e($about_me->title); ?>.</h3>
                    <p class="font-italic">
                        <?php echo e($about_me->sub_title); ?>

                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="icofont-rounded-right"></i> <strong><?php echo app('translator')->get('site.birthday'); ?>:</strong> <?php echo e($about_me->birthday); ?></li>
                                <li><i class="icofont-rounded-right"></i> <strong><?php echo app('translator')->get('site.phone'); ?>:</strong><a href="tel:+<?php echo e($about_me->phone); ?>">+<?php echo e($about_me->phone); ?></a> </li>
                                <li><i class="icofont-rounded-right"></i> <strong><?php echo app('translator')->get('site.address'); ?>:</strong> <?php echo e($about_me->address); ?></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                 <li><i class="icofont-rounded-right"></i> <strong><?php echo app('translator')->get('site.degree'); ?>:</strong> <?php echo e($about_me->degree); ?></li>
                                <li><i class="icofont-rounded-right"></i> <strong><?php echo app('translator')->get('site.email'); ?>:</strong> <a href="mailto:<?php echo e($about_me->email); ?>"> <?php echo e($about_me->email); ?></a></li>
                                <li><i class="icofont-rounded-right"></i> <strong><?php echo app('translator')->get('site.freelance'); ?>:</strong> <?php echo e($about_me->freelance); ?></li>
                            </ul>
                        </div>
                    </div>
                    <p><?php echo e($about_me->desc); ?></p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->
    <?php endif; ?>
    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
        <div class="container">
            <div class="pricing">
                <div class="[ price-option price-option--low ]">
                    <div class="price-option__detail">
                        <span class="price-option__cost">$5</span>
                        <span class="price-option__type">Site maintenance</span>
                        <br>
                        <h6>(2) Problems </h6>
                    </div>
                    <a href="#" class="price-option__purchase">Start with $5</a>
                </div>
                <div class="[ price-option price-option--mid ]">
                    <div class="price-option__detail">
                        <span class="price-option__cost">$100</span>
                        <span class="price-option__type">Bullid Full Websiste</span>
                        <br>
                        <h6>(1) month free maintenance</h6>
                    </div>
                    <a href="#" class="price-option__purchase">Start with $100</a>
                </div>
                <div class="[ price-option price-option--high ]">
                    <div class="price-option__detail">
                        <span class="price-option__cost">$50</span>
                        <span class="price-option__type">Bullid Helf Websiste</span>
                    </div>
                    <a href="#" class="price-option__purchase">Start with $50</a>
                </div>
            </div>




































































































        </div>
    </section><!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Skills</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row skills-content">

                <div class="col-lg-6" data-aos="fade-up">

                    <div class="progress">
                        <span class="skill">HTML <i class="val">100%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">CSS <i class="val">90%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">JavaScript <i class="val">75%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                    <div class="progress">
                        <span class="skill">PHP <i class="val">80%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">WordPress/CMS <i class="val">90%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">Photoshop <i class="val">55%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container">

            <div class="section-title">
                <h2>Resume</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-up">
                    <h3 class="resume-title">Sumary</h3>
                    <div class="resume-item pb-0">
                        <h4><?php echo e($my_info->name); ?></h4>
                        <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
                        <ul>
                            <li>Portland par 127,Orlando, FL</li>
                            <li>(123) 456-7891</li>
                            <li>alice.barkley@example.com</li>
                        </ul>
                    </div>

                    <h3 class="resume-title">Education</h3>
                    <div class="resume-item">
                        <h4>Master of Fine Arts &amp; Graphic Design</h4>
                        <h5>2015 - 2016</h5>
                        <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
                        <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>
                    </div>
                    <div class="resume-item">
                        <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
                        <h5>2010 - 2014</h5>
                        <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
                        <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="resume-title">Professional Experience</h3>
                    <div class="resume-item">
                        <h4>Senior graphic design specialist</h4>
                        <h5>2019 - Present</h5>
                        <p><em>Experion, New York, NY </em></p>
                        <ul>
                            <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
                            <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
                            <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
                            <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
                        </ul>
                    </div>
                    <div class="resume-item">
                        <h4>Graphic design specialist</h4>
                        <h5>2017 - 2018</h5>
                        <p><em>Stepping Stone Advertising, New York, NY</em></p>
                        <ul>
                            <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>
                            <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                            <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                            <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Portfolio</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-card">Card</li>
                        <li data-filter=".filter-web">Web</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="<?php echo e(url('/frontend')); ?>/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="<?php echo e(url('/frontend')); ?>/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="<?php echo e(url('/frontend')); ?>/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="<?php echo e(url('/frontend')); ?>/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="<?php echo e(url('/frontend')); ?>/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="<?php echo e(url('/frontend')); ?>/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="<?php echo e(url('/frontend')); ?>/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="<?php echo e(url('/frontend')); ?>/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="<?php echo e(url('/frontend')); ?>/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="<?php echo e(url('/frontend')); ?>/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="<?php echo e(url('/frontend')); ?>/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="<?php echo e(url('/frontend')); ?>/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="<?php echo e(url('/frontend')); ?>/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="<?php echo e(url('/frontend')); ?>/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="<?php echo e(url('/frontend')); ?>/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="<?php echo e(url('/frontend')); ?>/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="<?php echo e(url('/frontend')); ?>/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="<?php echo e(url('/frontend')); ?>/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>Services</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                    <div class="icon"><i class="icofont-computer"></i></div>
                    <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
                    <h4 class="title"><a href="">Dolor Sitema</a></h4>
                    <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><i class="icofont-earth"></i></div>
                    <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                    <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><i class="icofont-image"></i></div>
                    <h4 class="title"><a href="">Magni Dolores</a></h4>
                    <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon"><i class="icofont-settings"></i></div>
                    <h4 class="title"><a href="">Nemo Enim</a></h4>
                    <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                    <div class="icon"><i class="icofont-tasks-alt"></i></div>
                    <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                    <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                </div>
            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Testimonials</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="owl-carousel testimnials-carousel">

                <div class="testimonial-item" data-aos="fade-up">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="<?php echo e(url('/frontend')); ?>/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                    <h3>Saul Goodman</h3>
                    <h4>Ceo &amp; Founder</h4>
                </div>

                <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="<?php echo e(url('/frontend')); ?>/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                </div>

                <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="<?php echo e(url('/frontend')); ?>/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                    <h3>Jena Karlis</h3>
                    <h4>Store Owner</h4>
                </div>

                <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="<?php echo e(url('/frontend')); ?>/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                    <h3>Matt Brandon</h3>
                    <h4>Freelancer</h4>
                </div>

                <div class="testimonial-item" data-aos="fade-up" data-aos-delay="400">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="<?php echo e(url('/frontend')); ?>/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                    <h3>John Larson</h3>
                    <h4>Entrepreneur</h4>
                </div>

            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row" data-aos="fade-in">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4>Location:</h4>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>

                        <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4>Email:</h4>
                            <p>info@example.com</p>
                        </div>

                        <div class="phone">
                            <i class="icofont-phone"></i>
                            <h4>Call:</h4>
                            <p>+1 5589 55488 55s</p>
                        </div>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">












        <hr>

        <div class="d-flex">

            <div class="btn-group">
                <button style="
    width: 245px;
" type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                     language/
                    язык
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuReference" style="width: 247px;
    text-align: center;">

                    <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a rel="alternate" hreflang="<?php echo e($localeCode); ?>" href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>" class=" waves-effect waves-block">
                                <?php echo e($properties['native']); ?>  <?php echo $locale = App::getLocale()  == $localeCode ? " #":""; ?>

                            </a>
                        </li>
                        <hr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>


    </div>
</footer><!-- End  Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="<?php echo e(url('/frontend')); ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo e(url('/frontend')); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo e(url('/frontend')); ?>/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?php echo e(url('/frontend')); ?>/vendor/php-email-form/validate.js"></script>
<script src="<?php echo e(url('/frontend')); ?>/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="<?php echo e(url('/frontend')); ?>/vendor/counterup/counterup.min.js"></script>
<script src="<?php echo e(url('/frontend')); ?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php echo e(url('/frontend')); ?>/vendor/venobox/venobox.min.js"></script>
<script src="<?php echo e(url('/frontend')); ?>/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="<?php echo e(url('/frontend')); ?>/vendor/typed.js/typed.min.js"></script>
<script src="<?php echo e(url('/frontend')); ?>/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="<?php echo e(url('/frontend')); ?>/js/main.js"></script>

</body>

</html>
<?php /**PATH E:\projects\profile\resources\views\frontend\index.blade.php ENDPATH**/ ?>