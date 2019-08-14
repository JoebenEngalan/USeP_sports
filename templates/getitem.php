<?php
// set data in input text
$itemname = "";
$quantity = "";
if(isset($_POST['getitem']))
{
// id to search
$itemname = $_POST['itemname1'];
// mysql search query  
$sql = "SELECT * FROM equipment  WHERE ItemName = :itemname1";  
$pdoResult = $dbh->prepare($sql);  
//set your id to the query id
$pdoExec = $pdoResult->execute(array(":itemname1"=>$itemname));
                
    if($pdoExec)
    {
        if($pdoResult->rowCount()>0)
        {
            foreach($pdoResult as $row)
            {   
                $itemname = $row['ItemName'];
                $quantity = $row['quantity'];                
            }
        }
    }
} 
?>