<html>
<body>
<?php

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

        $sql="select * from students where student_ID='$student_id'";
	$res=$con->query($sql);
	$row=mysqli_fetch_array($res);
	$sql="UPDATE students SET student_issueid=0 where student_ID=$student_id";
	$res=$con->query($sql);	


}
sleep(3);
header("Location: homepage.php");


?>

</body>
</html>	