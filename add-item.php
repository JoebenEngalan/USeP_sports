<?php
session_start();
if(!isset($_SESSION["id"])) 
{header('location:index.php');
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
          <li class="breadcrumb-item active">Add Item</li>
        </ol>

        <!-- Page Content -->
        <!-- additem form grid -->
        <div class="mb-4">
        
        <div class="form-group mb-4">
          <h3 class="display-10">Add Item Page</h3>
        </div>
        
        <form method="post" name="submit" >
          <!--Grid row-->
          <!-- Itemcode input -->
          <div class="form-group col-md-6">
              <label for="itemname">Item Code</label>
              <input type="text" name= "itemcode" class="form-control" id="itemname" placeholder="Item ">
            </div>
            <!-- Item Name input -->
            <div class="form-group col-md-6">
              <label for="itemname">Item Name</label>
              <input type="text" name= "itemname" class="form-control" id="itemname" placeholder="Item Name">
            </div>
             <!-- Item Name input -->
            <div class="form-group col-md">
              <label for="itemname">Quantity</label>
              <input type="text" name="quantity" class="form-control" id="itemname" placeholder="0">
            </div>
            <!--  Category input -->
            <div class="form-group col-md-2">
            <label for="inputCategory">Category</label>
              <select type="text" name= "category" class="form-control" id="inputCategory">
              <option disabled selected>Category</option>
              <option> Sports Equipment</option>
              <option> Gym Equipment </option>
              </select>
            </div>
          </div>
          <!--Grid row-->
          <!-- InputDescription input -->
          <div class="form-group col-md-14">
            <label for="InputDescription">Description</label>
            <textarea class="form-control" name="description" rows="5" id="InputDescription" resize="none" placeholder="Description Here"></textarea>
          </div>

          <!-- Grid row  Buttons -->          
          <div class="btn-group">
            <?php include('templates/additem.php');?>
            <button type="submit"  name="submit"  value="Submit"  class="btn btn-primary btn-lg">Add item</button>
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