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

// Get Data from Form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];

// Update Data in Database
$sql = "UPDATE mahasiswa SET nama='$nama', nim='$nim' WHERE id=$id";
$conn->query($sql);

// Close Connection
$conn->close();

// Redirect back to index.php
header("Location: index.php");
