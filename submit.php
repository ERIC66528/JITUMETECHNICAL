<?php
// Database connection settings
$servername = "localhost";
$username = "root";       // Default XAMPP user
$password = "";           // Default XAMPP password is empty
$dbname = "StudentData";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get POST data from form
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$id_number = $_POST['id_number'];
$phone_number = $_POST['phone_number'];
$comment = $_POST['comment'];

// Insert data into the database
$sql = "INSERT INTO students (first_name, last_name, id_number, phone_number, comment)
        VALUES ('$first_name', '$last_name', '$id_number', '$phone_number', '$comment')";

if ($conn->query($sql) === TRUE) {
    echo "Student information submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
