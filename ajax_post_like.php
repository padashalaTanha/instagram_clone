

<?php
include("admin/db.php");
session_start();

if(isset($_POST['status']) && isset($_POST['postId']))
{
    $status = $_POST['status'];
    $postid = $_POST['postId'];
    $id = $_POST['userId'];
    $postData = "select * from post where `post_id`='$postid'";
    $postData1 = mysqli_query($con,$postData);
    $postDD = mysqli_fetch_array($postData1);
    $myJSON = json_decode($postDD['like'],true);
  

    if($status == 1)
    { 
        // $postLike = array(array('id'=> $id,'status'=>1));
      

        
     
        // print_r(sizeof($myJSON));
      
       
        if(is_array($myJSON)){
            $flag = 0;
            $j='';
                for($i=0;$i<sizeof($myJSON); $i++)
                {
                    if($myJSON[$i]['id']==$id)
                    {
                        $flag=1;
                        $j=$i;
                        
                    }
                
                }
                if($flag ==1)
                {
                    $myJSON[$j]['status'] = 1;
                }
                else{
                    array_push($myJSON,  array('id'=>$id, 'status'=>1));
                }
            }
            else{
                $myJSON = array(array('id'=> $_SESSION['admin']['id'],'status'=>1));
            }
            // print_r($myJSON);

      
        $myJSON = json_encode($myJSON);
          $qu = "update post set `like`='$myJSON' where `post_id`='$postid'";
    }
    else{
                $flag=1;
                $j='';
                for($i=0;$i<sizeof($myJSON); $i++)
                {
                    if($myJSON[$i]['id']==$id)
                    {
                        $j=$i;
                        $flag=1;
                        
                    }
                
                }
                if($flag ==1)
                {
                    $myJSON[$j]['status'] = 0;
                }
                else{
                    array_push($myJSON,  array('id'=>$id, 'status'=>0));
                }
       
            // array_push($myJSON,  array('id'=>$id, 'status'=>0));
       

        $myJSON = json_encode($myJSON);
        $qu = "update post set `like`='$myJSON' where `post_id`='$postid'";
    }
    $qu1 = mysqli_query($con,$qu);

}
?>


<?php 
    if(isset($_POST['status'])){
      if($_POST['status']==0){ ?>
      
    <i class="fa fa-heart-o" style="font-size:22px;color:black; margin-top:10px;" onclick="return likePostData(<?php echo $postid; ?>,1,<?php echo $_SESSION['admin']['id']; ?>)"></i>
    
    <?php } else {  ?>
      
   
    <i class="fa fa-heart" style="font-size:22px;color:red; margin-top:10px;" onclick="return likePostData(<?php echo $postid; ?>,0,<?php echo $_SESSION['admin']['id']; ?>)"></i>
  
    
    <?php } } ?>

                  