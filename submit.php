<?php

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "library_db";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$name = $_POST['name'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$resone=$_POST['resone'];


$sql = "INSERT INTO members (name, age, phone, email, address, gender,resone)
        VALUES ('$name', $age, '$phone', '$email', '$address', '$gender','$resone')";

if ($conn->query($sql) === TRUE) {
    header("Location: success.php");
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  

$conn->close();
?>
