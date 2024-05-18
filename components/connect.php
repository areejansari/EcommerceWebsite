<?php

// Database connection parameters
$host = 'localhost'; // Hostname
$port = '3307'; // MySQL port number
$dbname = 'newshop'; // Database name
$username = 'root'; // MySQL username (default is 'root' for XAMPP)
$password = ''; // MySQL password (default is empty for XAMPP)

// Data Source Name (DSN) with port
$dsn = "mysql:host=$host;port=$port;dbname=$dbname";

try {
    // Create a new PDO instance
    $conn = new PDO($dsn, $username, $password);

    // Set PDO to throw exceptions on errors
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Display success message
    // echo "Connected to the database successfully";
} catch(PDOException $e) {
    // Handle connection errors
    echo "Connection failed: " . $e->getMessage();
    exit(); // Exit the script
}

// Now you can perform database operations using $conn object

?>
