<!Doctype html>
<html>
<head>


<body style="margin:0px;">
<div style="width:100%; height:100px; background-color:#37474F; padding-bottom:20px;">
<img style="margin-left: 2px; margin-top: 2px;" height="110px" width="110px" src="Fr._Conceicao_Rodrigues_Institute_of_Technology_(emblem).jpg"/>

<form action="" method="post" style="margin-left:100px; margin-top: -145px;">
<br>
<ul style="list-style: none;">
<li><pre style="color: white; font-size: 18px;">CENTRAL LIBRARY
F.C.R.I.T
</pre></li>
<li><a style="color: white; text-decoration: none; border: 1px solid white; padding: 7px; font-size:20px;" href="homepage.php">Go Back</a></li>
</div>


//$col1 = $_GET["b_id"];
//$col2 = $_GET["b_name"];
//$col3 = $_GET["b_author"];
//$col4 = $_GET["b_avail"];

$id=@$_GET["id"];


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


	echo '<table style="width: 70%; float: left;"><tr><td><p>ID</p></td><td>';
	echo $row[book_ID].'</td></tr>';	
	
	echo '<tr><td><p>Name</p></td><td>';
	echo $row[book_name].'</td><tr>';

	echo '<tr><td><p>Author</p></td><td>';
	echo $row[book_author].'</td></tr>';

	echo '<tr><td><p>Availability</p></td><td>';
	echo $row[book_avail].'</td></tr>';

	echo '<tr><td><p>Requests</p></td><td>';
	echo $row[book_requests].'</td></tr>';

	echo '<tr><td></td><td>';
	echo '</td></tr>';

		

	echo '</table>';

}


?>

</head>

<body>
<form method="post" action="update.php">
<!--
<input type="hidden" name="col1" value="<?php echo $col1;?>"/>
<input type="hidden" name="col2" value="<?php echo $col2;?>"/>
<input type="hidden" name="col3" value="<?php echo $col3;?>"/>
-->

<?php
echo '<input type="hidden" name="b_id" id="b_id" value="'."$id".'" min="0"/>';

echo 'Availability: <input type="number" name="b_avail" id="b_avail"/><br>';
?>
<br><br>
<input type="submit"/>
</form>
 
</body>
</html>
