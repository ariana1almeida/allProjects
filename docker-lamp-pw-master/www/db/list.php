<?php
//class
$servername = "db:3306"; //localhost:3306
$username = "root";
$password = "1q2w3e4r5t";
$dbname = "pw_exemple";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//model
$sql = "SELECT * FROM clients";
$result = $conn->query($sql);

//controller
$arrayClients =  array();
while ($line = $result->fetch_assoc()) {
  array_push($arrayClients, $line);
}

//view
foreach ($arrayClients as $client) {
  echo $client['idClient'] . ' - ';
  echo $client['name'];
  echo $client['email'];
  echo $client['phone'];
  echo $client['address'];
  echo '<br>';
}

$conn->close();
