$sql = "SELECT * FROM Borrowed_Item WHERE id_number = :idnumber" ;  
    
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
    }