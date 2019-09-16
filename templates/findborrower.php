<?php
// set data in input text
$id_number = "";
$FirstName = "";
$LastName = "";
$ContactNumber = "";

$itemname1 = '';
$quantity1 = "";
$itemname2 = '';
$quantity2 = "";
$itemname3 = '';
$quantity3 = "";
$itemname4 = '';
$quantity4 = "";

if(isset($_POST['Find']))
{
    // id to search borrower
    $id_number = $_POST['idnumber'];
    // id to search equipment
    $itemname1 = (isset($_POST['itemname1']) ? $_POST['itemname1'] : '');
    // id to search equipment
    $itemname2 = (isset($_POST['itemname2']) ? $_POST['itemname2'] : '');
    // id to search equipment
    $itemname3 = (isset($_POST['itemname3']) ? $_POST['itemname3'] : '');  
    // id to search equipment
    $itemname4 = (isset($_POST['itemname4']) ? $_POST['itemname4'] : '');
    

if(empty($id_number))
    {
        echo "<script type= 'text/javascript'>alert('Empty Id Number.');</script>";
    }
    else
    {
    $sql = "SELECT * FROM Borrowed_Item WHERE id_number = :idnumber" ;  
    $pdoResult = $dbh->prepare($sql);  
    $pdoExec = $pdoResult->execute(array(":idnumber"=>$id_number));

    if($pdoExec)
        {
            if($pdoResult->rowCount()>0)
            {
                echo "<script type= 'text/javascript'>alert('The Id Number you Entered is still borrowing.');</script>";                 
            }
            else
            {
            
            // mysql search query borrower
            $sql = "SELECT * FROM borrower_table WHERE id_number = :idnumber" ;     
            $pdoResult = $dbh->prepare($sql);  
            $pdoExec = $pdoResult->execute(array(":idnumber"=>$id_number));

            // mysql search query equipment
            $sql1 = "SELECT * FROM equipment  WHERE ItemName IN (:itemname1)";
            $sql2 = "SELECT * FROM equipment  WHERE ItemName IN (:itemname2)";  
            $sql3 = "SELECT * FROM equipment  WHERE ItemName IN (:itemname3)";  
            $sql4 = "SELECT * FROM equipment  WHERE ItemName IN (:itemname4)";  

            $pdoResult1 = $dbh->prepare($sql1);
            $pdoResult2 = $dbh->prepare($sql2);
            $pdoResult3 = $dbh->prepare($sql3);
            $pdoResult4 = $dbh->prepare($sql4);
            
            $pdoExec1 = $pdoResult1->execute(array(":itemname1"=>$itemname1));    
            $pdoExec2 = $pdoResult2->execute(array(":itemname2"=>$itemname2));    
            $pdoExec3 = $pdoResult3->execute(array(":itemname3"=>$itemname3));
            $pdoExec4 = $pdoResult4->execute(array(":itemname4"=>$itemname4));

                    
            if($pdoExec||$pdoExec1||$pdoExec2||$pdoExec3||$pdoExec4)
              {
                if($pdoResult->rowCount()>0 
                  || $pdoResult1->rowCount()>0 || $pdoResult2->rowCount()>0
                  || $pdoResult3->rowCount()>0 || $pdoResult4->rowCount()>0)
                  {
                    foreach($pdoResult as $row)
                      {
                      $id_number = $row['id_number'];
                      $FirstName = $row['FirstName'];
                      $LastName = $row['LastName'];
                      $ContactNumber = $row['ContactNumber'];   
                      }
                    foreach($pdoResult1 as $row)
                      {   
                      $itemname1 = $row['ItemName'];
                      $quantity1 = $row['quantity']; 
                      }
                    foreach($pdoResult2 as $row)
                      {   
                      $itemname2 = $row['ItemName'];
                      $quantity2 = $row['quantity']; 
                      }
                    foreach($pdoResult3 as $row)
                      {   
                      $itemname3 = $row['ItemName'];
                      $quantity3 = $row['quantity']; 
                      }
                    foreach($pdoResult4 as $row)
                      {   
                      $itemname4 = $row['ItemName'];
                      $quantity4 = $row['quantity']; 
                      }
                  }
              }                 
          }
      }    
  }
}
?>