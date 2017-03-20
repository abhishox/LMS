<!Doctype html>
<html>
<head></head>

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

<form method="post" action="insert.php">
<!--
<input type="hidden" name="col1" value="<?php echo $col1;?>"/>
<input type="hidden" name="col2" value="<?php echo $col2;?>"/>
<input type="hidden" name="col3" value="<?php echo $col3;?>"/>
<input type="hidden" name="col4" value="<?php echo $col4;?>" min="0"/>
-->
<table>
<tr>
<td>Book ID:</td><td> <input type="number" name="b_id" id="b_id"/></td></tr><tr>
<td>Book Name:</td><td> <input type="text" name="b_name" id="b_name"/></td></tr><tr>
<td>Author Name:</td><td> <input type="text" name="b_author" id="b_author"/></td></tr><tr>
<td>Availability:</td><td> <input type="number" name="b_avail" id="b_avail"/></td></tr>
</table>
<br><br>
<pre>  <input type="submit"/></pre>
</form>

<?php

$col1 = $_GET["b_id"];
$col2 = $_GET["b_name"];
$col3 = $_GET["b_author"];
$col4 = $_GET["b_avail"];


?> 
</body>
</html>
