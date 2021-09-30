<html>
<head>
<link rel="stylesheet" type="text/css" href="css/songs.css">
</head>
<body>
<p>Browse
<?php
	if(isset($_GET['genre']))
	{
		echo $_GET['genre'];
	}
?>
Songs</p>
<br>
<table align="center" width="80%">
<tr><?php

error_reporting(1);

$con=mysql_connect("localhost","root","");

mysql_select_db("demo",$con);

extract($_POST);

$target_dir = "test_upload/";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);



//display all uploaded video

if($disp)

{

$query=mysql_query("select * from video");

	while($all_video=mysql_fetch_array($query))

	{
?>
<br>

	<table>
	<td>
	<video width="300" height="200" controls>
	<source src="test_upload/<?php echo $all_video['video_name']; ?>" type="video/mp4">
	</video> 
	</td>
	</table>

	<?php echo $_FILES["fileToUpload"]["name"]; 
	echo $row['name'];
	?>
	
	<?php } } ?>
	
<form method="post" enctype="multipart/form-data">

<table border="1">

<tr>

<br> <br>
<input type="submit" value="Display Videos" name="disp"/>

</tr>

</table>

</form>	
</div>			  

</body>
</html>