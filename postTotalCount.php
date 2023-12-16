<?php

include("admin/db.php");
session_start();

$postid= $_POST['postId'];
$postData = "select * from post where `post_id`='$postid'";
$postData1 = mysqli_query($con,$postData);
$postDD = mysqli_fetch_array($postData1);
$myJSON = json_decode($postDD['like'],true);
if(is_array($myJSON)){ 
    $total = 0;
      for($i=0; $i<count($myJSON); $i++){
        if($myJSON[$i]['status']==1){
              $total++;
        }
      }

    }

    echo $total." ozthers";

?>