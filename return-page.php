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
          <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-search"></i>
                Search Box</div>
                <div class="card-body">
                <!--id NUMBER-->
                <label for="itemname1">Search ID</label>
                <div class="input-group mb-3"> 
                  <input type="text" class="form-control" name="idnumber" id="search" maxlength= "10" placeholder="Enter ID number of Student or Faculty" aria-label="Recipient's username" aria-describedby="button-addon2">
                  <div class="input-group-append">             
                    <button class="btn btn-primary" 
                    onclick="return confirm ('Did you input the Id Number?\nYes/No')" 
                    type="submit"  id="Find" name="Find" value="Find Data">
                      <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-primary" type="clear" >
                  <i class="fa fa-redo"></i>
                </button>
              </div>
            </div>
        </div>
      </div> 
          <!--Grid colmun equipments-->
          
          <div class="card mb-3">
              <div class="card-header">
                      <i class="far fa-file"></i>
                      Result Box</div>
                <div class="card-body">                        
            <div name="result" id="result">
              
            <div class="form-row">
              <!-- LastName input -->
              <div class="form-group col-md">
                <label for="id_number">ID Number</label>
                <input type="text" class="form-control" readonly name="id_number" id="id_number" value="<?php echo $id_number;?>" placeholder="ID number of Student or Faculty" >
              </div>
            </div>

            <div class="form-row">
                <!-- Full Name input -->
                <div class="form-group col-md-6">
                  <label for="FullName">Full Name</label>
                  <input type="text" class="form-control" readonly name="FullName" id="FullName" value="<?php echo $FullName;?>" placeholder="Last Name , First Name">
                </div>
                <!-- Clerk Name input -->
                <div class="form-group col-md-6">
                  <label for="Clerk">Clerk Name</label>
                  <input type="text" class="form-control" readonly id="Clerk" name="Clerk" value="<?php echo $Clerk;?>" placeholder="Clerk Name" >
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
                  <label for="Rtime">Date Today</label>
                  <input type="text" id="Rtime" name="Rtime" readonly class="form-control">
                </div>
                <div class="form-group col-md-3">
                  <label for="Btime">Date Borrowed</label>
                  <input type="text" id="Btime" name="Btime" value="<?php echo $Borrowed_time;?>" readonly class="form-control">
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
                  <input type="text" class="form-control" readonly name="itemname1" id="itemname1" value="<?php echo $itemname1;?>" placeholder="Item name 1" >
                </div>
                <div class="form-group col-md">
                  <input type="text" class="form-control" readonly name="quantity1" id="quantity1" value="<?php echo $quantity1;?>" placeholder="Quantity Left ">
                </div>
              </div>
            <!--item two-->
            <div class="form-row" name='2' id='item2'>                   
                <div class="form-group col-md-7">
                  <input type="text" class="form-control" readonly name="itemname2" id="itemname2" value="<?php echo $itemname2;?>" placeholder="Item name 2" >
                </div>
                <div class="form-group col-md">
                  <input type="text" class="form-control" readonly name="quantity2" id="quantity2" value="<?php echo $quantity2;?>" placeholder="Quantity Left">
                </div>     
            </div>
            <!--item three-->
            <div class="form-row" name='3' id='item3'>     
                <div class="form-group col-md-7">
                  <input type="text" class="form-control" readonly name="itemname3" id="itemname3" value="<?php echo $itemname3;?>" placeholder="Item name 3">
                </div>        
                <div class="form-group col-md">
                  <input type="text" class="form-control" readonly name="quantity3" id="quantity3" value="<?php echo $quantity3;?>" placeholder="Quantity Left">
                </div>
            </div>
            <!--item four-->
            <div class="form-row" name='4' id='item4'>     
                <div class="form-group col-md-7">
                  <input type="text" class="form-control" readonly name="itemname4" id="itemname4" value="<?php echo $itemname4;?>" placeholder="Item name 4">
                </div>       
                <div class="form-group col-md">
                  <input type="text" class="form-control" readonly name="quantity4" id="quantity4" value="<?php echo $quantity4;?>" placeholder="Quantity Left">
                </div>            
            </div>
            <div class="form-row">
              <!-- Purpose input -->
              <div class="form-group col-md">
                <input type="text" class="form-control" readonly value="<?php echo $Purpose;?>" name="Purpose" id="Purpose" placeholder="Purpose" >
              </div>
            </div>
            <div class="form-row">
              <!-- Remarks input -->
              <div class="form-group col-md">
                <input type="text" class="form-control" name="Remarks" id="Remarks" placeholder="Remarks" >
              </div>
            </div>
          </div>

          <div class="form-group mb-4">
            <?php include('templates/returnitems.php');?>
              <div class="btn-group">
                <button type="return"  name="return" onclick="return" value="return"  class="btn btn-primary btn-lg">Return</button>
                <button type="clear" class="btn btn-primary btn-lg">Clear</button>
              </div>
            </div>
        </div>
      </div>
        
        <!--DataTables Borrowers-->
        <div class="card mb-4">
          <div class="card-header">
            <i class="fas fa-table"></i>
              Table Return</div>             
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="200%" cellspacing="0">
                  <thead>
										<tr>
										<th>#</th>
										<th>ID Number</th>
                    <th>FullName</th>
										<th>Contact Number</th>
										<th>Borrowed</th>
										<th>Returned</th>
                    <th>Clerk</th>
                    <th>Clerk</th>
                    <th>Remarks</th>
										<th>Item 1</th>
										<th>Qty 1</th>
                    <th>Item 2</th>
										<th>Qty 2</th>
                    <th>Item 3</th>
										<th>Qty 3</th>
                    <th>Item 4</th>
										<th>Qty 4</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
										<th>#</th>
                    <th>ID Number</th>
                    <th>FullName</th>
										<th>Contact Number</th>
										<th>Borrowed</th>
										<th>Returned</th>
                    <th>Clerk</th>
                    <th>Clerk</th>
                    <th>Remarks</th>
										<th>Item 1</th>
										<th>Qty 1</th>
                    <th>Item 2</th>
										<th>Qty 2</th>
                    <th>Item 3</th>
										<th>Qty 3</th>
                    <th>Item 4</th>
										<th>Qty 4</th>
										</tr>
									</tfoot>
									<tbody>
									<?php $sql = "SELECT * from  returned_item ";
                      $query = $dbh -> prepare($sql);
                        $query->execute();
                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                        $cnt=1;
                    if($query->rowCount() > 0)
                      {foreach($results as $result)
                        {				
                    ?>	
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($result->id_number);?></td>
                      <td><?php echo htmlentities($result->FullName);?></td>
											<td><?php echo htmlentities($result->ContactNumber);?></td>
											<td><?php echo htmlentities($result->Borrowed_time);?></td>
	                    <td><?php echo htmlentities($result->Return_time);?></td>
                      <td><?php echo htmlentities($result->Clerk);?></td>
                      <td><?php echo htmlentities($result->ClerkR);?></td>
                      <td><?php echo htmlentities($result->Remarks);?></td>
											<td><?php echo htmlentities($result->Item1);?></td>
											<td><?php echo htmlentities($result->quantity1);?></td>
                      <td><?php echo htmlentities($result->Item2);?></td>
											<td><?php echo htmlentities($result->quantity2);?></td>
                      <td><?php echo htmlentities($result->Item3);?></td>
											<td><?php echo htmlentities($result->quantity3);?></td>
                      <td><?php echo htmlentities($result->Item4);?></td>
											<td><?php echo htmlentities($result->quantity4);?></td>
										</tr>
										<?php $cnt=$cnt+1; }} ?>	
									</tbody>
                </table>
              </div>
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
  
  <?php include('templates/scripts.php')?>

</body>

<script type="text/javascript">

/** date for today **/
function getDate(){
   var todaydate = new Date();
   var day = todaydate.getDate();
   var month = todaydate.getMonth() + 1;
   var year = todaydate.getFullYear();
   var datestring = month + "/" + day + "/" + year;
   document.getElementById("Rtime").value = datestring;
  } 
getDate(); 

/** no form resubmision javascript dont touch**/
  if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
  }
</script>

</html>