<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Master</title>
    <link rel="icon" href="images/favicon.png" type="image/png">
    <link rel="stylesheet" href="css/all-stylesheets.css" type="text/css" />
    <!-- Include Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
.pagination a.active {
    background-color: #c13c3c !important;
    color: #fff;
    border: 1px solid #fff;
}
</style>
</head>

<body class="contact">
    <?php require 'header.php' ?>
    <div class="sub-banner-con contact-banner col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height: 100%;">
        <div class="container">
            <div class="row">
                <aside class="sub-banner text-center">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Gallery</li>
                    </ol>
                    <h1 style="margin-bottom: 80px;">Gallery us</h1>
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
$itemsPerPage = 6;

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

$offset = ($page - 1) * $itemsPerPage;

$items = [];

for ($i = 1; $i <= 76; $i++) {
    $items[] = [
        "img" => "images/Image/$i.jpg"
    ];
}

$currentItems = array_slice($items, $offset, $itemsPerPage);

$totalPages = ceil(count($items) / $itemsPerPage);
?>

<ul>
<?php foreach ($currentItems as $item): ?>
    <li class="all webdesign Branding col-lg-4 col-md-6 col-sm-6 col-xs-12">
        <figure><img src="<?php echo $item['img']; ?>" height="300px" width="300px" alt="" /></figure>
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