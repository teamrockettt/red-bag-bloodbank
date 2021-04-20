<?php
  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sparsh";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $phone = $_POST['phone'];
 $blood = $_POST['blood'];

$sql = "INSERT INTO  bloodbank (username,email,password,phone,blood)
VALUES ('$username', '$email', '$password', '$phone', '$blood')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully ,check xampp for entries";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>