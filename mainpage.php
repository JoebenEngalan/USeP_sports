<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
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

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <div class="mr-5">26 New Messages!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">11 New Tasks!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5">123 New Orders!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5">13 New Tickets!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>


    <!-- DataTables Example -->
    <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
        
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
										<th>Email</th>
						
										
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
										<th>Email</th>
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
{
foreach($results as $result)
{				?>	
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($result->id_number);?></td>
											<td><?php echo htmlentities($result->FirstName);?></td>
											<td><?php echo htmlentities($result->LastName);?></td>
	                    <td><?php echo htmlentities($result->ContactNumber);?></td>
											<td><?php echo htmlentities($result->Department);?></td>
											<td><?php echo htmlentities($result->Position);?></td>
											<td><?php echo htmlentities($result->EmailID);?></td>
										</tr>
										<?php $cnt=$cnt+1; }} ?>
										
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
  </div><!-- /#wrapper -->
  
  <!--scrolltop-->
  <?php include('templates/scrolltop.php')?>
  
  <!--scripts-->
  <?php include('templates/scripts.php')?>
  
</body>

</html>
<?php } ?>
