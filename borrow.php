<?php
//dont touch this session
session_start();
include('includes/config.php');
if(!isset($_SESSION["id"])) 

{header('location:index.php');
  include('location:logout.php');}

?> 


<!DOCTYPE html>
<html lang="en">

<?php include('templates/head.php');?>
<!--scripts-->
<?php include('templates/scripts.php');
include_once('templates/findborrower.php');
//include_once('templates/getitem.php')
?>


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
        
        <form method="POST" name="submit">
          <div class="form-group mb-4">
              <h3 class="display-10">Borrow Page</h3>
          </div>

          <!--id NUMBER-->
          <label for="itemname1">Search ID and Equipments</label>
          <div class="input-group mb-3"> 
            <input type="text" class="form-control" name="idnumber" id="search" placeholder="ID number of Student or Faculty" aria-label="Recipient's username" aria-describedby="button-addon2">
            <div class="input-group-append">             
              <button class="btn btn-primary" onclick="return confirm ('Y/N')"  href="javascript:toggleDiv('myContent');" type="submit"  id="Find" name="Find" value="Find Data">
                <i class="fas fa-search"></i>
              </button>
              <button class="btn btn-primary" type="clear" >
                <i class="fa fa-redo"></i>
              </button>
            </div>
          </div>
          <!--Grid colmun equipments-->
         
          <!--Grid colmun equipments-->
          <label for="itemname1">Equipments</label>
          <div class="form-row md-6">
            <div class="form-group col-md">
                <div class="input-group">               
                  <select class="form-control" name="itemname1" id="itemname1" >
                  <option disabled selected>Equipement Name and Code 1</option>
                  <option>None</option>
                  <?php include('templates/selectitem.php');?>
                  </select>
                </div>
            </div>
          <!--Grid colmun equipments-->
            <div class="form-group col-md">
                <div class="input-group">
                  <select class="form-control" name="itemname2" id="itemname2" >
                  <option disabled selected>Equipement Name and Code 2</option>
                  <option>None</option>
                  <?php include('templates/selectitem.php');?>
                  </select>
                </div>
            </div>
          </div>
          <!--Grid colmun equipments-->
          <div class="form-row md-6">
            <div class="form-group col-md">
                <div class="input-group">
                  <select class="form-control" name="itemname3" id="itemname3" >
                  <option disabled selected>Equipement Name and Code 3</option>
                  <option>None</option>
                  <?php include('templates/selectitem.php');?>
                  </select>
                </div>
            </div>
          <!--Grid colmun equipments-->
            <div class="form-group col-md">
                <div class="input-group">
                  <select class="form-control" name="itemname4" id="itemname4" >
                  <option disabled selected>Equipement Name and Code 4</option>
                  <option >None</option>
                  <?php include('templates/selectitem.php');?>
                  </select>
                </div>
            </div>
          </div>
       
        <div name="result" id="result">
          <div class="form-row">
            <!-- LastName input -->
            <div class="form-group col-md">
              <label for="inputLname">ID Number</label>
              <input type="text" class="form-control" readonly name="id_number" id="inputLname" value="<?php echo $id_number;?>" placeholder="ID number of Student or Faculty" >
            </div>
          </div>

          <!--Grid row fullname-->
          <div class="form-row">
            <!-- LastName input -->
            <div class="form-group col-md-6">
              <label for="inputLname">Last Name</label>
              <input type="text" class="form-control" readonly name="LastName" id="inputLname"  value="<?php echo $LastName;?>" placeholder="Last Name" >
            </div>
            <!-- FirstName input -->
            <div class="form-group col-md-6">
              <label for="inputFname">First Name</label>
              <input type="text" class="form-control" readonly name="FirstName" id="inputFname" value="<?php echo $FirstName;?>" placeholder="First Name" >
            </div>
        </div>

        <div class="form-row">
            <!-- ContactNum input -->
            <div class="form-group col-md-6">
              <label for="inputContactnum">Contact Number</label>
              <input type="text" class="form-control" readonly name="ContactNumber" value="<?php echo $ContactNumber;?>" id="inputContactnum" placeholder="+63XXXXXXXXXX" >
            </div>
            <!-- Date input -->
            <div class="form-group col-md-6">
              <label for="Datenow"> Date</label>
              <input type="text" id="Datenow" name="Btime" readonly class="form-control">
            </div>    
        </div>

       
        <div class="form-row" name='1'> 
            <div class="form-group col-md-5">
            <label for="itemname">Item name</label>
              <input type="text" class="form-control" name="1itemname" id="itemname" value="<?php echo $itemname1;?>" placeholder="Item name 1" >
            </div>
                      
            <div class="form-group col-md">
            <label for="itemname">Quantity Left</label>
              <input type="text" class="form-control" name="1quantity" id="quantity" value="<?php echo $quantity1;?>" placeholder="Quantity Left ">
            </div>

            <div class="form-group col-md">
            <label for="itemname">Quantity</label>
              <input type="text" class="form-control" name="quantity1" id="quantity1" placeholder="Enter Quantity">
            </div>
            
        </div>

        <div class="form-row" name='2'>     
            
            <div class="form-group col-md-5">
              <input type="text" class="form-control" name="2itemname" id="itemname" value="<?php echo $itemname2;?>" placeholder="Item name 2" >
            </div>
                      
            <div class="form-group col-md">
              <input type="text" class="form-control" name="2quantity" id="quantity" value="<?php echo $quantity2;?>" placeholder="Quantity Left">
            </div>

            <div class="form-group col-md">
              <input type="text" class="form-control" name="quantity2" id="quantity2" placeholder="Enter Quantity">
            </div>
            
        </div>

        <div class="form-row" name='3'>     
            
            <div class="form-group col-md-5">
              <input type="text" class="form-control" name="3itemname" id="itemname" value="<?php echo $itemname3;?>" placeholder="Item name 3">
            </div>
                      
            <div class="form-group col-md">
              <input type="text" class="form-control" name="3quantity" id="quantity" value="<?php echo $quantity3;?>" placeholder="Quantity Left">
            </div>

            <div class="form-group col-md">
              <input type="text" class="form-control" name="quantity3" id="quantity3" placeholder="Enter Quantity">
            </div>
            
        </div>

        <div class="form-row" name='4'>     
            
            <div class="form-group col-md-5">
              <input type="text" class="form-control" name="4itemname" id="itemname" value="<?php echo $itemname4;?>" placeholder="Item name 4">
            </div>
                      
            <div class="form-group col-md">
              <input type="text" class="form-control" name="4quantity" id="quantity" value="<?php echo $quantity4;?>" placeholder="Quantity Left">
            </div>

            <div class="form-group col-md">
              <input type="text" class="form-control" name="quantity4" id="quantity4" placeholder="Enter Quantity">
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
            <button type="submit"  name="submit" onclick="return  confirm('Y/N') " value="Submit"  class="btn btn-primary btn-lg">Add item</button>
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