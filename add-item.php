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
          <li class="breadcrumb-item active"></li>
        </ol>

        <!-- Page Content -->
        <!-- Borrowing form grid -->
        <div class="mb-4">
        <form>
          <!--Grid row-->
          <div class="form-row">
          <div class="form-group col-md-6">
              <label for="itemcode">Item Code</label>
              <input type="text" class="form-control" id="itemcode" placeholder="item Code">
          </div>
            <!-- LastName input -->
            <div class="form-group col-md-6">
              <label for="itemname">Item Name</label>
              <input type="text" class="form-control" id="itemname" placeholder="First Name">
            </div>
            <!-- FirstName input -->
            <div class="form-group col">
            <label for="inputDept_Coll">Category</label>
              <select type="text" class="form-control" id="inputDept_Coll">
              <option disabled selected>Category</option>
              <option> test </option>
              <option> test </option>
              </select>
            </div>
          </div>
          <!--Grid row-->
          <!-- ContactNum input -->
          <div class="form-group col-md-14">
            <label for="comment">Comment</label>
            <textarea class="form-control" rows="5" id="comment" resize="none"></textarea>
          </div>

          <!-- Grid row  Buttons -->          
          <div class="btn-group">
            <button type="submit" class="btn btn-primary btn-lg">Add item</button>
            <button type="clear" class="btn btn-primary btn-lg">Clear</button>
          </div>
        
        </form>
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
