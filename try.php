
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

$name = $_POST["username"];
$pass = $_POST["password"];
$mail = $_POST["email"];

$sql = "INSERT INTO user(username,password,email)
VALUES ('$name','$pass','$mail')";

if ($conn->query($sql) === TRUE) {
    header("location:login.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


mysqli_close($conn);
?> 
