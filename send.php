<?php 
    if (empty($_GET)) {
        header("Location: ".$_GET['from']);
    }else{
        if (!empty($_GET['from'])) {
            include_once("includes/config.php");
            include_once("control/includes/mysqlbase.php");
            $id = $_GET['from'];
            $db = new MySQLBase($dbhost, $dbname, $dbuser, $dbpass);

            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $dataArray = $_POST;
                $result = $db->insert("messages", $dataArray);
                header("Location: ".$_GET['from']);
            }else{
                header("Location: ".$_GET['from']);
            }
            
        } else {
            header("Location: ".$_GET['from']);
        }
    }