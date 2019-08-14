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
}

?>
