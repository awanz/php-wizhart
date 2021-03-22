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
    <?php
    include_once("includes/header.php")
    ?>
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <?php
            $slideshow = $db->getAll("slideshow");
            foreach ($slideshow as $ss) {
          ?>
          <div class="item" style="background-image: url('assets/images/slideshow/<?= $ss['images'] ?>');">
            <div class="img-fill">
                <div class="text-content">
                  <h6><?= $ss['subtitle'] ?></h6>
                  <h4><?= $ss['title'] ?></h4>
                  <p><?= $ss['description'] ?></p>
                  <a href="<?= $ss['link_button'] ?>" class="filled-button">View</a>
                </div>
            </div>
          </div>
          <?php
            }
          ?>
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="request-form">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h4>Come on, what are you waiting for ?</h4>
            <span>improve your visual content strategy with our services.</span>
          </div>
          <div class="col-md-4">
            <a href="contact.php" class="border-button">Contact Us</a>
          </div>
        </div>
      </div>
    </div>

    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our <em>Service</em></h2>
              <span>We are ready to be your partner to compete in the digital world.</span>
            </div>
          </div>
          <?php
            $services = $db->query("select * from services order by id desc limit 3");
            foreach ($services as $s) {
          ?>
          <div class="col-md-4">
            <div class="service-item">
              <img src="assets/images/services/<?= $s['images'] ?>" alt="">
              <div class="down-content">
                <h4><?= $s['title'] ?></h4>
                <div style="margin-bottom:10px;">
                </div>

                <p><?= $s['content_short'] ?></p>

                <a href="job-detail.php?id=<?= $s['id'] ?>" class="filled-button">View More</a>
              </div>
            </div>
            <br>
          </div>
          <?php } ?>
          
        </div>
      </div>
    </div>
    <?php
      $teamworkSQL = $db->getBy("abouts", 'id', 1);
      $teamwork = $teamworkSQL->fetch_object();
    ?>
    <div class="fun-facts">
      <div class="container">
        <div class="more-info-content">
          <div class="row">
            <div class="col-md-6">
              <div class="left-image">
                <img src="assets/images/abouts/<?= $teamwork->teamwork_images ?>" class="img-fluid" alt="">
              </div>
            </div>
            <div class="col-md-6 align-self-center">
              <div class="right-content">
                <?= $teamwork->teamwork ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="more-info">
      <div class="container">
        <div class="section-heading">
          <h2>Read our <em>Blog</em></h2>
          <span>Increase your Visual Content Skill with our Blog </span>
          <br>
          <div class="text-center">
            <a href="blog.php" class="filled-button">Read More</a>
          </div>
        </div>

        <!-- <div class="row" id="tabs">
          <div class="col-md-4">
            <ul>
              <li><a href='#tabs-1'>Lorem ipsum dolor sit amet, consectetur adipisicing <br> <small>John Doe &nbsp;|&nbsp; 27.07.2020 10:10</small></a></li>
              <li><a href='#tabs-2'>Mauris lobortis quam id dictum dignissim <br> <small>John Doe &nbsp;|&nbsp; 27.07.2020 10:10</small></a></li>
              <li><a href='#tabs-3'>Class aptent taciti sociosqu ad litora torquent per <br> <small>John Doe &nbsp;|&nbsp; 27.07.2020 10:10</small></a></li>
            </ul>

            <br>

            <div class="text-center">
              <a href="blog.html" class="filled-button">Read More</a>
            </div>

            <br>
          </div>

          <div class="col-md-8">
            <section class='tabs-content'>
              <article id='tabs-1'>
                <img src="assets/images/blog-image-1-940x460.jpg" alt="">
                <h4><a href="blog-details.html">Lorem ipsum dolor sit amet, consectetur adipisicing.</a></h4>
                <p>Sed ut dolor in augue cursus ultrices. Vivamus mauris turpis, auctor vel facilisis in, tincidunt vel diam. Sed vitae scelerisque orci. Nunc non magna orci. Aliquam commodo mauris ante, quis posuere nibh vestibulum sit amet.</p>
              </article>
              <article id='tabs-2'>
                <img src="assets/images/blog-image-2-940x460.jpg" alt="">
                <h4><a href="blog-details.html">Mauris lobortis quam id dictum dignissim</a></h4>
                <p>Sed ut dolor in augue cursus ultrices. Vivamus mauris turpis, auctor vel facilisis in, tincidunt vel diam. Sed vitae scelerisque orci. Nunc non magna orci. Aliquam commodo mauris ante, quis posuere nibh vestibulum sit amet</p>
              </article>
              <article id='tabs-3'>
                <img src="assets/images/blog-image-3-940x460.jpg" alt="">
                <h4><a href="blog-details.html">Class aptent taciti sociosqu ad litora torquent per</a></h4>
                <p>Mauris lobortis quam id dictum dignissim. Donec pellentesque erat dolor, cursus dapibus turpis hendrerit quis. Suspendisse at suscipit arcu. Nulla sed erat lectus. Nulla facilisi. In sit amet neque sapien. Donec scelerisque mi at gravida efficitur. Nunc lacinia a est eu malesuada. Curabitur eleifend elit sapien, sed pulvinar orci luctus eget. 
                </p>
              </article>
            </section>
          </div>
        </div> -->

        
      </div>
    </div>
    <div class="testimonials">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>What they say <em>about us</em></h2>
              <span>testimonials from our greatest clients</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-testimonials owl-carousel">
              <?php
                $testimonials = $db->getAll("testimonials");
                foreach ($testimonials as $t) {
              ?>
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4><?= $t['name'] ?></h4>
                  <span><?= $t['jobs'] ?></span>
                  <p>"<?= $t['message'] ?>"</p>
                </div>
                <img src="assets/images/testimonials/<?= $t['photo'] ?>" alt="">
              </div>
              <?php } ?>
                            
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="callback-form">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Send us<em> a Message</em></h2>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact" action="send.php?from=index.php" method="post">
                <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="border-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <br>
        <br>
        <br>
        <br>
      </div>
    </div>

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