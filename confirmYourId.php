<?php 
include("admin/db.php");

if(isset($_POST['myId']) && isset($_POST['yourId'])){

    $myId = $_POST['myId'];
    $yourId = $_POST['yourId'];
    $no = $_POST['no'];

     $query = "select * from user where `id`='$myId'";
    $qu1 = mysqli_query($con,$query);
    $allData = mysqli_fetch_array($qu1);

    $assocArray = json_decode($allData['followers'], true);
    $newArray = array();
    $k=0;
    if(isset($assocArray))
    {
        for($i=0; $i<sizeof($assocArray); $i++)
        {
            if($assocArray[$i]['id']==$yourId){
                $assocArray[$i]['status'] = 1;
            }
        }
    }

   
    
    
    
   
    $myJSON = json_encode($assocArray);
   
    $qq = "update user set `followers`='$myJSON' where `id`='$myId'";
    $qq1 = mysqli_query($con,$qq);
}
?>


<button class="btn btn-primary" style="font-size:9px; display:flex; " id="followingRequest" onclick="return FollowingRequest(<?php echo $myId; ?>, <?php echo $yourId;?>)">Follow Back</button>