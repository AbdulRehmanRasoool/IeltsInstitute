<?php
$current_page = basename($_SERVER['PHP_SELF']); 
?>
<div class="greyBg header-con col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="container">
    <div class="row">
      <aside class="header col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="logo pull-left"><a href="index.php"><img src="images/Image/logo.png" alt="logo" height="50px" width="200px" /></a></div>
        <nav class="navbar navbar-default pull-right">
          <div class="container-fluid">
            <div class="row"> 
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              </div>
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div class="row">
                  <ul class="nav navbar-nav">
                    <li class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>"><a href="index.php">Home</a></li>
                    <li class="<?php echo ($current_page == 'blogs.php') ? 'active' : ''; ?>"><a href="https://seemaielts.blogspot.com/" target="_blank">Blogs</a></li>
                    <li class="<?php echo ($current_page == 'writingsamples.php') ? 'active' : ''; ?>"><a href="writingsamples.php">Writing Samples</a></li>
                    <li class="<?php echo ($current_page == 'studyabroad.php') ? 'active' : ''; ?>"><a href="studyabroad.php">Study Abroad</a></li>
                    <li class="<?php echo ($current_page == 'courses.php') ? 'active' : ''; ?>"><a href="courses.php">Courses</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li class="<?php echo ($current_page == 'contactus.php') ? 'active' : ''; ?>"><a href="contactus.php">Contact</a></li>
                  </ul>
                  <aside class="social-icons pull-right">
                    <ul>
                      <li style="padding-left:10px"><a href="https://www.instagram.com/seemaieltsacademy/" target="Blank"><i class="fab fa-instagram"></i></a></li>
                      <li style="padding-left:10px"><a href="https://www.youtube.com/@seemaieltsacademy/" target="Blank" ><i class="fab fa-youtube"></i></a></li>
                      <li style="padding-left:10px"><a href="https://www.facebook.com/profile.php?id=61554331592567/" target="Blank" ><i class="fab fa-facebook"></i></a></li>
                      <li style="padding-left:10px"><a href="https://www.blogger.com/blog/posts/6286256394388843629" target="Blank"><i class="fas fa-blog"></i></a></li>
                    </ul>
                  </aside>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </aside>
    </div>
  </div>
</div>