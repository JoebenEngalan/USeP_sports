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
  $category=$_POST['category'];
  $quantity=$_POST['quantity'];
  
  $clerk = $fetch['LastName'];
    
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
}
?>