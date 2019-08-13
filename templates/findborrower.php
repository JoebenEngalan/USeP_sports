<?php

// set data in input text
$id_number = "";
$FirstName = "";
$LastName = "";
$ContactNumber = "";

if(isset($_POST['Find']))
{
    // id to search
    $id_number = $_POST['id_number'];
    // mysql search query
    $sql = "SELECT * FROM borrower_table WHERE id_number = :id_number";  
    $pdoResult = $dbh->prepare($sql);  
    //set your id to the query id
    $pdoExec = $pdoResult->execute(array(":id_number"=>$id_number));
    
    if($pdoExec)
    {
            // if id exist 
            // show data in inputs
        if($pdoResult->rowCount()>0)
        {
            foreach($pdoResult as $row)
            {
                $_SESSION['testa']= $row['id_number'];
                $_SESSION['testb'] = $row['FirstName'];
                $_SESSION['testc'] = $row['LastName'];
                $_SESSION['testd'] = $row['ContactNumber'];

                $id_number = $_SESSION['testa'];
                $FirstName = $_SESSION['testb'];
                $LastName = $_SESSION['testc'];
                $ContactNumber = $_SESSION['testd'];
                
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
}

?>
