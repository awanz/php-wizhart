<?php 
    session_start();
    include_once("../includes/config.php");
    $status = null;
    $notif = null;

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
    include_once("../includes/mysqlbase.php");
    $db = new MySQLBase($dbhost, $dbname, $dbuser, $dbpass);    
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $dataArray = $_POST;
        $result = $db->update("settings", $dataArray, 'id', 1);

        header("Location: index.php?status=".$result['status']."&message=".$result['message']);
    }else{
        $result = $db->getBy("settings", 'id', 1);
        $dataForm = $result->fetch_object();
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Settings</title>
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
          <h1><i class="fa fa-cogs"></i> Settings</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="#">Settings</a></li>
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
                    <div class="col-lg-12">
                        <div class="form-group">
                          <label for="title">Title <small style="color: red;">*</small></label>
                          <input value="<?= $dataForm->title ?>" name="title" class="form-control" type="text" placeholder="Title" required>
                        </div>
                        <div class="form-group">
                          <label for="description">Description</label>
                          <textarea placeholder="Description" class="form-control" name="description" id="description" rows="3"><?= $dataForm->description ?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="email">Email <small style="color: red;">*</small></label>
                          <input value="<?= $dataForm->email ?>" name="email" class="form-control" type="text" placeholder="Email">
                        </div>
                        <div class="form-group">
                          <label for="email_text">Email Text</label>
                          <textarea placeholder="Email Text" class="form-control" name="email_text" id="email_text" rows="3"><?= $dataForm->email_text ?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="phone">Phone</label>
                          <input value="<?= $dataForm->phone ?>" name="phone" class="form-control" type="text" placeholder="Phone">
                        </div>
                        <div class="form-group">
                          <label for="phone_text">Phone Text</label>
                          <textarea placeholder="Phone Text" class="form-control" name="phone_text" id="phone_text" rows="3"><?= $dataForm->phone_text ?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="location">Location</label>
                          <input value="<?= $dataForm->location ?>" name="location" class="form-control" type="text" placeholder="Location">
                        </div>
                        <div class="form-group">
                          <label for="location_text">Location Text</label>
                          <textarea placeholder="Location Text" class="form-control" name="location_text" id="location_text" rows="3"><?= $dataForm->location_text ?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="maps">Maps</label>
                          <textarea placeholder="Maps" class="form-control" name="maps" id="maps" rows="3"><?= $dataForm->maps ?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="facebook">Facebook</label>
                          <input value="<?= $dataForm->facebook ?>" name="facebook" class="form-control" type="text" placeholder="Facebook">
                        </div>
                        <div class="form-group">
                          <label for="instagram">Instagram</label>
                          <input value="<?= $dataForm->instagram ?>" name="instagram" class="form-control" type="text" placeholder="Instagram">
                        </div>
                        <div class="form-group">
                          <label for="linkedin">Linkedin</label>
                          <input value="<?= $dataForm->linkedin ?>" name="linkedin" class="form-control" type="text" placeholder="Linkedin">
                        </div>
                    </div>
                </div>
                <div class="tile-footer">
                    <button class="btn btn-primary" type="submit">Update</button>
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

    
  </body>
</html>