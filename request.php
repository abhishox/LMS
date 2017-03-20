<?php
$id=@$_GET["id"];	
echo "$id";
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

	echo $row[book_requests];
	$var2 = $row[book_requests];	
	$var2 = $var2 + 1;
	echo $var2;
	$sql="UPDATE books SET book_requests=$var2 where book_ID=$id";
	$res=$con->query($sql);	
}
	
?>