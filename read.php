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

// Retrieve Data from Database
$sql = "SELECT * FROM mahasiswa";
$result = $conn->query($sql);

// Display Data in Table Rows
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["nim"] . "</td><td>" . $row["nama"] . "</td></tr>";
    }
} else {
    echo "<tr><td colspan='2'>Tidak ada data mahasiswa</td></tr>";
}

// Close Connection
$conn->close();
