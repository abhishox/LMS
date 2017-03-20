<!Doctype html>
<html>
<head>

<style>
table,tr{

padding: 50px;

}

td{

padding: 10px;

}

p{

font-size: 18px;
font-weight: bold;

}

a{

color: blue;
text-decoration: none;
border: 1px solid blue;
padding: 5px;
}
</style>
</head>

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


<?php
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

	echo '<tr><td><a href="issue_page.php?id='.$row[book_ID].'">ISSUE</a></td><td>';
	echo '<a href="return_page.php?id='.$row[book_ID].'">RETURN</a></td><td><a href="update_page.php?id='.$row[book_ID].'">UPDATE</a></td></tr>';


	echo '</table>';

}
?>



</body>
</html>
