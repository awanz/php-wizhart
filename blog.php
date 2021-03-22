<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>wizhart.com | Creative Media</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <?php
      include_once("includes/header.php")
    ?>

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Read our Blog</h1>
            <span>Lorem ipsum dolor sit amet consectetur</span>
          </div>
        </div>
      </div>
    </div>

    <div class="single-services">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <section class='tabs-content'>
              <?php
                $recentBlogs = $db->query("select * from blogs order by id desc limit 3");
                foreach ($recentBlogs as $rb) {
                $usernameTemp = $db->getBy("users", 'id', $rb['user_id']);
                $username = $usernameTemp->fetch_object()->username;
              ?>
              <article id='tabs-1'>
                <img src="assets/images/blogs/<?= $rb['images'] ?>" alt="">
                <h4><a href="blog-details.html"><?= $rb['title'] ?></a></h4>
                <div style="margin-bottom:10px;">
                  <span><?= $username ?> &nbsp;|&nbsp; <?= $rb['created_at'] ?></span>
                </div>
                <p><?= $rb['content_preview'] ?></p>
                <br>
                <div>
                  <a href="blog-details.php?id=<?= $rb['id'] ?>" class="filled-button">Continue Reading</a>
                </div>
              </article>
              <br><br>
              <?php } ?>

              
            </section>
          </div>

          <div class="col-md-4">
              <!-- <h4 class="h4">Search</h4>
              
              <form id="search_form" name="gs" method="GET" action="#">
                <input type="text" name="q" class="form-control form-control-lg" placeholder="type to search..." autocomplete="on">
              </form>

              <br>
              <br> -->

              <h4 class="h4">Recent posts</h4>

              <ul>
                  <?php
                    $recentBlogs = $db->query("select * from blogs order by id desc limit 3");
                    foreach ($recentBlogs as $rb) {
                    $usernameTemp = $db->getBy("users", 'id', $rb['user_id']);
                    $username = $usernameTemp->fetch_object()->username;
                  ?>
                  <li>
                      <h5 style="margin-bottom:10px;"><a href="blog-details.php?id=<?= $rb['id'] ?>"><?= $rb['title'] ?></a></h5>
                      <small><i class="fa fa-user"></i> <?= $username ?> &nbsp;|&nbsp; <i class="fa fa-calendar"></i> <?= $rb['created_at'] ?></small>
                  </li>

                  <li><br></li>

                  <?php } ?>
              </ul>
          </div>
        </div>
      </div>
    </div>

    <br>  
    <br>  
    <br>  
    <br>  

    <!-- Footer Starts Here -->
    <?php
      include_once("includes/footer.php")
    ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>