<?php
include('includes/config.php');
session_start();
if(!isset($_SESSION["id"])) 
{header('location:index.php');
  include('location:logout.php');}

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
          <li class="breadcrumb-item active">Borrow</li>
        </ol>

        <!--DataTables Borrowers-->
        <div class="card mb-4">
              <div class="card-header">
                <i class="fas fa-table"></i>
                Table Borrow</div>             
              <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                        <tr>
                        <th>#</th>
                        <th>ID Number</th>
                        <th>Full Name</th>
                        <th>Clerk</th>
                        <th>Contact Number</th>
                        <th>Time Borrowed</th>
                        <th>Purpose</th>
                        <th>Item 1 </th>
                        <th>Qty 1</th>
                        <th>Item 2 </th>
                        <th>Qty 2</th>
                        <th>Item 3 </th>
                        <th>Qty 3</th>
                        <th>Item 4 </th>
                        <th>Qty 4</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                        <th>#</th>
                        <th>ID Number</th>
                        <th>Full Name</th>
                        <th>Clerk</th>
                        <th>Contact Number</th>
                        <th>Time Borrowed</th>
                        <th>Purpose</th>
                        <th>Item 1 </th>
                        <th>Qty 1</th>
                        <th>Item 2 </th>
                        <th>Qty 2</th>
                        <th>Item 3 </th>
                        <th>Qty 3</th>
                        <th>Item 4 </th>
                        <th>Qty 4</th>
                        </tr>
                      </tfoot>
                      <tbody>
                      <?php
                      $sql = "SELECT * from  Borrowed_Item";
                      $query = $dbh -> prepare($sql);
                      $query->execute();
                      $results=$query->fetchAll(PDO::FETCH_OBJ);
                      $cnt=1;
                      if($query->rowCount() > 0)
                      {
                      foreach($results as $result)
                      {
                      ?>	
                        <tr>
                          <td><?php echo htmlentities($cnt);?></td>
                          <td><?php echo htmlentities($result->id_number);?></td>
                          <td><?php echo htmlentities($result->FullName);?></td>
                          <td><?php echo htmlentities($result->Clerk);?></td>
                          <td><?php echo htmlentities($result->ContactNumber);?></td>
                          <td><?php echo htmlentities($result->Borrowed_time);?></td>
                          <td><?php echo htmlentities($result->Purpose);?></td>                          
                          <td><?php echo htmlentities($result->Item1);?></td>
                          <td><?php echo htmlentities($result->quantity1);?></td>
                          <td><?php echo htmlentities($result->Item2);?></td>
                          <td><?php echo htmlentities($result->quantity2);?></td>
                          <td><?php echo htmlentities($result->Item3);?></td>
                          <td><?php echo htmlentities($result->quantity3);?></td>
                          <td><?php echo htmlentities($result->Item4);?></td>
                          <td><?php echo htmlentities($result->quantity4);?></td>
                        </tr>
                        <?php $cnt=$cnt+1; }} ?>
                      </tbody>
                  </table>
                </div>
              </div>
            </div>      
    </div><!-- /.container-fluid -->
  </div><!-- /.content-wrapper -->
  <!--Footer-->    
  <?php include('templates/footer.php');?>
  </div><!--/#wrapper-->
  <!--scrolltop-->
  <?php include('templates/scrolltop.php')?>

  <!--scripts-->
  <?php include('templates/scripts.php')?>

</body>

<script>

$('#dataTable').DataTable( {
    dom: 'Bfrtip',
    buttons: [
      'copyHtml5',
      'excelHtml5',
      'pdfHtml5',
      'print'
    ]
} );


  if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
  }
</script>

</html>

