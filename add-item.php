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
          <li class="breadcrumb-item active">Add Item</li>
        </ol>

        <!-- Page Content -->
        <!-- additem form grid -->
        <div class="mb-4">
        
        <div class="form-group mb-4">
          <h3 class="display-10">Add Item Page</h3>
        </div>
        
        <form>
          <!--Grid row-->
          <!-- Itemcode input -->
          <div class="form-row">
            <div class="form-group col-md-3">
                <label for="itemcode">Item Code</label>
                <input type="text" class="form-control" id="itemcode" placeholder="Item Code">
            </div>
            <!-- Item Name input -->
            <div class="form-group col-md-6">
              <label for="itemname">Item Name</label>
              <input type="text" class="form-control" id="itemname" placeholder="Item Name">
            </div>
             <!-- Item Name input -->
            <div class="form-group col-md">
              <label for="itemname">Quantity</label>
              <input type="text" class="form-control" id="itemname" placeholder="0">
            </div>
            <!--  Category input -->
            <div class="form-group col-md-2">
            <label for="inputCategory">Category</label>
              <select type="text" class="form-control" id="inputCategory">
              <option disabled selected>Category</option>
              <option> test </option>
              <option> test </option>
              </select>
            </div>
          </div>
          <!--Grid row-->
          <!-- InputDescription input -->
          <div class="form-group col-md-14">
            <label for="InputDescription">Description</label>
            <textarea class="form-control" rows="5" id="InputDescription" resize="none" placeholder="Description Here"></textarea>
          </div>

          <!-- Grid row  Buttons -->          
          <div class="btn-group">
            <button type="submit" class="btn btn-primary btn-lg">Add item</button>
            <button type="clear" class="btn btn-primary btn-lg">Clear</button>
          </div>
        
        </form>
        </div>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Items Table</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Item Code</th>
                    <th>Item Name</th>
                    <th>Quantity</th>
                    <th>Category</th>
                    <th>Description</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Item Code</th>
                    <th>Item Name</th>
                    <th>Quantity</th>
                    <th>Category</th>
                    <th>Description</th>
                  </tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td>S-20394</td>
                    <td>Basketball</td>
                    <td>2</td>
                    <td>Gym</td>
                    <td>New Spalding</td>
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
  <?php include('templates/scrolltop.php')?>
  
  <!--scripts-->
  <?php include('templates/scripts.php')?>

</body>

</html>
