<?php
//dont touch this session
session_start();
if(isset($_SESSION['id']))
  {
  header('location:index.php');
  exit();
  }
?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/head.php');
      include('templates/login.php');?>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form  method="post"  name="signup">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <input type="submit" name="login" class="btn btn-primary btn-block" value="Sign In" style="cursor:pointer">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="reminder.php">Register an Account or Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

  <?php include('templates/scripts.php')?>

</body>

<!--no form resubmision javascript dont touch-->
<script>
  if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
  }
</script>

</html>