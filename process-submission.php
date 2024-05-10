<?php
$email = $_POST['email'];
$bug_type = $_POST['bug_type'];
$bug_description = $_POST['bug_description'];

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "login_register";

// Create connection
$conn = new mysqli($hostName, $dbUser, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Prepare and execute SQL query
$stmt = $conn->prepare("INSERT INTO submission (email, bug_type, bug_description) VALUES (?, ?, ?)");
if ($stmt === false) {
    die("Error in prepare: " . $conn->error);
}

$stmt->bind_param("sss", $email, $bug_type, $bug_description);
if ($stmt->execute() === false) {
    die("Error in execution: " . $stmt->error);
}

echo "Thank You for submitting the vulnerability website ip address.";

$stmt->close();
$conn->close();
?>
