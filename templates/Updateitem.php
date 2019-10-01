<?php 

if(isset($_POST['submit']))
{    
  $itemname=$_POST['itemname'];
  $description=$_POST['description'];
  $category=$_POST['category'];
  $quantity=$_POST['quantity'];

  if( empty($itemname) || empty($description) || empty($category) || empty($quantity) )
  {
    {echo "<script type= 'text/javascript'>alert('Empty Fields.');</script>";}  
  }
  else
  {
    $pdoQuery = "SELECT * FROM borrowed_item WHERE ItemName = :itemname";
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
        //
      }          
    }
  }
}
?>