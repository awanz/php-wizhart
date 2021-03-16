<?php 
  session_start();
  $status = null;
  $notif = null;
  include_once("includes/config.php");
  if (!empty($_SESSION)) {
    if ($_SESSION['login'] != "masuk") {
      header("Location: index.php");
    }
  }else{
    header("Location: index.php");
  }

  if (!empty($_GET)) {
    if (!empty($_GET['status'])) {
      $status = $_GET['status'];
    }
    if (!empty($_GET['message'])) {
      $notif = $_GET['message'];
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Article Lists</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicons/favicon-16x16.png">
    <link rel="manifest" href="../assets/favicons/site.webmanifest">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">
    <?php include_once("includes/header.php"); ?>
    <?php include_once("includes/sidebar.php"); ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Article Lists</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="#">Article Lists</a></li>
        </ul>
      </div>
      <div class="row">
      <div class="col-md-12">
      
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
                  echo $notif;
                  echo "</center></div>";
                } 
              }
              
            ?>           
            <div class="tile-body">
              
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Title</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      include 'includes/mysqlbase.php';
                      $db = new MySQLBase($dbhost, $dbname, $dbuser, $dbpass, $dbcharset);
                      $result = $db->getAll("articles");
                      $no = 1;
                      foreach ($result as $r) {
                    ?>
                    <tr title="<?= $r['link'] ?>">
                      <td><?= $no ?></td>
                      <td><?= $r['title'] ?></td>
                      <td> <a href="edit.php?id=<?= $r['id'] ?>">Edit</a> - <a href="delete.php?id=<?= $r['id'] ?>">Delete</a></td>
                    </tr>
                    <?php $no++; } ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="assets/js/plugins/pace.min.js"></script>
    <!-- Data table plugin-->
    <script type="text/javascript" src="assets/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
  </body>
</html>