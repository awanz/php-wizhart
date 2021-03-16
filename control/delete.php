<?php 
    session_start();
    include_once("includes/config.php");
    if (!empty($_SESSION)) {
        if ($_SESSION['login'] != "masuk") {
            header("Location: index.php");
        }
    }else{
        header("Location: index.php");
    }

    if (empty($_GET)) {
        header("Location: list.php");
    }else{
        include_once("includes/mysqlbase.php");
        $id = $_GET['id'];
        $db = new MySQLBase($dbhost, $dbname, $dbuser, $dbpass);
        $result = $db->getBy("articles", "id", $id);
        if ($result->num_rows) {
            $resultDelete = $db->delete("articles", "id", $id);
            if ($resultDelete) {
                header("Location: list.php?status=".$resultDelete);
            }else{
                header("Location: list.php?status=".$resultDelete);
            }
        }
        if ($result->num_rows) {
            header("Location: list.php?status=".$result->num_rows."&message=Delete Successful");
        }else{
            header("Location: list.php?status=".$result->num_rows."&message=Delete Failed");
        }
        
    }