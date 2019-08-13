<?php
$user_name = $_POST['parameter'];

$query="SELECT * from info where name=$user_name";
$result=mysql_query($query);
$rs = mysql_fetch_array($result);

do
{
?>
<table>
<tr>
<td><?php echo $rs['city']; ?></td>
<td><?php echo $rs['phone_number']; ?></td>
</tr>
</table>
<?php
}while($rs = mysql_fetch_array($result));
?>