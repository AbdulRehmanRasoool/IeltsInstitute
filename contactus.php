<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars(strip_tags(trim($_POST["name"])));
    $email = htmlspecialchars(strip_tags(trim($_POST["email"])));
    $course = htmlspecialchars(strip_tags(trim($_POST["course"])));
    $comments = htmlspecialchars(strip_tags(trim($_POST["comments"])));

    $to = "abdulrehmanrasoool@gmail.com"; // Replace with the admin's email address
    $subject = "Contact Us Form Submission from $name";
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Course: $course\n";
    $body .= "Message:\n$comments\n";

    $headers = "From: noreply@yourdomain.com\r\n"; // Replace with a valid sender email address
    $headers .= "Reply-To: $email\r\n";

    // Prevent email header injection
    $headers = preg_replace("/\r\n/", "\n", $headers);

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for contacting us. We will get back to you shortly.";
    } else {
        echo "There was an error sending your message. Please try again later.";
    }
} else {
    echo "Invalid request method.";
}
?>

<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Master</title>
    <link rel="icon" href="images/favicon.png" type="image/png">
    <link rel="stylesheet" href="css/all-stylesheets.css" type="text/css" />
    <style>
        #styledSelect option {
            background-color: #fff;
            font-size: 16px;
            color: #ce5757;
            font-family: Arial, sans-serif;
            border: none;
            outline: none;
        }
    </style>
</head>

<body class="contact">
    <?php require 'header.php' ?>
    <div class="sub-banner-con contact-banner col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="container">
            <div class="row">
                <aside class="sub-banner text-center">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">contact us</li>
                    </ol>
                    <h1>contact us</h1>
                    <!--sub-banner-->
                </aside>
                <!--row-->
            </div>
            <!--container-->
        </div>
        <!--sub-banner-con-->
    </div>
    <div class="padding-outer col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="container">
            <div class="row">
                <div class="msg-form contact-msg-box red-bg text-center col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h2>Send a message</h2>
                    <div id="form_result"></div>
                    <div class="clear"></div>
                    <form method="post" action="contactus.php">
                        <ul>
                            <li>
                                <input name="name" id="name" type="text" placeholder="Name:" required />
                            </li>
                            <li>
                                <input name="email" id="email" type="text" placeholder="Email:" required />
                            </li>
                            <li style="float:left;width:100%;color:#fff;height:30px;margin:30px 0 0;font-size:16px;line-height:16px;background:none;border:none;box-shadow:0 -1px #ce5757  insert;border-bottom:1px solid #ce5757;" id="styledSelect">
                                <select name="course" style="width:100%;background-color:transparent;color:white;font-size:16px;border:none;margin:10px 0px;" required>
                                    <option disabled selected>Select Courses</option>
                                    <option value="IELTS_Regular">IELTS regular General ( for immigration, work visa)</option>
                                    <option value="IELTS_Academic">IELTS academic ( for study in any English-speaking country)</option>
                                    <option value="IELTS_UKVI_General">IELTS UKVI General( for work visa in the UK)</option>
                                    <option value="IELTS_UKVI_Academic">IELTS UKVI Academic (for study visa in the UK)</option>
                                    <option value="CELPIP">CELPIP (for immigration to Canada )</option>
                                    <option value="PTE_Core">PTE Core( for immigration to Canada)</option>
                                    <option value="PTE_Regular">PTE regular ( for study visa Canada and Australia)</option>
                                    <option value="OET">OET ( for doctors, nurses, and medical-related professionals to move to Canada )</option>
                                    <option value="A1/A2">Life Skills A1/A2 ( for spouse visa UK )</option>
                                    <option value="TOEFL">TOEFL ( USA )</option>
                                </select>
                            </li>
                            <li>
                                <input name="comments" id="comments" type="text" placeholder="Message:" />
                            </li>
                        </ul>
                        <button class="light-font" name="send" type="submit">send message Now <img alt="" src="images/arrow-white-right.png"></button>
                    </form>
                    <!--msg-form-->
                </div>
                <aside class="contact-info col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h3>Seema's Ielts Academy</h3>
                    <p>Established in 2014, Seema's IELTS Academy trains candidates on-site as well as online in Australia, UK, UAE, KSA, Italy, Sudan, Qatar, and different cities in Pakistan (Islamabad, Lahore, Multan, Hyderabad, Tando Adam, and many others). Seema's IELTS Academy is an AUTHORIZED IELTS registration center of the British Council, IDP, and AEO.
                    </p>
                    <h3>Contact</h3>
                    <ul>
                        <li><i class="fa fa-map-marker ping"></i> A-15 Dastagir Society block ‘9’ near Mukka Chowk, Karachi – Pakistan</li>
                        <li><i class="fa fa-phone"></i> +92-333-3665004</li>
                        <li><i class="fa fa-phone"></i> +92-300-2138070</li>
                        <li><i class="fa fa-envelope"></i> <a href="mailto:info@mcagency.com">seemaieltsacademy@gmail.com</a></li>
                    </ul>
                    <!--col-->
                </aside>
                <!--row-->
            </div>
            <!--container-->
        </div>
        <!--padding-outer-->
    </div>
    <?php require 'map.php' ?>
    <?php require 'footer.php' ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.12.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap/bootstrap.js"></script>

    <!-- Form Submission -->
    <script src="js/form-submission/validate.js"></script>
    <script src="js/form-submission/contact-form.js"></script>
    <!-- LAZY EFFECTS Scripts -->
    <script type="text/javascript" src="js/jquery.unveilEffects.js"></script>
    <!-- Filter gallery -->
    <script src="js/projects/isotope.js"></script>
    <!-- Custom Scripts -->
    <script src="js/custom.js"></script>
    <!-- Google Map -->
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
</body>

<!-- Mirrored from html.designingmedia.com/Master/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Jul 2024 11:15:32 GMT -->

</html>