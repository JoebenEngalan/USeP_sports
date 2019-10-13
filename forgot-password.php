<?php
//dont touch this session  
session_start();
if (!isset($_SESSION['id']) || ($_SESSION['id'] !== 'Admin@gmail.com')) 
  {
  header('location:mainpage.php');
  exit();
  }
  
?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/head.php');?>

<script src="js/jquery-3.4.1.min.js"></script>

<script>
//checks password and confirm password is right
function check_pass() {
  if (document.getElementById('password').value ==
    document.getElementById('confirmpassword').value) {
      document.getElementById('reset').disabled = false;
  } else {
      document.getElementById('reset').disabled = true;
  }
}
//no form resubmision javascript dont touch
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

<body id="page-top">

  <!-- Navbar Search -->
  <!-- Navbar -->
  <?php include('templates/navbar.php');?>   
  <!-- Sidebar -->
  <?php include('templates/sidebar.php');?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="mainpage.php">Dashboard</a>
        </li>
      <li class="breadcrumb-item active">Reset Password</li>
      </ol>

      <div class="container">
        <div class="card mb-3">
          <div class="card-header">Reset Password</div>
          <div class="card-body">
            <div class="text-center mb-4">
                <h4>Enter Email Address and New Password.</h4>
            </div>
            <form method="post" name="test" autocomplete="off">
              <div class="form-group">
                <div class="form-label-group">
                  <input type="email" name="email" id="email" class="form-control" autocomplete="off" placeholder="Enter email address" required="required" autofocus="autofocus">
                  <label for="email">Enter Email Address</label>
                </div>
              </div>
  
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6">
                    <div class="form-label-group">
                      <input type="password" id="password" name="password" autocomplete="new-password" class="form-control" onchange='check_pass();' placeholder="Password"  required="required">
                      <label for="password">Password</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-label-group">
                      <input type="password" id="confirmpassword" name="confirmpassword" autocomplete="new-password" class="form-control" onchange='check_pass();' placeholder="Confirm password" required="required">
                      <label for="confirmpassword" >Confirm password</label>
                      <span id='message'></span>
                    </div>
                  </div>
                </div>
              </div>
              <?php include('templates/resetpassword.php');?> 
              <input type="submit" id="reset" name="reset" class="btn btn-primary btn-block" disabled style="cursor:pointer">            
            </form>
          </div>
        </div>
      </div>  
    </div><!-- /.container-fluid -->
  </div><!-- /.content-wrapper -->
  <!--Footer-->    
  <?php include('templates/footer.php');?>
  </div><!-- /#wrapper -->
  <!--scrolltop-->
  <?php include('templates/scrolltop.php')?>
  
  <!--scripts-->
  <?php include('templates/scripts.php')?>

</body>

</html>
