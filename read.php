<?php

require 'connect.php';
$sql = "SELECT * from pokemon";
$result = mysqli_query($conn, $sql);
$a=array();
if ($result->num_rows > 0) { 
    while($row = $result->fetch_assoc()) { 
        array_push($a,$row);
    }
  } else {
    echo "0 results";
  }
  echo json_encode($a);
  
  $conn->close();

?>