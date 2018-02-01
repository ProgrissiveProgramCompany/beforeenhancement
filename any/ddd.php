<?php
$servername = "localhost";
$username = "root";
$dbname = "book_store";
// Create connection
$conn = new mysqli($servername, $username, '' , $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "SELECT * FROM book"; //You don't need a ; like you do in SQL
$result = $conn->query($sql);


 //Close the table in HTML

$conn->close();//Make sure to close out the database connection
?>
