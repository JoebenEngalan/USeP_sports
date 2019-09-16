<?php

//error_reporting(0);
if(isset($_POST['submit']))
{
$id_number=$_POST["id_number"];
$item1=$_POST['1itemname'];
$quantity1=$_POST['quantity1'];
$item2=$_POST['2itemname'];
$quantity2=$_POST['quantity2'];
$item3=$_POST['3itemname'];
$quantity3=$_POST['quantity3'];
$item4=$_POST['4itemname'];
$quantity4=$_POST['quantity4'];
$remarks=$_POST['remarks'];
$Btime=$_POST['Btime'];
$status=1;

$sql= "INSERT INTO Borrowed_Item (id_number,Item1,quantity1,Item2,quantity2,Item3,quantity3,Item4,quantity4,Remarks,Borrowed_time,status) 
       VALUES
        (:id_number,:1itemname,:quantity1,:2itemname,:quantity2,:3itemname,:quantity3,:4itemname,:quantity4,:remarks,:Btime,:status)";

$query=$dbh->prepare($sql);
$query->bindParam(':id_number',$id_number,PDO::PARAM_STR);
$query->bindParam(':remarks',$remarks,PDO::PARAM_STR);
$query->bindParam(':1itemname',$item1,PDO::PARAM_STR);
$query->bindParam(':quantity1',$quantity1,PDO::PARAM_STR);
$query->bindParam(':2itemname',$item2,PDO::PARAM_STR);
$query->bindParam(':quantity2',$quantity2,PDO::PARAM_STR);
$query->bindParam(':3itemname',$item3,PDO::PARAM_STR);
$query->bindParam(':quantity3',$quantity3,PDO::PARAM_STR);
$query->bindParam(':4itemname',$item4,PDO::PARAM_STR);
$query->bindParam(':quantity4',$quantity4,PDO::PARAM_STR);
$query->bindParam(':Btime',$Btime,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Success');</script>";
}else {
echo "<script>alert('Something went wrong. Please try again');</script>";
}
}

if(isset($_POST['submit']))
{
    // get values form input text and number
    
    $itemname = $_POST['1itemname'];
    $quantity = $_POST['subt1'];
    
    // mysql query to Update data
    
    $sql = "UPDATE `equipment` SET `quantity`=:subt1 WHERE `ItemName` = :1itemname";
    
    $pdoResult = $dbh->prepare($sql);
    
    $pdoExec = $pdoResult->execute(array(":subt1"=>$quantity,":1itemname"=>$itemname));
    
    if($pdoExec)
    {
        echo "<script>alert('Success') reload();</script>";
    }else{
        echo "<script>alert('Something went wrong. Please try again') reload();</script>";
    }

}

if(isset($_POST['submit']))
{
    // get values form input text and number
    
    $itemname = $_POST['2itemname'];
    $quantity = $_POST['subt2'];
    
    // mysql query to Update data
    
    $sql = "UPDATE `equipment` SET `quantity`=:subt2 WHERE `ItemName` = :2itemname";
    
    $pdoResult = $dbh->prepare($sql);
    
    $pdoExec = $pdoResult->execute(array(":subt2"=>$quantity,":2itemname"=>$itemname));
    
    if($pdoExec)
    {
        echo "<script>alert('Success') reload();</script>";
    }else{
        echo "<script>alert('Something went wrong. Please try again') reload();</script>";
    }

}

if(isset($_POST['submit']))
{
    // get values form input text and number
    
    $itemname = $_POST['3itemname'];
    $quantity = $_POST['subt3'];
    
    // mysql query to Update data
    
    $sql = "UPDATE `equipment` SET `quantity`=:subt3 WHERE `ItemName` = :3itemname";
    
    $pdoResult = $dbh->prepare($sql);
    
    $pdoExec = $pdoResult->execute(array(":subt3"=>$quantity,":3itemname"=>$itemname));
    
    if($pdoExec)
    {
        echo "<script>alert('Success') reload();</script>";
    }else{
        echo "<script>alert('Something went wrong. Please try again') reload();</script>";
    }

}

if(isset($_POST['submit']))
{
    // get values form input text and number
    
    $itemname = $_POST['4itemname'];
    $quantity = $_POST['subt4'];
    
    // mysql query to Update data
    
    $sql = "UPDATE `equipment` SET `quantity`=:subt4 WHERE `ItemName` = :4itemname";
    
    $pdoResult = $dbh->prepare($sql);
    
    $pdoExec = $pdoResult->execute(array(":subt4"=>$quantity,":4itemname"=>$itemname));
    
    if($pdoExec)
    {
        echo "<script>alert('Success') reload();</script>";
    }else{
        echo "<script>alert('Something went wrong. Please try again') reload();</script>";
    }

}

?>