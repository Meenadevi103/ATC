<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tea House - Tea Shop Website Template</title>
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
    <link href="../Assets/Templates/Main/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../Assets/Templates/Main/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../Assets/Templates/Main/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../Assets/Templates/Main/css/style.css" rel="stylesheet">

    <style>
      .carousel-caption {
        background:#ffffff82;
      }
      .contact{
        background-color: #0abdd4;
        padding: 6px;
        border-radius: 12px;
        margin-top: -7px;
        color: white;
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
                <a href="Homepage.php" class="navbar-brand">
                    <img class="img-fluid" src="../Assets/Templates/Main/img/logo1.jpg" width="110px"
                        style="border-radius:50%;" alt="Logo">ATC
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Book Now</a>
                            <div class="dropdown-menu bg-light rounded-0 m-0">
                                <a href="DarshanBooking.php" class="dropdown-item">Darshan Booking</a>
                                <a href="MarriageBooking.php" class="dropdown-item">Marriage Booking</a>
                                <a href="VazhipadBooking.php" class="dropdown-item">Vazhipaad Booking</a>
                                <a href="PalpayasamBooking.php" class="dropdown-item">Palpayasam Booking</a>
                                <!-- <a href="testimonial.html" class="dropdown-item">{Testimonial}</a> -->
                                <!-- { <a href="404.html" class="dropdown-item">404 Page</a>} -->
                            </div>
                        </div>


                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Account</a>
                            <div class="dropdown-menu bg-light rounded-0 m-0">
                                <a href="MyMarriageBooking.php" class="dropdown-item">My Marriage Booking</a>
                                <a href="MyVazhipad.php" class="dropdown-item">My Vazhipaad Booking</a>
                                <a href="MyDarshanBooking.php" class="dropdown-item">My Darshan</a>
                                <a href="PostComplaint.php" class="dropdown-item">Complaints</a>
                                <a href="Feedback.php" class="dropdown-item">Feedback</a>
                                <a href="Guest/Logout.php" class="dropdown-item">Logout</a>
                            </div>
                        </div>
                        <a href="Myprofile.php" class="nav-item nav-link active">My Profile</a>
                        <a href="Donation.php" class="nav-item nav-link">
                            <div class="contact">Donate</div>
                        </a>

                    </div>
                    <!-- <div class="border-start ps-4 d-none d-lg-block">
                        <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
                    </div> -->
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->