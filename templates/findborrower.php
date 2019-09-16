<?php
// set data in input text
$id_number = "";
$FirstName = "";
$LastName = "";
$ContactNumber = "";

$itemname1 = '';
$quantity1 = "";
$itemname2 = '';
$quantity2 = "";
$itemname3 = '';
$quantity3 = "";
$itemname4 = '';
$quantity4 = "";

if(isset($_POST['Find']))
{
    // id to search borrower
    $id_number = $_POST['idnumber'];
    // id to search equipment
    $itemname1 = (isset($_POST['itemname1']) ? $_POST['itemname1'] : '');
    // id to search equipment
    $itemname2 = (isset($_POST['itemname2']) ? $_POST['itemname2'] : '');
    // id to search equipment
    $itemname3 = (isset($_POST['itemname3']) ? $_POST['itemname3'] : '');  
    // id to search equipment
    $itemname4 = (isset($_POST['itemname4']) ? $_POST['itemname4'] : '');
    

if(empty($id_number))
    {
        echo "<script type= 'text/javascript'>alert('Empty Id Number.');</script>";
    }
    else
    {
    $sql = "SELECT * FROM Borrowed_Item WHERE id_number = :idnumber" ;  
    $pdoResult = $dbh->prepare($sql);  
    $pdoExec = $pdoResult->execute(array(":idnumber"=>$id_number));

    if($pdoExec)
        {
            if($pdoResult->rowCount()>0)
            {
                echo "<script type= 'text/javascript'>alert('The Id Number you Entered is still borrowing.');</script>";                 
            }
            else
            {
            
            // mysql search query borrower
            $sql = "SELECT * FROM borrower_table WHERE id_number = :idnumber" ;     
            $pdoResult = $dbh->prepare($sql);  
            //set your id to the query id
            $pdoExec = $pdoResult->execute(array(":idnumber"=>$id_number));

                if($pdoExec)
                {
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
                }  

            // mysql search query equipment 1
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

            // mysql search query equipment 2 
            $sql = "SELECT * FROM equipment  WHERE ItemName IN (:itemname2)";  
            $pdoResult = $dbh->prepare($sql);  
            //set your id to the query id
            $pdoExec = $pdoResult->execute(array(":itemname2"=>$itemname2));              
                if($pdoExec)
                {
                    if($pdoResult->rowCount()>0)
                    {
                    foreach($pdoResult as $row)
                        {   
                        $itemname2 = $row['ItemName'];
                        $quantity2 = $row['quantity']; 
                        }
                    }
                }

            // mysql search query equipment 3
            $sql = "SELECT * FROM equipment  WHERE ItemName IN (:itemname3)";  
            $pdoResult = $dbh->prepare($sql);  
            //set your id to the query id
            $pdoExec = $pdoResult->execute(array(":itemname3"=>$itemname3));              
                if($pdoExec)
                {
                    if($pdoResult->rowCount()>0)
                    {
                    foreach($pdoResult as $row)
                        {   
                        $itemname3 = $row['ItemName'];
                        $quantity3 = $row['quantity']; 
                        }
                    }
                }

            // mysql search query equipment 4
            $sql = "SELECT * FROM equipment  WHERE ItemName IN (:itemname4)";  
            $pdoResult = $dbh->prepare($sql);  
            //set your id to the query id
            $pdoExec = $pdoResult->execute(array(":itemname4"=>$itemname4));              
                if($pdoExec)
                {
                    if($pdoResult->rowCount()>0)
                    {
                    foreach($pdoResult as $row)
                        {   
                        $itemname4 = $row['ItemName'];
                        $quantity4 = $row['quantity']; 
                        }
                    }
                }
            }
        
        }
        
    }
}

?>