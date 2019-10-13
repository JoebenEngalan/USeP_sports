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
										<th>#</th>
										<th>ID Number</th>
										<th>Last Name</th>
										<th>First Name</th>
										<th>Contact Number</th>
										<th>Department</th>
										<th>Position</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
										<th>#</th>
                    <th>ID Number</th>
										<th>Last Name</th>
										<th>First Name</th>
										<th>Contact Number</th>
										<th>Department</th>
										<th>Position</th>
										</tr>
										</tr>
									</tfoot>
									<tbody>
									<?php $sql = "SELECT * from  borrower_table ";
                      $query = $dbh -> prepare($sql);
                        $query->execute();
                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                        $cnt=1;
                    if($query->rowCount() > 0)
                      {foreach($results as $result)
                        {				
                    ?>	
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($result->id_number);?></td>
											<td><?php echo htmlentities($result->FirstName);?></td>
											<td><?php echo htmlentities($result->LastName);?></td>
	                    <td><?php echo htmlentities($result->ContactNumber);?></td>
											<td><?php echo htmlentities($result->Department);?></td>
											<td><?php echo htmlentities($result->Position);?></td>
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

