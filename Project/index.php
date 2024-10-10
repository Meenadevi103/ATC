<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ATC</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="Assets/Templates/Main/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="Assets/Templates/Main/lib/animate/animate.min.css" rel="stylesheet">
    <link href="Assets/Templates/Main/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="Assets/Templates/Main/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="Assets/Templates/Main/css/style.css" rel="stylesheet">

    <style>
      .carousel-caption {
        background:#ffffff82;
      }
      .contact{
        background-color: rgb(11 162 201);
        padding: 6px;
        border-radius: 12px;
        margin-top: -7px;
        color: white;
      }
      .light{
        padding:10px;
        background-color:rgb(11 162 201);
      }
      .dark{
        padding:10px;
      }
      .owl-carousel .owl-item img {
        height:450px;
      }
      .text-primary {
    color: #0dcaf0 !important;
}

.btn-primary {
    color: #000;
    background-color: #0dcaf0;
    border-color: #0dcaf0;
}
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    
    <!-- Navbar Start -->
    <div class="container-fluid bg-white sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-2 py-lg-0">
                <a href="index.html" class="navbar-brand">
                    <img class="img-fluid" src="Assets/Templates/Main/img/logo1.jpg" width="110px" style="border-radius:50%;" alt="Logo">ATC
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <a href="Guest/SignIn.php" class="nav-item nav-link">Darshan Booking</a>
                        <a href="Guest/SignIn.php"  class="nav-item nav-link">Palpayasam Booking</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Other Bookings</a>
                            <div class="dropdown-menu bg-light rounded-0 m-0">
                                <a href="Guest/SignIn.php"  class="dropdown-item">Marriage Booking</a>
                                <a href="Guest/SignIn.php"  class="dropdown-item">Vazhipaad Booking</a>
                                <!-- <a href="testimonial.html" class="dropdown-item">{Testimonial}</a> -->
                               <!-- { <a href="404.html" class="dropdown-item">404 Page</a>} -->
                            </div>
                        </div>
                        <a href="Donation.php" class="nav-item nav-link"><div class="contact">Donate</div></a>
                    </div>
                    <!-- <div class="border-start ps-4 d-none d-lg-block">
                        <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
                    </div> -->
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="Assets/Templates/Main/img/atc.jpg" alt="Image" height="700px">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 text-center">
                                    <p class="fs-4 text-white animated zoomIn">Welcome to <strong class="text-dark"></strong></p>
                                    <h1 class="display-1 text-dark mb-4 animated zoomIn">Ambalapuzha Sree Krishna Swamy Temple</h1>
                                    <a href="Guest/SignIn.php" class="btn btn-light rounded-pill py-3 px-5 animated zoomIn">Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="Assets/Templates/Main/img/atc.jpg" alt="Image" height="700px">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 text-center">
                                    <p class="fs-4 text-white animated zoomIn">Welcome to <strong class="text-dark"></strong></p>
                                    <h1 class="display-1 text-dark mb-4 animated zoomIn">Ambalapuzha Sree Krishna Swamy Temple</h1>
                                    <a href="Guest/SignIn.php" class="btn btn-light rounded-pill py-3 px-5 animated zoomIn">Login </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5" id="about">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s">
                    <div class="section-title">
                        <p class="fs-5 fw-medium fst-italic text-primary">About Us</p>
                        <h1 class="display-9">Ambalapuzha Sree Krishna Swamy Temple</h1>
                    </div>
                    <div class="row g-3 mb-4">
                        <div class="col-sm-12">
                           <!-- { <img class="img-fluid bg-white w-100" src="Assets/Templates/Main/img/about-5.jpg" alt="">} -->
                        </div>
                        <div class="col-sm-12">
                            <h5>Temple is often referred as Dakshina Dwaraka</h5>
                            <p class="mb-0">The Ambalapuzha Sree Krishna Swamy Temple, located in the serene town of Ambalapuzha in Kerala, is a revered Hindu temple dedicated to Lord Krishna. Known for its deep spiritual significance, the temple draws thousands of devotees each year who seek the blessings of Lord Krishna, depicted here as a child (Balagopala). The temple is renowned for its traditional architecture, rich history, and vibrant annual festivals such as the Ambalapuzha Arattu. One of its most cherished offerings is the famous Palpayasam, a sweet rice pudding said to have been blessed by the deity himself. Steeped in legend and cultural importance, the temple continues to be a spiritual hub for both pilgrims and tourists alike, embodying the grace and charm of Kerala's religious heritage.</p>
                        </div>
                    </div>
                    <!-- {<div class="border-top mb-4"></div>
                    <div class="row g-3">
                        <div class="col-sm-8">
                            <h5>Vazhipaad Booking</h5>
                            <p class="mb-0">"Click here to book your Vazhipaad offering at Ambalapuzha Sree Krishna Temple."</p>
                        </div>
                        <div class="col-sm-4">
                            <img class="img-fluid bg-white w-100" src="Assets/Templates/Main/img/about-6.jpg" alt="">
                        </div>
                    </div>
                </div>} -->
            </div>
        </div>
    </div>
    <!-- About End -->
    <h5 align="centre">Darshan Timings</h5>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="row light">
                        
                    
                  
                        <div class="col-lg-4"><b>Days</b></div>
                        <div class="col-lg-4"><b>Description</b></div>
                        <div class="col-lg-4"><b>Time</b></div>
                    </div>
                    <div class="row dark">
                        <div class="col-lg-4">Mon to Sun</div>
                        <div class="col-lg-4">Temple Opening Time</div>
                        <div class="col-lg-4">03:00</div>
                    </div>
                    <div class="row light">
                        <div class="col-lg-4">Mon to Sun</div>
                        <div class="col-lg-4">Morning Hours</div>
                        <div class="col-lg-4">03:00 to 12:00</div>
                        <div class="col-lg-4">Temple Closing Time</div>
                    </div>
                    <div class="row dark">
                        <div class="col-lg-4">Mon to Sun</div>
                        <div class="col-lg-4">Evening Hours</div>
                        <div class="col-lg-4">17:00 to 20:00</div>
                       
                    </div>
                    <div class="row light">
                        <div class="col-lg-4">Mon to Sun</div>
                        <div class="col-lg-4">Temple Closing Time</div>
                        <div class="col-lg-4">20:00</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Products Start -->
    <div class="container-fluid product py-5 my-5">
        <div class="container py-5">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
               <!-- { <p class="fs-5 fw-medium fst-italic text-primary">Our Products</p>} -->
                <h1 class="display-6">What we Offer</h1>
            </div>
            <div class="owl-carousel product-carousel wow fadeInUp" data-wow-delay="0.5s">
                <a href="Guest/SignIn.php" class="d-block product-item rounded">
                    <img src="Assets/Templates/Main/img/darshan.jpg" alt="">
                    <div class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                        <h4 class="text-primary">Darshan Booking</h4>
                        <span class="text-body">"Click here to book your Darshan at Ambalapuzha Sree Krishna Temple."</span>
                    </div>
                </a>
                <a href="Guest/SignIn.php" class="d-block product-item rounded">
                    <img src="Assets/Templates/Main/img/marriage.jpg" alt="">
                    <div class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                        <h4 class="text-primary">Marriage Booking</h4>
                        <span class="text-body">"Click here to book your marriage ceremony at Ambalapuzha Sree Krishna Temple."</span>
                    </div>
                </a>
                <a href="Guest/SignIn.php" class="d-block product-item rounded">
                    <img src="Assets\Templates\Main\img\palpayasam.webp" alt="">
                    <div class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                        <h4 class="text-primary">Palpaysam Booking</h4>
                        <span class="text-body">"Click here to book Palpayasam offering at Ambalapuzha Sree Krishna Temple."</span>
                    </div>
             </a> 
                <a href="Guest/SignIn.php" class="d-block product-item rounded">
                    <img src="Assets/Templates/Main/img/vazhipaad.png" alt="">
                    <div class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                        <h4 class="text-primary">Vazhipaad Booking</h4>
                        <span class="text-body">"Click here to book your Vazhipaad offering at Ambalapuzha Sree Krishna Temple.</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Products End -->


    <!-- Article Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid" src="Assets/Templates/Main/img/Spiritual Places.jpeg" alt="">
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="section-title">
<!-- {                        <p class="fs-5 fw-medium fst-italic text-primary">Featured Acticle</p>} -->
                        <h1 class="display-6">The history of Ambalapuzha Sree Krishna Temple</h1>
                    </div>
                    <p class="mb-4">The Ambalapuzha Sree Krishna Temple, located in the Alappuzha district of Kerala, India, is a magnificent example of Kerala's temple architecture and a beacon of spiritual heritage. Dedicated to Lord Krishna, the temple was constructed in the 17th century by the ruler Chembakassery Pooradam Thirunal-Devanarayanan Thampuran. The deity worshipped here is Parthasarathy, Lord Krishna in the role of Arjuna's charioteer during the epic battle of Mahabharata.

