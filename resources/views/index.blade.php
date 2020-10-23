<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{  $settings->site_name}}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{siteSetting()->description }}">
    <meta name="keywords" content="{{siteSetting()->keywords }}">
    <meta name="author" content="{{ siteSetting()->site_name  }}">    <!-- Favicons -->
{{--    Logo  --}}
    <link href="{{url('marc/logo/favicon.png')}}" rel="icon">
    <link rel="apple-touch-icon" sizes="57x57" href="{{url('marc/logo/favicon.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{url('marc/logo/favicon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{url('marc/logo/favicon.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{url('marc/logo/favicon.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{url('marc/logo/favicon.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{url('marc/logo/favicon.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{url('marc/logo/favicon.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{url('marc/logo/favicon.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{url('marc/logo/favicon.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{url('marc/logo/favicon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{url('marc/logo/favicon.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{url('marc/logo/favicon.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('marc/logo/favicon.png')}}">
{{--    Logo--}}
    <link href="{{url('marc')}}/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{url('marc')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{url('marc')}}/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="{{url('marc')}}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{url('marc')}}/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="{{url('marc')}}/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{url('marc')}}/vendor/aos/aos.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{url('marc')}}/css/style.css" rel="stylesheet">
@toastr_css
</head>

<body>

<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
            @if(! empty($user->image))
                <img src="{{url('marc/images/'.$user->image)}}" alt="" class="img-fluid rounded-circle">
             @else
                <img src="{{url('marc/images/12634.jpg')}}" alt="" class="img-fluid rounded-circle">
            @endif
            <h1 class="text-light"><a href="#">{{$user->name}}</a></h1>
            <div class="social-links mt-3 text-center">

                @if($settings->twitter_status != 0)
                    <a  target="_blank" href="{{ $settings->twitter }}" class="twitter"><i class="bx bxl-twitter"></i></a>
                @endif
                @if($settings->facebook_status != 0)
                        <a target="_blank" href="{{ $settings->facebook }}"class="instagram"><i class="bx bxl-instagram"></i></a>
                @endif
                @if($settings->linkedin_status != 0)
                         <a arget="_blank" href="{{ $settings->linkedin }}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                @endif
                @if($settings->skype_status != 0)
                    <a href="skype:{{$settings->skype}}?call" class="google-plus"><i class="bx bxl-skype"></i></a>
                @endif
            </div>
        </div>

        <nav class="nav-menu">
            <ul>
                <li class="active"><a href="#hero" href="#"><i class="bx bx-home"></i> <span>Home</span></a></li>
                <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
                <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
                @if ($portfolios->count() > 0)
                <li><a href="#portfolio"><i class="bx bx-book-content"></i> Portfolio</a></li>
                @endif
                @if ($services->count() > 0)
                <li><a href="#services"><i class="bx bx-server"></i> Services</a></li>
                @endif
                <li><a href="#contact"><i class="bx bx-envelope"></i> Contact</a></li>

            </ul>
        </nav><!-- .nav-menu -->
        <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center"
@if(! empty($user->max_image))
style="background: url({{url('marc/images/'.$user->max_image)}}) top center ;"
@else
    style="background: url({{url('marc/images/74629.jpg')}}) top center ;"
