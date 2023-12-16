<?php 
include("admin/db.php");
session_start();

if(isset($_POST['postId']))
{
    $postid = $_POST['postId'];
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
          <!-- <span style="padding-left:20px; padding-top:20px;"><?php echo $ss2['username']; ?> : </span><br> -->
          <span style="padding-left:20px; padding-top:20px;"><?php echo $myJSON1[$i]['postComment']; ?></span>
          <i href=""class="fa fa-heart-o" style="color:gray; font-size:12px; text-decoration:none; padding-top:20px;padding-left:230px"></i><br>
<?php } }?>