<?php
$servername = "db";
$username = "root";
$password = "secret";
$database = "testdb";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("❌ Connection failed: " . $conn->connect_error);
}
echo "✅ Connected successfully to MySQL from PHP!<br>";

$result = $conn->query("SELECT NOW() AS now");
if ($result) {
    $row = $result->fetch_assoc();
    echo "Server time from MySQL: " . $row['now'];
}
$conn->close();
?>
