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
              <button class="btn btn-primary" onclick="return confirm ('Y/N')" type="submit"  id="Find" name="Find" value="Find Data">
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
                  
                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="chkPass1" onclick="EnableDisableTextBox(this)"/>
                    <label class="custom-control-label" for="chkPass1">1</label>
                  </div>                
                  
                  <select class="form-control" name="itemname1" id="itemname1" disabled="disabled">
                  <option disabled selected>Equipement Name and Code 1</option>
                  <option>None</option>
                  <?php include('templates/selectitem.php');?>
                  </select>
                </div>
            </div>
          <!--Grid colmun equipments-->
            <div class="form-group col-md">
                <div class="input-group">
                  
                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="chkPass2" onclick="EnableDisableTextBox(this)">
                    <label class="custom-control-label" for="chkPass2">2</label>
                  </div> 
                  
                  <select class="form-control" name="itemname2" id="itemname2" disabled="disabled">
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
                  
                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="chkPass3" onclick="EnableDisableTextBox(this)">
                    <label class="custom-control-label" for="chkPass3">3</label>
                  </div>  
                  
                  <select class="form-control" name="itemname3" id="itemname3" disabled="disabled">
                  <option disabled selected>Equipement Name and Code 3</option>
                  <option>None</option>
                  <?php include('templates/selectitem.php');?>
                  </select>
                </div>
            </div>
          <!--Grid colmun equipments-->
            <div class="form-group col-md">
                <div class="input-group">
                  
                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="chkPass4" onclick="EnableDisableTextBox(this)">
                    <label class="custom-control-label" for="chkPass4">4</label>
                  </div> 

                  <select class="form-control" name="itemname4" id="itemname4" disabled="disabled" >
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
   
        <!-- label -->
        <div class="form-row" name='label'>
          <div class="form-group col-md-5">
            <h5>Item name</h5>
          </div>
          <div class="form-group col-md">
            <h5>Quantity Left</h5>
          </div>
          <div class="form-group col-md">
            <h5>Quantity</h5>
          </div>         
        </div>

        <!-- item one-->
        <div class="form-row" name='1' id='item1' style="display: none"> 
            <div class="form-group col-md-5">
              <input type="text" class="form-control" name="1itemname" id="1itemname" value="<?php echo $itemname1;?>" placeholder="Item name 1" >
            </div>
                      
            <div class="form-group col-md">
              <input type="text" class="form-control" name="1quantity" id="quantity" value="<?php echo $quantity1;?>" placeholder="Quantity Left ">
            </div>

            <div class="form-group col-md">
              <input type="text" class="form-control" name="quantity1" id="quantity1" placeholder="Enter Quantity">
            </div>
            
        </div>

        <!--item two-->
        <div class="form-row" name='2' id='item2' style="display: none">     
            
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
        <!--item three-->
        <div class="form-row" name='3' id='item3' style="display: none">     
            
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
        
        <!--item four-->
        <div class="form-row" name='4' id='item4' style="display: none">     
            
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
            <button type="submit"  name="submit" onclick="return confirm('Y/N') " value="Submit"  class="btn btn-primary btn-lg">Borrow</button>
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
 
$(function () {
    $("#chkPass1").click(function () {
    if ($(this).is(":checked")) {
      $("#itemname1").removeAttr("disabled");
      $("#itemname1").focus();
      $("#item1").fadeIn();
      } else {
      $("#itemname1").attr("disabled", "disabled");
      $("#item1").fadeOut();
      }
    });
  });

  $(function () {
    $("#chkPass2").click(function () {
    if ($(this).is(":checked")) {
      $("#itemname2").removeAttr("disabled");
      $("#itemname2").focus();
      $("#item2").fadeIn();
      } else {
      $("#itemname2").attr("disabled", "disabled");
      $("#item2").fadeOut();
      }
    });
  });

  $(function () {
    $("#chkPass3").click(function () {
    if ($(this).is(":checked")) {
      $("#itemname3").removeAttr("disabled");
      $("#itemname3").focus();
      $("#item3").fadeIn();
      } else {
      $("#itemname3").attr("disabled", "disabled");
      $("#item3").fadeOut();
      }
    });
  });

  $(function () {
    $("#chkPass4").click(function () {
    if ($(this).is(":checked")) {
      $("#itemname4").removeAttr("disabled");
      $("#itemname4").focus();
      $("#item4").fadeIn();
    } else {
      $("#itemname4").attr("disabled", "disabled");
      $("#item4").fadeOut();
      }
    });
  });
  
  function App() {}

  App.prototype.setState = function(state) {
    localStorage.setItem('checked', state);
  }

  App.prototype.getState = function() {
    return localStorage.getItem('checked');
  }

  function init() {
    var app = new App();
    var state = app.getState();
    var checkbox = document.querySelector('#chkPass1');

    if (state == 'true') {
      checkbox.checked = true;
    }

    checkbox.addEventListener('click', function() {
        app.setState(checkbox.checked);
    });
  }

  init();
  
</script>

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