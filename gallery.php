<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Master</title>
    <link rel="icon" href="images/favicon.png" type="image/png">
    <link rel="stylesheet" href="css/all-stylesheets.css" type="text/css" />
</head>

<body class="contact">
    <?php require 'header.php' ?>
    <div class="sub-banner-con contact-banner col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="container">
            <div class="row">
                <aside class="sub-banner text-center">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Gallery</li>
                    </ol>
                    <h1>Gallery us</h1>
                </aside>
            </div>
        </div>
    </div>
    <div class="padding-outer col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="container">
            <div class="row">
              
<div class="padding-outer portfolio-box greyBg col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="row text-center">
    <h2>beautiful &amp; useful portfolio</h2>
    <div id="gallery-content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div id="gallery-content-center">
      <?php
$itemsPerPage = 3;

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

$offset = ($page - 1) * $itemsPerPage;

$items = [
    [
        "img" => "images/projects/project-img1.jpg",
        "title" => "Lakewoods",
        "desc" => "Curabitur nulla odiog bibendum sit amet facde nl ipsum lobortis id justo donlec sollicdLorem ipsum dolor sit ad et consectetur .",
    ],
    [
        "img" => "images/projects/project-img2.jpg",
        "title" => "Lakewoods",
        "desc" => "Curabitur nulla odiog bibendum sit amet facde nl ipsum lobortis id justo donlec sollicdLorem ipsum dolor sit ad et consectetur .",
    ],
    [
        "img" => "images/projects/project-img3.jpg",
        "title" => "Lakewoods",
        "desc" => "Curabitur nulla odiog bibendum sit amet facde nl ipsum lobortis id justo donlec sollicdLorem ipsum dolor sit ad et consectetur .",
    ],
    [
        "img" => "images/projects/project-img4.jpg",
        "title" => "Lakewoods",
        "desc" => "Curabitur nulla odiog bibendum sit amet facde nl ipsum lobortis id justo donlec sollicdLorem ipsum dolor sit ad et consectetur .",
    ],
    [
        "img" => "images/projects/project-img5.jpg",
        "title" => "Lakewoods",
        "desc" => "Curabitur nulla odiog bibendum sit amet facde nl ipsum lobortis id justo donlec sollicdLorem ipsum dolor sit ad et consectetur .",
    ],
    [
        "img" => "images/projects/project-img6.jpg",
        "title" => "Lakewoods",
        "desc" => "Curabitur nulla odiog bibendum sit amet facde nl ipsum lobortis id justo donlec sollicdLorem ipsum dolor sit ad et consectetur .",
    ]
];

$currentItems = array_slice($items, $offset, $itemsPerPage);

$totalPages = ceil(count($items) / $itemsPerPage);
?>

<ul>
<?php foreach ($currentItems as $item): ?>
    <li class="all webdesign Branding col-lg-4 col-md-6 col-sm-6 col-xs-12">
        <figure><img src="<?php echo $item['img']; ?>" alt="" /></figure>
        <aside class="project-infobox red-bg pull-left text-center">
            <figure><span><img src="images/projects/project-logo.jpg" alt="" /></span></figure>
            <h3 class="bold-font"><?php echo $item['title']; ?></h3>
            <p><?php echo $item['desc']; ?></p>
            <div class="btn-primary btn1 light-font"><a href="work.html">Go to Portfolio <span class="arrow-rt"></span></a></div>
        </aside>
    </li>
<?php endforeach; ?>
</ul>
</div>
<div class="pagination">
    <?php if ($page > 1): ?>
        <a href="?page=<?php echo $page - 1; ?>">Previous</a>
    <?php endif; ?>

    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <a href="?page=<?php echo $i; ?>" <?php if ($page == $i) echo 'class="active"'; ?>><?php echo $i; ?></a>
    <?php endfor; ?>

    <?php if ($page < $totalPages): ?>
        <a href="?page=<?php echo $page + 1; ?>">Next</a>
    <?php endif; ?>
</div>

<style>
.pagination a {
    margin: 0 5px;
    padding: 5px 10px;
    border: 1px solid #ccc;
    text-decoration: none;
}

.pagination a.active {
    background-color: #007bff;
    color: #fff;
    border: 1px solid #007bff;
}
</style>

      </div>
    </div>
  </div>
</div>
            </div>
        </div>
    </div>
    <?php require 'footer.php' ?>
    <script src="js/jquery-1.12.3.min.js"></script>
    <script src="js/bootstrap/bootstrap.js"></script>

    <script src="js/form-submission/validate.js"></script>
    <script src="js/form-submission/contact-form.js"></script>
    <script type="text/javascript" src="js/jquery.unveilEffects.js"></script>
    <script src="js/projects/isotope.js"></script>
    <script src="js/custom.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
</body>
</html>