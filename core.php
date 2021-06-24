<?php

require 'connect.php';

$row = 1;
if (($handle = fopen("Pokemon.csv", "r")) !== FALSE) {
  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    if($data[1] != 'Name') {
        $sql = "INSERT INTO pokemon ( name_, type1, type2, total, hp, attack, defense, sp_attack, sp_defense, speed, generation, legendary)
                VALUES ('$data[1]' ,'$data[2]' ,'$data[3]' ,'$data[4]' ,'$data[5]' ,'$data[6]' ,'$data[7]' ,'$data[8]' ,'$data[9]' ,'$data[10]' ,'$data[11]','$data[12]')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

  }
  fclose($handle);
}
$conn->close();
?>