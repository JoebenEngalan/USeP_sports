<?php
//databese login page for the system
include('includes/config.php');
if(isset($_POST['login']))
{
  $username=$_POST['email'];
  $password=md5($_POST['password']);
  
  $sql ="SELECT Email, Password FROM staff_table WHERE Email=:username and Password=:password";
  $query= $dbh -> prepare($sql);
  $query-> bindParam(':username', $username, PDO::PARAM_STR);
  $query-> bindParam(':password', $password, PDO::PARAM_STR);
  $query-> execute();
  $results=$query->fetchAll(PDO::FETCH_OBJ);
  if($query->rowCount() > 0)
    {
      $_SESSION['id'] = $_POST['email'];
      echo "<script type='text/javascript'> document.location = 'mainpage.php'; </script>";
    }
    else
    {
      echo "<script>alert('Invalid Details');</script>";    
    }
}
?>