@endif


     >
    <div class="hero-container" data-aos="fade-in">

        <h1>{{$user->name}}</h1>
        <p>I'm <span class="typed" data-typed-items="Developer, Freelancer"></span></p>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
         @if ($about->count() > 0)
   <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <h2>About Me</h2>

            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    @if(! empty($about->image))
                        <img src="{{url('marc/images/'.$about->image)}}" class="img-fluid" alt="">
                    @else
                        <img src="{{url('/marc/images/55286.jpeg')}}" class="img-fluid" alt="">
                    @endif


                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3>{{$about->title}} </h3>
                    <p   style="font-size: 15px;font-weight: bold;line-height: 1.8;" class="font-italic">
                        {!!  $x = str_replace('.', '<br>', $about->sub_title)  !!}
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> {{$about->title }}</li>
                                <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> <a target="_blank" href="{{ $about->website }}">{{ $about->website }}</a></li>
                                <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> <a href="tel:{{$about->phone}}">{{$about->phone}}</a></li>
                                <li><i class="icofont-rounded-right"></i> <strong>Adress:</strong> {{ $settings->adress  }}</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> {{$about->age}} Yrs</li>
                                <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> {{  $about->degree }}</li>
                                <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> <small> <a href="mailto:{{ $settings->email }}">{{ $settings->email }}</a></small></li>
                                <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> {{  $about->freelance }}</li>
                            </ul>
                        </div>
                    </div>
                    <p style="font-size: 15px;font-weight: bold;line-height: 1.8;">
                        {!!  $x = str_replace('.', '.<br>', $about->desc)  !!}
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->
    @endif
    <!-- ======= Facts Section ======= -->
          @if ($facts->count() > 0)
    <section id="facts" class="facts">
        <div class="container">

            <div class="section-title">
                <h2>Facts</h2>
            </div>
            <div class="row no-gutters">
             @foreach($facts as $fact)
                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                    <div class="count-box">
                        <i class="{{$fact->icon}}"></i>
                        <span data-toggle="counter-up">{{$fact->number}}</span>
                        <p><strong>{{$fact->title}}</strong> <br> {{$fact->sub_title}}</p>
                    </div>
                </div>
               @endforeach


            </div>

        </div>
    </section><!-- End Facts Section -->
    @endif
    <!-- ======= Skills Section ======= -->

      @if ($skills->count() > 0)
    <section id="skills" class="skills section-bg">
        <div class="container">
            <div class="section-title">
                <h2>Skills</h2>
{{--                <p  style="font-size: 15px;font-weight: bold;line-height: 1.8;"> Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind <texts class=""></texts>.</p>--}}
            </div>

            <div class="row skills-content">
              @foreach($skills as $ke => $ski)
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
                <h2>Resume</h2>
{{--                <p  style="font-size: 15px;font-weight: bold;line-height: 1.8;">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>--}}
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-up">
                    @if($summaries->count() > 0)

                    <h3 class="resume-title">Sumary</h3>
                     @foreach($summaries as $summ)
                    <div class="resume-item pb-0">
                        <h4>{{$summ->name}}</h4>
                        <p><em>{{$summ->title}}</em></p>
                        <ul>
                            <li>{{$summ->adress}}</li>
                            <li><a href="tel:{{$summ->phone}}"> {{$summ->phone}}</a></li>
                            <li><a href="mailto:{{$summ->email}}">{{$summ->email}}</a> </li>
                        </ul>
                    </div>
                     @endforeach
                    @endif
                    @if($educations->count() > 0)
                    <h3 class="resume-title">Education</h3>
                     @foreach($educations as $educ)
                      <div class="resume-item">
                        <h6>{{$educ->title}}</h6>
                        <h6>{{$educ->from}} - {{$educ->to}}</h6>
                        <p><em>{{$educ->sub_title}}</em></p>
                        <p>{{$educ->desc}}</p>
                    </div>
                     @endforeach
                    @endif
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    @if($professionalexperiences->count() > 0)
                    <h3 class="resume-title">Professional Experience</h3>
                    @foreach($professionalexperiences as $key => $val)
                    <div class="resume-item">
                        <h4>{{ $val->title  }}</h4>
                        <h5>{{ $val->from  }} - {{ $val->to  }}</h5>
                        <p><em>{{ $val->sub_title  }} </em></p>
                        <ul>
                            @if(! empty($val->desc))<li>{{$val->desc}}</li>@endif
                            @if(! empty($val->desc2))<li>{{$val->desc2}}</li>@endif
                            @if(! empty($val->desc3))<li>{{$val->desc3}}</li>@endif
                            @if(! empty($val->desc4))<li>{{$val->desc4}}</li>@endif
                        </ul>
                    </div>
                    @endforeach
                    @endif

                </div>
            </div>

        </div>
    </section><!-- End Resume Section -->
    <!-- ======= Portfolio Section ======= -->

 @if ($portfolios->count() > 0)

    <section id="portfolio" class="portfolio section-bg">
        <div class="container">
            <div class="section-title">
                <h2>Portfolio</h2>
{{--                <p  style="font-size: 15px;font-weight: bold;line-height: 1.8;">My last work in developing and creating websites on the Internet.</p>--}}
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>

                    </ul>
                </div>
            </div>
            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
              @foreach ($portfolios as $key => $value)


                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="marc/images/{{$value->image}}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a    target="_blank"  href="{{ $value->link }}" title="{{$value->title}}"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
            @endforeach
            </div>
        </div>
    </section><!-- End Portfolio Section -->
    @endif
