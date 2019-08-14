<?php
// set data in input text
$id_number = "";
$FirstName = "";
$LastName = "";
$ContactNumber = "";

$itemname1 = "";
$quantity1 = "";

$itemname2 = "";
$quantity2 = "";

$itemname3 = "";
$quantity3 = "";

$itemname4 = "";
$quantity4 = "";

if(isset($_POST['Find']))
{
    // id to search
    $id_number = $_POST['idnumber'];
    
    $itemname = $_POST['itemname1'];

    // mysql search query
    $sql = "SELECT * FROM borrower_table WHERE id_number = :idnumber" ;  
    
    $pdoResult = $dbh->prepare($sql);  
    //set your id to the query id
    $pdoExec = $pdoResult->execute(array(":idnumber"=>$id_number));
    
    if($pdoExec)
    {
            // if id exist 
            // show data in inputs
        if($pdoResult->rowCount()>0)
        {
            foreach($pdoResult as $row)
            {
                $id_number = $row['id_number'];
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

    // id to search
    $itemname1 = $_POST['itemname1'];

    // mysql search query  
    $sql = "SELECT * FROM equipment  WHERE ItemName IN (:itemname1)";  
    $pdoResult = $dbh->prepare($sql);  
    //set your id to the query id
    $pdoExec = $pdoResult->execute(array(":itemname1"=>$itemname1));              
        if($pdoExec)
        {
            if($pdoResult->rowCount()>0)
            {
            foreach($pdoResult as $row)
                {   
                $itemname1 = $row['ItemName'];
                $quantity1 = $row['quantity']; 
                }
            }
        }
    
}


?>
