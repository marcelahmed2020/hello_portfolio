<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{$settings->site_name}}</title>
    <meta content="{{$settings->description}}" name="description">
    <meta content="{{$settings->keywords}}" name="keywords">

    <!-- Favicons -->
    <link href="{{url('/frontend')}}/img/favicon.png" rel="icon">
    <link href="{{url('/frontend')}}/img/favicon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{url('/frontend')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{url('/frontend')}}/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="{{url('/frontend')}}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{url('/frontend')}}/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="{{url('/frontend')}}/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{url('/frontend')}}/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{url('/frontend')}}/css/style.css" rel="stylesheet">

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
            <img src="{{url('/admin/img/'.$my_info->min_image)}}" alt="" class="img-fluid rounded-circle">

            <h1 class="text-light"><a href="index.html">{{ $my_info->name  }}</a></h1>
            <div class="social-links mt-3 text-center">
                @if($settings->twitter_status == 1)
                    <a target="_blank" href="{{$settings->twitter}}" class="twitter"><i class="bx bxl-twitter"></i></a>
                @endif
                @if($settings->facebook_status == 1)
                    <a target="_blank" href="{{  $settings->facebook }}}" class="facebook"><i class="bx bxl-facebook"></i></a>
                @endif

              @if($settings->vk_status == 1)
                  <a target="_blank" href="{{$settings->vk}}" class="linkedin"><i class="bx bxl-vk"></i></a>
              @endif
              @if($settings->linkedin_status == 1)
                   <a target="_blank"  href="{{$settings->linkedin}}"  class="linkedin"><i class="bx bxl-linkedin"></i></a>
              @endif
                    @if($settings->telegram_status == 1)
                    <a target="_blank" href="https://t.me/{{$settings->telegram}}" class="linkedin"><i class="bx bxl-telegram"></i></a>

                    @endif
                @if($settings->whatsapp_status == 1)
                        <a  target="_blank"  href="https://api.whatsapp.com/send?phone={{$settings->whatsapp}}" class="linkedin"><i class="bx bxl-whatsapp"></i></a>
                    @endif



            </div>
        </div>

        <nav class="nav-menu">
            <ul>
                <li class="active"><a href="index.html"><i class="bx bx-home"></i> <span>@lang('site.home')</span></a></li>
                @if(! empty($about_me))
                <li><a href="#about"><i class="bx bx-user"></i> <span>@lang('site.about')</span></a></li>
                    @endif

            @if(! empty($my_educations) OR ! empty($my_experience))
                <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>@lang('site.resume')</span></a></li>
                @endif
            @if(! empty($my_portfolios))
                <li><a href="#portfolio"><i class="bx bx-book-content"></i>@lang('site.portfolio')</a></li>
                @endif
              @if(! empty($my_serices))
                  <li><a href="#services"><i class="bx bx-server"></i> @lang('site.services')</a></li>
              @endif
                <li><a href="#contact"><i class="bx bx-envelope"></i>  @lang('site.contact')</a></li>

            </ul>
        </nav><!-- .nav-menu -->
        <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
        <h1>{{ $my_info->name  }}</h1>
         <p>@lang('site.i_am') <span class="typed" data-typed-items="@lang('site.freelancer'), @lang('site.Web_Developer'),@lang('site.Problem_Fixer')"></span></p>

    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    @if(! empty($about_me))
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <h2>@lang('site.about_me')</h2>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
{{--                    <img src="{{url('/frontend')}}/img/profile-img.jpg"alt="">--}}
                    <img src="{{url('/admin/img/'.$about_me->image)}}" alt=""  class="img-fluid" >

                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3>{{ $about_me->title  }}.</h3>
                    <p class="font-italic">
                        {{ $about_me->sub_title}}
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="icofont-rounded-right"></i> <strong>@lang('site.birthday'):</strong> {{ $about_me->birthday  }}</li>
                                <li><i class="icofont-rounded-right"></i> <strong>@lang('site.phone'):</strong><a href="tel:+{{$about_me->phone}}">+{{$about_me->phone}}</a> </li>
                                <li><i class="icofont-rounded-right"></i> <strong>@lang('site.address'):</strong> {{$about_me->address}}</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                 <li><i class="icofont-rounded-right"></i> <strong>@lang('site.degree'):</strong> {{ $about_me->degree}}</li>
                                <li><i class="icofont-rounded-right"></i> <strong>@lang('site.email'):</strong> <a href="mailto:{{$about_me->email}}"> {{ $about_me->email  }}</a></li>
                                <li><i class="icofont-rounded-right"></i> <strong>@lang('site.freelance'):</strong> {{$about_me->freelance}}</li>
                            </ul>
                        </div>
                    </div>
                    <p>{{$about_me->desc}}</p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->
    @endif
    <!-- ======= Facts Section ======= -->
    @if($my_price->count() > 0 )
    <section id="facts" class="facts">
        <div class="container">

            <div class="pricing">
              @foreach($my_price as $key => $val)
                       @php
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

                       @endphp
                    <div class="[ price-option price-option--{{$info}} ]">
                        <div class="price-option__detail">
                            <span class="price-option__cost">{{$val->price}}</span>
                            <span class="price-option__type">{{$val->title}}</span>
                            <br>
                            <h6 style="font-size: 10px;color: red">{{ $val->sub_title  }} </h6>
                        </div>
                        <a href="#" class="price-option__purchase">{{$val->footer_desc}}</a>
                    </div>
              @endforeach
        </div>
        </div>
    </section><!-- End Facts Section -->
    @endif
    <!-- ======= Skills Section ======= -->
    <!-- ======= Skills Section ======= -->

    @if ($skillsList->count() > 0)
        <section id="skills" class="skills section-bg">
            <div class="container">
                <div class="section-title">
                    <h2>@lang('site.skills')</h2>
                    {{--                <p  style="font-size: 15px;font-weight: bold;line-height: 1.8;"> Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind <texts class=""></texts>.</p>--}}
                </div>

                <div class="row skills-content">
                    @foreach($skillsList as $ke => $ski)
                        <div class="col-lg-6" data-aos="fade-up"  {{ $ke == 0 ? '' : 'data-aos-delay="100"' }}>

                            <div class="progress">
                                <span class="skill">{{ $ski->title  }} <i class="val">{{ $ski->progress  }}%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $ski->progress  }}" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>

            </div>
        </section><!-- End Skills Section -->
