<html>
<body>
<?php

$id=@$_GET['id'];
$student_id=@$_GET['student_id'];

echo $student_id;


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
	echo $row[book_avail];	
	$var1 = $row[book_avail];
	$var1 = $var1 - 1;
	$sql="UPDATE books SET book_avail=$var1 where book_ID=$id";
	$res=$con->query($sql);	

        $sql="select * from students where student_ID='$student_id'";
	$res=$con->query($sql);
	$row=mysqli_fetch_array($res);
	$sql="UPDATE students SET student_issueid=$id where student_ID=$student_id";
	$res=$con->query($sql);	

sleep(3);
header("Location: homepage.php");


}


?>

</body>
</html>	