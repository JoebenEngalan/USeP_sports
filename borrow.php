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
<?php 
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
        <div class="mb-4">
            <form method="POST" name="submit">
                    <div class="form-group mb-4">
                        <h3 class="display-10">Borrow Page</h3>
                    </div>
                    <!--id NUMBER-->

                  <div class="card mb-3">
                    <div class="card-header">
                      <i class="fas fa-search"></i>
                      Search Box</div>
                    <div class="card-body">
                      <label for="itemname1">Search ID and Equipments</label>
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
                              <option disabled selected>Equipement Name and Quantity 1</option>
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
                              <option disabled selected>Equipement Name and Quantity 2</option>
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
                              <option disabled selected>Equipement Name and Quantity 3</option>
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
                              <option disabled selected>Equipement Name and Quantity 4</option>
                              <?php include('templates/selectitem.php');?>
                              </select>

                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                    

              <div class="card mb-3">
              <div class="card-header">
                      <i class="far fa-file	"></i>
                      Result Box</div>
                <div class="card-body">
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
                        <input type="text" class="form-control" readonly required="required" name="ContactNumber" id="ContactNumber"value="<?php echo $ContactNumber;?>" id="inputContactnum" placeholder="+63XXXXXXXXXX" >
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
                    <div class="form-group col-md">
                      <h5>Remains</h5>
                    </div>         
                  </div>

                  <!-- item one-->
                  <div class="form-row" name='1' id='item1'> 
                      <div class="form-group col-md-5">
                        <input type="text" class="form-control" readonly name="1itemname" id="1itemname" value="<?php echo $itemname1;?>" placeholder="Item name 1" >
                      </div>
                                
                      <div class="form-group col-md">
                        <input type="text" class="form-control" readonly name="1quantity" id="1quantity" value="<?php echo $quantity1;?>" placeholder="Quantity Left ">
                      </div>

                      <div class="form-group col-md">
                        <input type="text" class="form-control" name="quantity1" id="quantity1" placeholder="Enter Quantity">
                      </div>

                      <div class="form-group col-md">
                        <input type="text" readonly name="subt1" id='subt1' class="form-control"  placeholder="Quantity">
                      </div>   
                  
                    </div>

                  <!--item two-->
                  <div class="form-row" name='2' id='item2'>     
                      
                      <div class="form-group col-md-5">
                        <input type="text" class="form-control" readonly name="2itemname" id="itemname" value="<?php echo $itemname2;?>" placeholder="Item name 2" >
                      </div>
                                
                      <div class="form-group col-md">
                        <input type="text" class="form-control" readonly name="2quantity" id="2quantity" value="<?php echo $quantity2;?>" placeholder="Quantity Left">
                      </div>

                      <div class="form-group col-md">
                        <input type="text" class="form-control" name="quantity2" id="quantity2" placeholder="Enter Quantity">
                      </div>

                      <div class="form-group col-md">
                        <input type="text" readonly name="subt2" id='subt2' class="form-control"  placeholder="Quantity">
                      </div> 
                      
                  </div>
                  <!--item three-->
                  <div class="form-row" name='3' id='item3'>     
                      
                      <div class="form-group col-md-5">
                        <input type="text" class="form-control" readonly name="3itemname" id="itemname" value="<?php echo $itemname3;?>" placeholder="Item name 3">
                      </div>
                                
                      <div class="form-group col-md">
                        <input type="text" class="form-control" readonly name="3quantity" id="3quantity" value="<?php echo $quantity3;?>" placeholder="Quantity Left">
                      </div>

                      <div class="form-group col-md">
                        <input type="text" class="form-control" name="quantity3" id="quantity3" placeholder="Enter Quantity">
                      </div>

                      <div class="form-group col-md">
                        <input type="text" readonly name="subt3" id='subt3' class="form-control"  placeholder="Quantity">
                      </div> 
                      
                  </div>
                  
                  <!--item four-->
                  <div class="form-row" name='4' id='item4'>     
                      
                      <div class="form-group col-md-5">
                        <input type="text" class="form-control" readonly name="4itemname" id="itemname" value="<?php echo $itemname4;?>" placeholder="Item name 4">
                      </div>
                                
                      <div class="form-group col-md">
                        <input type="text" class="form-control" readonly name="4quantity" id="4quantity" value="<?php echo $quantity4;?>" placeholder="Quantity Left">
                      </div>

                      <div class="form-group col-md">
                        <input type="text" class="form-control" name="quantity4" id="quantity4" placeholder="Enter Quantity">
                      </div>

                      <div class="form-group col-md">
                        <input type="text" readonly name="subt4" id='subt4' class="form-control"  placeholder="Quantity"> 
                      </div> 
                  
                  </div>
                      
                    <div class="form-row">
                      <div class="form-group col-md-12">
                      <input type="text" class="form-control" id="inputRemarks" name="remarks" placeholder="Remarks">
                    </div>

                  <div class="form-group mb-4">
                    <?php include('templates/borrowitems.php');?>
                      <div class="btn-group">
                        <button type="submit"  name="submit" onclick="return confirm('Y/N') " value="Submit"  class="btn btn-primary btn-lg">Borrow</button>
                        <button type="clear" class="btn btn-primary btn-lg">Clear</button>
                      </div>
                  </div>
                </div>
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
  
  <?php include('templates/scripts.php')?>

</body>

<script type="text/javascript">

/** checkbox enable and disable function dropbox **/
$(function () {
    $("#chkPass1").click(function () {
    if ($(this).is(":checked")) {
      $("#itemname1").removeAttr("disabled");
      $("#itemname1").focus();
      } else {
      $("#itemname1").attr("disabled", "disabled");
      }
    });
  });

  $(function () {
    $("#chkPass2").click(function () {
    if ($(this).is(":checked")) {
      $("#itemname2").removeAttr("disabled");
      $("#itemname2").focus();
      } else {
      $("#itemname2").attr("disabled", "disabled");
      }
    });
  });

  $(function () {
    $("#chkPass3").click(function () {
    if ($(this).is(":checked")) {
      $("#itemname3").removeAttr("disabled");
      $("#itemname3").focus();
      } else {
      $("#itemname3").attr("disabled", "disabled");
      }
    });
  });

  $(function () {
    $("#chkPass4").click(function () {
    if ($(this).is(":checked")) {
      $("#itemname4").removeAttr("disabled");
      $("#itemname4").focus();
    } else {
      $("#itemname4").attr("disabled", "disabled");
      }
    });
  });

  /** auto subtract quantity **/

  $(function() {
  $("#1quantity, #quantity1").on("keydown keyup", subt);
  function subt() 
    {
      $("#subt1").val(Number($("#1quantity").val()) - Number($("#quantity1").val()));
    }
  });

  $(function() {
  $("#2quantity, #quantity2").on("keydown keyup", subt);
  function subt() 
    {
      $("#subt2").val(Number($("#2quantity").val()) - Number($("#quantity2").val()));
    }
  });

  $(function() {
  $("#3quantity, #quantity3").on("keydown keyup", subt);
  function subt() 
    {
      $("#subt3").val(Number($("#3quantity").val()) - Number($("#quantity3").val()));
    }
  });

  $(function() {
  $("#4quantity, #quantity4").on("keydown keyup", subt);
  function subt() 
    {
      $("#subt4").val(Number($("#4quantity").val()) - Number($("#quantity4").val()));
    }
  });

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