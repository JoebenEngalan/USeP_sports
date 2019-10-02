<?php 

$id = $_SESSION['id'];
$sql = $dbh->prepare("SELECT * FROM `staff_table` WHERE `Email`='$id'");
$sql->execute();
$fetch = $sql->fetch();
$fetch['LastName'];

if(isset($_POST['Update']))
{
// get values form input text and number  
$itemname=$_POST['itemname'];
$description=$_POST['description'];
$category = (isset($_POST['category']) ? $_POST['category'] : '');
$quantity=$_POST['quantity'];
  
$clerk = $fetch['LastName'];

$sql = "SELECT * FROM equipment WHERE ItemName = :itemname";
$pdoResult = $dbh->prepare($sql);
//set your id to the query id
$pdoExec = $pdoResult->execute(array(":itemname"=>$itemname));

if($pdoExec)
  {
    // if id exist 
    // show data in inputs
    if($pdoResult->rowCount()>0)
    {
      // mysql query to Update data  
      $sql = "UPDATE `equipment` SET `Description`=:description,`Category`=:category,`quantity`=:quantity,`Clerk`=:id
      WHERE `ItemName` = :itemname";
      $pdoResult = $dbh->prepare($sql);

      $pdoExec=$pdoResult->execute(array(":description"=>$description,":category"=>$category,":quantity"=>$quantity,":id"=>$clerk,":itemname"=>$itemname));

      if($pdoExec)
      {
        echo "<script>alert('You successfully Update an item!');</script>";
      }else{
        echo "<script>alert('ERROR Update to an item!');</script>";
      }
      //
    }else{
        echo "<script>alert('No Data With This item Name!');</script>";
      }
  }else{
    echo "<script>alert('ERROR Data Not Inserted');</script>";
  }   
}
?>