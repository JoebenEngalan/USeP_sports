<?php 
session_start();
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/head.php');?>

<!--scripts-->
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

<body class="bg-dark">

  <div class="container">
    <div class="card card-register mx-auto mt-5">
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
                  <input type="password" id="password" name="password" pattern="(?=+.*\d)(?=+.*[A-Za-z]) [0-9A-Za-Z!@#$%]{8,99}" autocomplete="new-password" class="form-control" onchange='check_pass();' placeholder="Password"  required="required">
                  <label for="password">Password</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="confirmpassword" name="confirmpassword" pattern="(?=+.*\d)(?=+.*[A-Za-z]) [0-9A-Za-Z!@#$%]{8,99}" autocomplete="new-password" class="form-control" onchange='check_pass();' placeholder="Confirm password" required="required">
                  <label for="confirmpassword" >Confirm password</label>
                  <span id='message'></span>
                </div>
              </div>
            </div>
          </div>
          
          <input type="submit" name="signup" id="signup" class="btn btn-primary btn-block" value="Sign Up" style="cursor:pointer" disabled>
          <?php include('templates/registeruser.php')?>
        </form>

        <div class="text-center">
          <a class="d-block small mt-3" href="index.php">Login Page</a>
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

  
  
</body>

</html>