@endif
    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container">

            <div class="section-title">
                <h2>@lang('site.resume')</h2>
{{--                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>--}}
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-up">
                    @if(! empty($my_educations))
                        <h3 class="resume-title">@lang('site.education')</h3>
                        @foreach($my_educations as $my_edu)
                        <div class="resume-item">
                            <h4>{{$my_edu->title}}</h4>
                            <h5>{{$my_edu->from}} - {{$my_edu->to}}</h5>
                            <p><em>{{$my_edu->sub_title}}</em></p>
                            <p>{{$my_edu->desc}}</p>
                        </div>
                        @endforeach

                     @endif

                </div>
                @if(! empty($my_experience))
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="resume-title">@lang('site.professional_experiences')</h3>
                    @foreach($my_experience as $my_exp)
                    <div class="resume-item">
                        <h4>{{$my_exp->title}}</h4>
                        <h5>{{$my_exp->from}} - {{$my_exp->to == 0? __('site.present') : $my_exp->to}}</h5>
                        <p><em>{{$my_exp->sub_title}} </em></p>
                        <ul>
                            @if(! empty($my_exp->desc1))
                            <li>{{ $my_exp->desc1  }}</li>
                            @endif
                                @if(! empty($my_exp->desc2))
                            <li>{{ $my_exp->desc2  }}</li>
                            @endif
                                @if(! empty($my_exp->desc3))
                            <li>{{ $my_exp->desc3  }}</li>
                            @endif
                        </ul>
                    </div>
                    @endforeach

                </div>
                @endif
            </div>

        </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    @if(! empty($my_portfolios))
    <section id="portfolio" class="portfolio section-bg">
        <div class="container">

            <div class="section-title">
                <h2>@lang('site.portfolio')</h2>
             </div>


            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
              @foreach($my_portfolios as $my_portfolio)
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{url('/admin/portfolios/'.$my_portfolio->image)}}" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="{{url('/admin/portfolios/'.$my_portfolio->image)}}" data-gall="portfolioGallery" class="venobox" title="{{$my_portfolio->title}}"><i class="bx bx-plus"></i></a>
                            <a href="{{$my_portfolio->links}}" target="_blank" title="@lang('site.More_Details')"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
               @endforeach



            </div>

        </div>
    </section><!-- End Portfolio Section -->
    @endif
    <!-- ======= Services Section ======= -->
    @if(! empty($my_serices))
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>@lang('site.services')</h2>
             </div>

            <div class="row">
                @foreach($my_serices as $k => $serice)
                                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="{{$k}}00">
                                        <div class="icon"><i class="{{$serice->icon}}"></i></div>
                                        <h4 class="title"><a href="">{{$serice->title}}</a></h4>
                                        <p class="description">{{$serice->desc}}</p>
                                    </div>
                @endforeach
{{--                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">--}}
{{--                    <div class="icon"><i class="icofont-computer"></i></div>--}}
{{--                    <h4 class="title"><a href="">Lorem Ipsum</a></h4>--}}
{{--                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">--}}
{{--                    <div class="icon"><i class="icofont-chart-bar-graph"></i></div>--}}
{{--                    <h4 class="title"><a href="">Dolor Sitema</a></h4>--}}
{{--                    <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">--}}
{{--                    <div class="icon"><i class="icofont-earth"></i></div>--}}
{{--                    <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>--}}
{{--                    <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">--}}
{{--                    <div class="icon"><i class="icofont-image"></i></div>--}}
{{--                    <h4 class="title"><a href="">Magni Dolores</a></h4>--}}
{{--                    <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">--}}
{{--                    <div class="icon"><i class="icofont-settings"></i></div>--}}
{{--                    <h4 class="title"><a href="">Nemo Enim</a></h4>--}}
{{--                    <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">--}}
{{--                    <div class="icon"><i class="icofont-tasks-alt"></i></div>--}}
{{--                    <h4 class="title"><a href="">Eiusmod Tempor</a></h4>--}}
{{--                    <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>--}}
{{--                </div>--}}
            </div>

        </div>
    </section><!-- End Services Section -->
    @endif
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>@lang('site.contact')</h2>
             </div>

            <div class="row" data-aos="fade-in">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4>@lang('site.location'):</h4>
                            <p>{{! empty($settings->adress) ? $settings->adress : ''}}</p>
                        </div>

                        <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4>@lang('site.email'):</h4>
                            <p>{{$settings->email}}</p>
                        </div>

                        <div class="phone">
                            <i class="icofont-phone"></i>
                            <h4>@lang('site.call'):</h4>
                            <p> <a href="tel:{{$settings->phone1}}">{{$settings->phone1}}</a></p>
                        </div>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d93236.69448614979!2d31.258464350000004!3d30.059488450000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583fa60b21beeb%3A0x79dfb296e8423bba!2sCairo%2C%20Cairo%20Governorate%2C%20Egypt!5e1!3m2!1sen!2sbg!4v1585095365148!5m2!1sen!2sbg" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="{{route('contact')}}" method="post" role="form" class="php-email-form">
                         @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">@lang('site.your_name')</label>
                                <input type="text" placeholder="@lang('site.your_name')" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="@lang('site.pl_en_a_4')" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">@lang('site.your_email')</label>
                                <input type="email" placeholder="@lang('site.your_email')" class="form-control" name="email" id="email" data-rule="email" data-msg="@lang('site.pl_e_av_e')" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">@lang('site.subject')</label>
                            <input type="text" placeholder="@lang('site.subject')" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="@lang('site.pl_en_a_8')" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <label for="message">@lang('site.message')</label>
                            <textarea class="form-control" placeholder="@lang('site.message')" name="message" rows="10" data-rule="required" data-msg="@lang('site.Please_write_something_for_us')"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="loading">@lang('site.loading')</div>
                            <div class="error-message"></div>
                            <div class="sent-message">@lang('site.Your_message_has_been_sent_Thank_you')</div>
                        </div>
                        <div class="text-center"><button type="submit">@lang('site.send_message')</button></div>
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
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li>
                            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" class=" waves-effect waves-block">
                                {{ $properties['native'] }}  {!!  $locale = request()->path()  == $localeCode ? " #":""  !!}
                            </a>
                        </li>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>


    </div>
</footer><!-- End  Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="{{url('/frontend')}}/vendor/jquery/jquery.min.js"></script>
<script src="{{url('/frontend')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{url('/frontend')}}/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="{{url('/frontend')}}/vendor/php-email-form/validate.js"></script>
<script src="{{url('/frontend')}}/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="{{url('/frontend')}}/vendor/counterup/counterup.min.js"></script>
<script src="{{url('/frontend')}}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{url('/frontend')}}/vendor/venobox/venobox.min.js"></script>
<script src="{{url('/frontend')}}/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="{{url('/frontend')}}/vendor/typed.js/typed.min.js"></script>
<script src="{{url('/frontend')}}/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="{{url('/frontend')}}/js/main.js"></script>

</body>

</html>
