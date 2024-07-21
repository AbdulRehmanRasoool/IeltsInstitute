<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require 'connection.php';
    
    $fullname = trim($_POST['fullName']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $message = trim($_POST['message']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<script>alert("Invalid email format");</script>';
        exit;
    }

    if (empty($fullname) || empty($phone) || empty($message)) {
        echo '<script>alert("Please fill in all required fields.");</script>';
        exit;
    }

    $fullname = htmlspecialchars($fullname, ENT_QUOTES, 'UTF-8');
    $phone = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
    $isActive = true;
    $isDeleted = false;
    $createdAt = date('Y-m-d H:i:s');
    $updatedAt = date('Y-m-d H:i:s');

    try {
        $stmt = $conn->prepare("INSERT INTO contacts (`Name`, `Email`, `Phone`, `Message`, `IsActive`, `IsDeleted`, `CreatedAt`, `UpdatedAt`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $fullname, $email, $phone, $message,$isActive,$isDeleted,$createdAt,$updatedAt);
        $stmt->execute();

        echo '<script>alert("Form data successfully saved!"); window.location.href = "contact-us.php";</script>';

        $stmt->close();
    } catch (mysqli_sql_exception $e) {
        echo '<script>alert("Error: ' . $e->getMessage() . '");</script>';
    }

    $conn->close();
}
?>

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
                    <h1 class="h1-title">Apply Now</h1>
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
                            <li><a href="index.php">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li><a href="applynow.php">Apply Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Banner Breadcrum End-->

    <!--Contact Us Start-->
    <section class="main-contact-page-in">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="get-touch-box">
                        <div class="get-touch-title text-center mb-5">
                            <h2 class="h2-subtitle">Book An Appointment</h2>
                        </div>
                        <div class="get-touch-form">
                            <form method="post" action="">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-box">
                                            <input type="text" name="name" class="form-input" placeholder="Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-box">
                                            <input type="email" name="email" class="form-input" placeholder="Email Address" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-box">
                                            <input type="text" name="phone" class="form-input" placeholder="Phone No." required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-box">
                                            <input type="text" name="city" class="form-input" placeholder="City" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-box">
                                            <select name="testName" id="" class="form-select" style="padding:18px 0px;width:100%;border-radius:8px;">
                                                <option selected disabled>Select Test Name</option>
                                                <option value="IELTS_Regular">IELTS regular General (for immigration, work visa)
                                                </option>
                                                <option value="IELTS_Academic">IELTS  academic ( for study in any English-speaking country)
                                                </option>
                                                <option value="IELTS_UKVI_General">IELTS  UKVI General( for work visa in the UK)
                                                </option>
                                                <option value="IELTS_UKVI_Academic">IELTS UKVI Academic (for study visa in the UK)
                                                </option>
                                                <option value="CELPIP">CELPIP (for immigration to Canada )
                                                </option>
                                                <option value="PTE_Core">PTE Core( for immigration to Canada)
                                                </option>
                                                <option value="PTE_Regular">PTE regular ( for study visa Canada and Australia)
                                                </option>
                                                <option value="OET">OET ( for doctors, nurses, and medical-related professionals to move to Canada )
                                                </option>
                                                <option value="Life_Skills">Life Skills A1/A2 ( for spouse visa UK )
                                                </option>
                                                <option value="TOEFL">TOEFL ( USA )
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-box mb-0">
                                            <button type="submit" class="sec-btn"><span>Submit Now</span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Us End-->

    <!--Map Start-->
    <div id="map">
        <div class="main-contact-map-in">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4665.259595331257!2d67.07282897896971!3d24.923669614766926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f3f4e1989fb%3A0x8e979663a3a54c1f!2sDastagir%20Society%20Gulberg%20Town%2C%20Karachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1721470543089!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!--Map End-->

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