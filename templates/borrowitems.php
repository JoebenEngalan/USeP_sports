<?php

//error_reporting(0);
if(isset($_POST['submit']))
{
    // get values form input text and number
    $id_number=$_POST["id_number"];
    $ContactNumber=$_POST["ContactNumber"];
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

    $y = -1;

    // get values form input text and number
    $itemname1 = $_POST['1itemname'];
    $quantityE1 = $_POST['subt1'];
    $itemname2 = $_POST['2itemname'];
    $quantityE2 = $_POST['subt2'];
    $itemname3 = $_POST['3itemname'];
    $quantityE3 = $_POST['subt3'];
    $itemname4 = $_POST['4itemname'];
    $quantityE4 = $_POST['subt4'];
    
    // get values form input text 
    $LastName=$_POST['LastName'];
    $FirstName=$_POST['FirstName'];
 
    if(empty($id_number)||empty($LastName)||empty($FirstName)
        ||empty($item1)||empty($quantity1)
        ||$quantityE1 <= $y || $quantityE2 <= $y ||$quantityE3 <= $y ||$quantityE4 <= $y )
        {   
        echo "<script type= 'text/javascript'>alert('ERROR YOU ENTERED A NEGATIVE NUMBER OR EMPTY FIELDS');</script>";
        }
        else
        {
        // mysql query to insert data Borrowed_Item
        $sql="INSERT INTO Borrowed_Item (id_number,ContactNumber,Item1,quantity1,Item2,quantity2,Item3,quantity3,Item4,quantity4,Remarks,Borrowed_time) 
        VALUES
        (:id_number,:ContactNumber,:1itemname,:quantity1,:2itemname,:quantity2,:3itemname,:quantity3,:4itemname,:quantity4,:remarks,:Btime)";

        // mysql query to Update data equipment
        $sql1 = "UPDATE `equipment` SET `quantity`= :subt1 WHERE `ItemName` = :1itemname"; 
        $sql2 = "UPDATE `equipment` SET `quantity`= :subt2 WHERE `ItemName` = :2itemname"; 
        $sql3 = "UPDATE `equipment` SET `quantity`= :subt3 WHERE `ItemName` = :3itemname"; 
        $sql4 = "UPDATE `equipment` SET `quantity`= :subt4 WHERE `ItemName` = :4itemname"; 
        
        $query=$dbh->prepare($sql);
        $pdoResult1 = $dbh->prepare($sql1);
        $pdoResult2 = $dbh->prepare($sql2);
        $pdoResult3 = $dbh->prepare($sql3);
        $pdoResult4 = $dbh->prepare($sql4);

        $query->bindParam(':id_number',$id_number,PDO::PARAM_STR);
        $query->bindParam(':ContactNumber',$ContactNumber,PDO::PARAM_STR);
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
        $query->execute();
        $lastInsertId = $dbh->lastInsertId();

        $pdoExec1 = $pdoResult1->execute(array(":subt1"=>$quantityE1,":1itemname"=>$itemname1));
        $pdoExec2 = $pdoResult2->execute(array(":subt2"=>$quantityE2,":2itemname"=>$itemname2));
        $pdoExec3 = $pdoResult3->execute(array(":subt3"=>$quantityE3,":3itemname"=>$itemname3));
        $pdoExec4 = $pdoResult4->execute(array(":subt4"=>$quantityE4,":4itemname"=>$itemname4));
            
        if($lastInsertId || $pdoExec1|| $pdoExec2|| $pdoExec3|| $pdoExec4)
            {
            echo "<script>alert('Success');</script>";
            }else{
            echo "<script>alert('Something went wrong. Please try again');</script>";
            }
        
        }

}

?>