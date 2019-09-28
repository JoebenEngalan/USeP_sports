<?php 

$itemname="";
$quantity="";

if(isset($_POST['Find']))
{
    
  // id to search
  $itemname=$_POST['itemNames'];
  
  $sql = "SELECT * FROM equipment WHERE ItemName = :itemNames";
  $pdoResult = $dbh->prepare($sql);
  $pdoExec = $pdoResult->execute(array(":itemNames"=>$itemname));
    
  if($pdoExec)
  {
    // if id exist  
    // show data in inputs
    if($pdoResult->rowCount()>0)
    {
      foreach($pdoResult as $row)
      {
        $itemname=$_POST['itemNames'];
        $quantity=$_POST['quantity'];
      }
    }else{
      echo "<script type= 'text/javascript'>alert('No Data With This ID.');</script>";                 
    }
  }else{
    echo "<script type= 'text/javascript'>alert('ERROR Data Not Inserted.');</script>";
  }
}
?>