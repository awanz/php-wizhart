<?php 
    session_start();    
    if (!empty($_GET)) {
        if (!empty($_GET['message'])) {
            $status = $_GET['status'];
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
    include_once("../includes/config.php");
    $id = null;

    if (!empty($_GET)) {
        if (!empty($_GET['id'])) {
            $id = $_GET['id'];
        }
    }

    include_once("../includes/mysqlbase.php");
    $db = new MySQLBase($dbhost, $dbname, $dbuser, $dbpass);

    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        $dataArray = $_POST;

        $result = $db->update("slideshow", $dataArray, "id", $id);

        header("Location: list.php?status=".$result['status']."&message=".$result['message']);
    }else{
        $resultData = $db->getBy("slideshow", "id", $id);
        $dataEdit = null;
        if ($resultData->num_rows) {
            $dataEdit = $resultData->fetch_assoc();
        }else{
            header("Location: list.php?status=0&message=Data not found");
        }
    }    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Slideshow Add</title>
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
          <h1><i class="fa fa-dashboard"></i> Slideshow</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="#">Slideshow</a></li>
          <li class="breadcrumb-item"><a href="#">Edit</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <form action="" method="POST">
            <div class="tile">
                <?php 
                if (!empty($notif)) {
                    if ($status == 0) {
                        echo '<div class="alert alert-danger" role="alert"><center>';
                        echo $notif;
                        echo "</center></div>";
                    } 
                    if ($status == 1) {
                        echo '<div class="alert alert-primary" role="alert"><center>';
                        echo $notif;
                        echo "</center></div>";
                    } 
                }
                ?>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-group">
                            <input value="<?= $dataEdit['title'] ?>" name="title" class="form-control" type="text" placeholder="Title" required>
                        </div>
                        <div class="form-group">
                            <input value="<?= $dataEdit['subtitle'] ?>" name="subtitle" class="form-control" type="text" placeholder="Subtitle">
                        </div>
                        <div class="form-group">
                            <textarea placeholder="Description" class="form-control" name="description" id="description" rows="3" required><?= $dataEdit['description'] ?></textarea>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input value="<?= $dataEdit['link_button'] ?>" name="link_button" class="form-control" type="text" placeholder="Link Button" required>
                        </div>
                    </div>
                </div>
                <div class="tile-footer">
                    <a href="list.php" class="btn btn-danger" type="submit">Cancel</a>
                    <button class="btn btn-primary" type="submit">Edit</button>
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
  </body>
</html>