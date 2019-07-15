<?php
include('includes/config.php');

//error_reporting(0);
if(isset($_POST['submit']))
{
$item=$_POST['item'];
$borrower_Idnum=$_POST["borrower_IDnum"];
$date_borrow=$_POST['date_borrow'];
$remarks=$_POST['remarks'];
$status=1;

$sql= "INSERT INTO borrower_table (Item_borrowed,Borrower_Idnum,date_Borrowed,Remarks,status) 
        VALUES(:item,:borrower_Idnum,:date_borrow,:remarks,:status)";
$query = $dbh->prepare($sql);
$query->bindParam(':item',$item,PDO::PARAM_STR);
$query->bindParam(':borrower_Idnum',$borrower_Idnum,PDO::PARAM_STR);
$query->bindParam(':date_borrow',$date_borrow,PDO::PARAM_STR);
$query->bindParam(':remarks',$remarks,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Success');</script>";
}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}
}

?>
