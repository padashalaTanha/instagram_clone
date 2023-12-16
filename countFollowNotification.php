<?php
include("admin/db.php");
session_start();
        $id = $_SESSION['admin']['id'];
        $qu  = "select * from user where `id`='$id'";
        $qu1 = mysqli_query($con,$qu);
        $allData = mysqli_fetch_array($qu1);
        $assocArray = json_decode($allData['followers'], true);
        if(!empty($assocArray))
        {
            echo sizeof($assocArray);
        }
        else{
            echo 0;
        }


?>