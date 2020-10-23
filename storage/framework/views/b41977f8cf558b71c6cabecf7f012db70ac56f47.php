<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?php echo e($settings->site_name); ?></title>
    <meta content="<?php echo e($settings->description); ?>" name="description">
    <meta content="<?php echo e($settings->keywords); ?>" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo e(url('/frontend')); ?>/img/favicon.png" rel="icon">
    <link href="<?php echo e(url('/frontend')); ?>/img/favicon.png" rel="apple-touch-icon">

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
                <?php if($settings->twitter_status == 1): ?>
                    <a target="_blank" href="<?php echo e($settings->twitter); ?>" class="twitter"><i class="bx bxl-twitter"></i></a>
                <?php endif; ?>
                <?php if($settings->facebook_status == 1): ?>
                    <a target="_blank" href="<?php echo e($settings->facebook); ?>}" class="facebook"><i class="bx bxl-facebook"></i></a>
                <?php endif; ?>

              <?php if($settings->vk_status == 1): ?>
                  <a target="_blank" href="<?php echo e($settings->vk); ?>" class="linkedin"><i class="bx bxl-vk"></i></a>
              <?php endif; ?>
              <?php if($settings->linkedin_status == 1): ?>
                   <a target="_blank"  href="<?php echo e($settings->linkedin); ?>"  class="linkedin"><i class="bx bxl-linkedin"></i></a>
              <?php endif; ?>
                    <?php if($settings->telegram_status == 1): ?>
                    <a target="_blank" href="https://t.me/<?php echo e($settings->telegram); ?>" class="linkedin"><i class="bx bxl-telegram"></i></a>

                    <?php endif; ?>
                <?php if($settings->whatsapp_status == 1): ?>
                        <a  target="_blank"  href="https://api.whatsapp.com/send?phone=<?php echo e($settings->whatsapp); ?>" class="linkedin"><i class="bx bxl-whatsapp"></i></a>
                    <?php endif; ?>



            </div>
        </div>

        <nav class="nav-menu">
            <ul>
                <li class="active"><a href="index.html"><i class="bx bx-home"></i> <span><?php echo app('translator')->get('site.home'); ?></span></a></li>
                <?php if(! empty($about_me)): ?>
                <li><a href="#about"><i class="bx bx-user"></i> <span><?php echo app('translator')->get('site.about'); ?></span></a></li>
                    <?php endif; ?>

            <?php if(! empty($my_educations) OR ! empty($my_experience)): ?>
                <li><a href="#resume"><i class="bx bx-file-blank"></i> <span><?php echo app('translator')->get('site.resume'); ?></span></a></li>
                <?php endif; ?>
            <?php if(! empty($my_portfolios)): ?>
                <li><a href="#portfolio"><i class="bx bx-book-content"></i><?php echo app('translator')->get('site.portfolio'); ?></a></li>
                <?php endif; ?>
              <?php if(! empty($my_serices)): ?>
                  <li><a href="#services"><i class="bx bx-server"></i> <?php echo app('translator')->get('site.services'); ?></a></li>
              <?php endif; ?>
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

                    <img src="<?php echo e(url('/admin/img/'.$about_me->image)); ?>" alt=""  class="img-fluid" >

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
    <?php if($my_price->count() > 0 ): ?>
    <section id="facts" class="facts">
        <div class="container">

            <div class="pricing">
              <?php $__currentLoopData = $my_price; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <?php
                       $info = '';
                       if ($key == 0){
                           $info = 'low';
                       }elseif($key == 1){
                           $info = 'mid';
                       }elseif($key == 2){
                           $info = 'high';
                       }else{
                           $info = 'low';

                       }

                       ?>
                    <div class="[ price-option price-option--<?php echo e($info); ?> ]">
                        <div class="price-option__detail">
                            <span class="price-option__cost"><?php echo e($val->price); ?></span>
                            <span class="price-option__type"><?php echo e($val->title); ?></span>
                            <br>
                            <h6 style="font-size: 10px;color: red"><?php echo e($val->sub_title); ?> </h6>
                        </div>
                        <a href="#" class="price-option__purchase"><?php echo e($val->footer_desc); ?></a>
                    </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        </div>
    </section><!-- End Facts Section -->
    <?php endif; ?>
    <!-- ======= Skills Section ======= -->
    <!-- ======= Skills Section ======= -->

    <?php if($skillsList->count() > 0): ?>
        <section id="skills" class="skills section-bg">
            <div class="container">
                <div class="section-title">
                    <h2><?php echo app('translator')->get('site.skills'); ?></h2>
                    
                </div>

                <div class="row skills-content">
                    <?php $__currentLoopData = $skillsList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ke => $ski): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-6" data-aos="fade-up"  <?php echo e($ke == 0 ? '' : 'data-aos-delay="100"'); ?>>

                            <div class="progress">
                                <span class="skill"><?php echo e($ski->title); ?> <i class="val"><?php echo e($ski->progress); ?>%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo e($ski->progress); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

            </div>
        </section><!-- End Skills Section -->
