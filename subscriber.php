<?php 
    require 'connection.php';

    function sanitizeInput($data){
        return htmlspecialchars(stripslashes(trim($data)));
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = sanitizeInput($_POST["email"]);

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "<script>
                    alert('Invalid email address'); 
                  </script>";
        }
        else{
            $stmt = $conn->prepare("INSERT INTO subscribers (Email,IsActive,IsDeleted) VALUES (?,true,false)");
            $stmt->bind_param("s", $email);

            if ($stmt->execute()) {
                echo "<script>
                        alert('Subscribed successfully!');
                        window.location.href = 'index.php'; 
                    </script>";
            } else {
                echo "<script>
                        alert('Subscription failed. Please try again later.');
                        window.location.href = 'index.php'; 
                    </script>";
            }
            $stmt->close();
        }
        $conn->close();
    }
?>


<!-- Start Newsletter Area -->
<div class="newsletter-area pb-75">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="newsletter-content">
                            <div class="title">
                                <h2>Are You Ready To Build Up Your Career </h2>
                                <p>We are proud of our alumni network, which spans across industries and continents. Our graduates are equipped with the skills, values knowledge, anda  to excel in their chosen fields and make positive impact on society.</p>
                            </div>
                            <ul class="list-unstyled ps-0 mb-0 subscribe-btn">
                                <li class="d-inline-block">
                                    <a class="text-decoration-none default-btn" href="application.html">
                                        Application Form
                                        <i class="flaticon-right-arrow"></i>
                                    </a>
                                </li>
                                <li class="d-inline-block">
                                    <a class="text-decoration-none arrow-btn" href="apply.html">
                                        How To Apply
                                        <i class="flaticon-right-arrow"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="newsletter-form">
                            <div class="title">
                                <h3>Subscribe To Our Newsletter</h3>
                                <p>Stay informed about the latest developments, breakthroughs, and trends in our industry. Our team of experts scours the web to bring you the most relevant and engaging news articles.</p>
                            </div>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Your email" required>
                                </div>
                                <button type="submit" class="text-decoration-none border-0 default-btn">
                                    Subscribe Now
                                    <i class="flaticon-right-arrow"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Newsletter Area -->