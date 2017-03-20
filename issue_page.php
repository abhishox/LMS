<!Doctype html>
<html>
<head>


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

<p>Search Student by Name</p>
<form action="" method="post">
<input type="text" name="search">
<input type="submit" name="submit" value="Search">
</form><br><br>

<?php
$id=@$_GET["id"];

$search_value=$_POST["search"];
$servername = "localhost";
$username = "root";
$password = "qwerty";
$dbname = "library";
$con=new mysqli($servername,$username,$password,$dbname);
if($con->connect_error){
    echo 'Connection Faild: '.$con->connect_error;
    }else{
        $sql="select * from students where student_name like '%$search_value%'";

        $res=$con->query($sql);
	
        while($row=$res->fetch_assoc()){
	echo "<a style='text-decoration: none; color: black;'><div style='border: 2px solid black; padding: 20px;'>";
	echo '<table style="border: 0px solid black; width: 100%;">';
	echo '<th align="left">Roll NO.</th> <th align="left">Name</th> <th align="left">Issued Book</th>';
	echo '<tr>';
	echo '<td style="width:15%;">'.$row["student_ID"].'</td><td style="width:40%;">'.$row[student_name].'</td><td style="width: 40%;">'.$row[student_issueid].'</td>';
	echo '</tr>';
	if($row[student_issueid] < 1){
	echo '<tr><td><a style="color: blue; text-decoration: none;" href="issue.php?id='.$id.'&student_id='.$row["student_ID"].'">ISSUE</a></td></tr>';
	}else
	{
	echo '<tr><td>Cannot issue book</td></tr>';
	}
	echo '</table>';
	echo '</div></a><br>';

            }       
	        }
?>
</body>
</html>
