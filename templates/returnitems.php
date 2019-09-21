<?php 
//$sql = "UPDATE `equipment` SET `quantity` = `quantity` + :quantity1 WHERE `ItemName` = :1itemname";

if(isset($_POST['return']))
{
    
    // get values form input text and number
    
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    
    // mysql query to Update data
    
    $sql = "UPDATE `users` SET `fname`=:fname,`lname`=:lname,`age`=:age WHERE `id` = :id";
    
    $pdoResult = $dbh->prepare($sql);
    
    $pdoExec = $pdoResult->execute(array(":fname"=>$fname,":lname"=>$lname,":age"=>$age,":id"=>$id));
    
    if($pdoExec)
    {
        echo 'Data Updated';
    }else{
        echo 'ERROR Data Not Updated';
    }

}

?>