<?php endif; ?>
    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container">

            <div class="section-title">
                <h2><?php echo app('translator')->get('site.resume'); ?></h2>

            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-up">
                    <?php if(! empty($my_educations)): ?>
                        <h3 class="resume-title"><?php echo app('translator')->get('site.education'); ?></h3>
                        <?php $__currentLoopData = $my_educations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $my_edu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="resume-item">
                            <h4><?php echo e($my_edu->title); ?></h4>
                            <h5><?php echo e($my_edu->from); ?> - <?php echo e($my_edu->to); ?></h5>
                            <p><em><?php echo e($my_edu->sub_title); ?></em></p>
                            <p><?php echo e($my_edu->desc); ?></p>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                     <?php endif; ?>

                </div>
                <?php if(! empty($my_experience)): ?>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="resume-title"><?php echo app('translator')->get('site.professional_experiences'); ?></h3>
                    <?php $__currentLoopData = $my_experience; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $my_exp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="resume-item">
                        <h4><?php echo e($my_exp->title); ?></h4>
                        <h5><?php echo e($my_exp->from); ?> - <?php echo e($my_exp->to == 0? __('site.present') : $my_exp->to); ?></h5>
                        <p><em><?php echo e($my_exp->sub_title); ?> </em></p>
                        <ul>
                            <?php if(! empty($my_exp->desc1)): ?>
                            <li><?php echo e($my_exp->desc1); ?></li>
                            <?php endif; ?>
                                <?php if(! empty($my_exp->desc2)): ?>
                            <li><?php echo e($my_exp->desc2); ?></li>
                            <?php endif; ?>
                                <?php if(! empty($my_exp->desc3)): ?>
                            <li><?php echo e($my_exp->desc3); ?></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
                <?php endif; ?>
            </div>

        </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <?php if(! empty($my_portfolios)): ?>
    <section id="portfolio" class="portfolio section-bg">
        <div class="container">

            <div class="section-title">
                <h2><?php echo app('translator')->get('site.portfolio'); ?></h2>
             </div>


            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
              <?php $__currentLoopData = $my_portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $my_portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="<?php echo e(url('/admin/portfolios/'.$my_portfolio->image)); ?>" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="<?php echo e(url('/admin/portfolios/'.$my_portfolio->image)); ?>" data-gall="portfolioGallery" class="venobox" title="<?php echo e($my_portfolio->title); ?>"><i class="bx bx-plus"></i></a>
                            <a href="<?php echo e($my_portfolio->links); ?>" target="_blank" title="<?php echo app('translator')->get('site.More_Details'); ?>"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



            </div>

        </div>
    </section><!-- End Portfolio Section -->
    <?php endif; ?>
    <!-- ======= Services Section ======= -->
    <?php if(! empty($my_serices)): ?>
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2><?php echo app('translator')->get('site.services'); ?></h2>
             </div>

            <div class="row">
                <?php $__currentLoopData = $my_serices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $serice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="<?php echo e($k); ?>00">
                                        <div class="icon"><i class="<?php echo e($serice->icon); ?>"></i></div>
                                        <h4 class="title"><a href=""><?php echo e($serice->title); ?></a></h4>
                                        <p class="description"><?php echo e($serice->desc); ?></p>
                                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>






























            </div>

        </div>
    </section><!-- End Services Section -->
    <?php endif; ?>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2><?php echo app('translator')->get('site.contact'); ?></h2>
             </div>

            <div class="row" data-aos="fade-in">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4><?php echo app('translator')->get('site.location'); ?>:</h4>
                            <p><?php echo e(! empty($settings->adress) ? $settings->adress : ''); ?></p>
                        </div>

                        <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4><?php echo app('translator')->get('site.email'); ?>:</h4>
                            <p><?php echo e($settings->email); ?></p>
                        </div>

                        <div class="phone">
                            <i class="icofont-phone"></i>
                            <h4><?php echo app('translator')->get('site.call'); ?>:</h4>
                            <p> <a href="tel:<?php echo e($settings->phone1); ?>"><?php echo e($settings->phone1); ?></a></p>
                        </div>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d93236.69448614979!2d31.258464350000004!3d30.059488450000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583fa60b21beeb%3A0x79dfb296e8423bba!2sCairo%2C%20Cairo%20Governorate%2C%20Egypt!5e1!3m2!1sen!2sbg!4v1585095365148!5m2!1sen!2sbg" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="<?php echo e(route('contact')); ?>" method="post" role="form" class="php-email-form">
                         <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name"><?php echo app('translator')->get('site.your_name'); ?></label>
                                <input type="text" placeholder="<?php echo app('translator')->get('site.your_name'); ?>" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="<?php echo app('translator')->get('site.pl_en_a_4'); ?>" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email"><?php echo app('translator')->get('site.your_email'); ?></label>
                                <input type="email" placeholder="<?php echo app('translator')->get('site.your_email'); ?>" class="form-control" name="email" id="email" data-rule="email" data-msg="<?php echo app('translator')->get('site.pl_e_av_e'); ?>" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject"><?php echo app('translator')->get('site.subject'); ?></label>
                            <input type="text" placeholder="<?php echo app('translator')->get('site.subject'); ?>" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="<?php echo app('translator')->get('site.pl_en_a_8'); ?>" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <label for="message"><?php echo app('translator')->get('site.message'); ?></label>
                            <textarea class="form-control" placeholder="<?php echo app('translator')->get('site.message'); ?>" name="message" rows="10" data-rule="required" data-msg="<?php echo app('translator')->get('site.Please_write_something_for_us'); ?>"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="loading"><?php echo app('translator')->get('site.loading'); ?></div>
                            <div class="error-message"></div>
                            <div class="sent-message"><?php echo app('translator')->get('site.Your_message_has_been_sent_Thank_you'); ?></div>
                        </div>
                        <div class="text-center"><button type="submit"><?php echo app('translator')->get('site.send_message'); ?></button></div>
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
                                <?php echo e($properties['native']); ?>  <?php echo $locale = request()->path()  == $localeCode ? " #":""; ?>

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
<?php /**PATH C:\xampp\htdocs\laravel\devmarcel\resources\views/frontend/index.blade.php ENDPATH**/ ?>