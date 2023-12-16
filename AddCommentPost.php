<?php

// print_r($_POST);
include("admin/db.php");
session_start();

if(isset($_POST['postId']) && isset($_POST['userId']))
{
    $comment = $_POST['postCommentId'];
    $postid = $_POST['postId'];
    $userid = $_POST['userId'];
    $postData = "select * from post where `post_id`='$postid'";
    $postData1 = mysqli_query($con,$postData);
    $postDD = mysqli_fetch_array($postData1);
    $myJSON = json_decode($postDD['comments'],true);
    if(is_array($myJSON)){  
        array_push($myJSON,  array('postId'=> $postid,'userId'=>$userid,'postComment'=>$comment));
    }   
    else{
        $myJSON = array(array('postId'=> $postid,'userId'=>$userid,'postComment'=>$comment));
    } 


    $myJSON = json_encode($myJSON);
    $qu = "update post set `comments`='$myJSON' where `post_id`='$postid'";
    $qu1 = mysqli_query($con,$qu);


    $newPostData = "select * from post where `post_id`='$postid'";
    $newPostData1 = mysqli_query($con,$newPostData);
    $newpostDD = mysqli_fetch_array($newPostData1);
    $myJSON1 = json_decode($newpostDD['comments'],true);
}

?>

<?php 
if(!empty($myJSON1)){
    for($i=0; $i<sizeof($myJSON1); $i++){
    $useridd = $myJSON1[$i]['userId'];
    $ss = "select * from user where `id`='$useridd'";
    $ss1 = mysqli_query($con,$ss);
    $ss2 = mysqli_fetch_array($ss1);
     ?>
        <i href="" class="fa fa-user-circle" style="color:gray; font-size:23px; text-decoration:none; padding-top:20px;padding-left:20px"></i>
          <!-- <span style="padding-left:20px; padding-top:20px;"><?php echo $ss2['username']; ?> : </span> -->
          <span style="padding-left:20px; padding-top:20px;"><?php echo $myJSON1[$i]['postComment']; ?></span>
          <i href=""class="fa fa-heart-o" style="color:gray; font-size:12px; text-decoration:none; padding-top:20px;padding-left:230px"></i><br>
<?php } }?>