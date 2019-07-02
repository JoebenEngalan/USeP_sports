<?php 
session_start();
include('includes/config.php');
error_reporting(0);

if(strlen($_SESSION['login'])==0)
  { 
header('location:login.php');
}
else{
?>

<?php
//error_reporting(0);
if(isset($_POST['submit']))
{
$idnum=$_POST['idnumber'];
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$contact=$_POST['contactnum'];
$depart=$_POST['department'];
$pos=$_POST['position'];
$email=$_POST['emailid'];
$status=1;
$sql= "INSERT INTO borrower_table (id_number,FirstName,LastName,ContactNumber,Department,Position,EmailID,Status) VALUES(:idnum,:fname,:lname,:contact,:depart,:pos,:email,:status)";
$query = $dbh->prepare($sql);
$query->bindParam(':idnum',$idnum,PDO::PARAM_STR);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':lname',$lname,PDO::PARAM_STR);
$query->bindParam(':contact',$contact,PDO::PARAM_STR);
$query->bindParam(':depart',$depart,PDO::PARAM_STR);
$query->bindParam(':pos',$pos,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Registration successfull. Now you can login');</script>";
}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}
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
          <!-- IDNumber input -->
          <div class="form-group col-md-14">
            <label for="inputIDnum">ID Number</label>
            <input type="text" class="form-control" name="idnumber" id="inputIDnum" placeholder="2XXX-XXXXX">
          </div>
          <!--Grid row-->
          <div class="form-row">
            <!-- LastName input -->
            <div class="form-group col-md-6">
              <label for="inputLname">Last Name</label>
              <input type="text" class="form-control" name="lastname" id="inputLname" placeholder="Last Name">
            </div>
            <!-- FirstName input -->
            <div class="form-group col-md-6">
              <label for="inputFname">First Name</label>
              <input type="text" class="form-control" id="inputFname" name="firstname" placeholder="First Name">
            </div>
          </div>
          <!-- ContactNum input -->
          <div class="form-group col-md-14">
            <label for="inputContactnum">Contact Number</label>
            <input type="text" class="form-control" id="inputContactnum" name="contactnum" placeholder="(09XXXXXXXXX)" maxlength= "11" >
          </div>
          <!--Grid row-->
          <div class="form-row">
            <!-- Dept/College input -->
            <div class="form-group col-md-6">
              <label for="inputDept_Coll">Department/College</label>
              <select type="text" name="department" class="form-control" id="inputDept_Coll">
              <option disabled selected>Department/College</option>
              <option> College of Education</option>
              <option> College of Engineering</option>
              <option> College of Arts and Sciences</option>
              <option> College of Technology</option>
              <option> Institute of Computing</option>
              <option> School Applied Economics</option>
              <option> College of Business Administration</option>
              </select>
            </div>
            <!-- Position input -->
            <div class="form-group col-md-6">
              <label for="inputPosit" >Position</label>
              <select type="text" name="position" class="form-control" id="inputPosit">
              <option>Student</option>
              <option>Faculty and Staff</option>
              <select>
            </div>
          </div>


          <div class="form-group col-md-14">
            <label for="inputContactnum">Email</label>
            <input type="text" class="form-control" name= "emailid" id="inputContactnum" placeholder="juandelacruz@gmail.com">
          </div>  


          <div class="btn-group">
          <input type="submit" name="submit" class="btn btn-primary btn-block" value="Submit" style="cursor:pointer">
            <button type="clear" class="btn btn-primary btn-lg">Clear</button>
          </div>



        </form>
        </div>

        <!--Borrowing form grid-->    
        
        <!--DataTables Borrowers-->
        <div class="card mb-4">
              <div class="card-header">
                <i class="fas fa-table"></i>
                Borrowers Table</div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>ID Numeber</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Contact Number</th>
                        <th>Department/College</th>
                        <th>Position</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>ID Numeber</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Contact Number</th>
                        <th>Department/College</th>
                        <th>Position</th>
                      </tr>
                    </tfoot>
                    <tbody>
                    <!--Example table-->
                      <tr>
                        <td>2016-XXXX</td>
                        <td>Doe</td>
                        <td>John</td>
                        <td>+63XXXXXXXXXXX</td>
                        <td>College of Arts and Scinces</td>
                        <td>Student</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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

</html>
<?php } ?>