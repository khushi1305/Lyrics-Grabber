<?php
$servername="localhost";
$username="root";
$password="";
$dbname="music";

$conn=mysqli_connect($servername,$username,$password,$dbname);
$a=$_POST['txt1'];
$b=$_POST['txt2'];


$sql="INSERT INTO `music`.`login` (`email`, `pswd`) VALUES ('$a', '$b')";

if(mysqli_query($conn,$sql))
{
	
	header("Location:index.html");
	
}
else
{
	echo "error";
}

mysqli_close($conn);

?>
