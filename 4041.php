<?php
//dont touch this session  
session_start();
if (!isset($_SESSION['id']) || ($_SESSION['id'] !== 'Admin@gmail.com')) 
//if(!isset($_SESSION["id"])) 
  {
  header('location:mainpage.php');
  exit();
  }
?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/head.php');?>

<?php include('templates/scripts.php')?>

<script>
//checks password and confirm password is right
function check_pass() {
  if (document.getElementById('password').value ==
    document.getElementById('confirmpassword').value) {
      document.getElementById('signup').disabled = false;
  } else {
      document.getElementById('signup').disabled = true;
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
      <li class="breadcrumb-item active">404 Error</li>
      </ol>

      <div class="container">
        <div class="card mb-3">
          <div class="card-header">Register an Account</div>
          <div class="card-body">
          <form  method="post" name="signup" autocomplete="off">
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6">
                    <div class="form-label-group">
                      <input type="text" id="firstName" name="firstname" pattern="[A-Za-z]+" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                      <label for="firstName">First name</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-label-group">
                      <input type="text" id="lastName" name="lastname" pattern="[A-Za-z]+" class="form-control" placeholder="Last name" required="required">
                      <label for="lastName">Last name</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
                  <input type="email" id="inputEmail" name="emailid" class="form-control" autocomplete="off"  placeholder="Email address" required="required">
                  <label for="inputEmail">Email address</label>
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
              
              <input type="submit" name="signup" id="signup" class="btn btn-primary btn-block" value="Sign Up" style="cursor:pointer" disabled>
              <?php include('templates/registeruser.php')?>
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
  
  
</body>

</html>
