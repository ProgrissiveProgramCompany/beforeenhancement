
<?php
session_start();
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

$sql = "SELECT * from user where password='$pass' AND username='$name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$_SESSION['login_user']=$name;
	if ($name == "admin") {
	 	header("location: adminwithphp.php"); // Redirecting To Other Page
	 }else header("location: afterlog.php"); // Redirecting To Other Page
} else {
	echo "'$result->num_rows'abo alzeft";
$error = "Username or Password is invalid";
}
mysqli_close($conn);
?> 
