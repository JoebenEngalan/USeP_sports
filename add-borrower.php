<?php
//dont touch this session  
session_start();
if(!isset($_SESSION["id"])) 
  {
  header('location:index.php');
  include('location:logout.php');
  exit();
  }
?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/head.php');?>

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
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Borrowers Page</li>
        </ol>

        <!-- Page Content -->
        <!-- Borrowing form grid -->
        <div class="mb-4">
          <form method="post" name="submit">         
          <div class="form-group mb-4">
            <h3 class="display-10">Borrowers Page</h3>
          </div>
          <div class="card mb-3">
              <div class="card-header">
                      <i class="far fa-file"></i>
                      Input Box</div>
                <div class="card-body"> 
            <!-- IDNumber input -->
            <div class="form-group col-md-14">
              <label for="inputIDnum">ID Number</label>
              <input type="text" class="form-control" name="idnumber" id="inputIDnum" placeholder="2XXX-XXXXX" maxlength= "10" required>
            </div>
            <!--Grid row-->
            <div class="form-row">
              <!-- LastName input -->
              <div class="form-group col-md-6">
                <label for="inputLname">Last Name</label>
                <input type="text" class="form-control" name="lastname" id="inputLname" placeholder="Last Name" required>
              </div>
              <!-- FirstName input -->
              <div class="form-group col-md-6">
                <label for="inputFname">First Name</label>
                <input type="text" class="form-control" id="inputFname" name="firstname" placeholder="First Name" required>
              </div>
            </div>
            <!-- ContactNum input -->
            <div class="form-group col-md-14">
              <label for="inputContactnum">Contact Number</label>
              <input type="text" class="form-control" id="inputContactnum" name="contactnum" placeholder="(09XXXXXXXXX)" pattern="^(09|\+639)\d{9}$" maxlength= "11" required>
            </div>
            <!--Grid row-->
            <div class="form-row">
              <!-- Dept/College input -->
              <div class="form-group col-md-6">
                <label for="inputDept_Coll">Department/College</label>
                <select type="text" name="department" class="form-control" id="inputDept_Coll" required>
                <option disabled selected>Department/College</option>
                <option> College of Education</option>
                <option> College of Engineering</option>
                <option> College of Arts and Sciences</option>
                <option> College of Technology</option>
                <option> Institute of Computing</option>
                <option> School Applied Economics</option>
                <option> College of Business Administration</option>
                <option> University Administrations</option>
                </select>
              </div>
              <!-- Position input -->
              <div class="form-group col-md-6">
                <label for="inputPosit" >Position</label>
                <select type="text" name="position" class="form-control" id="inputPosit" required>
                <option disabled selected>Position</option>
                <option>Student</option>
                <option>Faculty</option>
                <option>Staff</option>
                <select>
              </div>
            </div>
             
            <div class="btn-group">
            <!--database command add borrower-->
            <input type="submit" name="submit" class="btn btn-primary btn-block"
            onclick="return confirm ('Did you Complete all Text box and \ncheck the if the Data you entered Correct?')"
            value="Submit" style="cursor:pointer">
            <?php include('templates/addborrower.php');?>
              <button type="clear" class="btn btn-primary btn-lg">Clear</button>
            </div>

          </div>
          </div>
          </form>
        </div>
    
      </div><!-- /.container-fluid -->
    
    </div><!-- /.content-wrapper -->
    <!--Footer-->    
    <?php include('templates/footer.php');?>
  </div><!-- /#wrapper -->
  <!--scrolltop-->
  <?php include('templates/scrolltop.php');?>

  <!--scripts-->
  <?php include('templates/scripts.php')?>

</body>

<!--no form resubmision javascript dont touch-->
<script>
  if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
  }
</script>

</html>

