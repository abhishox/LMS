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
<li><p style="color: white; font-size: 12px;">Search by Name</p></li>
<li style="margin-top:-5px;"><pre><input type="text" name="search"/>   <input type="submit" name="submit" value="Search"/></pre></li>
</ul>
</form><br><br>
</div>
<br>
<?php
$search_value=$_POST["search"];
$servername = "localhost";
$username = "root";
$password = "qwerty";
$dbname = "library";
$con=new mysqli($servername,$username,$password,$dbname);
if($con->connect_error){
    echo 'Connection Faild: '.$con->connect_error;
    }else{
        $sql="select * from books where book_name like '%$search_value%'";

        $res=$con->query($sql);
	
               while($row=$res->fetch_assoc()){
	echo "<div style='border: 2px solid black; padding: 20px; width: 95%; margin-left:10px;'>";
	echo '<table style="border: 0px solid black; width: 100%;">';
	echo '<th align="left">Name</th> <th align="left">Author</th>';
	echo '<tr>';
	echo '<td style="width:40%;">'.$row[book_name].'</td><td style="width:40%;">'.$row[book_author].'</td>';
	echo '</tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td><a  style="color: blue; text-decoration: none;" href="student_description.php?id='.$row['book_ID'].'">Check Availability</a></td></tr></table>';
	echo '</div><br>';

            }       
	        }

?>
</body>
</html>
