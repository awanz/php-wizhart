<?php 
  session_start();
  include_once("../includes/config.php");
  $status = null;
  $notif = null;

  if (!empty($_GET)) {
    if (!empty($_GET['status'])) {
      $status = $_GET['status'];
    }
    if (!empty($_GET['message'])) {
      $notif = $_GET['message'];
    }
  }

  if (!empty($_SESSION)) {
    if ($_SESSION['login'] != "masuk") {
      header("Location: ../index.php");
    }
  }else{
    header("Location: ../index.php");
  }

  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include_once("../includes/mysqlbase.php");
    $dataArray = $_POST;
    $dataArray['content_preview'] = trim(preg_replace(['/<[^>]*>/','/\s+/'],' ', $dataArray['content']));
    $db = new MySQLBase($dbhost, $dbname, $dbuser, $dbpass);
    $result = $db->insert("articles", $dataArray);

    header("Location: ../add.php?status=".$result['status']."&message=".$result['message']);
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Article Add</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">
    <?php include_once("../includes/header.php"); ?>
    <?php include_once("../includes/sidebar.php"); ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Article Add</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="#">Article Add</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <form action="" method="POST">
            <div class="tile">
                <?php 
                  if (!empty($status)) {
                    if ($status == 0) {
                      echo '<div class="alert alert-danger" role="alert"><center>';
                      echo $notif;
                      echo "</center></div>";
                    } 
                    if ($status == 1) {
                      echo '<div class="alert alert-primary" role="alert"><center>';
                      echo "Add successful";
                      echo "</center></div>";
                    } 
                  }
                  
                ?>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-group">
                            <input name="title" class="form-control" type="text" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="content" id="content" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input name="tags" class="form-control" type="text" placeholder="Tags">
                        </div>
                        <div class="form-group">
                            <input name="keywords" class="form-control" type="text" placeholder="Keywords">
                        </div>
                        <div class="form-group">
                            <input name="link" class="form-control" onblur="this.value=removeSpaces(this.value);" type="text" placeholder="Permalink">
                        </div>
                    </div>
                </div>
                <div class="tile-footer">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </div>
          </form>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="../assets/js/plugins/pace.min.js"></script>

    <script type="text/javascript" src="../assets/plugins/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');
    </script>
    <script language="javascript" type="text/javascript">
      function removeSpaces(string) {
        return string.split(' ').join('-').toLowerCase();
      }
    </script>
  </body>
</html>