
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

$name = $_POST["Name"];
$price = $_POST["price"];
$cat = $_POST["catergory"];
$author = $_POST["Author"];
$publish = $_POST["publisher"];
$imgscr = $_POST["imgSrc"];

$sql = "INSERT INTO book(bname,bprice,cat,Author,b_publisher,imgsrc)
VALUES ('$name','$price','$cat','$author','$publish','$imgscr')";

if ($conn->query($sql) === TRUE) {
    header("location: adminwithphp.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


mysqli_close($conn);
?> 
