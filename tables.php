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
          <li class="breadcrumb-item active">Tables</li>
        </ol>

        <!--DataTables Borrowers-->
        <div class="card mb-4">
              <div class="card-header">
                <i class="fas fa-table"></i>
                Data Table Borrowers</div>
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

        <p class="small text-center text-muted my-5">
          <em>test</em>
        </p>

    </div><!-- /.container-fluid -->
  </div><!-- /.content-wrapper -->
  <!--Footer-->    
  <?php include('templates/footer.php');?>
  </div><!--/#wrapper-->
  <!--scrolltop-->
  <?php include('templates/scrolltop.php')?>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
