<?php
// Database Configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tugas_WAD";

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get ID parameter from URL
$id = $_GET['id'];

// Delete Data from Database
$sql = "DELETE FROM mahasiswa WHERE id=$id";
$conn->query($sql);

// Close Connection
$conn->close();

// Redirect back to index.php
header("Location: index.php");
