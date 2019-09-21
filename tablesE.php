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
          <li class="breadcrumb-item active">Equipment</li>
        </ol>

        <!--DataTables Borrowers-->
        <div class="card mb-4">
              <div class="card-header">
                <i class="fas fa-table"></i>
                Table Equipment</div>             
              <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    
                    <thead>
                      <tr>
                      <th>#</th>
                      <th>Item Name</th>
                      <th>Quantity</th>
                      <th>Category</th>
                      <th>Description</th>
                      </tr>
                    </thead>
                    
                    <tfoot>
                      <tr>
                      <th>#</th>
                      <th>Item Name</th>
                      <th>Quantity</th>
                      <th>Category</th>
                      <th>Description</th>
                      </tr>
                    </tfoot>
                        
                    <tbody>
                      <?php $sql = "SELECT * from  equipment ";
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
                      <td><?php echo htmlentities($result->ItemName);?></td>
                      <td><?php echo htmlentities($result->quantity);?></td>
                      <td><?php echo htmlentities($result->Category);?></td>
                      <td><?php echo htmlentities($result->Description);?></td>
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

