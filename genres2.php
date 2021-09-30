<html>
<head>
<link rel="stylesheet" type="text/css" href="css/songs.css">
</head>
<body>
<p>Genres</p>
<br>
<table align="center" width="80%">
<tr>
<?php
	$i=1;
	$conn=mysql_connect('localhost','root','');
	mysql_select_db("music_warehouse",$conn);
	$query="select * from genre";
	$r=mysql_query($query,$conn);
	while($row=mysql_fetch_array($r))
		{
			echo "<td><form action='songs.php' method='GET'>";
			echo "<input type='hidden' name='name' value='".$row["name"]."'>";
			echo "<input type='submit' name='genre' value='' style='background:url(".$row['image'].");background-size:cover;'>";
			echo "<pre class='name'>".$row['name']."</pre></form></td>";
			$i=$i+1;
			if($i==5)
			{
				echo "</tr><tr>";
				$i=1;
			}
		}
	mysql_close($conn);
?>
</tr>
</table>
</body>
</html>