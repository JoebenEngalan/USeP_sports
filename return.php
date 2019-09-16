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
include_once('templates/findborrow_return.php');
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
          <li class="breadcrumb-item active">Return Page</li>
        </ol>

        <!-- Page Content -->
        <!-- Borrowing form grid -->              
        
        <form method="POST" name="submit">
          <div class="form-group mb-4">
              <h3 class="display-10">Return Page</h3>
          </div>

          <!--id NUMBER-->
          <label for="itemname1">Search ID</label>
          <div class="input-group mb-3"> 
            <input type="text" class="form-control" name="idnumber" id="search" maxlength= "10" placeholder="Enter ID number of Student or Faculty" aria-label="Recipient's username" aria-describedby="button-addon2">
            <div class="input-group-append">             
              <button class="btn btn-primary" 
              onclick="return confirm ('Did you input the Id Number and check the Equipment box?\nYes/No')" 
              type="submit"  id="Find" name="Find" value="Find Data">
                <i class="fas fa-search"></i>
              </button>
              <button class="btn btn-primary" type="clear" >
                <i class="fa fa-redo"></i>
              </button>
            </div>
          </div>
          <!--Grid colmun equipments-->
                        
        <div name="result" id="result">
          <div class="form-row">
            <!-- LastName input -->
            <div class="form-group col-md">
              <label for="inputLname">ID Number</label>
              <input type="text" class="form-control" readonly name="id_number" id="id_number" value="<?php echo $id_number;?>" placeholder="ID number of Student or Faculty" >
            </div>
          </div>

          <!--Grid row fullname-->
          <div class="form-row">
            <!-- LastName input -->
            <div class="form-group col-md-6">
              <label for="inputLname">Last Name</label>
              <input type="text" class="form-control" readonly required="required" name="LastName" id="inputLname"  value="<?php echo $LastName;?>" placeholder="Last Name" >
            </div>
            <!-- FirstName input -->
            <div class="form-group col-md-6">
              <label for="inputFname">First Name</label>
              <input type="text" class="form-control" readonly required="required" name="FirstName" id="inputFname" value="<?php echo $FirstName;?>" placeholder="First Name" >
            </div>
        </div>

        <div class="form-row">
            <!-- ContactNum input -->
            <div class="form-group col-md-6">
              <label for="inputContactnum">Contact Number</label>
              <input type="text" class="form-control" readonly required="required" name="ContactNumber" id="ContactNumber" value="<?php echo $ContactNumber;?>" id="inputContactnum" placeholder="+63XXXXXXXXXX" >
            </div>
            <!-- Date input -->
            <div class="form-group col-md-3">
              <label for="Datenow">Date Today</label>
              <input type="text" id="Datenow" name="Btime" readonly class="form-control">
            </div>
            <div class="form-group col-md-3">
              <label for="Datenow">Date Borrowed</label>
              <input type="text" id="Datenow" value="<?php echo $Borrowed_time;?>" readonly class="form-control">
            </div>    
        </div>
   
        <!-- label -->
        <div class="form-row" name='label'>
          <div class="form-group col-md-7">
            <h5>Item name</h5>
          </div>
          <div class="form-group col-md">
            <h5>Quantity</h5>
          </div>         
        </div>

        <!-- item one-->
        <div class="form-row" name='1' id='item1'> 
            <div class="form-group col-md-7">
              <input type="text" class="form-control" readonly name="itemname" id="1itemname" value="<?php echo $itemname1;?>" placeholder="Item name 1" >
            </div>
                      
            <div class="form-group col-md">
              <input type="text" class="form-control" readonly name="quantity" id="1quantity" value="<?php echo $quantity1;?>" placeholder="Quantity Left ">
            </div>

          </div>

        <!--item two-->
        <div class="form-row" name='2' id='item2'>     
            
            <div class="form-group col-md-7">
              <input type="text" class="form-control" readonly name="itemname" id="itemname" value="<?php echo $itemname2;?>" placeholder="Item name 2" >
            </div>
                      
            <div class="form-group col-md">
              <input type="text" class="form-control" readonly name="quantity" id="2quantity" value="<?php echo $quantity2;?>" placeholder="Quantity Left">
            </div>
            
        </div>
        <!--item three-->
        <div class="form-row" name='3' id='item3'>     
            
            <div class="form-group col-md-7">
              <input type="text" class="form-control" readonly name="itemname" id="itemname" value="<?php echo $itemname3;?>" placeholder="Item name 3">
            </div>
                      
            <div class="form-group col-md">
              <input type="text" class="form-control" readonly name="quantity" id="quantity" value="<?php echo $quantity3;?>" placeholder="Quantity Left">
            </div>
            
        </div>
        
        <!--item four-->
        <div class="form-row" name='4' id='item4'>     
            
            <div class="form-group col-md-7">
              <input type="text" class="form-control" readonly name="itemname" id="itemname" value="<?php echo $itemname4;?>" placeholder="Item name 4">
            </div>
                      
            <div class="form-group col-md">
              <input type="text" class="form-control" readonly name="quantity" id="quantity" value="<?php echo $quantity4;?>" placeholder="Quantity Left">
            </div>
        
        </div>
        </div>

        <div class="form-group mb-4">
        
          <div class="btn-group">
            <button type="submit"  name="submit" onclick="return confirm('Y/N') " value="Submit"  class="btn btn-primary btn-lg">Return</button>
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