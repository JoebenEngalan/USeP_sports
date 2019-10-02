<?php

$id = $_SESSION['id'];
$sql = $dbh->prepare("SELECT * FROM `staff_table` WHERE `Email`='$id'");
$sql->execute();
$fetch = $sql->fetch();
$fetch['LastName'];

if(isset($_POST['submit']))
{    
  $itemname=$_POST['itemname'];
  $description=$_POST['description'];
  $category = (isset($_POST['category']) ? $_POST['category'] : '');
  $quantity=$_POST['quantity'];

  $clerk = $fetch['LastName'];

  if( empty($itemname) || empty($description) || empty($category) || empty($quantity) )
  {
    {echo "<script type= 'text/javascript'>alert('Empty Fields.');</script>";}  
  }
  else
  {
    $pdoQuery = "SELECT * FROM equipment WHERE ItemName = :itemname";
    $pdoResult = $dbh->prepare($pdoQuery);
    $pdoExec = $pdoResult->execute(array(":itemname"=>$itemname));
    
    if($pdoExec)
    {
      // if id exist 
      if($pdoResult->rowCount()>0)
      {
        $itemname='';
        $description='';
        $category='';
        $quantity='';
        echo "<script>alert('item exist!');</script>";   
      }else{
        $sql= "INSERT INTO equipment (ItemName,Description,Category,quantity,Clerk) 
        VALUES(:itemname,:description,:category,:quantity,:id)";
          
        $query = $dbh->prepare($sql);
          
        $query->bindParam(':itemname',$itemname,PDO::PARAM_STR);
        $query->bindParam(':description',$description,PDO::PARAM_STR);
        $query->bindParam(':category',$category,PDO::PARAM_STR);
        $query->bindParam(':quantity',$quantity,PDO::PARAM_STR);
        $query->bindParam(':id',$clerk,PDO::PARAM_STR);
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
    }
  }
}
?>
