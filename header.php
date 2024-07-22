<?php
    $current_page = basename($_SERVER['PHP_SELF']);
 ?>

  <!-- Header Start -->
  <header class="site-header">
     <!-- Top start -->
     <div class="header-top">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-lg-6">
                     <div class="top-contact">
                         <div class="top-location">
                             <div class="top-location-icon">
                                 <i class="fa fa-map-marker" aria-hidden="true"></i>
                             </div>
                             <div class="top-location-content">
                                 <a href="javascript:void(0);" title="location">
                                     <p>A-15 Dastagir Society block 9</p>
                                 </a>
                             </div>
                         </div>
                         <div class="top-mail">
                             <div class="top-mail-icon">
                                 <i class="fa fa-envelope" aria-hidden="true"></i>
                             </div>
                             <div class="top-mail-content">
                                 <a href="javascript:void(0);" title="mail">
                                     <p>seemaieltsacademy@gmail.com
                                     </p>
                                 </a>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="Social-midea">
                         <a href="javascript:void(0);" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                         <a href="javascript:void(0);" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                         <a href="javascript:void(0);" title="Whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                         <a href="javascript:void(0);" title="Youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                         <a href="javascript:void(0);" title="Linkdin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Top End -->
     <!--Navbar Start  -->
     <div class="header-bottom">
         <div class="container">
             <div class="row align-items-center" style="justify-content: space-around;">
                 <div class="col-lg-3">
                     <!-- Sit Logo Start -->
                     <div class="site-branding">
                         <a href="index.html" title="Educater">
                             <img src="assets/images/logo.png" alt="Logo">
                         </a>
                     </div>
                     <!-- Sit Logo End -->
                 </div>
                 <div class="col-lg-9">
                     <div class="header-menu">
                         <nav class="main-navigation">
                             <button class="toggle-button">
                                 <span></span>
                                 <span class="toggle-width"></span>
                                 <span></span>
                             </button>
                             <ul class="menu">
                                 <li class="<?php echo($current_page == 'index.php') ? 'active' : '' ?>"><a href="index.php">Home</a></li>
                                 <li class="<?php echo($current_page == 'blog.php') ? 'active' : '' ?>"><a href="blog.php">Blogs</a></li>
                                 <li class="<?php echo($current_page == 'course.php') ? 'active' : '' ?>"><a href="course.php">Courses</a></li>
                                 <li class="<?php echo($current_page == 'ieltswritingsample.php') ? 'active' : '' ?>"><a href="ieltswritingsample.php">Ielts Writing Samples</a></li>
                                 <li class="sub-items <?php echo($current_page == 'studyinuk.php' || $current_page == 'studyinusa.php' || $current_page == 'studyincanada.php' || $current_page == 'germany.php') || $current_page == 'studyinitaly.php' || $current_page == 'studyinsweden.php' || $current_page == 'studyinaustralia.php' ? 'active' : '' ?>">
                                 <a href="javascript:void(0);" title="StudyAbroad">Study Abroad</a>
                                     <ul class="sub-menu">
                                         <li ><a href="studyinuk.php" title="StudyAbroad">Study In UK</a></li>
                                         <li><a href="studyincanada.php" title="StudyAbroad">Study In Canada</a></li>
                                         <li><a href="studyinaustralia.php" title="StudyAbroad">Study In Australia</a></li>
                                         <li><a href="studyinusa.php" title="StudyAbroad">Study In America</a></li>
                                         <li><a href="studyingermany.php" title="StudyAbroad">Study In Germany</a></li>
                                         <li><a href="studyinitaly.php" title="StudyAbroad">Study In Italy</a></li>
                                         <li><a href="studyinsweden.php" title="StudyAbroad">Study In Sweden</a></li>
                                     </ul>
                                </li>
                                 <li class="<?php echo($current_page == 'gallery.php') ? 'active' : '' ?>"><a href="gallery.php">Gallery</a></li>
                                 <li class="<?php echo($current_page == 'contact-us.php') ? 'active' : '' ?>"><a href="contact-us.php">Contact Us</a></li>
                             </ul>
                         </nav>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!--Navbar End  -->
 </header>
 <!-- Header End -->