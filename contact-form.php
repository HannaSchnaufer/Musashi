<?php
// Get the form data
$name = $_POST['name'];
$subjek = $_POST['subjek'];
$mailFrom = $_POST['mail'];
$message = $_POST['message'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'mushy');
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error); // Fixed syntax for error message
} else {
    // Prepare an SQL statement with placeholders
    $stmt = $conn->prepare("INSERT INTO senden (name, subjek, mail, message) VALUES (?, ?, ?, ?)");
    
    // Check if the statement prepared successfully
    if ($stmt) {
        // Bind parameters (corrected data types for binding)
        $stmt->bind_param("ssss", $name, $subjek, $mailFrom, $message); // Using 's' for string type
        
        // Execute the prepared statement
        if ($stmt->execute()) {
            echo "Pesanmu sudah terkirim ^^";
        } else {
            echo "Error executing statement: " . $stmt->error;
        }
        
        // Close the statement
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
