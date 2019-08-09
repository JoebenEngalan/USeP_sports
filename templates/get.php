<?php
// set data in input text
$itemname = "";
$quantity = "";

if(isset($_POST['get']))
{
// id to search
$itemname = $_POST['item1'];

// mysql search query
$sql = "SELECT * FROM equipment  WHERE ItemName = :item1";  
$pdoResult = $dbh->prepare($sql);  
//set your id to the query id
$pdoExec = $pdoResult->execute(array(":item1"=>$itemname));
                
if($pdoExec)
{
    if($pdoResult->rowCount()>0)
     {
    foreach($pdoResult as $row)
    {   
        $quantity = $row['quantity'];
    }
    }
    }
} 
?>