<?php
// Connect db with mysqli

// $host="localhost";
// $username="root";
// $password=NULL;
// $dbname="college";


// $conn = new mysqli($host, $username, $password, $dbname);
// if($conn->connect_error){
//   die("Connaction failed: ". $conn->connect_error).fetch_all();
// }

// echo "Connected successfully to the database.";
// echo "<br/>";

// $result = $conn->query("SHOW TABLES");
// print_r($result);

// Connect db with PDO (PHP Data Objects)

// $host = "localhost";
// $username = "root";
// $password = NULL;

// try {
//   $conn =  new PDO("mysql:host=$host;dbname=college", $username, $password);
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully to the database using PDO.";
// } catch (PDOException $err) {
//   echo "Connection failed: " .$err->getMessage();
// }

// echo "<br/>";
// $result = $conn->query("SHOW TABLES");
// foreach ($result as$row) {
//   print_r($row);
// }
?>