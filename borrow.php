<?php
//dont touch this session
session_start();
include('includes/config.php');
if(!isset($_SESSION["id"])) 

{header('location:index.php');
  include('location:logout.php');}

  include('templates/findborrower.php')
?> 


<!DOCTYPE html>
<html lang="en">

<?php include('templates/head.php');?>
<!--scripts-->
<?php include('templates/scripts.php')?>

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
          <li class="breadcrumb-item active">Borrow Page</li>
        </ol>

        <!-- Page Content -->
        <!-- Borrowing form grid -->              
        
        <form method="post" name="submit">
          <div class="form-group mb-4">
              <h3 class="display-10">Borrow Page</h3>
          </div>

          <!--id NUMBER-->
          <div class="input-group mb-3"> 
            <input type="text" class="form-control" name="id_number" id="search" value="<?php echo $id_number;?>" placeholder="ID number of Student or Faculty" aria-label="Recipient's username" aria-describedby="button-addon2">
            <div class="input-group-append">             
              <button class="btn btn-primary" type="submit" name="Find" value="Find Data">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>

          <!--Grid row fullname-->
          <div class="form-row">
            <!-- LastName input -->
            <div class="form-group col-md-6">
              <label for="inputLname">Last Name</label>
              <input type="text" class="form-control" readonly name="LastName"  id="inputLname"  value="<?php echo $LastName;?>" placeholder="Last Name" >
            </div>
            <!-- FirstName input -->
            <div class="form-group col-md-6">
              <label for="inputFname">First Name</label>
              <input type="text" class="form-control" readonly name="FirstName"  id="inputFname" value="<?php echo $FirstName;?>" placeholder="First Name" >
            </div>
        </div>

        <div class="form-row">
            <!-- ContactNum input -->
            <div class="form-group col-md-6">
              <label for="inputContactnum">Contact Number</label>
              <input type="text" class="form-control" readonly name="ContactNumber" value="<?php echo $ContactNumber;?>"   id="inputContactnum" placeholder="+63XXXXXXXXXX" >
            </div>
            <!-- Date input -->
            <div class="form-group col-md-6">
              <label for="Datenow"> Date</label>
              <input type="text" id="Datenow" name="Btime" readonly class="form-control">
            </div>
             
        </div>

        <div class="form-group mb-4">
          <h3 class="display-10">Item Borrowed</h3>
        </div>

        <div class="form-row" name='1'>     
            <div class="form-group col-md-6">
              <div class="input-group">
                <select class="form-control" name="itemname1" id="itemname1">
                <?php include('templates/selectitem.php');?>               
                </select>
                <div class="input-group-append">
                <?php include('templates/getitem.php');?>
                  <button class="btn btn-primary"  id="getitem" name="getitem" >
                      <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </div>

            <div class="form-group col-md-3">
              <input type="text" class="form-control" name="itemname" id="itemname" value="<?php echo $itemname;?>" placeholder="Item name" >
            </div>
                      
            <div class="form-group col-md">
              <input type="text" class="form-control" name="quantity" id="quantity" value="<?php echo $quantity;?>" placeholder="Quantity Left">
            </div>

            <div class="form-group col-md">
              <input type="text" class="form-control" name="quantity1" id="inputQuantity" placeholder="Quantity">
            </div>
          </div>
        
        <div class="form-row">
          <div class="form-group col-md-12">
              <input type="text" class="form-control" id="inputRemarks" name="remarks" placeholder="Remarks">
          </div>   
        </div>

        <div class="form-group mb-4">
        <?php include('templates/borrowitems.php');?>
          <div class="btn-group">
            <button type="submit"  name="submit"  value="Submit"  class="btn btn-primary btn-lg">Add item</button>
            <button type="clear" class="btn btn-primary btn-lg">Clear</button>
          </div>
        
        </div>
      </form>

    </div><!-- /.container-fluid -->
  </div><!-- /.content-wrapper -->
  <!--Footer-->    
  <?php include('templates/footer.php');?>
  </div><!-- /#wrapper -->
  <!--scrolltop-->
  <?php include('templates/scrolltop.php')?>
  
</body>

<script type="text/javascript">

/** date for today **/
function getDate(){
   var todaydate = new Date();
   var day = todaydate.getDate();
   var month = todaydate.getMonth() + 1;
   var year = todaydate.getFullYear();
   var datestring = month + "/" + day + "/" + year;
   document.getElementById("Datenow").value = datestring;
  } 
getDate(); 

/** no form resubmision javascript dont touch**/

  if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
  }
</script>

</html>