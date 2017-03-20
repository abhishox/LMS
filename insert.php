<!Doctype html>
<html>
<head></head>

<body>
<?php
$id=@$_POST["b_id"];
$name=@$_POST["b_name"];
$author=@$_POST["b_author"];
$avail=@$_POST["b_avail"];


$servername = "localhost";
$username = "root";
$password = "qwerty";
$dbname = "library";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO books (book_ID, book_name, book_author, book_avail) VALUES ($id,'$name','$author',$avail)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	echo '<br><br><a href="homepage.php"></a>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	echo '<br><br><a href="homepage.php"></a>';
}

$conn->close();
sleep(3);
header("Location: homepage.php");

?> 
</body>
</html>
