
<?php
echo "here we are";
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

$name = $_POST["Name"];
$num = $_POST["catergoryNum"];

$sql = "INSERT INTO category(cat_name,cat_id)
VALUES ('$name','$num')";

if ($conn->query($sql) === TRUE) {
    header("location: adminwithphp.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


mysqli_close($conn);
?> 
