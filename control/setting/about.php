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
        if($_FILES['file']['name'] == "") {
            $result = $db->update("abouts", $dataArray, 'id', 1);
        }else{
            // Upload
            $error = null;
            $file_max_weight = 1900000; 
            $ok_ext = array('jpg','png','gif','jpeg'); 
            $destination = '../../assets/images/abouts/';
            
            $file = $_FILES['file'];
            $filename = explode(".", $file["name"]); 
            $file_name = $file['name']; // file original name
            $file_name_no_ext = isset($filename[0]) ? $filename[0] : null; // File name without the extension
            $file_extension = $filename[count($filename)-1];
            $file_weight = $file['size'];
            $file_type = $file['type'];

            // If there is no error
            if( $file['error'] == 0 ){
                // mengecek apakah extensi file sama dengaan keinginan
                if( in_array($file_extension, $ok_ext)):
                    // mengecek ukuran file
                    if( $file_weight <= $file_max_weight ):
                            // mengubah nama file, dan di encript dengan md5
                            $fileNewName = md5( $file_name_no_ext[0].microtime() ).'.'.$file_extension ;
                            // and move it to the destination folder
                            if( move_uploaded_file($file['tmp_name'], $destination.$fileNewName) ):
                            $error = "sukses";
                            else:
                            $error = "Upload Gagal";
                            endif;
                    else:
                    $error = "File terlalu besar";
                    endif;
                else:
                    $error = "Extensi file tidak didukung";
                endif;
            }
            // End Upload
            if ($error == "sukses") {
                $dataArray['teamwork_images'] = $fileNewName;
                $result = $db->update("abouts", $dataArray, 'id', 1);
                if ($result['status'] == 0) {
                  header("Location: about.php?status=".$result['status']."&message=".$result['message']);
                }else{
                  header("Location: about.php?status=".$result['status']."&message=".$result['message']);
                }
            }else{
                header("Location: about.php?status=0&message=".$error);
            }
        }
        

        header("Location: about.php?status=".$result['status']."&message=".$result['message']);
    }else{
        $result = $db->getBy("abouts", 'id', 1);
        $dataForm = $result->fetch_object();
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>About</title>
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
            <h1><i class="fa fa-id-card"></i> About</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="#">About</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
            <form action="" method="POST" enctype="multipart/form-data">
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
                    <h1>Landing Page</h1>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="file">Landing Page Images</label><br>
                                <img src="../../assets/images/abouts/<?= $dataForm->teamwork_images ?>" alt="" width="250px"><br><br>
                                <input type="file" name="file" id="file">
                            </div>
                            <div class="form-group">
                                <label for="teamwork">Description</label>
                                <textarea placeholder="Description" class="form-control" name="teamwork" id="teamwork" rows="3"><?= $dataForm->teamwork ?></textarea>
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
        <div class="row">
            <div class="col-md-12">
            <form action="" method="POST">
                <div class="tile">
                    <h1> Page</h1>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="about_white">About White</label>
                                <textarea placeholder="About White" class="form-control" name="about_white" id="about_white" rows="3"><?= $dataForm->about_white ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="about_black">About Black</label>
                                <textarea placeholder="About Black" class="form-control" name="about_black" id="about_black" rows="3"><?= $dataForm->about_black ?></textarea>
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
    <script type="text/javascript" src="../assets/plugins/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('teamwork');
        CKEDITOR.replace('about_white');
        CKEDITOR.replace('about_black');
    </script>
    
  </body>
</html>