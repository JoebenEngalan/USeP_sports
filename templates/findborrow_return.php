<?php

$id_number = "";
$LastName = "";
$FirstName = "";
$ContactNumber = "";
$Borrowed_time = "";
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
    // mysql search query
    $sql = "SELECT * FROM borrowed_item WHERE id_number = :idnumber";
    $sql1 = "SELECT * FROM borrower_table WHERE id_number = :idnumber";     
    
    $pdoResult = $dbh->prepare($sql);  
    $pdoResult1 = $dbh->prepare($sql1);
    
    //set your id to the query id
    $pdoExec = $pdoResult->execute(array(":idnumber"=>$id_number));
    $pdoExec1 = $pdoResult1->execute(array(":idnumber"=>$id_number));
    
    if($pdoExec||$pdoExec1)
    {
        // if id exist 
        // show data in inputs
        if($pdoResult->rowCount()>0 || $pdoResult1->rowCount()>0)
        {
            foreach($pdoResult as $row)
            {
                $id_number = $row['id_number'];
                $ContactNumber = $row['ContactNumber'];
                $Borrowed_time = $row['Borrowed_time'];
                $itemname1 = $row['Item1'];
                $quantity1 = $row['quantity1'];
                $itemname2 = $row['Item2'];
                $quantity2 = $row['quantity2'];
                $itemname3 = $row['Item3'];
                $quantity3 = $row['quantity3'];
                $itemname4 = $row['Item4'];
                $quantity4 = $row['quantity4'];
            }
            foreach($pdoResult1 as $row)
            {
                $LastName = $row['LastName'];
                $FirstName = $row['FirstName'];
            }
        }
            // if the id not exist
            // show a message and clear inputs
        else{
          echo "<script type= 'text/javascript'>alert('No Data With This ID.');</script>";                 
        }
    }else{
      echo "<script type= 'text/javascript'>alert('ERROR Data Not Inserted.');</script>";
    }
}

?>