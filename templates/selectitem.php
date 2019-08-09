<!--select items from the database -->
<option>Equipement Name and Code</option>
<?php 
$sql = "SELECT * from  equipment ";

$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;

if($query->rowCount() > 0)
{
foreach($results as $result)
{               
?>
<option value="<?php echo htmlentities($result->ItemName);?>">
 </b>Item Name: <?php echo htmlentities($result->ItemName);?>
 </b>Item Code: <?php echo htmlentities($result->ItemCode);?>
</option>
<?php }
} 
?>