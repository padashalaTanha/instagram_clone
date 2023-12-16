  <?php  include('insta_header.php'); ?>

<?php
if(isset($_POST["uplod"]))
{
   $caption = $_POST['caption'];
   $image = $_FILES['file']['name'];
  move_uploaded_file($_FILES['file']['tmp_name'],"postimages/".$image);
  

  $query = "insert into post (`caption`,`postImage`)values('$caption','$image')";
  $qu = mysqli_query($con,$query);
}

$view = "select * from post";
$qu = mysqli_query($con,$view);

date_default_timezone_set('Asia/Kolkata');
$date = date('d/m/Y');
$time = date("h:i:");

if(isset($_POST['submit'])){
   $name = $_POST['name'];
   $email = $_POST['email'];
   $pass - $_POST['pass'];

   $quey = "insert into set (`caption`,`name`,`email`,`pass`)values('name','email')";
}

?>
   
   <main class="main-container">
      <section class="content-container">
        <div class="content">
          <div class="stories">
            <button class="stories__left-button">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path
                  fill="#fff"
                  d="M256 504C119 504 8 393 8 256S119 8 256 8s248 111 248 248-111 248-248 248zM142.1 273l135.5 135.5c9.4 9.4 24.6 9.4 33.9 0l17-17c9.4-9.4 9.4-24.6 0-33.9L226.9 256l101.6-101.6c9.4-9.4 9.4-24.6 0-33.9l-17-17c-9.4-9.4-24.6-9.4-33.9 0L142.1 239c-9.4 9.4-9.4 24.6 0 34z"
                ></path>
              </svg>
            </button>
            <div class="stories__content">
              <button class="story story--has-story">
                <div class="story__avatar">
                  <div class="story__border">
                    <svg
                      width="64"
                      height="64"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle r="31" cy="32" cx="32" />
                      <defs>
                        <linearGradient
                          y2="0"
                          x2="1"
                          y1="1"
                          x1="0"
                          id="--story-gradient"
                        >
                          <stop offset="0" stop-color="#f09433" />
                          <stop offset="0.25" stop-color="#e6683c" />
                          <stop offset="0.5" stop-color="#dc2743" />
                          <stop offset="0.75" stop-color="#cc2366" />
                          <stop offset="1" stop-color="#bc1888" />
                        </linearGradient>
                      </defs>
                    </svg>
                  </div>
                  <div class="story__picture">
                    <img src="assets/default-user.png" alt="User Picture" />
                  </div>
                </div>
                <span class="story__user">usernick1</span>
              </button>
              <button class="story story--has-story">
                <div class="story__avatar">
                  <div class="story__border">
                    <svg
                      width="64"
                      height="64"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle r="31" cy="32" cx="32" />
                    </svg>
                  </div>
                  <div class="story__picture">
                    <img src="assets/default-user.png" alt="User Picture" />
                  </div>
                </div>
                <span class="story__user">usernick2</span>
              </button>
              <button class="story story--has-story">
                <div class="story__avatar">
                  <div class="story__border">
                   
                  </div>
                  <div class="story__picture">
                    <img src="assets/default-user.png" alt="User Picture" />
                  </div>
                </div>
                <span class="story__user">usernick3</span>
              </button>
              <button class="story">
                <div class="story__avatar">
                  <div class="story__border">
                    <svg
                      width="64"
                      height="64"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle r="31" cy="32" cx="32" />
                    </svg>
                  </div>
                  <div class="story__picture">
                    <img src="assets/default-user.png" alt="User Picture" />
                  </div>
                </div>
                <span class="story__user">usernick4</span>
              </button>
              <button class="story">
                <div class="story__avatar">
                  <div class="story__border">
                    <svg
                      width="64"
                      height="64"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle r="31" cy="32" cx="32" />
                    </svg>
                  </div>
                  <div class="story__picture">
                    <img src="assets/default-user.png" alt="User Picture" />
                  </div>
                </div>
                <span class="story__user">usernick5</span>
              </button>
              <button class="story">
                <div class="story__avatar">
                  <div class="story__border">
                    <svg
                      width="64"
                      height="64"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle r="31" cy="32" cx="32" />
                    </svg>
                  </div>
                  <div class="story__picture">
                    <img src="assets/default-user.png" alt="User Picture" />
                  </div>
                </div>
                <span class="story__user">usernick6</span>
              </button>
              <button class="story">
                <div class="story__avatar">
                  <div class="story__border">
                    <svg
                      width="64"
                      height="64"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle r="31" cy="32" cx="32" />
                    </svg>
                  </div>
                  <div class="story__picture">
                    <img src="assets/default-user.png" alt="User Picture" />
                  </div>
                </div>
                <span class="story__user">usernick7</span>
              </button>
              <button class="story">
                <div class="story__avatar">
                  <div class="story__border">
                    <svg
                      width="64"
                      height="64"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle r="31" cy="32" cx="32" />
                    </svg>
                  </div>
                  <div class="story__picture">
                    <img src="assets/default-user.png" alt="User Picture" />
                  </div>
                </div>
                <span class="story__user">usernick8</span>
              </button>
              <button class="story">
                <div class="story__avatar">
                  <div class="story__border">
                    <svg
                      width="64"
                      height="64"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle r="31" cy="32" cx="32" />
                    </svg>
                  </div>
                  <div class="story__picture">
                    <img src="assets/default-user.png" alt="User Picture" />
                  </div>
                </div>
                <span class="story__user">usernick9</span>
              </button>
              <button class="story">
                <div class="story__avatar">
                  <div class="story__border">
                    <svg
                      width="64"
                      height="64"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle r="31" cy="32" cx="32" />
                    </svg>
                  </div>
                  <div class="story__picture">
                    <img src="assets/default-user.png" alt="User Picture" />
                  </div>
                </div>
                <span class="story__user">usernick10</span>
              </button>
              <button class="story">
                <div class="story__avatar">
                  <div class="story__border">
                    <svg
                      width="64"
                      height="64"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle r="31" cy="32" cx="32" />
                    </svg>
                  </div>
                  <div class="story__picture">
                    <img src="assets/default-user.png" alt="User Picture" />
                  </div>
                </div>
                <span class="story__user">usernick11</span>
              </button>
              <button class="story">
                <div class="story__avatar">
                  <div class="story__border">
                    <svg
                      width="64"
                      height="64"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle r="31" cy="32" cx="32" />
                    </svg>
                  </div>
                  <div class="story__picture">
                    <img src="assets/default-user.png" alt="User Picture" />
                  </div>
                </div>
                <span class="story__user">usernick12</span>
              </button>
              <button class="story">
                <div class="story__avatar">
                  <div class="story__border">
                    <svg
                      width="64"
                      height="64"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle r="31" cy="32" cx="32" />
                    </svg>
                  </div>
                  <div class="story__picture">
                    <img src="assets/default-user.png" alt="User Picture" />
                  </div>
                </div>
                <span class="story__user">usernick13</span>
              </button>
              <button class="story">
                <div class="story__avatar">
                  <div class="story__border">
                    <svg
                      width="64"
                      height="64"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle r="31" cy="32" cx="32" />
                    </svg>
                  </div>
                  <div class="story__picture">
                    <img src="assets/default-user.png" alt="User Picture" />
                  </div>
                </div>
                <span class="story__user">usernick14</span>
              </button>
              <button class="story">
                <div class="story__avatar">
                  <div class="story__border">
                    <svg
                      width="64"
                      height="64"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle r="31" cy="32" cx="32" />
                    </svg>
                  </div>
                  <div class="story__picture">
                    <img src="assets/default-user.png" alt="User Picture" />
                  </div>
                </div>
                <span class="story__user">usernick15</span>
              </button>
            </div>
            <button class="stories__right-button">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path
                  fill="#fff"
                  d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm113.9 231L234.4 103.5c-9.4-9.4-24.6-9.4-33.9 0l-17 17c-9.4 9.4-9.4 24.6 0 33.9L285.1 256 183.5 357.6c-9.4 9.4-9.4 24.6 0 33.9l17 17c9.4 9.4 24.6 9.4 33.9 0L369.9 273c9.4-9.4 9.4-24.6 0-34z"
                ></path>
              </svg>
            </button>
          </div>

          <?php  while($qu2 = mysqli_fetch_array($qu)) { 

                $myJSON = json_decode($qu2['like'],true);
              
                
                         
            ?>
          <div class="posts">
            <article class="post">
              <div class="post__header">
                <div class="post__profile">
                  <a
                    href="https://github.com/leocosta1"
                    target="_blank"
                    class="post__avatar"
                  >
                    <img src="assets/default-user.png" alt="User Picture" />
                  </a>
                  <a
                    href="https://github.com/leocosta1"
                    target="_blank"
                    class="post__user"
                    ></a
                  >
                </div>

                <button class="post__more-options">
                  <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle
                      cx="6.5"
                      cy="11.5"
                      r="1.5"
                      fill="var(--text-dark)"
                    />
                    <circle cx="12" cy="11.5" r="1.5" fill="var(--text-dark)" />
                    <circle
                      cx="17.5"
                      cy="11.5"
                      r="1.5"
                      fill="var(--text-dark)"
                    />
                  </svg>
                </button>
              </div>

              <div class="post__content">
                <div class="post__medias">
                  <img
                    class="post__media"
                    src="postimages/<?php echo $qu2['postImage']; ?>"
                    alt="Post Content"
                  />
                </div>
              </div>

              <div class="post__footer">
                <div class="post__buttons">
                  <!-- Like -->
                  <div id="likePost<?php echo $qu2['post_id']; ?>">
                    <?php 
                    if(!empty($qu2['like'])){

                      $mId = $_SESSION['admin']['id'];
                      $flag = 0;
                      if(!empty($myJSON))
                      {
                      foreach($myJSON as $v)
                      {
                        if($v['id']==$mId && $v['status']==1)
                        {
                          $flag =1;
                          break;
                        }

                      }
                      if($flag==1) { ?>
                      
                        <span class="fa fa-heart" style="font-size:22px;color:red; margin-top:10px;"  onclick="return likePostData(<?php echo $qu2['post_id']; ?>,0,<?php echo $_SESSION['admin']['id']; ?>)"></span>
                   
                   <?php } else {  ?>
                   <span class="fa fa-heart-o" style="font-size:22px;color:black; margin-top:10px;" onclick="return likePostData(<?php echo $qu2['post_id']; ?>,1,<?php echo $_SESSION['admin']['id']; ?>)"></span>
                   <?php } } }  else { ?>
                    <span class="fa fa-heart-o" style="font-size:22px;color:black; margin-top:10px;" onclick="return likePostData(<?php echo $qu2['post_id']; ?>,1,<?php echo $_SESSION['admin']['id']; ?>)"></span>

                    <?php } ?>
                      
                    

                     

                  </div>
                  
                  <button class="post__button">
                  <a type="button" onclick="return setPostId(<?php echo $qu2['post_id']; ?>)" class="fa fa-comment-o" data-bs-toggle="modal" data-bs-target="#commentModal" data-bs-whatever="@mdo" style="font-weight:bold; text-decoration:none; font-size:23px; margin-left:10px; color:black;"></a>
                    <!-- <svg
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="red"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M21.2959 20.8165L20.2351 16.8602C20.1743 16.6385 20.2047 16.3994 20.309 16.1907C21.2351 14.3342 21.5438 12.117 20.9742 9.80402C20.2003 6.67374 17.757 4.16081 14.6354 3.33042C13.7833 3.10869 12.9442 3 12.1312 3C6.29665 3 1.74035 8.47365 3.31418 14.5647C4.04458 17.3819 7.05314 20.2992 9.88344 20.9861C10.6486 21.173 11.4008 21.26 12.1312 21.26C13.7006 21.26 15.1701 20.8557 16.4614 20.1601C16.6049 20.0818 16.7657 20.0383 16.9222 20.0383C17.0005 20.0383 17.0787 20.047 17.157 20.0688L21.009 21.0991C21.0307 21.1035 21.0525 21.1078 21.0699 21.1078C21.2177 21.1078 21.3351 20.9687 21.2959 20.8165ZM19.0178 17.1863L19.6178 19.4253L17.4831 18.8558C17.3005 18.8079 17.1135 18.7819 16.9222 18.7819C16.557 18.7819 16.1875 18.8775 15.8571 19.0558C14.6963 19.6818 13.4441 19.9992 12.1312 19.9992C11.4834 19.9992 10.8269 19.9166 10.1791 19.7601C7.78354 19.1775 5.14453 16.6037 4.53586 14.2473C3.90111 11.7865 4.40109 9.26057 5.90536 7.31719C7.40964 5.3738 9.6791 4.26081 12.1312 4.26081C12.8529 4.26081 13.5876 4.35646 14.3137 4.5521C16.9961 5.26511 19.0786 7.39544 19.7525 10.1084C20.2264 12.0213 20.0308 13.9299 19.183 15.6298C18.9395 16.1168 18.8787 16.6689 19.0178 17.1863Z"
                        fill="var(--text-dark)"
                        stroke="var(--text-dark)"
                        stroke-width="0.7"
                      />
                    </svg> -->
                  </button>
                  <button class="post__button">
                    <svg
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M22.8555 3.44542C22.6978 3.16703 22.3962 3 22.0714 3L2.91369 3.01392C2.52859 3.01392 2.19453 3.25055 2.05997 3.60781C1.96254 3.86764 1.98574 4.14603 2.11565 4.37338C2.16669 4.45689 2.23165 4.53577 2.31052 4.60537L9.69243 10.9712L11.4927 20.5338C11.5623 20.9096 11.8499 21.188 12.2304 21.2483C12.6062 21.3086 12.9774 21.1323 13.1723 20.8029L22.8509 4.35018C23.0179 4.06715 23.0179 3.72381 22.8555 3.44542ZM4.21748 4.39194H19.8164L10.4255 9.75089L4.21748 4.39194ZM12.6248 18.9841L11.1122 10.948L20.5171 5.58436L12.6248 18.9841Z"
                        fill="var(--text-dark)"
                        stroke="var(--text-dark)"
                        stroke-width="0.3"
                      />
                    </svg>
                  </button>

                  <div class="post__indicators"></div>

                  <button class="post__button post__button--align-right">
                    <svg
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M19.875 2H4.125C3.50625 2 3 2.44939 3 3.00481V22.4648C3 23.0202 3.36563 23.1616 3.82125 22.7728L11.5444 16.1986C11.7244 16.0471 12.0225 16.0471 12.2025 16.1936L20.1731 22.7879C20.6287 23.1666 21 23.0202 21 22.4648V3.00481C21 2.44939 20.4994 2 19.875 2ZM19.3125 20.0209L13.3444 15.0827C12.9281 14.7394 12.405 14.5677 11.8763 14.5677C11.3363 14.5677 10.8019 14.7444 10.3856 15.0979L4.6875 19.9502V3.51479H19.3125V20.0209Z"
                        fill="var(--text-dark)"
                        stroke="var(--text-dark)"
                        stroke-width="0.7"
                      />
                    </svg>
                  </button>
                </div>

                <div class="post__infos">
                  <div class="post__likes">
                    <a href="#" class="post__likes-avatar">
                      <img src="assets/default-user.png" alt="User Picture" />
                    </a>
                    <?php  if(is_array($myJSON)){ 
                              $total = 0;
                                for($i=0; $i<count($myJSON); $i++){
                                  if($myJSON[$i]['status']==1){
                                        $total++;
                                  }
                                }
                              }
                    ?>
                    <span
                      >Liked by
                      <a class="post__name--underline" href="#">
                        <?php  if(is_array($myJSON)){ 
                              $statusRecord = [];
                              $j=0;
                               for($i=0; $i<count($myJSON); $i++)
                               {
                                   if($myJSON[$i]['status']==1)
                                   {
                                      $statusRecord[$j] = $myJSON[$i]['id'];
                                      $j++; 
                                   }
                               }
                               if(is_array($statusRecord)){
                                 $id = @$statusRecord[count($statusRecord)-1];
                                 $qq = "select * from user where `id`='$id'";
                                 $qq1  = mysqli_query($con,$qq);
                                 $qq2 = mysqli_fetch_array($qq1);
                                 echo @$qq2['username'];

                               }
                              }
                          
                          ?>
                      </a> and
                      <?php if($total>1){ ?>
                        <a href="#" id="output<?php echo $qu2['post_id']; ?>"><?php echo @$total-1; ?> others</a>
                      <?php } ?>
                    </span>
                  </div>

                  <div class="post__description">
                    <span>
                      <a
                        class="post__name--underline"
                        href="https://github.com/leocosta1"
                        target="_blank"
                        >leocosta1</a
                      >
                     <?php echo $qu2['caption']; ?>
                    </span>
                  </div>

                  <span class="post__date-time"><?php echo $date; ?> :  <?php echo $time; ?></span>tanha
                </div>
              </div>
            </article>
          </div>
          <?php  }?>
        </div>

        <section class="side-menu">
          <div class="side-menu__user-profile">
            <a
              href="https://github.com/leocosta1"
              target="_blank"
              class="side-menu__user-avatar"
            >
              <img src="assets/default-user.png" alt="User Picture" />
            </a>
            <div class="side-menu__user-info">
              <a href="https://github.com/leocosta1" target="_blank"
                >leocosta1</a
              >
              <span>Leonardo Costa</span>
            </div>
            <button class="side-menu__user-button">Switch</button>
          </div>

          <div class="side-menu__suggestions-section">
            <div class="side-menu__suggestions-header">
              <h2>Suggestions for You</h2>
              <button>See All</button>
            </div>

            <?php 
             $id = $_SESSION['admin']['id'];
             // print_r($_SESSION['admin']);
              $data = "select * from user where `id`!='$id'";
             
             $qu1 = mysqli_query($con,$data);
            while($qu2 = mysqli_fetch_array($qu1)) { ?>
            <div class="side-menu__suggestions-content">
              <div class="side-menu__suggestion">
                <a href="#" class="side-menu__suggestion-avatar">
                  <img src="assets/default-user.png" alt="User Picture" />
                </a>
                <div class="side-menu__suggestion-info">
                  <a href="#"><?php echo $qu2['username']; ?></a>
                  <span>Followed by user1, user2 and 9 others</span>
                </div>
                <span id="followRequest<?php echo $qu2['id']; ?>">
                <?php 
                $flag = 1;
                $assocArray = json_decode($qu2['followers'], true);
                // print_r($assocArray);
                if(!empty($assocArray[0]))
                {
                  for($i=0; $i<sizeof($assocArray); $i++){
                     if($assocArray[$i]['id']== $id){ $flag=0;
                       if($assocArray[$i]['status']==1){
                      ?>

                          <button class="side-menu__suggestion-button" >Following...</button>
                      <?php } else { ?>
                      <button class="side-menu__suggestion-button" onclick="return followRequestRemove(<?php echo $id; ?>, <?php echo $qu2['id']; ?>)">Request</button>
                   <?php  } }
                  
                  } }?>

                  <?php if($flag==1){ ?>
                <button class="side-menu__suggestion-button" onclick="return followRequest(<?php echo $id; ?>, <?php echo $qu2['id']; ?>)">Follow</button>
                    <?php } ?>
                  </span>
              </div>
            </div>
            <?php } ?>
          </div>

          <div class="side-menu__footer">
            <div class="side-menu__footer-links">
              <ul class="side-menu__footer-list">
                <li class="side-menu__footer-item">
                  <a class="side-menu__footer-link" href="#">About</a>
                </li>
                <li class="side-menu__footer-item">
                  <a class="side-menu__footer-link" href="#">Help</a>
                </li>
                <li class="side-menu__footer-item">
                  <a class="side-menu__footer-link" href="#">Press</a>
                </li>
                <li class="side-menu__footer-item">
                  <a class="side-menu__footer-link" href="#">API</a>
                </li>
                <li class="side-menu__footer-item">
                  <a class="side-menu__footer-link" href="#">Jobs</a>
                </li>
                <li class="side-menu__footer-item">
                  <a class="side-menu__footer-link" href="#">Privacy</a>
                </li>
                <li class="side-menu__footer-item">
                  <a class="side-menu__footer-link" href="#">Terms</a>
                </li>
                <li class="side-menu__footer-item">
                  <a class="side-menu__footer-link" href="#">Locations</a>
                </li>
                <li class="side-menu__footer-item">
                  <a class="side-menu__footer-link" href="#">Top Accounts</a>
                </li>
                <li class="side-menu__footer-item">
                  <a class="side-menu__footer-link" href="#">Hashtag</a>
                </li>
                <li class="side-menu__footer-item">
                  <a class="side-menu__footer-link" href="#">Language</a>
                </li>
              </ul>
            </div>

            <span class="side-menu__footer-copyright"
              >&copy; 2021 instagram from facebook</span
            >
          </div>
        </section>
      </section>
    </main>
    <?php  include('insta_footer.php'); ?>
    

    <script>
       function likePostData(id,status,userId){
        // alert(id);
        $.ajax({

           url : "ajax_post_like.php",
           method: "post",
           data :{
             postId : id,
             status : status,
             userId : userId
           },
           success: function(res){
             console.log("change status");
             console.log(res);
             $("#likePost"+id).html(res);

             $.ajax({
              url : "postTotalCount.php",
              method : "post",
              data:{
                postId : id
              },
              success:function(res){
                 $("#output"+id).html(res);
              }
             })
           }
        })
       }
    </script>

    <script>
     
      function followRequestRemove(myId,yourId)
      {
        $.ajax({
           url : "followRequestRemove.php",
           method : "post",
           data :{
            myId : myId,
            yourId : yourId,
            status : 0
           },
           success: function(res){
             console.log(res);
             $("#followRequest"+yourId).html(res);
           }
        })
      }

      function followRequest(myId,yourId){
        // alert(myId);
        // alert(yourId);
        $.ajax({
           url : "followRequest.php",
           method : "post",
           data :{
            myId : myId,
            yourId : yourId,
            status : 0
           },
           success: function(res){
             console.log(res);
             $("#followRequest"+yourId).html(res);
           }
        })
      }


      function FollowingRequest(myId, yourId,no)
      {
        // alert(myId);
        // alert(yourId);

        $.ajax({
           url : "followingRequest.php",
           method : "post",
           data :{
            myId : myId,
            yourId : yourId,
            status : 0
           },
           success: function(res){
             console.log(res);
             $("#followBckButton"+no).html(res);
           }
        })
      }


      setInterval(() => {
        $.ajax({
           url : "countFollowNotification.php",
           success: function(res){
             $("#countFollowNotification").html(res);
           }
        })
      }, 1000);
    </script>


<script>
      function confirmYourId(myId,yourId,no)
      {
        $.ajax({  
          url : "confirmYourId.php",
          method : "post",
          data :{
            myId : myId,
            yourId : yourId,
            no : no
           },
           success : function(res){
            console.log(res);
            $("#followBckButton"+no).html(res);
           }
        })
      }


      var dd = document.getElementById('requestDataShow');
      console.log(dd);
      dd.style.display = "none";
      var status = 1;
      function hideShow()
      {
        console.log(status);
            if(status %2==1){
              dd.style.display = "block";
              
            }
            else{
              dd.style.display = "none";
              
            }
            status++;
      }
     
    </script>