@if ($services->count() > 0)
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>Services</h2>
                <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
            </div>

            <div class="row">
              @foreach ($services as $key => $value)
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up"  @if ($key != 0) data-aos-delay="{{100 * $key}}"  @endif>
                    <div class="icon"><i class="{{$value->icon}}"></i></div>
                    <h4 class="title"><a href="">{{$value->title}}</a></h4>
                    <p    style="font-size: 15px;font-weight: bold;line-height: 1.8;" class="description">{{$value->desc}}</p>
                </div>
              @endforeach

            </div>

        </div>
    </section><!-- End Services Section -->
    <!-- ======= Testimonials Section ======= -->
    @endif
  @if ($testimonials->count() > 0)
    <section id="testimonials" class="testimonials section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Testimonials</h2>
{{--                <p  style="font-size: 15px;font-weight: bold;line-height: 1.8;">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>--}}
            </div>

            <div class="owl-carousel testimonials-carousel">

              @foreach ($testimonials as $key => $value)
                <div class="testimonial-item" data-aos="fade-up"  @if ($key != 0) data-aos-delay="{{100 * $key}}"  @endif>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                          {{ $value->desc }}
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    @if ($value->image != 0)
                        <img src="{{url('marc/images/'.$value->image)}}" class="testimonial-img"  alt=" {{ $value->name }}">
                        @else
                                            <img src="{{url('marc')}}/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                    @endif
                    <h3>  {{ $value->name }}</h3>
                    <h4>  {{ $value->job_desc }}</h4>
                </div>
                @endforeach



            </div>

        </div>
    </section><!-- End Testimonials Section -->
      @endif
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
{{--                <p   style="font-size: 15px;font-weight: bold;line-height: 1.8;">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>--}}
            </div>

            <div class="row" data-aos="fade-in">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4>Location:</h4>
                            <p>{{ $settings->adress }}</p>
                        </div>

                        <div class="email">
                          <a href="mailto:{{ $settings->email }}">  <i class="icofont-envelope"></i>
                            <h4>Email:</h4>
                            <p> {{ $settings->email }}</p></a>
                        </div>

                        <div class="phone">
                             <a href="tel:{{ $about->phone }}">
                            <i class="icofont-phone"></i>
                            <h4>Call:</h4>
                            <p> {{ $about->phone }}</p></a>
                        </div>

{{--                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>--}}
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d93236.69448614979!2d31.258464350000004!3d30.059488450000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583fa60b21beeb%3A0x79dfb296e8423bba!2sCairo%2C%20Cairo%20Governorate%2C%20Egypt!5e1!3m2!1sen!2sbg!4v1585095365148!5m2!1sen!2sbg" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
{{--                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d93236.69448614979!2d31.258464350000004!3d30.059488450000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583fa60b21beeb%3A0x79dfb296e8423bba!2sCairo%2C%20Cairo%20Governorate%2C%20Egypt!5e1!3m2!1sen!2sbg!4v1585095365148!5m2!1sen!2sbg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>--}}
{{--
       https://goo.gl/maps/PB6RYYS66mAVJ5BK7--}}
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="{{ route('send.email')}}" method="post"  style="    width: 100%;padding: 30px; background: #fff; box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);">
                      @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Name.." data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="E-mail Adress.." data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject.." data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" placeholder="Message.." rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="text-center"><button style="background: #149ddd;border: 0;padding: 10px 24px;color: #fff;transition: 0.4s;border-radius: 4px" type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->
</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <div class="copyright">
            Welcom To  <strong><span>{{ siteSetting()->site_name  }}</span></strong>
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
{{--            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>--}}
        </div>
    </div>
</footer><!-- End  Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="{{url('marc')}}/vendor/jquery/jquery.min.js"></script>
<script src="{{url('marc')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{url('marc')}}/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="{{url('marc')}}/vendor/php-email-form/validate.js"></script>
<script src="{{url('marc')}}/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="{{url('marc')}}/vendor/counterup/counterup.min.js"></script>
<script src="{{url('marc')}}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{url('marc')}}/vendor/venobox/venobox.min.js"></script>
<script src="{{url('marc')}}/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="{{url('marc')}}/vendor/typed.js/typed.min.js"></script>
<script src="{{url('marc')}}/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="{{url('marc')}}/js/main.js"></script>
@toastr_js
@toastr_render
</body>

</html>
