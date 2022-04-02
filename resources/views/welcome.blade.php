<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Casera - Software development company | IT company</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" " />
    <meta name="keywords" content="" />

    <link rel="shortcut icon" href="{{asset('front/images/favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}" type="text/css" id="bootstrap-style" />
    <link rel="stylesheet" href="{{asset('front/css/materialdesignicons.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link rel="stylesheet" href="{{asset('front/css/tiny-slider.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('front/css/swiper.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('front/css/style.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('front/css/custom.css')}}" type="text/css" />
    <link href="{{asset('front/css/colors/default.css')}}" rel="stylesheet" type="text/css" id="color-opt" />
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="71">

    <!-- light-dark mode button -->
    <a href="javascript: void(0);" id="mode" class="mode-btn text-white rounded-end">
        <i class="uil uil-brightness mode-dark mx-auto"></i>
        <i class="uil uil-moon bx-spin mode-light"></i>
    </a>

    <!-- START  NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-light" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand logo text-uppercase" href="{{route('welcome')}}">
                <img src="{{asset('front/images/logo-light.png')}}" class="logo-light" alt="" height="30">
                <img src="{{asset('front/images/logo-dark.png')}}" class="logo-dark" alt="" height="30">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="mdi mdi-menu"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto" id="navbar-navlist">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#why-us">Why us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#work">Work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#app">Application</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#team">Team</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <div class="ms-auto">
                    <a href="tel:9330685831" class="btn bg-gradiant"> <i class="mdi mdi-phone text-light"></i> 9330685831</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->



    <!-- home section -->
    <section class="home bg-light" id="home">
        <!-- start container -->
        <div class="container">
            <!-- start row -->
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="{{asset('front/images/baby-phone.png')}}" alt="" class="img-fluid mb-4 smallphone-image">
                    <h1 class="display-7 fw-bold">Office management software, <br> Web development, <br> App development</h1>
                    <p class="mt-4 text-muted">Bring your ideas to live with Casera. <strong>Service available 24 X 7</strong> </p>
                    <a href="#app" class="btn bg-gradiant mt-4">Read More</a>
                </div>

                <div class="col-lg-5 offset-md-1 ">
                    <img src="{{asset('front/images/homebg1.png')}}" alt="" class="img-fluid">
                    <div class="up-botton-text d-flex align-items-center d-none d-md-block">
                        <h5>Welcome To Casera 🙋‍♀️</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="background-line"></div>
    </section>

    <section class="section service bg-light" id="service">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center mb-5">
                        <h6 class="mb-0 fw-bold text-primary">How can we help you!</h6>
                        <h2 class="f-40">Our services</h2>
                        <div class="border-phone">
                            {{-- <p class="text-muted">Lorem</p> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col-lg-4">
                    <div class="service-box text-center">
                        <div class="service-icon p-4"
                            style="background-image: url({{asset('front//images/service/bomb.png')}}); background-repeat: no-repeat; background-position: center;">
                            <i class="mdi mdi-security text-gradiant f-30"></i>
                        </div>

                        <div class="service-content mt-4">
                            <a href="">
                                <h5 class="fw-bold">Business management</h5>
                            </a>
                            <p class="text-muted">We provide everything to manage a business online, from tools to management software.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 pt-4 pt-lg-0">
                    <div class="service-box text-center shadow">
                        <div class="service-icon p-4"
                            style="background-image: url({{asset('front//images/service/bomb.png')}}); background-repeat: no-repeat; background-position: center;">
                            <i class="mdi mdi-lightbulb-on text-gradiant f-30"></i>
                        </div>

                        <div class="service-content mt-4">
                            <a href="">
                                <h5 class="fw-bold">Web development</h5>
                            </a>
                            <p class="text-muted">Web design & development has always been part of the game.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 pt-4 pt-lg-0">
                    <div class="service-box text-center">
                        <div class="service-icon p-4"
                            style="background-image: url({{asset('front//images/service/bomb.png')}}); background-repeat: no-repeat; background-position: center;">
                            <i class="mdi mdi-google-nearby text-gradiant f-30"></i>
                        </div>

                        <div class="service-content mt-4">
                            <a href="">
                                <h5 class="fw-bold">App development</h5>
                            </a>
                            <p class="text-muted">From android to iOS, Native to hybrid application. You name it, we provide.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->


    <!-- start features -->
    <div class="section features" id="why-us">
        <!-- start container -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center mb-5">
                        <h6 class="mb-0 fw-bold text-primary">Why we are best in the game!</h6>
                        <h2 class="f-40">Why us</h2>
                        {{-- <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eos inventore omnis aliquid rerum alias molestias.</p> --}}
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    {{-- <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Top Features</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Smart Features</button>
                        </li>
                    </ul> --}}
                    <div class="tab-content mt-5" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <div class="features-item text-start text-lg-end">
                                        <div class="icon avatar-sm text-center ms-lg-auto rounded-circle">
                                            <i class="mdi mdi-message-alert-outline f-24"></i>
                                        </div>
                                        <div class="content mt-3">
                                            <h5>Responsive Design</h5>
                                            <p>Desktop, Laptop, Tab & Mobile friendly</p>
                                        </div>
                                    </div>

                                    <div class="features-item text-start text-lg-end mt-5">
                                        <div class="icon avatar-sm text-center ms-lg-auto rounded-circle">
                                            <i class="mdi mdi-autorenew f-24"></i>
                                        </div>
                                        <div class="content mt-3">
                                            <h5>Cool Features</h5>
                                            <p>Idea meets brilliance</p>
                                        </div>
                                    </div>

                                    <div class="features-item text-start text-lg-end mt-5">
                                        <div class="icon avatar-sm text-center ms-lg-auto rounded-circle">
                                            <i class="mdi mdi-eyedropper f-24"></i>
                                        </div>
                                        <div class="content mt-3">
                                            <h5>24X7 Support</h5>
                                            <p>We are there for you</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <img src="{{asset('front/images/features/phone.png')}}" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-4">
                                    <div class="features-item">
                                        <div class="icon avatar-sm text-center rounded-circle">
                                            <i class="mdi mdi-lifebuoy f-24"></i>
                                        </div>
                                        <div class="content mt-3">
                                            <h5>Stunning Design</h5>
                                            <p>Attractive to your user-base</p>
                                        </div>
                                    </div>

                                    <div class="features-item mt-5">
                                        <div class="icon avatar-sm text-center rounded-circle">
                                            <i class="mdi mdi-dropbox f-24"></i>
                                        </div>
                                        <div class="content mt-3">
                                            <h5>Best Icons Pack</h5>
                                            <p>For more attraction</p>
                                        </div>
                                    </div>

                                    <div class="features-item mt-5">
                                        <div class="icon avatar-sm text-center rounded-circle">
                                            <i class="mdi mdi-flask f-24"></i>
                                        </div>
                                        <div class="content mt-3">
                                            <h5>Creative Idea</h5>
                                            <p>Unique ideas to boost your business</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">

                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <img src="{{asset('front/images/features/phone2.png')}}" alt="" class="img-fluid">
                                </div>

                                <div class="col-lg-6">
                                    <h2 class="mb-4">Smart Features</h2>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="features-box mt-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <i class="mdi mdi-check-circle f-20 me-2"></i>
                                                    </div>
                                                    <div class="heading">
                                                        <h6 class="mt-1">Fast Messaging</h6>
                                                        <p class="text-muted">Soluta velit sint, esse quis tempora
                                                            impedit corrupti in recusandae tenetur dignissimos
                                                            voluptates..</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="features-box mt-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <i class="mdi mdi-check-circle f-20 me-2"></i>
                                                    </div>
                                                    <div class="heading">
                                                        <h6 class="mt-1">User Freindly</h6>
                                                        <p class="text-muted">Amet repudiandae illo quasi enim iusto
                                                            corporis ratione? Laudantium reprehenderit sint provident.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="features-box mt-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <i class="mdi mdi-check-circle f-20 me-2"></i>
                                                    </div>
                                                    <div class="heading">
                                                        <h6 class="mt-1">Minimal Interface</h6>
                                                        <p class="text-muted">Repellat ad in autem, odio quos ex eum
                                                            recusandae cupiditate assumenda nihil incidunt dolorem qui
                                                            soluta.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="features-box mt-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <i class="mdi mdi-check-circle f-20 me-2"></i>
                                                    </div>
                                                    <div class="heading">
                                                        <h6 class="mt-1">Notification</h6>
                                                        <p class="text-muted">Ipsam nisi quam velit maxime corrupti ut
                                                            quos, ad eum laudantium voluptatibus, facilis numquam
                                                            repellendus.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </div>
    <!-- end features -->

    <!-- start testimonial -->
    <section class="section bg-light testimonial" id="testimonial">
        <!-- start container -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="title">
                        <p class=" text-primary fw-bold mb-0">Client Testimonial <i
                                class="mdi mdi-cellphone-iphone"></i>
                        </p>
                        <h3>What they think of us!</h3>
                        <p class="text-muted">Morbi at erat et tortor tempor sodales non eu lacus Donec at gravida nunc
                            vitae
                            volutpat. Morbi in sem quis
                            dui placerat ornare.</p>
                        <button class="btn bg-gradiant">Read More Testimonial <i
                                class="mdi mdi-arrow-right"></i></button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="testi-slider" id="testi-slider">
                        <div class="item">
                            <div class="testi-box position-relative overflow-hidden">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <img src="{{asset('front/images/testi/img-1.png')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="p-4">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar">
                                                        <img src="{{asset('front/images/user/img-1.jpg')}}" alt=""
                                                            class="img-fluid rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <p class="f-14 mb-0 text-dark fw-bold"><span
                                                            class="text-muted fw-normal">Review By </span> Freanki Fabel
                                                    </p>
                                                    <div class="date">
                                                        <p class="text-muted mb-0 f-14">28 jan, 2021 <span>10:25
                                                                AM</span></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <h5 class="fw-bold">Bulid The App That Everyone Love.</h5>
                                                <p class="text-muted f-14">Start working with Casera that can provide
                                                    everything you need to generate awareness, drive traffic, connect.
                                                </p>
                                                <button class="btn btn-sm bg-gradiant"><i
                                                        class="mdi mdi-plus f-16 align-middle"></i>
                                                    Follow</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="back-image position-absolute end-0 bottom-0">
                                    <img src="{{asset('front/images/testi/rating-image.png')}}" alt="" class="img-fluid">
                                </div>

                            </div>
                        </div>
                        <!-- slider item -->

                        <div class="item">
                            <div class="testi-box position-relative overflow-hidden">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <img src="{{asset('front/images/testi/img-2.png')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="p-4">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar">
                                                        <img src="{{asset('front/images/user/img-2.jpg')}}" alt=""
                                                            class="img-fluid rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <p class="f-14 mb-0 text-dark fw-bold"><span
                                                            class="text-muted fw-normal">Review By </span> Freanki Fabel
                                                    </p>
                                                    <div class="date">
                                                        <p class="text-muted mb-0 f-14">28 jan, 2021 <span>10:25
                                                                AM</span></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <h5 class="fw-bold">Easy and prefect solution</h5>
                                                <p class="text-muted f-14">Start working with Casera that can provide
                                                    everything you need to generate awareness, drive traffic, connect.
                                                </p>
                                                <button class="btn btn-sm bg-gradiant"><i
                                                        class="mdi mdi-plus f-16 align-middle"></i>
                                                    Follow</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="back-image position-absolute end-0 bottom-0">
                                    <img src="{{asset('front/images/testi/rating-image.png')}}" alt="" class="img-fluid">
                                </div>

                            </div>
                        </div>

                        <!-- slider item -->
                        <div class="item ">
                            <div class="testi-box position-relative overflow-hidden">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <img src="{{asset('front/images/testi/img-3.png')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="p-4">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar">
                                                        <img src="{{asset('front/images/user/img-3.jpg')}}" alt=""
                                                            class="img-fluid rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <p class="f-14 mb-0 text-dark fw-bold"><span
                                                            class="text-muted fw-normal">Review By </span> Freanki Fabel
                                                    </p>
                                                    <div class="date">
                                                        <p class="text-muted mb-0 f-14">28 jan, 2021 <span>10:25
                                                                AM</span></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <h5 class="fw-bold">Bulid The App That Everyone Love.</h5>
                                                <p class="text-muted f-14">Start working with Casera that can provide
                                                    everything you need to generate awareness, drive traffic, connect.
                                                </p>
                                                <button class="btn btn-sm bg-gradiant"><i
                                                        class="mdi mdi-plus f-16 align-middle"></i>
                                                    Follow</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="back-image position-absolute end-0 bottom-0">
                                    <img src="{{asset('front/images/testi/rating-image.png')}}" alt="" class="img-fluid">
                                </div>

                            </div>
                        </div>

                        <!-- slider item -->
                        <div class="item ">
                            <div class="testi-box position-relative overflow-hidden">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <img src="{{asset('front/images/testi/img-4.png')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="p-4">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar">
                                                        <img src="{{asset('front/images/user/img-4.jpg')}}" alt=""
                                                            class="img-fluid rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <p class="f-14 mb-0 text-dark fw-bold"><span
                                                            class="text-muted fw-normal">Review By </span> Freanki Fabel
                                                    </p>
                                                    <div class="date">
                                                        <p class="text-muted mb-0 f-14">28 jan, 2021 <span>10:25
                                                                AM</span></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <h5 class="fw-bold">Bulid The App That Everyone Love.</h5>
                                                <p class="text-muted f-14">Start working with Casera that can provide
                                                    everything you need to generate awareness, drive traffic, connect.
                                                </p>
                                                <button class="btn btn-sm bg-gradiant"><i
                                                        class="mdi mdi-plus f-16 align-middle"></i>
                                                    Follow</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="back-image position-absolute end-0 bottom-0">
                                    <img src="{{asset('front/images/testi/rating-image.png')}}" alt="" class="img-fluid">
                                </div>

                            </div>
                        </div>
                        <!-- slider item -->
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end testimonial -->



    <!-- pricing section -->
    <section class="section pricing" id="work">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center mb-5">
                        <h6 class="mb-0 fw-bold text-primary">Our clients & works!</h6>
                        <h2 class="f-40">Our work!</h2>
                        {{-- <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eos inventore omnis aliquid rerum alias molestias.</p> --}}
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="price-item shadow-sm overflow-hidden">
                        <div class="price-up-box active p-4">
                            <div class="badge bg-primary fw-normal f-14">eCommerce</div>
                            <div class="price-tag mt-2">
                                <h2 class="text-white mb-0 f-40">Torzo</h2>
                                {{-- <h2 class="text-white mb-0 f-40"><sup class="f-22 fw-normal">$</sup>09<sup class="f-16 fw-normal"> /month</sup></h2> --}}
                            </div>
                            <p class="text-white-50 mb-1">Duration : 60 days</p>
                            <p class="text-white-50 mb-0">TORZO is an online ecommerce application which provides an interactive experience to its users from buying a product to tracking it. Torzo is implemented with Admin & Seller CRM that controls the dynamic contents of the website to go live products. My work was to provide the interactive design of the website & work on REST APIs with JSON responses. The most challenging part on developing the application was working on the shopping cart, with options like Save for later, quantity updates, coupon code implementation etc. which I developed with AJAX. I implemented PAYTM Payment gateway with successful payment implementation too.</p>

                            <a href="https://torzo.in/" class="btn btn-light btn-sm text-primary mt-3" target="_blank"><i class="mdi mdi-check-all me-2"></i>Visit now</a>
                        </div>

                        <div class="border border-3"></div>

                        {{-- <div class="price-down-box p-4">
                            <ul class="list-unstyled ">
                                <li><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>2 App and project</li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>400 Gb/s storange</li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Free coustom domain
                                </li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Chat Support
                                </li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>No transaction fees
                                </li>
                                <li class="mt-2"><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Unlimited Storage
                                </li>
                            </ul>
                            <a href="" class="btn btn-sm text-primary mt-3"><i class="mdi mdi-check-all me-2"></i>your plane</a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class="price-item shadow-sm overflow-hidden mt-4 mt-lg-0">
                        {{-- <div class="topbar-header bg-primary py-2 text-center">
                            <h6 class="mb-0 text-white fw-normal">Recommended For You</h6>
                        </div> --}}
                        <div class="price-up-box p-4">
                            <div class="badge bg-primary fw-normal f-14">CA Farm</div>
                            <div class="price-tag mt-2">
                                <h2 class="text-dark mb-0 f-40">LENSTAX</h2>
                                {{-- <h2 class="text-dark mb-0 f-40"><sup class="f-22 fw-normal">$</sup>19 <sup class="f-16 fw-normal"> /month</sup></h2> --}}
                            </div>

                            <p class="text-muted mb-1">Duration : 90 days</p>
                            <p class="text-muted mb-0">Lenstax is a CA farm application which I developed as a Team leader with the team of 3 people. It is a unique application which provides GST, Company registration, FSSAI licenses, IT return etc. My work was based on providing a WYSIWYG editor for the CRM handling team so that they can write proper contents & that can display on the application. I also worked on making the application dynamic with compressed image functionalities and minified assets.</p>

                            <a href="https://lenstax.com/" class="btn btn-light btn-sm text-primary mt-3" target="_blank"><i class="mdi mdi-check-all me-2"></i>Visit now</a>
                        </div>
                        <div class="border border-3"></div>

                        {{-- <div class="price-down-box p-4">
                            <ul class="list-unstyled ">
                                <li><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>15 App and
                                    project</li>
                                <li class="mt-2"><i
                                        class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>800 Gb/s
                                    storange</li>
                                <li class="mt-2"><i
                                        class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Free
                                    coustom domain
                                </li>
                                <li class="mt-2"><i
                                        class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Chat
                                    Support
                                </li>
                                <li class="mt-2"><i
                                        class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>No
                                    transaction fees
                                </li>
                                <li class="mt-2"><i
                                        class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Unlimited
                                    Storage
                                </li>
                            </ul>
                            <a href="" class="btn btn-sm btn-primary mt-3"><i class="mdi mdi-check-all me-2"></i>Buy
                                Now</a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="price-item shadow-sm overflow-hidden mt-4 mt-lg-0">
                        <div class="price-up-box p-4">
                            <div class="badge bg-primary fw-normal f-14">Tourism Industry</div>
                            <div class="price-tag mt-2">
                                <h2 class="text-dark mb-0 f-40">Carrnival</h2>
                            </div>
                            <p class="text-muted mb-1">Duration : 60 days</p>
                            <p class="text-muted mb-0">Travotic is a tourism website based on PHP with custom MVC framework-based application with Admin CRM. The application is divided into 3 types of travel destination like Weekend, Domestic & International packages. Each destination under them comes with dynamic tags like honeymoon, beach, couple packages etc. The main challenging part with this application was to work on lead management. I worked on lead management with notification alert on admin panel & implemented SMS gateway too. Another challenging module was to implement custom itinerary generation based on guest requirement.
                            </p>

                            <a href="https://carrnivaltrips.com/" class="btn btn-light btn-sm text-primary mt-3" target="_blank"><i class="mdi mdi-check-all me-2"></i>Visit now</a>
                        </div>
                        <div class="border border-3"></div>

                        {{-- <div class="price-down-box p-4">
                            <ul class="list-unstyled ">
                                <li><i class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Unlimited
                                    App and
                                    project</li>
                                <li class="mt-2"><i
                                        class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>1000 Gb/s
                                    storange</li>
                                <li class="mt-2"><i
                                        class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Free
                                    coustom domain
                                </li>
                                <li class="mt-2"><i
                                        class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Chat
                                    Support
                                </li>
                                <li class="mt-2"><i
                                        class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>No
                                    transaction fees
                                </li>
                                <li class="mt-2"><i
                                        class="mdi mdi-check-circle f-20 align-middle me-2 text-primary"></i>Unlimited
                                    Storage
                                </li>
                            </ul>
                            <a href="" class="btn btn-sm btn-primary mt-3"><i class="mdi mdi-check-all me-2"></i>Buy
                                Now</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end pricing -->



    <!-- slider section -->
    <section class="section app-slider bg-light" id="app">
        <!-- start container -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title text-center mb-5">
                        <h6 class="mb-0 fw-bold text-primary">App Screen!</h6>
                        <h2 class="f-40">Our application works!</h2>
                        {{-- <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eos <br> inventore omnis aliquid rerum alias molestias.</p> --}}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper-container">
                        <div class="fream-phone ">
                            <img src="{{asset('front/images/testi/phone-fream.png')}}" alt="" class="img-fluid">
                        </div>

                        <div class="swiper-wrapper">
                            <div class="swiper-slide border-radius">
                                <img src="{{asset('front/images/testi/ss/s-1.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="swiper-slide border-radius">
                                <img src="{{asset('front/images/testi/ss/s-2.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="swiper-slide border-radius">
                                <img src="{{asset('front/images/testi/ss/s-3.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="swiper-slide border-radius">
                                <img src="{{asset('front/images/testi/ss/s-4.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="swiper-slide border-radius">
                                <img src="{{asset('front/images/testi/ss/s-5.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="swiper-slide border-radius">
                                <img src="{{asset('front/images/testi/ss/s-6.png')}}" alt="" class="img-fluid">
                            </div>
                        </div>

                        <!-- navigation buttons -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <!-- end container -->
        </div>
    </section>
    <!-- end section -->



    <!-- team section -->
    {{-- <section class="section team" id="team">
        <!-- start container -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title text-center mb-5">
                        <h6 class="mb-0 fw-bold text-primary">Oue Team!</h6>
                        <h2 class="f-40">We are team!</h2>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eos <br>
                            inventore omnis aliquid rerum alias molestias.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-4">
                <div class="col-lg-3 col-md-6">
                    <div class="team-box text-end">
                        <div class="row justify-content-end">
                            <div class="col-lg-9 col-10">
                                <div class="team-image">
                                    <img src="{{asset('front/images/team/img1.png')}}" alt="" class="img-fluid">
                                </div>
                                <div class="team-icon ">
                                    <div class="d-flex mt-2">
                                        <div class="social-icon facebook mx-2">
                                            <a href=""> <i class="mdi mdi-facebook f-20"></i></a>
                                        </div>
                                        <div class="social-icon instagram mx-2">
                                            <a href=""><i class="mdi mdi-instagram f-20"></i></a>
                                        </div>
                                        <div class="social-icon twitter mx-2">
                                            <a href=""><i class="mdi mdi-twitter f-20"></i></a>
                                        </div>
                                        <div class="social-icon linkedin mx-2">
                                            <a href=""><i class="mdi mdi-linkedin f-20"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-info position-absolute">
                            <h6>Cody Fisher <span class="f-14 text-muted fw-normal">/ owner</span></h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-box">
                        <div class="row justify-content-end">
                            <div class="col-lg-9 col-10">
                                <div class="team-image text-end">
                                    <img src="{{asset('front/images/team/img4.png')}}" alt="" class="img-fluid">
                                </div>
                                <div class="team-icon">
                                    <div class="d-flex mt-2">
                                        <div class="social-icon facebook mx-2">
                                            <a href=""> <i class="mdi mdi-facebook f-20"></i></a>
                                        </div>
                                        <div class="social-icon instagram mx-2">
                                            <a href=""><i class="mdi mdi-instagram f-20"></i></a>
                                        </div>
                                        <div class="social-icon twitter mx-2">
                                            <a href=""><i class="mdi mdi-twitter f-20"></i></a>
                                        </div>
                                        <div class="social-icon linkedin mx-2">
                                            <a href=""><i class="mdi mdi-linkedin f-20"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-info position-absolute">
                            <h6>Emily Coper <span class="f-14 text-muted fw-normal">/ Desiger</span></h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-box">
                        <div class="row justify-content-end">
                            <div class="col-lg-9 col-10">
                                <div class="team-image text-end">
                                    <img src="{{asset('front/images/team/img3.png')}}" alt="" class="img-fluid">
                                </div>
                                <div class="team-icon">
                                    <div class="d-flex mt-2">
                                        <div class="social-icon facebook mx-2">
                                            <a href=""> <i class="mdi mdi-facebook f-20"></i></a>
                                        </div>
                                        <div class="social-icon instagram mx-2">
                                            <a href=""><i class="mdi mdi-instagram f-20"></i></a>
                                        </div>
                                        <div class="social-icon twitter mx-2">
                                            <a href=""><i class="mdi mdi-twitter f-20"></i></a>
                                        </div>
                                        <div class="social-icon linkedin mx-2">
                                            <a href=""><i class="mdi mdi-linkedin f-20"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-info position-absolute">
                            <h6>Nick Obron <span class="f-14 text-muted fw-normal">/ Devloper</span></h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-box">
                        <div class="row justify-content-end">
                            <div class="col-lg-9 col-10">
                                <div class="team-image text-end">
                                    <img src="{{asset('front/images/team/img2.png')}}" alt="" class="img-fluid">
                                </div>
                                <div class="team-icon">
                                    <div class="d-flex mt-2">
                                        <div class="social-icon facebook mx-2">
                                            <a href=""> <i class="mdi mdi-facebook f-20"></i></a>
                                        </div>
                                        <div class="social-icon instagram mx-2">
                                            <a href=""><i class="mdi mdi-instagram f-20"></i></a>
                                        </div>
                                        <div class="social-icon twitter mx-2">
                                            <a href=""><i class="mdi mdi-twitter f-20"></i></a>
                                        </div>
                                        <div class="social-icon linkedin mx-2">
                                            <a href=""><i class="mdi mdi-linkedin f-20"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-info position-absolute">
                            <h6>Simmy roy <span class="f-14 text-muted fw-normal">/ Manager</span></h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- end container -->
    </section> --}}
    <!-- end section -->



    <!-- cta section -->
    <section class="section cta" id="cta">
        <div class="bg-overlay-gradiant"></div>
        <!-- start container -->
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-6">
                    <div class="py-5">
                        <h1 class="display-4 text-white">Build Your ideas into live !</h1>
                        <p class="text-white-50 mt-3 f-18">Casera, FUTURE CALLING.</p>
                        <div class="d-flex mt-4 ">
                            <div class="app-store">
                                <a href=""><img src="{{asset('front/images/img-appstore.png')}}" alt="" class="img-fluid"></a>
                            </div>
                            <div class="googleplay">
                                <a href=""><img src="{{asset('front/images/img-googleplay.png')}} " alt="" class="img-fluid ms-3"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cta-phone-image">
                        <img src="{{asset('front/images/cta-bg.png')}}" alt="" class=" img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end section -->


    <!-- contact section -->
    <section class="section contact overflow-hidden" id="contact">
        <!-- start container -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center mb-5">
                        <h6 class="mb-0 fw-bold text-primary">Contact Us</h6>
                        <h2 class="f-40">Get In Touch!</h2>
                        {{-- <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eos <br> inventore omnis aliquid rerum alias molestias.</p> --}}
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="contact-box">
                        <div class="mb-4">
                            <h4 class=" fw-semibold mb-1">Need Support ?</h4>
                            <p class="text-muted">Contact us for a quote.</p>
                        </div>

                        <div class="mt-4">
                            <h5 class="text-dark fw-200"> <span class="text-muted">Call : </span> <a href="tel:9330685831"><strong> 9330685831</strong></a> </h5>

                            <h5 class="text-dark"> <span class="text-muted">Email : </span> <a href="mailto:casera.tech@gmail.com"><strong>casera.tech@gmail.com</strong></a> </h5>

                            <h5 class="text-dark"> <span class="text-muted">Address : </span> <strong>6 SN, Garia Station Road, Kolkata-700084</strong> </h5>
                        </div>

                        {{-- <div class="custom-form mt-4 ">
                            <form method="post" name="myForm" onsubmit="return validateForm()">
                                <p id="error-msg" style="opacity: 1;">
                                    <!-- <div class="alert alert-warning">*Please enter a Name*</div> -->
                                </p>

                                <div id="simple-msg"></div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input name="name" id="name" type="text" class="form-control contact-form"
                                                placeholder="Your name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input name="email" id="email" type="email"
                                                class="form-control contact-form" placeholder="Your email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <input type="text" class="form-control contact-form" id="subject"
                                                placeholder="Your Subject..">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <textarea name="comments" id="comments" rows="4"
                                                class="form-control contact-form h-auto"
                                                placeholder="Your message..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-lg-12 d-grid">
                                        <input type="submit" id="submit" name="send"
                                            class="submitBnt btn btn-rounded btn-primary" value="Send Message">
                                    </div>
                                </div>
                            </form>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="m-5">
                        <div class="position-relative">
                            <div class="contact-map">
                                {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29754.94142818836!2d72.88699279999999!3d21.217263799999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1641286801478!5m2!1sen!2sin" width="550" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> --}}
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3687.0692381004505!2d88.39022441495763!3d22.464032285238837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xecee6d65adfbb8fc!2zMjLCsDI3JzUwLjUiTiA4OMKwMjMnMzIuNyJF!5e0!3m2!1sen!2sin!4v1648886621652!5m2!1sen!2sin" width="550" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="map-shape"></div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <i class="mdi mdi-google-maps f-50 text-primary"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="mb-1">Location</h5>
                            <p class="f-14 mb-0 text-muted">6 SN, Garia Station Road, Kolkata-700084</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex align-items-center mt-4 mt-lg-0">
                        <div class="flex-shrink-0">
                            <i class="mdi mdi-email f-50 text-primary"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="mb-1">Email</h5>
                            <p class="f-14 mb-0 text-muted">casera.tech@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex align-items-center mt-4 mt-lg-0">
                        <div class="flex-shrink-0">
                            <i class="mdi mdi-phone f-50 text-primary"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="mb-1">Phone</h5>
                            <p class="f-14 mb-0 text-muted">9330685831</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end section -->



    <!-- footer section -->
    <section class=" section footer bg-dark overflow-hidden">
        <div class="bg-arrow">
            
        </div>
        <!-- container -->
        <div class="container">
            <div class="row ">
                <div class="col-lg-4">
                    <a class="navbar-brand logo text-uppercase" href="{{route('welcome')}}">
                        <img src="{{asset('front/images/logo-footer.png')}}" class="logo-light" alt="" height="30">
                        <!-- <img src="images/logo-dark.png" class="logo-dark" alt="" height="28"> -->
                    </a>
                    <p class="text-white-50 mt-2 mb-0">Casera is an IT company, works with various industries</p>

                    <div class="footer-icon mt-4">
                        <div class=" d-flex align-items-center">
                            <a href="" class="me-2 avatar-sm text-center" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Facebook">
                                <i class="mdi mdi-facebook f-24 align-middle text-primary"></i>
                            </a>
                            <a href="" class="mx-2 avatar-sm text-center" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="twitter">
                                <i class="mdi mdi-twitter f-24 align-middle text-primary"></i>
                            </a>
                            {{-- <a href="" class="mx-2 avatar-sm text-center" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="googleplay">
                                <i class="mdi mdi-google-play f-24 align-middle text-primary"></i>
                            </a> --}}
                            <a href="" class="mx-2 avatar-sm text-center">
                                <i class="mdi mdi-linkedin f-24 align-middle text-primary" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="linkedin"></i>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="text-start mt-4 mt-lg-0">
                        <h5 class="text-white fw-bold">Product</h5>
                        <ul class="footer-item list-unstyled footer-link mt-3">
                            <li><a href="">Features</a></li>
                            <li><a href="">Pricing</a></li>
                            <li><a href="">Get App</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 ">
                    <div class="text-start">
                        <h5 class="text-white fw-bold">Policies</h5>
                        <ul class="footer-item list-unstyled footer-link mt-3">
                            <li><a href="">Security & Provciy</a></li>
                            <li><a href="">Marketplace</a></li>
                            <li><a href="">Term & Condition</a></li>
                            <li><a href="">Collection</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4">
                    <h5 class="text-white">Subscribe</h5>
                    <div class="input-group my-4">
                        <input type="text" class="form-control p-3" placeholder="subscribe" aria-label="subscribe"
                            aria-describedby="basic-addon2">
                        <a href="" class="input-group-text bg-primary text-white px-4" id="basic-addon2">Go</a>
                    </div>
                    <p class="mb-0 text-white-50">publishes will show up in your Subscriptions feed. You may also start.
                    </p>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>

    <section class="bottom-footer py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <p class="mb-0 text-center text-muted"> &copy;
                        <script>document.write(new Date().getFullYear())</script> Casera. Design with <i
                            class="mdi mdi-heart text-danger"></i>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end footer -->


    <!-- Style switcher -->
    <div class="style-switcher" id="style-switcher" onclick="toggleSwitcher()" style="left: -189px;">
        <div>
            <h6>Select your color</h6>
            <ul class="pattern list-unstyled mb-0">
                <li>
                    <a class="color1" href="javascript: void(0);" onclick="setColor('default')"></a>
                </li>
                <li>
                    <a class="color2" href="javascript: void(0);" onclick="setColor('blue')"></a>
                </li>
                <li>
                    <a class="color3" href="javascript: void(0);" onclick="setColor('warning')"></a>
                </li>
            </ul>
        </div>
        <div class="bottom">
            <a href="javascript: void(0);" class="settings rounded-end"><i class="uil uil-setting text-white" style="display: inline; line-height: 46px;"></i></a>
        </div>
    </div>
    <!-- end switcher-->

    <script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('front/js/tiny-slider.js')}}"></script>
    <script src="{{asset('front/js/swiper.min.js')}}"></script>
    <!-- <script src="{{asset('front/js/smooth-scroll.polyfills.min.js')}}"></script> -->

    <!-- counter -->
    <!-- <script src="{{asset('front/js/counter.init.js')}}"></script> -->
    <script src="{{asset('front/js/app.js')}}"></script>
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
</body>
</html>