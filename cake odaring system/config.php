<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "daraz";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];  
    // Prepare an SQL statement
    $stmt = $conn->prepare("INSERT INTO shopping (name, email, message) VALUES (?, ?, ?)");
    
    $stmt->bind_param("sss", $name, $email, $message);
    
    if ($stmt->execute()) {
        echo "Record inserted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }
    
    $stmt->close();
}


$conn->close();
?>
