<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{siteSetting()->description }}">
    <meta name="keywords" content="{{siteSetting()->keywords }}">
    <title>{{ siteSetting()->site_name  }}</title>
    <link rel="stylesheet" href="{{ url('coming_soon/reset.min.css')  }}">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Varela+Round'>
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
{{--    <link rel="stylesheet" href="{{ url('coming_soon/font-awesome.min.css')  }}">--}}
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">--}}
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('coming_soon/style.css')  }}">
    <style media="screen">
        #epro {
            width: 400px;
        }
        #emar {
            width: 350px;
        }
        /* Wrapper */
        .icon-button {
            background-color: white;
            border-radius: 2.6rem;
            cursor: pointer;
            display: inline-block;
            font-size: 1.3rem;
            height: 2.6rem;
            line-height: 2.6rem;
            margin: 0 5px;
            position: relative;
            text-align: center;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            width: 2.6rem;
        }
        /* Circle */
        .icon-button span {
            border-radius: 0;
            display: block;
            height: 0;
            left: 50%;
            margin: 0;
            position: absolute;
            top: 50%;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            -o-transition: all 0.3s;
            transition: all 0.3s;
            width: 0;
        }
        .icon-button:hover span {
            width: 2.6rem;
            height: 2.6rem;
            border-radius: 2.6rem;
            margin: -1.3rem;
        }
        /* Icons */
        .icon-button i {
            background: none;
            /*color: white;*/
            height: 2.6rem;
            left: 0;
            line-height: 2.6rem;
            position: absolute;
            top: 0;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            -o-transition: all 0.3s;
            transition: all 0.3s;
            width: 2.6rem;
            z-index: 10;
        }
        .twitter span {
            background-color: #4099ff;
        }
        .facebook span {
            background-color: #3B5998;
        }
        .google-plus span {
            background-color: #db5a3c;
        }
        .tumblr span {
            background-color: #34526f;
        }
        .instagram span {
            background-color: #517fa4;
        }
        .youtube span {
            background-color: #bb0000;
        }
        .pinterest span {
            background-color: #cb2027;
        }



        .icon-button .icon-twitter {
            color: #4099ff;
        }
        .icon-button .icon-facebook {
            color: #3B5998;
        }
        .icon-button .fa-tumblr {
            color: #34526f;
        }
        .icon-button .icon-google-plus {
            color: #db5a3c;
        }
        .icon-button .fa-instagram {
            color: #517fa4;
        }
        .icon-button .fa-youtube {
            color: #bb0000;
        }
        .icon-button .fa-pinterest {
            color: #cb2027;
        }




        .icon-button:hover .icon-twitter,
        .icon-button:hover .icon-facebook,
        .icon-button:hover .icon-google-plus,
        .icon-button:hover .fa-tumblr,
        .icon-button:hover .fa-instagram,
        .icon-button:hover .fa-youtube,
        .icon-button:hover .fa-pinterest {
            color: white;
        }

        @media all and (max-width: 680px) {
            .icon-button {
                border-radius: 1.6rem;
                font-size: 0.8rem;
                height: 1.6rem;
                line-height: 1.6rem;
                width: 1.6rem;
            }

            .icon-button:hover span {
                width: 1.6rem;
                height: 1.6rem;
                border-radius: 1.6rem;
                margin: -0.8rem;
            }

            /* Icons */
            .icon-button i {
                height: 1.6rem;
                line-height: 1.6rem;
                width: 1.6rem;
            }
            body {

                padding: 10px;
            }
            .pinterest {
                display: none;
            }

        }

    </style>
    <style>
        /* ---- reset ---- */
        body{ margin:0; font:normal 75% Arial, Helvetica, sans-serif; } canvas{ display: block; vertical-align: bottom; } /* ---- particles.js container ---- */ #particles-js{ position:absolute; width: 100%; height: 100%; background-color: #000000; background-image: url(""); background-repeat: no-repeat; background-size: cover; background-position: 50% 50%; } /* ---- stats.js ---- */ .count-particles{ background: #000022; position: absolute; top: 48px; left: 0; width: 80px; color: #13E8E9; font-size: .8em; text-align: left; text-indent: 4px; line-height: 14px; padding-bottom: 2px; font-family: Helvetica, Arial, sans-serif; font-weight: bold; } .js-count-particles{ font-size: 1.1em; } #stats, .count-particles{ -webkit-user-select: none; margin-top: 5px; margin-left: 5px; } #stats{ border-radius: 3px 3px 0 0; overflow: hidden; } .count-particles{ border-radius: 0 0 3px 3px; }
        body {
            background: #48d2bd;
            color: #fff;
            font-family: 'Varela Round', sans-serif;
            text-align: center;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        .container {
            position: absolute;
            top: 40%;
            width: 100%;
            min-width: 320px;
            margin: -30px 0 0;
        }
        .container h1 {
            font-size: 36px;
            margin-bottom: 15px;
        }
        .container h1 a {
            display: inline-block;
            background: #000;
            background: rgba(0, 0, 0, 0.05);
            padding: 10px 15px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            color: #fff;
            text-decoration: none;
            -webkit-transition: all .3s ease;
            -moz-transition: all .3s ease;
            -ms-transition: all .3s ease;
            -o-transition: all .3s ease;
            transition: all .3s ease;
        }
        .container h1 a:hover {
            background: rgba(0, 0, 0, 0.1);
        }
        .container p {
            margin-bottom: 30px;
            color: white;
            font-family: 'Varela Round', sans-serif;
            font-size: 20px;
        }
        .container .social-media ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        .container .social-media ul li {
            display: inline-block;
            margin: 0 16px 0 0;
            font-size: 14px;
        }
        .container .social-media ul li:last-child {
            margin: 0;
        }
        .container .social-media ul li a {
            display: block;
            width: 16px;
            color: #fff;
        }

    </style>
</head>

<body id="particles-js">
<!-- <div id="particles-js"></div>  -->
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<br>
<span style="color: #307fd7; font-size: 2.3em;"> </span>

<div class='container'>
    <h1>{{ siteSetting()->site_name  }} </h1>

    <h1>
        <span data-sr='top wait .3s 90px'>C</span>
        <span data-sr='top wait .4s 90px'>o</span>
        <span data-sr='top wait .5s 90px'>m</span>
        <span data-sr='top wait .6s 90px'>i</span>
        <span data-sr='top wait .7s 90px'>n</span>
        <span data-sr='top wait .8s 90px'>g</span>
        <span>&nbsp;</span>
        <span data-sr='top wait .9s 90px'>S</span>
        <span data-sr='top wait 1s 90px'>o</span>
        <span data-sr='top wait 1.1s 90px'>o</span>
        <span data-sr='top wait 1.2s 90px'>n</span>

    </h1>
    @if($settings->twitter_status != 0)
    <a target="_blank" href="{{ $settings->twitter }}"  class="icon-button twitter"><i class="fa fa-twitter"></i><span></span></a>
    @endif
    @if($settings->facebook_status != 0)
    <a target="_blank" href="{{ $settings->facebook }}" class="icon-button facebook"><i class="fa fa-facebook"></i><span></span></a>
    @endif
    <a  href="tel:{{ $settings->email }}"  class="icon-button google-plus"><i class="fa fa-google-plus"></i><span></span></a>
@if($settings->linkedin_status != 0)
    <a target="_blank" href="{{ $settings->linkedin }}" class="icon-button youtube"><i class="fa fa-linkedin"></i><span></span></a>
    @endif



    <br /><br />
    <p data-sr='bottom wait 1.7s 90px' style="    width: 700px;
    margin: 22px auto;    line-height: 1.6;
">
      <span style="color: #fff0ff; font-size: 1.3em;width:400px; margin: 10px auto "><i>{{ siteSetting()->message_maintenance  }}  </i>
      </span> </p>

</div>
<script src='{{ url('coming_soon/jquery.min.js')  }}'></script>
<script src='{{ url('coming_soon/scrollReveal.min.js')  }}'></script>
<script>
    particlesJS("particles-js", {
        "particles": {
            "number": {
                "value": 80,
                "density": {
                    "enable": true,
                    "value_area": 800
                }
            },
            "color": {
                "value": "#ffffff"
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                },
                "polygon": {
                    "nb_sides": 5
                },
                "image": {
                    "src": "img/github.svg",
                    "width": 100,
                    "height": 100
                }
            },
            "opacity": {
                "value": 0.5,
                "random": false,
                "anim": {
                    "enable": false,
                    "speed": 1,
                    "opacity_min": 0.1,
                    "sync": false
                }
            },
            "size": {
                "value": 3,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 40,
                    "size_min": 0.1,
                    "sync": false
                }
            },
            "line_linked": {
                "enable": true,
                "distance": 150,
                "color": "#ffffff",
                "opacity": 0.4,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 6,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": false,
                    "mode": "repulse"
                },
                "onclick": {
                    "enable": true,
                    "mode": "push"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 400,
                    "line_linked": {
                        "opacity": 1
                    }
                },
                "bubble": {
                    "distance": 400,
                    "size": 40,
                    "duration": 2,
                    "opacity": 8,
                    "speed": 3
                },
                "repulse": {
                    "distance": 200,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": true
    });
    var count_particles, stats, update;
    stats = new Stats;
    stats.setMode(0);
    stats.domElement.style.position = 'absolute';
    stats.domElement.style.left = '0px';
    stats.domElement.style.top = '0px';
    document.body.appendChild(stats.domElement);
    count_particles = document.querySelector('.js-count-particles');
    update = function() {
        stats.begin();
        stats.end();
        if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
            count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
        }
        requestAnimationFrame(update);
    };
    requestAnimationFrame(update);;
</script>
</body>

</html>
