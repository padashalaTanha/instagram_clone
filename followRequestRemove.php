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
    $newArray = array();
    $k=0;
    if(isset($assocArray))
    {
        for($i=0; $i<sizeof($assocArray); $i++)
        {
            if($assocArray[$i]['id']!=$myId){

                $newArray[$k] = $assocArray[$i];
                $k++;
            }
        }
    }

   
    
    
    
   
    $myJSON = json_encode($newArray);
   
    $qq = "update user set `followers`='$myJSON' where `id`='$yourId'";
    $qq1 = mysqli_query($con,$qq);
    
}


?>
 <button class="side-menu__suggestion-button" onclick="return followRequest(<?php echo $myId; ?>, <?php echo $yourId; ?>)">Follow</button>
