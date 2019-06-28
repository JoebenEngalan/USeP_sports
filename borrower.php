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
          <li class="breadcrumb-item active">Borrowers</li>
        </ol>

        <!-- Page Content -->
        <!-- Borrowing form grid -->
        <div class="mb-4">
        <form>
          <!-- IDNumber input -->
          <div class="form-group col-md-14">
            <label for="inputIDnum">ID Number</label>
            <input type="text" class="form-control" id="inputIDnum" placeholder="2XXX-XXXXX">
          </div>
          <!--Grid row-->
          <div class="form-row">
            <!-- LastName input -->
            <div class="form-group col-md-6">
              <label for="inputLname">Last Name</label>
              <input type="text" class="form-control" id="inputLname" placeholder="Last Name">
            </div>
            <!-- FirstName input -->
            <div class="form-group col-md-6">
              <label for="inputFname">First Name</label>
              <input type="text" class="form-control" id="inputFname" placeholder="First Name">
            </div>
          </div>
          <!-- ContactNum input -->
          <div class="form-group col-md-14">
            <label for="inputContactnum">Contact Number</label>
            <input type="text" class="form-control" id="inputContactnum" placeholder="+63XXXXXXXXXX">
          </div>
          <!--Grid row-->
          <div class="form-row">
            <!-- Dept/College input -->
            <div class="form-group col-md-6">
              <label for="inputDept_Coll">Department/College</label>
              <select type="text" class="form-control" id="inputDept_Coll">
              <option disabled selected>Department/College</option>
              <option> test College</option>
              </select>
            </div>
            <!-- Position input -->
            <div class="form-group col-md-6">
              <label for="inputPosit">Position</label>
              <select type="text" class="form-control" id="inputPosit">
              <option disabled selected>Position</option>
              <option>test Position</option>
              <select>
            </div>
          </div>
          <!-- Grid row  -->
          <!-- Grid row  Buttons -->          
          <div class="btn-group">
            <button type="submit" class="btn btn-primary btn-lg">Register</button>
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
