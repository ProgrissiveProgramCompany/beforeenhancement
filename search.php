<?php
session_start();
$servername = "localhost";
$username = "root";
$dbname = "book_store";
$conn = mysqli_connect($servername, $username, '', $dbname);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * 
		FROM book ';		
$query = mysqli_query($conn, $sql);

$searchvalue = $_POST["search"];
while ($row = mysqli_fetch_array($query))
		{
		if($row['bprice'] == $searchvalue || $row['bname'] == $searchvalue){
          header("location: displayproduct.php");
		}
	}


    // close connection

    mysqli_close($conn);


?>