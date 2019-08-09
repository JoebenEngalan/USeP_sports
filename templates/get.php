<?php

if (isset($_POST['query'])) {
    $search_query = $_POST['query'];
    
    $query = "SELECT * FROM equipment WHERE ItemName LIKE '$search_query%' LIMIT 1";
    $result = mysqli_query($dbh, $query);
  if (mysqli_num_rows($result) > 0) {
   while ($row = mysqli_fetch_array($result)) {
        $quantity = $row['quantity'];
        $quantity = $row['quantity'];
  }
} else {
    echo "<p style='color:red'>Country not found...</p>";
}
}

?>