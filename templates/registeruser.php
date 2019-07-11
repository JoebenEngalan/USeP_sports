<?php
include('includes/config.php');
if(isset($_POST['signup']))
{
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$email=$_POST['emailid']; 
$password=md5($_POST['password']); 
$sql= "INSERT INTO staff_table (FirstName,LastName,Email,Password) VALUES(:fname,:lname,:email,:password)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':lname',$lname,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Registration successfull. Now you can login');</script>";
}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}
}
?>