</p>
                    <p class="mb-4">The king, confident in his abilities, agreed without realizing the implications of this request. As the game progressed and the rice grains were calculated, it soon became clear that the total would amount to millions of grains—far beyond what the king could provide. Realizing the impossible debt, the king was distraught.</p>
                    <p class="mb-4">At that moment, the sage revealed his true identity as Lord Krishna. Instead of demanding the rice, Lord Krishna proposed a solution: the king could repay the debt by serving Paal payasam, a sweet rice pudding, to all the temple's devotees daily. The king accepted this divine suggestion, and from that day onwards, the tradition of offering Paal payasam at the Ambalapuzha Sree Krishna Temple began.</p>
                    <p class="mb-4">This practice continues to this day, making the temple famous for its Paal payasam offering. The temple’s history is not just about architecture and rituals but also about this deep connection to Lord Krishna, who blessed the land with his divine presence and a lasting tradition.</p>
                   <!-- { <a href="" class="btn btn-primary rounded-pill py-3 px-5">Read More</a>} -->
                </div>
            </div>
        </div>
    </div>
    <!-- Article End -->


    <!-- Video Start -->
   <!-- { <div class="container-fluid video my-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="py-5">
                        <h1 class="display-6 mb-4">Tea is a drink of <span class="text-white">health</span> and <span class="text-white">beauty</span></h1>
                        <h5 class="fw-normal lh-base fst-italic text-white mb-5">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit</h5>
                        <div class="row g-4 mb-5">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="text-dark">Great tea assortment</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="text-dark">Spices & additives</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="text-dark">Unique accessories</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="text-dark">Good for health & beauty</span>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-light rounded-pill py-3 px-5" href="">Explore More</a>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100 d-flex align-items-center justify-content-center" style="min-height: 300px;">
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    Video End} -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Store Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary">Online Store</p>
                <h1 class="display-6">Want to stay healthy? Choose tea taste</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="store-item position-relative text-center">
                        <img class="img-fluid" src="Assets/Templates/Main/img/store-product-1.jpg" alt="">
                        <div class="p-4">
                            <div class="text-center mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <h4 class="mb-3">Nature close tea</h4>
                            <p>Aliqu diam amet diam et eos. Clita erat ipsum lorem erat ipsum lorem sit sed</p>
                            <h4 class="text-primary">$19.00</h4>
                        </div>
                        <div class="store-overlay">
                            <a href="" class="btn btn-primary rounded-pill py-2 px-4 m-2">More Detail <i class="fa fa-arrow-right ms-2"></i></a>
                            <a href="" class="btn btn-dark rounded-pill py-2 px-4 m-2">Add to Cart <i class="fa fa-cart-plus ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="store-item position-relative text-center">
                        <img class="img-fluid" src="Assets/Templates/Main/img/store-product-2.jpg" alt="">
                        <div class="p-4">
                            <div class="text-center mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <h4 class="mb-3">Green tea tulsi</h4>
                            <p>Aliqu diam amet diam et eos. Clita erat ipsum lorem erat ipsum lorem sit sed</p>
                            <h4 class="text-primary">$19.00</h4>
                        </div>
                        <div class="store-overlay">
                            <a href="" class="btn btn-primary rounded-pill py-2 px-4 m-2">More Detail <i class="fa fa-arrow-right ms-2"></i></a>
                            <a href="" class="btn btn-dark rounded-pill py-2 px-4 m-2">Add to Cart <i class="fa fa-cart-plus ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="store-item position-relative text-center">
                        <img class="img-fluid" src="Assets/Templates/Main/img/store-product-3.jpg" alt="">
                        <div class="p-4">
                            <div class="text-center mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <h4 class="mb-3">Instant tea premix</h4>
                            <p>Aliqu diam amet diam et eos. Clita erat ipsum lorem erat ipsum lorem sit sed</p>
                            <h4 class="text-primary">$19.00</h4>
                        </div>
                        <div class="store-overlay">
                            <a href="" class="btn btn-primary rounded-pill py-2 px-4 m-2">More Detail <i class="fa fa-arrow-right ms-2"></i></a>
                            <a href="" class="btn btn-dark rounded-pill py-2 px-4 m-2">Add to Cart <i class="fa fa-cart-plus ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                    <a href="" class="btn btn-primary rounded-pill py-3 px-5">View More Products</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Store End -->


    <!-- Testimonial Start -->
   <!-- Testimonial Start -->
   <div class="container-fluid testimonial py-5 my-5">
            <div class="container py-5">
                <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s"
                    style="max-width: 500px;">
                    
                    <h1 class="display-6">Click Here To Donate</h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.5s">
                    <a href="/Guest/Logout.php">
                        <div class="testimonial-item p-4 p-lg-5">
                           
                            <div class="d-flex align-items-center justify-content-center">
                                <!-- <img class="img-fluid flex-shrink-0" src="../Assets/Templates/Main/img/testimonial-1.jpg"
                                    alt=""> -->
                                <div class="text-start ms-3">
                                    <h5>Donation</h5>
                                   
                                </div>
                            </div>
                        </div>
                    </a>
            </div>
        </div>
    </div> 
    <!-- Testimonial End -->


    <!-- Contact Start -->
    <!-- <div class="container-xxl contact py-5">
        <div class="container">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary">Contact Us</p>
                <h1 class="display-6">Contact us right now</h1>
            </div>
            <div class="row justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-8">
                    <p class="text-center mb-5">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                    <div class="row g-5">
                        <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.3s">
                            <div class="btn-square mx-auto mb-3">
                                <i class="fa fa-envelope fa-2x text-white"></i>
                            </div>
                            <p class="mb-2">info@example.com</p>
                            <p class="mb-0">support@example.com</p>
                        </div>
                        <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.4s">
                            <div class="btn-square mx-auto mb-3">
                                <i class="fa fa-phone fa-2x text-white"></i>
                            </div>
                            <p class="mb-2">+012 345 67890</p>
                            <p class="mb-0">+012 345 67890</p>
                        </div>
                        <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.5s">
                            <div class="btn-square mx-auto mb-3">
                                <i class="fa fa-map-marker-alt fa-2x text-white"></i>
                            </div>
                            <p class="mb-2">123 Street</p>
                            <p class="mb-0">New York, USA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Contact Start -->

    <div class="container-xxl contact py-5">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12901.033951876905!2d76.35478066478667!3d9.377151228364484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b089c0950e73123%3A0x6046787454f7d4b0!2sSree%20Krishna%20Swamy%20Temple%2C%20Ambalapuzha!5e0!3m2!1sen!2sin!4v1727959492346!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>




    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-medium" href="#">Ambalapuzha Temple Connect</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="Assets/Templates/Main/lib/wow/wow.min.js"></script>
    <script src="Assets/Templates/Main/lib/easing/easing.min.js"></script>
    <script src="Assets/Templates/Main/lib/waypoints/waypoints.min.js"></script>
    <script src="Assets/Templates/Main/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="Assets/Templates/Main/js/main.js"></script>
</body>

</html>