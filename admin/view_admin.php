<?php include("header.php"); 

if(isset($_GET['blog'])){
  $id = $_GET['blog'];
  $query = "Select * from blog where `blog_id`='$id'";
  $q1 = mysqli_query($con,$query);
  $q2 = mysqli_fetch_array($q1);
  @unlink("dist/images/".$q2['image']);

  $delet = "delete from blog where `blog_id`='$id'";
  $d1 = mysqli_query($con,$delet);
  if($d1){
    $suc = "Admin Record Deleted successfully";
  }
  else{
    $err = "Something wrong!!";
  }
}


if(isset($_GET['page'])){

  $page = $_GET['page'];
}
else{
  $page = 0;
}

$per_page = 2;
$page = $per_page*$page;

if(isset($_GET['search'])){

  $se = $_GET['search'];
  $qu = "select * from blog where name like '$se%' limit $page,$per_page";
}
else{
  $qu = "select * from blog limit $page,$per_page";
}
$qu1 = mysqli_query($con,$qu);

if(isset($_GET['search'])){

  $se = $_GET['search'];
  $cnum = "select * from blog where name like '$se%'";
}
else{
  $cnum = "select * from blog ";
}
$cnum1 = mysqli_query($con,$cnum);
$num = mysqli_fetch_array($cnum1);
$count = ceil($num/$per_page);

?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">View Table</h3>
              </div>
              <?php if(isset($suc)){?>
                <div class="alert alert-success">
                  <?php echo $suc; ?>
                </div>
              <?php } ?>

              <form>
                <input type="text" name="search" class="bg-dark">
                <input type="submit"  class="bg-dark">
              </form>

              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>City</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>

                  <?php while($q2 = mysqli_fetch_array($v1)) {?>
                  <tr>
                    <th><?php echo $q2['name']?></th>
                    <th><?php echo $q2['email']?></th>
                    <th><?php echo $q2['contact']?></th>
                    <th><?php echo $q2['city']?></th>
                    <th><img src="dist/images/<?php echo $q2['image']; ?>" height="100" /></th>
                    <th><a style="color:red" href="view_admin.php?blog=<?php echo $q2['blog_id']; ?>"><i class="fa fa-trash"></i></a> ||
                        <a href="Add_admin.php?blog=<?php echo $q2['blog_id']; ?>"><i class="fa fa-edit"></i></a>
                    </th>
                  </tr>
                  <?php } ?>
                  </thead>
                </table>
                <tr colspan="7">
                 <td>
                    <?php for($i=0; $i<$count; $i++){ ?>
                                  <a href="/LTE-master/view_admin.php?page=<?php echo $i; ?>&search=<?php echo @$_GET['search']?>"><?php echo $i+1; ?></a>
                      <?php } ?>
                 </td>
                </tr>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include("footer.php"); ?>