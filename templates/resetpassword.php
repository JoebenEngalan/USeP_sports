<?php
//database of the sign up of the system
include('includes/config.php');
if(isset($_POST['reset']))
{

$email=$_POST['email'];
$password=md5($_POST['password']);

if( empty($email) || empty($password))
  {
  $email='';
  $password=''; 
  echo "<script type= 'text/javascript'>alert('Empty Fields.');</script>";  
  }
  elseif( $email !== 'Admin@gmail.com')
  {
  $email='';
  $password='';
  echo "<script type= 'text/javascript'>alert('Empty Fields.');</script>";  
  }else{
  
    $sql = "UPDATE `staff_table` SET `Password`=:password WHERE `Email` = :email";
    $pdoResult = $dbh->prepare($sql);
    $pdoExec=$pdoResult->execute(array(":description"=>$description,":email"=>$email));
      
    if($pdoExec)
    {
      echo "<script>alert('You successfully Update an item!');</script>";
    }else{
      echo "<script>alert('ERROR Update to an item!');</script>";
    }
  }
}
?>