<!DOCTYPE html>
<html lang="en">

<head>
    <title>Educater - Online Courses & Education HTML Template</title>
    <meta name="keywords" content="Educater" />
    <meta name="description" content="Educater" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- FavIcon CSS -->
    <link rel="icon" href="assets/images/favicon.png" type="image/gif" sizes="16x16">

    <!--Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <!--Google Fonts CSS-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">

    <!--Font Awesome Icon CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">

    <!-- Slick Slider CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">

    <!-- Wow Animation CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">

    <!-- Main Style CSS  -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>

    <?php require 'loader.php' ?>
    <?php require 'header.php' ?>

    <!--Smooth Scroll Start-->
    <div id="butter">

        <!--Banner Start-->
        <section class="main-banner-in">
            <span class="shape-1 animate-this">
                <img src="assets/images/shape-1.png" alt="shape">
            </span>
            <span class="shape-2 animate-this">
                <img src="assets/images/shape-2.png" alt="shape">
            </span>
            <span class="shape-3 animate-this">
                <img src="assets/images/shape-3.png" alt="shape">
            </span>
            <span class="shape-4 animate-this">
                <img src="assets/images/shape-4.png" alt="shape">
            </span>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="h1-title">Contact Us</h1>
                    </div>
                </div>
            </div>
        </section>
        <!--Banner End-->

        <!--Banner Breadcrum Start-->
        <div class="main-banner-breadcrum">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-breadcrum">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Banner Breadcrum End-->

        <!--Contact Us Start-->
        <div class="container">
                <div class="row mt-5">
                    <a href="https://unsplash.it/1200/768.jpg?image=251" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                        <img src="https://unsplash.it/600.jpg?image=251" class="img-fluid rounded">
                    </a>
                    <a href="https://unsplash.it/1200/768.jpg?image=252" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                        <img src="https://unsplash.it/600.jpg?image=252" class="img-fluid rounded">
                    </a>
                    <a href="https://unsplash.it/1200/768.jpg?image=253" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                        <img src="https://unsplash.it/600.jpg?image=253" class="img-fluid rounded">
                    </a>
                </div>
                <div class="row">
                    <a href="https://unsplash.it/1200/768.jpg?image=254" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                        <img src="https://unsplash.it/600.jpg?image=254" class="img-fluid rounded">
                    </a>
                    <a href="https://unsplash.it/1200/768.jpg?image=255" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                        <img src="https://unsplash.it/600.jpg?image=255" class="img-fluid rounded">
                    </a>
                    <a href="https://unsplash.it/1200/768.jpg?image=256" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                        <img src="https://unsplash.it/600.jpg?image=256" class="img-fluid rounded">
                    </a>
                </div>
            </div>
        <!--Contact Us End-->

        <?php require 'cta.php' ?>
        <?php require 'footer.php' ?>

    </div>
    <!--Smooth Scroll End-->

    <!-- Scroll To Top Start -->
    <a href="#main-banner" class="scroll-top" id="scroll-to-top">
        <i class="fa fa-arrow-up" aria-hidden="true"></i>
    </a>
    <!-- Scroll To Top End-->

    <?php require 'bubble-animation.php' ?>

    <!-- Jquery JS Link -->
    <script>
        $(document).on("click", '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>
    <script src="assets/js/jquery.min.js"></script>

    <!-- Bootstrap JS Link -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

    <!-- Custom JS Link -->
    <script src="assets/js/custom.js"></script>

    <!-- Slick Slider JS Link -->
    <script src="assets/js/slick.min.js"></script>

    <!-- Wow Animation JS -->
    <script src="assets/js/wow.min.js"></script>

    <!--Banner Bg Animation JS-->
    <script src="assets/js/bg-moving.js"></script>

    <!--Smooth Scroll JS-->
    <script src="assets/js/smooth-scroll.js"></script>

</body>

<!-- Mirrored from shivaaythemes.in/educater-demo/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jul 2024 12:01:57 GMT -->

</html>