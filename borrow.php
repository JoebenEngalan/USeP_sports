<?php
//dont touch this session
session_start();
include('includes/config.php');
if(!isset($_SESSION["id"])) 

{header('location:index.php');
  include('location:logout.php');}
?> 

<?php
//error_reporting(0);
if(isset($_POST['submit']))
{
$id_number=$_POST["id_number"];
$FirstName=$_POST["FirstName"];
$LastName=$_POST["LastName"];
$ContactNumber = $_POST["ContactNumber"];
$item1=$_POST['item1'];
$item2=$_POST['item2'];
$item3=$_POST['item3'];
$item4=$_POST['item4'];
$item5=$_POST['item5'];
$remarks=$_POST['remarks'];
$quantity1=$_POST['quantity1'];
$quantity2=$_POST['quantity2'];
$quantity3=$_POST['quantity3'];
$quantity4=$_POST['quantity4'];
$quantity5=$_POST['quantity5'];
$Btime=$_POST['Btime'];
$status=1;

$sql= "INSERT INTO Borrowed_Item (id_number,FirstName,LastName,ContactNumber,Item,quantity,Remarks,Borrowed_time,status) 
       VALUES
        (:id_number,:FirstName,:LastName,:ContactNumber,:item1,:quantity1,:remarks,:Btime,:status), 
        (:id_number,:FirstName,:LastName,:ContactNumber,:item2,:quantity2,:remarks,:Btime,:status),
        (:id_number,:FirstName,:LastName,:ContactNumber,:item3,:quantity3,:remarks,:Btime,:status),
        (:id_number,:FirstName,:LastName,:ContactNumber,:item4,:quantity4,:remarks,:Btime,:status),
        (:id_number,:FirstName,:LastName,:ContactNumber,:item5,:quantity5,:remarks,:Btime,:status)";

$query = $dbh->prepare($sql);
$query->bindParam(':id_number',$id_number,PDO::PARAM_STR);
$query->bindParam(':FirstName',$FirstName,PDO::PARAM_STR);
$query->bindParam(':LastName',$LastName,PDO::PARAM_STR);
$query->bindParam(':ContactNumber',$ContactNumber,PDO::PARAM_STR);
$query->bindParam(':item1',$item1,PDO::PARAM_STR);
$query->bindParam(':item2',$item2,PDO::PARAM_STR);
$query->bindParam(':item3',$item3,PDO::PARAM_STR);
$query->bindParam(':item4',$item4,PDO::PARAM_STR);
$query->bindParam(':item5',$item5,PDO::PARAM_STR);
$query->bindParam(':remarks',$remarks,PDO::PARAM_STR);
$query->bindParam(':quantity1',$quantity1,PDO::PARAM_STR);
$query->bindParam(':quantity2',$quantity2,PDO::PARAM_STR);
$query->bindParam(':quantity3',$quantity3,PDO::PARAM_STR);
$query->bindParam(':quantity4',$quantity4,PDO::PARAM_STR);
$query->bindParam(':quantity5',$quantity5,PDO::PARAM_STR);
$query->bindParam(':Btime',$Btime,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{echo "<script>alert('Success');</script>";}
else 
{echo "<script>alert('Something went wrong. Please try again');</script>";}
}

?>


<?php
// set data in input text
$id_number = "";
$FirstName = "";
$LastName = "";
$ContactNumber = "";

if(isset($_POST['Find']))
{
    // id to search
    $id_number = $_POST['id_number'];
    // mysql search query
    $sql = "SELECT * FROM borrower_table WHERE id_number = :id_number";  
    $pdoResult = $dbh->prepare($sql);  
    //set your id to the query id
    $pdoExec = $pdoResult->execute(array(":id_number"=>$id_number));
    
    if($pdoExec)
    {
            // if id exist 
            // show data in inputs
        if($pdoResult->rowCount()>0)
        {
            foreach($pdoResult as $row)
            {
                $id_number= $row['id_number'];
                $FirstName = $row['FirstName'];
                $LastName = $row['LastName'];
                $ContactNumber = $row['ContactNumber'];
            }
        }
            // if the id not exist
            // show a message and clear inputs
        else{
        echo "<script>alert('No Data With This ID');</script>";
        }
    }else{
        echo "<script>alert('ERROR Data Not Inserted');</script>";
    }
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
              <input type="text" class="form-control" name="LastName"  id="inputLname"  value="<?php echo $LastName;?>" placeholder="Last Name" >
            </div>
            <!-- FirstName input -->
            <div class="form-group col-md-6">
              <label for="inputFname">First Name</label>
              <input type="text" class="form-control" name="FirstName"  id="inputFname" value="<?php echo $FirstName;?>" placeholder="First Name" >
            </div>
        </div>

        <div class="form-row">
            <!-- ContactNum input -->
            <div class="form-group col-md-6">
              <label for="inputContactnum">Contact Number</label>
              <input type="text" class="form-control" name="ContactNumber" value="<?php echo $ContactNumber;?>" readonly  id="inputContactnum" placeholder="+63XXXXXXXXXX" >
            </div>
            <!-- Date input -->
            <div class="form-group col-md-6">
              <label for="Datenow"> Date</label>
              <input type="text" id="Datenow" name="Btime" class="form-control">
            </div>          
        </div>

        <div class="form-group mb-4">
          <h3 class="display-10">Item Borrowed</h3>
        </div>

        <div class="form-row">
            <div class="form-group col-md-8">
            <select type="text" class="form-control" name="item1" id="inputDept_Coll">
         
         <!-- select items from the database    -->
            <?php 
            $sql = "SELECT * from  equipment";

            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);
            $cnt=1;

            if($query->rowCount() > 0)
            {
            foreach($results as $result)
            {               
            ?>
            <option value="<?php echo htmlentities($result->ItemName);?>">
                  <?php echo htmlentities($result->ItemName);?>
                  </option>
                  <?php }} ?> 
            </select>
     
            </div>

            <div class="form-group col-md-2">
              <input type="text" class="form-control" name="quantity" id="inputQuantity" placeholder="Quantity">
            </div>

            <div class="form-group col-md-2">
              <input type="text" class="form-control" name="quantity1" id="inputQuantity" placeholder="Quantity">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-8">
            <select type="text" class="form-control" name="item2" id="inputDept_Coll">
         
         <!-- select items from the database    -->
            <?php 

            $sql = "SELECT * from  equipment";

            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);
            $cnt=1;

            if($query->rowCount() > 0)
            {
            foreach($results as $result)
              
            {               
            ?>
            <option value="<?php echo htmlentities($result->ItemName);?>">
                  <?php echo htmlentities($result->ItemName);?>
                  </option>
                  <?php }} ?> 
            </select>
     
            </div>

            <div class="form-group col-md-2">
              <input type="text" class="form-control" name="quantity" id="inputQuantity" placeholder="Quantity">
            </div>

            <div class="form-group col-md-2">
              <input type="text" class="form-control" name="quantity2" id="inputQuantity" placeholder="Quantity">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-8">
            <select type="text" class="form-control" name="item3" id="inputDept_Coll">
         
         <!-- select items from the database    -->
            <?php 
            $sql = "SELECT * from  equipment";

            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);
            $cnt=1;

            if($query->rowCount() > 0)
            {
            foreach($results as $result)
            {               
            ?>
            <option value="<?php echo htmlentities($result->ItemName);?>">
                  <?php echo htmlentities($result->ItemName);?>
                  </option>
                  <?php }} ?> 
            </select>
     
            </div>
            <div class="form-group col-md-2">
              <input type="text" class="form-control" name="quantity" id="inputQuantity" placeholder="Quantity">
            </div>
            <div class="form-group col-md-2">
              <input type="text" class="form-control" name="quantity3" id="inputQuantity" placeholder="Quantity">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-8">
            <select type="text" class="form-control" name="item4" id="inputDept_Coll">
         
         <!-- select items from the database    -->
            <?php 
            $sql = "SELECT * from  equipment";

            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);
            $cnt=1;

            if($query->rowCount() > 0)
            {
            foreach($results as $result)
            {               
            ?>
            <option value="<?php echo htmlentities($result->ItemName);?>">
                  <?php echo htmlentities($result->ItemName);?>
                  </option>
                  <?php }} ?> 
            </select>
     
            </div>
            <div class="form-group col-md-2">
              <input type="text" class="form-control" name="quantity" id="inputQuantity" placeholder="Quantity">
            </div>
            <div class="form-group col-md-2">
              <input type="text" class="form-control" name="quantity4" id="inputQuantity" placeholder="Quantity">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-8">
            <select type="text" class="form-control" name="item5" id="inputDept_Coll">
         
         <!-- select items from the database   -->
            <?php 
            $sql = "SELECT * from  equipment";

            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);
            $cnt=1;

            if($query->rowCount() > 0)
            {
            foreach($results as $result)
            {               
            ?>
            <option value="<?php echo htmlentities($result->ItemName);?>">
                  <?php echo htmlentities($result->ItemName);?> 
                  </option>
                  <?php }} ?> 
            </select>
     
            </div>
            
            <div class="form-group col-md-2">
              <input type="text" class="form-control" name="quantity" id="inputQuantity" placeholder="Quantity">
            </div>

            <div class="form-group col-md-2">
              <input type="text" class="form-control" name="quantity5" id="inputQuantity" placeholder="Quantity">
            </div>
          </div>
              
        <div class="form-row">
          <div class="form-group col-md-12">
              <input type="text" class="form-control" id="inputRemarks" name="remarks" placeholder="Remarks">
          </div>   
        </div>

        <div class="form-group mb-4">
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
  
  <!--scripts-->
  <?php include('templates/scripts.php')?>

</body>

<script>
//date for today
function getDate(){
   var todaydate = new Date();
   var day = todaydate.getDate();
   var month = todaydate.getMonth() + 1;
   var year = todaydate.getFullYear();
   var datestring = day + "/" + month + "/" + year;
   document.getElementById("Datenow").value = datestring;
  } 
getDate(); 

</script>
<!--no form resubmision javascript dont touch-->
<script>
  if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
  }
</script>

</html>