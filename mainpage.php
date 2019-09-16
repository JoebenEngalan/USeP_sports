<?php
//dont touch this session
session_start();
if(!isset($_SESSION["id"])) 
{
  header('location:index.php');
  include('location:logout.php');
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
        <li class="breadcrumb-item active">Overview</li>
      </ol>  


    <!-- DataTables Example -->
    <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Being Borrowed</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
             <thead>
										<tr>
										<th>#</th>
										<th>ID Number</th>
										<th>Contact Number</th>
										<th>Time Borrowed</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
										<th>#</th>
                    <th>ID Number</th>
										<th>Contact Number</th>
										<th>Time Borrowed</th>
										</tr>
									</tfoot>
									<tbody>
                  <?php
                  include('includes/config.php');
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
                      <td><?php echo htmlentities($result->ContactNumber);?></td>
	                    <td><?php echo htmlentities($result->Borrowed_time);?></td>
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
  </div><!-- /#wrapper -->
  
  <!--scrolltop-->
  <?php include('templates/scrolltop.php')?>
  
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