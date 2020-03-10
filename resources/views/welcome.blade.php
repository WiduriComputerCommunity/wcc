<!doctype html>
<html lang="en">

<head>
    <title>Widuri Computer Community &mdash; Website by WCC</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset ("home/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset ("home/css/jquery-ui.css")}}">
    <link rel="stylesheet" href="{{asset ("home/css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset ("home/css/owl.theme.default.min.css")}}">
    <link rel="stylesheet" href="{{asset ("home/css/owl.theme.default.min.css")}}">

    <link rel="stylesheet" href="{{asset ("home/css/jquery.fancybox.min.css")}}">

    <link rel="stylesheet" href="{{asset ("home/css/bootstrap-datepicker.css")}}">

    <link rel="stylesheet" href="{{asset ("home/flaticon/flaticon.css")}}">
    <link rel="stylesheet" href="{{asset ("home/icomoon/style.css")}}">

    <link rel="stylesheet" href="{{asset ("home/css/aos.css")}}">

    <link rel="stylesheet" href="{{asset ("home/css/style.css")}}">

    <link rel="stylesheet" href="{{asset ("home/css/home.css")}}">

    <link rel="shortcut icon" href="{{asset ("images/favicon.png")}}" type="image/x-icon">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6 col-xl-4">
                        <h1 class="mb-0 site-logo"><a href="#" class="mb-0">WCC</a></h1>
                        <p>Widuri Computer Community</p>
                    </div>
                    <div class="col-12 col-md-8 d-none d-xl-block">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li><a href="#home-section" class="nav-link">Home</a></li>
                                <li class="has-children">
                                    <a href="#about-section" class="nav-link">About Us</a>
                                    <ul class="dropdown">
                                        <li><a href="#team-section" class="nav-link">Team</a></li>
                                        <li><a href="#faq-section" class="nav-link">FAQ</a></li>
                                        {{-- <li class="has-children">
                                            <a href="#">More Links</a>
                                            <ul class="dropdown">
                                                <li><a href="#">Menu One</a></li>
                                                <li><a href="#">Menu Two</a></li>
                                                <li><a href="#">Menu Three</a></li>
                                            </ul>
                                        </li> --}}
                                    </ul>
                                </li>
                                {{-- <li><a href="#testimonials-section" class="nav-link">Testimonials</a></li>
                                <li><a href="#blog-section" class="nav-link">Blog</a></li> --}}
                                <li><a href="#contact-section" class="nav-link">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;">
                        <a href="#" class="site-menu-toggle js-menu-toggle float-right">
                            <span class="icon-menu h3"></span>
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <div class="slideshow-container overlay mySlides" data-aos="fade"id="home-section" style="background-image: url(images/wccSlider.jpg);">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-8 mt-lg-5 text-center">
                        <img src="{{asset ("images/WCC-LOGO.png")}}" max-width="100%" width="600" height="200" alt="">
                        <div data-aos="fade-up" data-aos-delay="100">
                            <h4 class="mb-5" data-aos="fade-up">Jadilah bagian dari komunitas kami
                                Untuk saling berbagi ilmu</h4>
                        </div>
                        <a href="#contact-section" class="btn smoothscroll btn-primary mr-2 mb-2">Register</a>

                    </div>
                </div>
            </div>
        </div>
        <div class="slideshow-container overlay mySlides" data-aos="fade"id="home-section" style="background-image: url(images/bootcamp.jpg); width: 100%;">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-8 mt-lg-5 text-center">
                        <a href="#contact-section" class="btn smoothscroll btn-primary mr-2 mb-2">Register</a>
                    </div>
                </div>
            </div>

        </div>
          <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            {{-- <a href="#about-section" class="mouse smoothscroll">
                <span class="mouse-icon">
                    <span class="mouse-wheel"></span>
                </span>
            </a> --}}

             <!-- The dots/circles -->
            <div style="text-align:center" class="mouse">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>

       <section class="site-section" id="blog-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center" data-aos="fade">
                        <h2 class="section-title mb-3">Apa itu WCC ?</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="">
                        <div class="h-entry">
                            <a href="single.html">
                                <img src="images/post_1.jpg" alt="Image" class="img-fluid">
                            </a>
                            <h2 class="font-size-regular"><a href="#">Repudiandae Quisquam Eaque Dolore</a></h2>
                            <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span
                                    class="mx-2">&bullet;</span> <a href="#">News</a></div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores
                                sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                            <p><a href="#">Continue Reading...</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="h-entry">
                            <a href="single.html">
                                <img src="images/post_2.jpg" alt="Image" class="img-fluid">
                            </a>
                            <h2 class="font-size-regular"><a href="#">Repudiandae Quisquam Eaque Dolore</a></h2>
                            <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span
                                    class="mx-2">&bullet;</span> <a href="#">News</a></div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores
                                sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                            <p><a href="#">Continue Reading...</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="h-entry">
                            <a href="single.html">
                                <img src="images/post_3.jpg" alt="Image" class="img-fluid">
                            </a>
                            <h2 class="font-size-regular"><a href="#">Repudiandae Quisquam Eaque Dolore</a></h2>
                            <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span
                                    class="mx-2">&bullet;</span> <a href="#">News</a></div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores
                                sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                            <p><a href="#">Continue Reading...</a></p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="site-section border-bottom" id="team-section">
            <div class="container">
                <div class="row mb-5 justify-content-center">
                    <div class="col-md-8 text-center">
                        <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">Our Team</h2>
                        {{-- <p class="lead" data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Minus minima neque tempora reiciendis.</p> --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="">
                        <div class="team-member">
                            <figure>
                                <ul class="social">
                                    {{-- <li><a href="#"><span class="icon-facebook"></span></a></li> --}}
                                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li><a href="#"><span class="icon-linkedin"></span></a></li>
                                    <li><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                                <img src="images/struktur/ketua.jpg" style="border-radius: 50%" alt="Image" class="img-fluid">
                            </figure>
                            <div class="p-3">
                                <h3>Dita Aji Pratama</h3>
                                <span class="position">Ketua WCC</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member">
                            <figure>
                                <ul class="social">
                                    {{-- <li><a href="#"><span class="icon-facebook"></span></a></li> --}}
                                    {{-- <li><a href="#"><span class="icon-twitter"></span></a></li> --}}
                                    {{-- <li><a href="#"><span class="icon-linkedin"></span></a></li> --}}
                                    <li><a href="https://www.instagram.com/sandieko_21/"><span class="icon-instagram"></span></a></li>
                                </ul>
                                <img src="images/struktur/wakil.jpg" style="border-radius: 50%" alt="Image" class="img-fluid">
                            </figure>
                            <div class="p-3">
                                <h3>Sandi Eko Saputro</h3>
                                <span class="position">Wakil Ketua WCC</span>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="">
                        <div class="team-member">
                            <figure>
                                <ul class="social">
                                    <li><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li><a href="#"><span class="icon-linkedin"></span></a></li>
                                    <li><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                                <img src="images/person_1.jpg" alt="Image" class="img-fluid">
                            </figure>
                            <div class="p-3">
                                <h3>Kaiara Spencer</h3>
                                <span class="position">Sekretaris WCC</span>
                            </div>
                        </div>
                    </div> --}}

                    <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="team-member">
                            <figure>
                                <ul class="social">
                                    {{-- <li><a href="#"><span class="icon-facebook"></span></a></li> --}}
                                    <li><a href="https://twitter.com/firasmpratama"><span class="icon-twitter"></span></a></li>
                                    <li><a href="https://www.linkedin.com/in/firasmpratama"><span class="icon-linkedin"></span></a></li>
                                    <li><a href="https://www.linkedin.com/in/firasmpratama"><span class="icon-instagram"></span></a></li>
                                </ul>
                                <img src="images/struktur/r_d.jpg" style="border-radius: 50%" alt="Image" class="img-fluid">
                            </figure>
                            <div class="p-3">
                                <h3>Firas Muhammad Pratama</h3>
                                <span class="position">Research & Development</span>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="team-member">
                            <figure>
                                <ul class="social">
                                    {{-- <li><a href="#"><span class="icon-facebook"></span></a></li> --}}
                                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li><a href="#"><span class="icon-linkedin"></span></a></li>
                                    <li><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                                <img src="images/struktur/creative.jpg" style="border-radius: 50%" alt="Image" class="img-fluid">
                            </figure>
                            <div class="p-3">
                                <h3>Muhammad Revli Fauzi</h3>
                                <span class="position">Creative Design</span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    
                </div>
            </div>
        </section>

        <section class="site-section" id="about-section">
            <div class="container">
                <div class="row mb-5">

                    <div class="col-lg-6 ml-auto mb-5 order-1 order-lg-2" data-aos="fade" data-aos="fade-up"
                        data-aos-delay="">
                        <img src="images/hero_1.jpg" alt="Image" class="img-fluid rounded">
                    </div>
                    <div class="col-lg-6 order-2 order-lg-1" data-aos="fade">

                        <div class="row">



                            <div class="col-md-12 mb-md-5 mb-0 col-lg-6" data-aos="fade-up" data-aos-delay="">
                                <div class="unit-4">
                                    <div class="unit-4-icon mr-4 mb-3"><span class="text-primary flaticon-head"></span>
                                    </div>
                                    <div>
                                        <h3>Web &amp; Mobile Specialties</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis
                                            consect.</p>
                                        <p class="mb-0"><a href="#">Learn More</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-md-5 mb-0 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                                <div class="unit-4">
                                    <div class="unit-4-icon mr-4 mb-3"><span
                                            class="text-primary flaticon-smartphone"></span></div>
                                    <div>
                                        <h3>Intuitive Thinkers</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis.
                                        </p>
                                        <p class="mb-0"><a href="#">Learn More</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="site-section bg-light" id="contact-section" data-aos="fade">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h2 class="section-title mb-3">Contact Us</h2>
                    </div>
                </div>
                <div class="row mb-5">



                    <div class="col-md-4 text-center">
                        <p class="mb-4">
                            <span class="icon-room d-block h4 text-primary"></span>
                            <span>
                                Jl. Palmerah Barat No.353, RT.3/RW.5, 
                                Grogol Utara, Kec. Kby. Lama, 
                                Kota Jakarta Selatan, 
                                Daerah Khusus Ibukota Jakarta 11480
                            </span>
                        </p>
                    </div>
                    <div class="col-md-4 text-center">
                        <p class="mb-4">
                            <span class="icon-whatsapp d-block h4 text-primary"></span>
                            <a href="https://chat.whatsapp.com/K0OWwbbPdg1CfNUxEBTqJ7">WCC Group</a>
                        </p>
                    </div>
                    <div class="col-md-4 text-center">
                        <p class="mb-0">
                            <span class="icon-mail_outline d-block h4 text-primary"></span>
                            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=widuricomputercommunity@gmail.com" target="_blank">
                                widuricomputercommunity@gmail.com
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-5">
                                <h2 class="footer-heading mb-4">About Us</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium
                                    magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
                            </div>
                            <div class="col-md-3 ml-auto">
                                <h2 class="footer-heading mb-4">Quick Links</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#about-section" class="smoothscroll">About Us</a></li>
                                    <li><a href="#services-section" class="smoothscroll">Services</a></li>
                                    <li><a href="#testimonials-section" class="smoothscroll">Testimonials</a></li>
                                    <li><a href="#contact-section" class="smoothscroll">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h2 class="footer-heading mb-4">Follow Us</h2>
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=widuricomputercommunity@gmail.com" target="_blank" class="pl-0 pr-3">
                                    <span class="icon-google"></span>
                                </a>
                                <a href="https://instagram.com/widuricc" target="_blank" class="pl-3 pr-3">
                                    <span class="icon-instagram"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-5  text-center">
                    <div class="col-md-12">
                        <div class="border-top pt-5">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> 
                                All rights reserved | This Website is made with 
                                {{-- <i class="icon-heart text-danger" aria-hidden="true"></i> by  --}}
                                <a href="/" style="color: #007bff">WCC</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>

                        </div>
                    </div>

                </div>
            </div>
        </footer>

    </div> <!-- .site-wrap -->

    <script src="{{asset ("home/js/jquery-3.2.1.min.js")}}"></script>
    <script src="{{asset ("home/js/jquery-ui.js")}}"></script>
    <script src="{{asset ("home/js/popper.min.js")}}"></script>
    <script src="{{asset ("home/js/bootstrap.min.js")}}"></script>
    <script src="{{asset ("home/js/owl.carousel.min.js")}}"></script>
    <script src="{{asset ("home/js/jquery.countdown.min.js")}}"></script>
    <script src="{{asset ("home/js/jquery.easing.1.3.js")}}"></script>
    <script src="{{asset ("home/js/aos.js")}}"></script>
    <script src="{{asset ("home/js/jquery.fancybox.min.js")}}"></script>
    <script src="{{asset ("home/js/jquery.sticky.js")}}"></script>
    <script src="{{asset ("home/js/isotope.pkgd.min.js")}}"></script>

    {{-- <script src="{{asset ("home/js/style.js")}}"></script> --}}
    <script src="{{asset ("home/js/main.js")}}"></script>



</body>

</html>
