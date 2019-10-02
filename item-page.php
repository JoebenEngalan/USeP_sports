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

<?php include('includes/config.php');?>

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
                      Item Box</div>
                <div class="card-body"> 
        
            <form method="post" name="submit" >
              <!--Grid row-->
              <div class="form-row">            
                <!-- Item Name input -->
                <div class="form-group col-md">
                <div class="form-label-group">
                  <input type="text" name= "itemname" class="form-control" id="itemname" maxlength= "30" placeholder="Item Name" required>
                  <label for="itemname">Item Name</label>
                </div>
                </div>
              </div>
                <!-- Item Name input -->
              <div class="form-row">
                <div class="form-group col-md-6 ">
                <div class="form-label-group">
                  <input type="number" min="0" name="quantity" class="form-control" id="quantity" pattern="[0-9]" placeholder="0" required>
                  <label for="quantity">Quantity</label>
                </div>
                </div>
                <!--  Category input -->
                <div class="form-group col-md-6">
                  <select type="text"  class="form-control custom-select-lg mb-3" name="category" id="category" required>
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
                <textarea class="form-control" name="description" rows="5" id="InputDescription" resize="none" placeholder="Description Here" ></textarea>
              </div>
              <!-- Grid row  Buttons -->
              <?php include('templates/additem.php');?>
              <?php include('templates/Updateitem.php');?>                    
              <div class="btn-group">
                <!-- database command add item-->
                <button type="submit"  name="submit"  value="Submit"             
                 onclick="return confirm ('Make Sure the Item Name you Entered is Correct \n Because Item Name you Ented will be Permanent.')"
                 class="btn btn-primary btn-lg">Add</button>
                <button type="submit"  name="Update"  value="Update"  class="btn btn-primary btn-lg">Update</button>
                <button type="clear" class="btn btn-primary btn-lg">Clear</button>
              </div>
              
            </div>
            </form>
          </div>
        </div>
      </div>
 
      <div class="mb-4">
        <div class="col-sm">
          <button type="show" id="show"  data-toggle="collapse" data-target="#table" class="btn btn-secondary btn-lg">Show table</button>
        </div>
      </div>

    <div class="mb-4">  
      <div id="table"class="collapse" >
        <div id="table" class="card mb-4">
          <div class="card-header">
                <i class="fas fa-table"></i>
                Equipments</div>
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
                      <th>Clerk</th>
                      </tr>
                    </thead>
                    
                    <tfoot>
                      <tr>
                      <th>#</th>
                      <th>Item Name</th>
                      <th>Quantity</th>
                      <th>Category</th>
                      <th>Description</th>
                      <th>Clerk</th>
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
                      <td><?php echo htmlentities($result->Clerk);?></td>
                      </tr>
                      <?php $cnt=$cnt+1; }} ?>		
                    </tbody>

                </table>
            </div>
          </div>
        </div>
      
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