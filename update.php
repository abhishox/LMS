
<?php
$id=@$_POST["b_id"];
$avail=@$_POST["b_avail"];

echo $id;
echo $avail;

$servername = "localhost";
$username = "root";
$password = "qwerty";
$dbname = "library";
$con=new mysqli($servername,$username,$password,$dbname);

if($con->connect_error){
    echo 'Connection Faild: '.$con->connect_error;
    }else{
        $sql="select * from books where book_ID='$id'";
        $res=$con->query($sql);	
	$row=mysqli_fetch_array($res);
	$sql="UPDATE books SET book_avail=$avail where book_ID=$id";
	$res=$con->query($sql);	
		
}
sleep(3);
header("Location: homepage.php");


?>
