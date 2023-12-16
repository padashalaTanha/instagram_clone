<?php

include("admin/db.php");
if(isset($_POST['myId']) && isset($_POST['yourId']))
{
    $myId = $_POST['myId'];
    $yourId = $_POST['yourId'];

    $qu  = "select * from user where `id`='$yourId'";
    $qu1 = mysqli_query($con,$qu);
    $allData = mysqli_fetch_array($qu1);
    $assocArray = json_decode($allData['followers'], true);
    
    if(!empty($assocArray)){
        array_push($assocArray,  array('id'=>$myId, 'status'=>0));
    }
    else{
        $assocArray = array(array('id'=> $myId,'status'=>0));
    }
    
    
   
    $myJSON = json_encode($assocArray);
   
    $qq = "update user set `followers`='$myJSON' where `id`='$yourId'";              // database ma followers no data lavano che //
    $qq1 = mysqli_query($con,$qq);

}


?>
<button class="side-menu__suggestion-button" onclick="return followRequestRemove(<?php echo $myId; ?>, <?php echo $yourId; ?>)">Request</button>