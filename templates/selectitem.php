<!--select items from the database -->
<?php 
$sql = "SELECT * from  equipment ";

$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

if($query->rowCount() > 0)
{
foreach($results as $result)
{               
?>
<option value="<?php echo htmlentities($result->ItemName);?>">
 </b>Name: <?php echo htmlentities($result->ItemName);?>
  and
 </b>Qty: <?php echo htmlentities($result->quantity);?>
</option>
<?php }
} 
?>