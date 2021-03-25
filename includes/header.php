<?php 
    include_once("includes/config.php");
    include_once("control/includes/mysqlbase.php");
    $db = new MySQLBase($dbhost, $dbname, $dbuser, $dbpass); 
    $result = $db->getBy("settings", 'id', 1);
    $include = $result->fetch_object();

    $server = $_SERVER['PHP_SELF'];
    $path = pathinfo( $server );
    $locUrl = $path['basename'];
?>
<!-- Header -->
<div class="sub-header">
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-xs-12">
        <ul class="left-info">
            <li><a target="_BLANK" href="mailto:<?= $include->email ?>"><i class="fa fa-envelope"></i><?= $include->email ?></a></li>
            <li><a target="_BLANK" href="https://wa.me/<?= $include->phone ?>"><i class="fa fa-phone"></i><?= $include->phone ?></a></li>
        </ul>
        </div>
        <div class="col-md-4">
        <ul class="right-icons">
            <li><a href="<?= $include->facebook ?>"><i class="fa fa-facebook"></i></a></li>
            <li><a href="<?= $include->instagram ?>"><i class="fa fa-instagram"></i></a></li>
            <li><a href="<?= $include->linkedin ?>"><i class="fa fa-linkedin"></i></a></li>
        </ul>
        </div>
    </div>
    </div>
</div>

<header>
    <nav class="navbar navbar-expand-lg">
    <div class="container">
        <div class="mobilelogo">
            <a href="index.php">
                <img src="assets/images/wizh2.png" alt="" style="width:150px">
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item <?php if($locUrl == "index.php") {echo "active";} ?>">
            <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
            </a>
            </li>
            <li class="nav-item <?php if($locUrl == "jobs.php") {echo "active";} ?>">
            <a class="nav-link" href="jobs.php">Service</a>
            </li>
            <li class="nav-item dropdown <?php if($locUrl == "about.php" || $locUrl == "team.php" || $locUrl == "blog.php" || $locUrl == "testimonials.php" || $locUrl == "terms.php") {echo "active";} ?>">
            <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>
            
            <div class="dropdown-menu">
                <a class="dropdown-item" href="about.php">About Us</a>
                <a class="dropdown-item" href="team.php">Team</a>
                <a class="dropdown-item" href="blog.php">Blog</a>
                <a class="dropdown-item" href="testimonials.php">Testimonials</a>
                <a class="dropdown-item" href="terms.php">Terms</a>
            </div>
            </li>
            <li class="nav-item <?php if($locUrl == "contact.php") {echo "active";} ?>">
            <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
</header>