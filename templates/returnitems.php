<?php 

$id = $_SESSION['id'];
$sql = $dbh->prepare("SELECT * FROM `staff_table` WHERE `Email`='$id'");
$sql->execute();
$fetch = $sql->fetch();
$fetch['LastName'];


if(isset($_POST['return']))
{
    
  // get values form input text and number
  $id_number = $_POST['id_number'];
  $FullName = $_POST['FullName'];
  $ContactNumber = $_POST['ContactNumber'];
  $Btime = $_POST['Btime'];
  $Rtime = $_POST['Rtime'];
  $Clerk = $_POST['Clerk'];
  $ClerkR = $fetch['LastName'];
   
  $itemname1 = $_POST['itemname1'];
  $quantity1 = $_POST['quantity1'];
  $itemname2 = $_POST['itemname2'];
  $quantity2 = $_POST['quantity2'];
  $itemname3 = $_POST['itemname3'];
  $quantity3 = $_POST['quantity3'];
  $itemname4 = $_POST['itemname4'];
  $quantity4 = $_POST['quantity4'];

  $Remarks = $_POST['Remarks'];
 
  // mysql query to Update data

  $sql="INSERT INTO returned_Item (id_number,FullName,ContactNumber,Borrowed_time,Return_time,Clerk,ClerkR,Remarks,Item1,quantity1,Item2,quantity2,Item3,quantity3,Item4,quantity4) 
  VALUES
  (:id_number,:FullName,:ContactNumber,:Btime,:Rtime,:Clerk,:LastName,:Remarks,:itemname1,:quantity1,:itemname2,:quantity2,:itemname3,:quantity3,:itemname4,:quantity4)";

  $sql1 = "UPDATE `equipment` SET `quantity` = `quantity` + :quantity1 WHERE `ItemName` = :itemname1"; 
  $sql2 = "UPDATE `equipment` SET `quantity` = `quantity` + :quantity2 WHERE `ItemName` = :itemname2";
  $sql3 = "UPDATE `equipment` SET `quantity` = `quantity` + :quantity3 WHERE `ItemName` = :itemname3";
  $sql4 = "UPDATE `equipment` SET `quantity` = `quantity` + :quantity4 WHERE `ItemName` = :itemname4";
  $sqlD = "DELETE FROM `Borrowed_Item` WHERE `id_number` = :id_number";

  $query=$dbh->prepare($sql);
  $pdoResult1 = $dbh->prepare($sql1);
  $pdoResult2 = $dbh->prepare($sql2);
  $pdoResult3 = $dbh->prepare($sql3);
  $pdoResult4 = $dbh->prepare($sql4);
  $pdoResultD = $dbh->prepare($sqlD);   
  
  $query->bindParam(':id_number',$id_number,PDO::PARAM_STR);
  $query->bindParam(':FullName',$FullName,PDO::PARAM_STR);
  $query->bindParam(':ContactNumber',$ContactNumber,PDO::PARAM_STR);
  $query->bindParam(':Btime',$Btime,PDO::PARAM_STR);
  $query->bindParam(':Rtime',$Rtime,PDO::PARAM_STR);
  
  $query->bindParam(':Clerk',$Clerk,PDO::PARAM_STR);
  $query->bindParam(':LastName',$ClerkR,PDO::PARAM_STR);
  $query->bindParam(':Remarks',$Remarks,PDO::PARAM_STR);

  $query->bindParam(':itemname1',$itemname1,PDO::PARAM_STR);
  $query->bindParam(':quantity1',$quantity1,PDO::PARAM_STR);
  $query->bindParam(':itemname2',$itemname2,PDO::PARAM_STR);
  $query->bindParam(':quantity2',$quantity2,PDO::PARAM_STR);
  $query->bindParam(':itemname3',$itemname3,PDO::PARAM_STR);
  $query->bindParam(':quantity3',$quantity3,PDO::PARAM_STR);
  $query->bindParam(':itemname4',$itemname4,PDO::PARAM_STR);
  $query->bindParam(':quantity4',$quantity4,PDO::PARAM_STR);
  $query->execute();
  $lastInsertId = $dbh->lastInsertId();

  $pdoExec1 = $pdoResult1->execute(array(":quantity1"=>$quantity1,":itemname1"=>$itemname1));
  $pdoExec2 = $pdoResult2->execute(array(":quantity2"=>$quantity2,":itemname2"=>$itemname2));
  $pdoExec3 = $pdoResult3->execute(array(":quantity3"=>$quantity3,":itemname3"=>$itemname3));
  $pdoExec4 = $pdoResult4->execute(array(":quantity4"=>$quantity4,":itemname4"=>$itemname4));
  $pdoExecD = $pdoResultD->execute(array(":id_number"=>$id_number));

    
  if($lastInsertId||$pdoExec1|| $pdoExec2|| $pdoExec3|| $pdoExec4||$pdoExecD)
  {
    echo "<script>alert('Success');</script>";;
  }else{
    echo "<script>alert('ERROR Data Not Updated');</script>";
  }

}

?>