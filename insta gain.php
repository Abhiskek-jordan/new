<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "A1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];




$sql = "INSERT INTO Insta (FirstName, LastName, Username, Password) VALUES ('$Firstname', '$Lastname','$Username', '$Password')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>