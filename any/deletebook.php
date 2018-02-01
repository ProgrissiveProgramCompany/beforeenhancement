 <?php

$servername = "localhost";
$username = "root";
$dbname = "book_store";

// Create connection
$conn = new mysqli($servername, $username, '', $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$rid = $_POST["bid"];
// sql to delete a record
$sql = "DELETE FROM book WHERE bid='$rid'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully $rid";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?> 