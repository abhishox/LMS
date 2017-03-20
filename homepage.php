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
<li><pre style="color: white; font-size: 18px;">F.C.R.I.T CENTRAL LIBRARY

</pre></li>
<li>
<p align="center"><a style="margin-left:470px; margin-top:-480px; padding: 5px; border:1px solid white; text-decoration:none; color: white;" href="insert_page.php">Add a book</a>
<a style="margin-left:470px; margin-top:-400px; padding: 5px; border:1px solid white; text-decoration:none; color: white;" href="return_page.php">Return a book</a></p>
</li>
<li><p style="color: white; font-size: 12px; margin-top:-40px;">Search by Name</p></li>
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
	echo "<a style='text-decoration: none; color: black;' href='description.php?id=".$row['book_ID']."'><div style='border: 2px solid black; padding: 20px;'>";
	echo '<table style="border: 0px solid black; width: 100%;">';
	echo '<th align="left">ID</th> <th align="left">Name</th> <th align="left">Author</th> <th align="left">Availability</th>';
	echo '<tr>';
	echo '<td style="width:15%;">'.$row["book_ID"].'</td><td style="width:40%;">'.$row[book_name].'</td><td style="width:40%;">'.$row[book_author].'</td><td style="width:5%;">'.$row[book_avail].'</td>';
	echo '</tr></table>';
	echo '</div></a><br>';

            }       
	        }
?>
</body>
</html>
