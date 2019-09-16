<?php
include('includes/config.php');

if(isset($_POST['submit']))

{
  $idnum=$_POST['idnumber'];
  $fname=$_POST['firstname'];
  $lname=$_POST['lastname'];
  $contact=$_POST['contactnum'];
  $depart=$_POST['department'];
  $pos=$_POST['position'];
  $email=$_POST['emailid'];
  $status=1;

  if( empty($idnum) || empty($fname) || empty($lname) || empty($contact) || empty($depart) || empty($pos) || empty($email) )
  {
  echo "<script type= 'text/javascript'>alert('Empty Fields.');</script>";  
  }else{
    
    $sql = "SELECT * FROM borrower_table WHERE id_number = :idnumber" ;  
    $pdoResult = $dbh->prepare($sql);  
    $pdoExec = $pdoResult->execute(array(":idnumber"=>$idnum));

    if($pdoExec)
      {
        if($pdoResult->rowCount()>0)
        {
        echo "<script type= 'text/javascript'>alert('This Id Number Exist.');</script>";                 
        }
        else
        {
        $sql= "INSERT INTO borrower_table (id_number,FirstName,LastName,ContactNumber,Department,Position,EmailID,Status) 
        VALUES(:idnum,:fname,:lname,:contact,:depart,:pos,:email,:status)";

        $query = $dbh->prepare($sql);
        $query->bindParam(':idnum',$idnum,PDO::PARAM_STR);
        $query->bindParam(':fname',$fname,PDO::PARAM_STR);
        $query->bindParam(':lname',$lname,PDO::PARAM_STR);
        $query->bindParam(':contact',$contact,PDO::PARAM_STR);
        $query->bindParam(':depart',$depart,PDO::PARAM_STR);
        $query->bindParam(':pos',$pos,PDO::PARAM_STR);
        $query->bindParam(':email',$email,PDO::PARAM_STR);
        $query->bindParam(':status',$status,PDO::PARAM_STR);
        $query->execute();
        $lastInsertId = $dbh->lastInsertId();
        if($lastInsertId)
        {
          echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
        }else{
          echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
        }
      }
    }     
  }
}
?>