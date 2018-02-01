<?php 
$servername = "localhost";
$username = "root";
$dbname = "book_store";

					$conn = new mysqli($servername, $username, '' , $dbname);
				    $username = $_SESSION["login_user"];
					$name = $_POST["bname"];
					$price = $_POST["bprice"];
					$date = $_SERVER['REQUEST_TIME'];
					$sql = "INSERT INTO sales(username,bname,bprice,date)
					VALUES ('$username','$name','$price','$date')";
					$query = mysqli_query($conn, $sql);
					echo"her we are ";
					mysqli_close($conn);
	?>


