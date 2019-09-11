<?php

// php update data in mysql database using PDO

if(isset($_POST['update']))
{    
    // get values form input text and number
    
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    
    // mysql query to Update data
    
    $query = "UPDATE `users` SET `fname`=:fname,`lname`=:lname,`age`=:age 
                WHERE `id` = :id";
    
    $pdoResult = $pdoConnect->prepare($query);
    
    $pdoExec = $pdoResult->execute(array(":fname"=>$fname,":lname"=>$lname,":age"=>$age,":id"=>$id));
    
    if($pdoExec)
    {
        echo 'Data Updated';
    }else{
        echo 'ERROR Data Not Updated';
    }

}

?>

<?php

// php search data in mysql database using PDO
// set data in input text

$id = "";
$fname = "";
$lname = "";
$age = "";

if(isset($_POST['Find']))
{
    
    // id to search
    $id = $_POST['id'];
    
     // mysql search query
    $pdoQuery = "SELECT * FROM users WHERE id = :id";
    
    $pdoResult = $pdoConnect->prepare($pdoQuery);
    
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