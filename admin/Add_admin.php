
<?php include("header.php");  

if(isset($_POST['submit']))
{
    
    $name = $_POST['fname']." ".$_POST['lname'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $hobby = implode(",",$_POST['hobby']);
    $city = $_POST['city'];
    $message = $_POST['message'];
    $image = $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],"dist/images/".$image);

    $query = "insert into blog (`name`,`email`,`password`,`contact`,`massage`,`gender`,`hobby`,`city`,`image`)values('$name','$email','$password','$contact','$message','$gender','$hobby','$city','$image')";
    $q1 = mysqli_query($con,$query);

    if($q1){
      $suc =  "Admin Record inserted successfully";
        }
    else{
      $err = "soemthing wrong!!";
    }
    ?>
        <script>
          window.location = "view_admin.php";
        </script>
    <?php
}

if(isset($_GET['blog'])){
  $id = $_GET['blog'];
  $update = "select * from where `blog_id`='$id'";
  $u = mysqli_query($con,$update);
  $u2 = mysqli_fetch_array($u);
  $UpdateName = explode(" ",$u2['name']);
}
?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashbord.php">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <?php if(isset($suc)){ ?>
                  <div class="alert alert-success">
                    <?php echo $suc; ?>
                  </div>
              <?php } ?>
              <!-- /.card-header -->
              <!-- form start -->
              <form  method="post" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">First name</label>
                    <input type="text" name="fname" class="form-control" id="exampleInputEmail1" value="<?php ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Last name</label>
                    <input type="text" name="lname" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" name="email" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Contact</label>
                    <input type="text" name="contact" class="form-control" id="exampleInputPassword1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Contact</label><br>
                    <input type="radio" name="gender" value="male" id="exampleInputPassword1"> Male
                    <input type="radio" name="gender" value="female" id="exampleInputPassword1"> feMale
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Contact</label><br>
                    <input type="checkbox" name="hobby[]" value="reading" id="exampleInputPassword1"> Reading
                    <input type="checkbox" name="hobby[]" value="music" id="exampleInputPassword1"> Music
                    <input type="checkbox" name="hobby[]" value="cycling" id="exampleInputPassword1"> cycling
                  </div>

                  <?php $city = ["surat","vadodara","Navasari","Rajkot"] ?>
                  <label for="exampleInputPassword1">Select City</label><br>
                  <div class="form-group">
                    <select name="city" class="form-control">
                      <option>--select city--</option>
                      <?php foreach($city as $v) { ?>
                      <option value="<?php echo $v;?>"><?php echo $v;?></option>
                      <?php }?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Message</label>
                    <textarea type="text" name="message" col="10" row="5" class="form-control" id="exampleInputPassword1"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>

                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="card-footer">
                  <input type="submit" name="submit" value="Add admin" class="btn btn-primary">
                </div>
              </form>
            </div>
        </div>
      </div>
    </section>
  </div>

  <?php include("footer.php"); ?>