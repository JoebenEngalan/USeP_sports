<?php

$id = "";
$fname = "";
$lname = "";
$age = "";

if(isset($_POST['Find']))
{
    
    // id to search
    $id = $_POST['id'];
    
    // mysql search query
    $sql = "SELECT * FROM Borrowed_Item WHERE id = :id";
    
    $pdoResult = $dbh->prepare($sql);
    
    //set your id to the query id
    $pdoExec = $pdoResult->execute(array(":id"=>$id));
    
    if($pdoExec)
    {
        // if id exist 
        // show data in inputs
        if($pdoResult->rowCount()>0)
        {
            foreach($pdoResult as $row)
            {
                $id = $row['id'];
                $fname = $row['fname'];
                $lname = $row['lname'];
                $age = $row['age'];
            }
        }
            // if the id not exist
            // show a message and clear inputs
        else{
            echo 'No Data With This ID';
        }
    }else{
        echo 'ERROR Data Not Inserted';
    }
}

?>