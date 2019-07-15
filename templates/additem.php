<?php
include('includes/config.php');

if(isset($_POST['submit']))
  {
  $itemcode=$_POST['itemcode'];
  $itemname=$_POST['itemname'];
  $description=$_POST['description'];
  $category=$_POST['category'];
  $quantity=$_POST['quantity'];
  $status=1;
  
  $sql= "INSERT INTO equipment (ItemCode,ItemName,Description,date_added,date_updated,Category,quantity,status) 
          VALUES(:itemcode,:itemname,:description,:date_added,:date_updated,:category,:quantity,:status)";

  $query = $dbh->prepare($sql);

  $query->bindParam(':itemcode',$itemcode,PDO::PARAM_STR);
  $query->bindParam(':itemname',$itemname,PDO::PARAM_STR);
  $query->bindParam(':description',$description,PDO::PARAM_STR);
  $query->bindParam(':date_added',$date_added,PDO::PARAM_STR);
  $query->bindParam(':date_updated',$date_updated,PDO::PARAM_STR);
  $query->bindParam(':category',$category,PDO::PARAM_STR);
  $query->bindParam(':quantity',$quantity,PDO::PARAM_STR);
  $query->bindParam(':status',$status,PDO::PARAM_STR);
  $query->execute();
  $lastInsertId = $dbh->lastInsertId();
  if($lastInsertId)
    {
    echo "<script>alert('You successfully added an item!');</script>";
    
    }
    else 
    {
    echo "<script>alert('Something went wrong. Please try again');</script>";
    }
  }
?>
