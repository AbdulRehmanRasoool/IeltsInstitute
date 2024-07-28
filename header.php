<?php
$current_page = basename($_SERVER['PHP_SELF']); 
?>
<div class="greyBg header-con col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="container">
    <div class="row">
      <aside class="header col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="logo pull-left"><a href="index.html"><img src="images/logo.png" alt="logo" /></a></div>
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
                    <li class="<?php echo ($current_page == 'writingsamples.php') ? 'active' : ''; ?>"><a href="writingsamples.php">Study Abroad</a></li>
                    <li class="<?php echo ($current_page == 'courses.php') ? 'active' : ''; ?>"><a href="writingsamples.php">Courses</a></li>
                    <li><a href="work.html">Gallery</a></li>
                    <li class="<?php echo ($current_page == 'contactus.php') ? 'active' : ''; ?>"><a href="contactus.php">Contact</a></li>
                  </ul>
                  <aside class="social-icons pull-right">
                    <ul>
                      <li><a href="#" class="fa fa-facebook"></a></li>
                      <li><a href="#" class="fa fa-twitter"></a></li>
                      <li><a href="#" class="fa fa-linkedin"></a></li>
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