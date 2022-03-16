<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlbanhang";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "select fullname, email from customers where email = '".$_POST["email"]."' and password =  '".md5($_POST["pass"]). "'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "Dang nhap thanh cong <br>";
  $row = $result->fetch_assoc();
  echo "email:".$row['email']. ' Fullname: '.$row['fullname'];
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
