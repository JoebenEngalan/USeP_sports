<?php

//error_reporting(0);
if(isset($_POST['submit']))
{
$id_number=$_POST["id_number"];
$FirstName=$_POST["FirstName"];
$LastName=$_POST["LastName"];
$ContactNumber=$_POST["ContactNumber"];
$item1=$_POST['itemname'];
$quantity1=$_POST['quantity1'];
$remarks=$_POST['remarks'];
$Btime=$_POST['Btime'];
$status=1;

$sql= "INSERT INTO Borrowed_Item (id_number,FirstName,LastName,ContactNumber,Item,quantity,Remarks,Borrowed_time,status) 
       VALUES
        (:id_number,:FirstName,:LastName,:ContactNumber,:itemname,:quantity1,:remarks,:Btime,:status)";

$query=$dbh->prepare($sql);
$query->bindParam(':id_number',$id_number,PDO::PARAM_STR);
$query->bindParam(':FirstName',$FirstName,PDO::PARAM_STR);
$query->bindParam(':LastName',$LastName,PDO::PARAM_STR);
$query->bindParam(':ContactNumber',$ContactNumber,PDO::PARAM_STR);
$query->bindParam(':itemname',$item1,PDO::PARAM_STR);
$query->bindParam(':remarks',$remarks,PDO::PARAM_STR);
$query->bindParam(':quantity1',$quantity1,PDO::PARAM_STR);
$query->bindParam(':Btime',$Btime,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{echo "<script>alert('Success');</script>";}
else 
{echo "<script>alert('Something went wrong. Please try again');</script>";}
}

?>
