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
            <a href="mainpage.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Item Page</li>
        </ol>

        <!-- Page Content -->
        <!-- additem form grid -->
        <div class="mb-4">
        
        <div class="form-group mb-4">
          <h3 class="display-10">Item Page</h3>
        </div>
        
        <div class="card mb-3">
              <div class="card-header">
                      <i class="far fa-file"></i>
                      Add item Box</div>
                <div class="card-body"> 
        
            <form method="post" name="submit" >
              <!--Grid row-->
              <div class="form-row">            
                <!-- Item Name input -->
                <div class="form-group col-md">
                  <label for="itemname">Item Name</label>
                  <input type="text" name= "itemname" class="form-control" id="itemname" placeholder="Item Name" required>
                </div>
              </div>
                <!-- Item Name input -->
              <div class="form-row">
                <div class="form-group col-md-6 ">
                  <label for="itemname">Quantity</label>
                  <input type="text" name="quantity" class="form-control" id="quantity" placeholder="0" required>
                </div>
                <!--  Category input -->
                <div class="form-group col-md-6">
                <label for="inputCategory">Category</label>
                  <select type="text" name= "category" class="form-control" id="inputCategory" required>
                  <option disabled selected>Category</option>
                  <option> Sports Equipment</option>
                  <option> Gym Equipment </option>
                  </select>
                </div>
              </div>
            <div class="form">
              <!--Grid row-->
              <!-- InputDescription input -->
              <div class="form-group col-md-14">
                <label for="InputDescription">Description</label>
                <textarea class="form-control" name="description" rows="5" id="InputDescription" resize="none" placeholder="Description Here" c></textarea>
              </div>
              <!-- Grid row  Buttons -->
              <?php include('templates/additem.php');?>          
              <div class="btn-group">
                <!-- database command add item-->
                <button type="submit"  name="submit"  value="Submit"  class="btn btn-primary btn-lg">Add </button>
                <button type="clear" class="btn btn-primary btn-lg">Clear</button>
              </div>
              
            </div>
            </form>
          </div>
        </div>
      </div>

        <div class="card mb-3">
              <div class="card-header">
                      <i class="far fa-file"></i>
                      Update item Box</div>
                <div class="card-body"> 
        
            <form method="post" name="submit" >
              <!--Grid row-->
              <div class="form-row">            
                <!-- Item Name input -->
                <div class="form-group col-md">
                  <label for="itemname">Item Name</label>
                  <input type="text" name= "itemname" class="form-control" id="itemname" placeholder="Item Name" required>
                </div>
              </div>
                <!-- Item Name input -->
              <div class="form-row">
                <div class="form-group col-md-6 ">
                  <label for="itemname">Quantity</label>
                  <input type="text" name="quantity" class="form-control" id="quantity" placeholder="0" required>
                </div>
                <!--  Category input -->
                <div class="form-group col-md-6">
                <label for="inputCategory">Category</label>
                  <select type="text" name= "category" class="form-control" id="inputCategory" required>
                  <option disabled selected>Category</option>
                  <option> Sports Equipment</option>
                  <option> Gym Equipment </option>
                  </select>
                </div>
              </div>
            <div class="form">
              <!--Grid row-->
              <!-- InputDescription input -->
              <div class="form-group col-md-14">
                <label for="InputDescription">Description</label>
                <textarea class="form-control" name="description" rows="5" id="InputDescription" resize="none" placeholder="Description Here" c></textarea>
              </div>
              <!-- Grid row  Buttons -->
              <div class="btn-group">
                <!-- database command add item-->
                <button type="update"  name="update"  value="update"  class="btn btn-primary btn-lg">Update </button>
                <button type="clear" class="btn btn-primary btn-lg">Clear</button>
              </div>
              
            </div>
            </form>
          </div>
        </div>
      </div>
      
      <div class="card mb-4">
        <div class="btn-group">
          <button type="show" id="show" class="btn btn-secondary btn-lg">Show table</button>
        </div>
      </div>
      
      <div id="table" class="card mb-4" style="display: none">
        <div class="card-header">
              <i class="fas fa-table"></i>
              Equipments</div>
              <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  
                  <thead>
                    <tr>
                    <th>Number #</th>
                    <th>Item Name</th>
                    <th>Quantity</th>
                    <th>Category</th>
                    <th>Description</th>
                    </tr>
                  </thead>
                  
                  <tfoot>
                    <tr>
                    <th>Number #</th>
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
  </div><!-- /#wrapper -->
  <!--scrolltop-->
  <?php include('templates/scrolltop.php')?>
  
  <!--scripts-->
  <?php include('templates/scripts.php')?>

</body>

<!--no form resubmision javascript dont touch-->
<script>

$('#dataTable').DataTable( {
  dom: 'Bfrtip',
  buttons: [
    'copyHtml5',
    'excelHtml5',
    'pdfHtml5',
      'print'
    ]
});

$(document).ready(function(){
  $("#show").click(function(){
    $("#table").toggle();
  });
});

  if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
  }
</script>

</html>