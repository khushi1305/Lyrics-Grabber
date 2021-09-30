<?php
$servername="localhost";
$username="root";
$password="";
$dbname="music";

$conn=mysqli_connect($servername,$username,$password,$dbname);
$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t3'];
$d=$_POST['t4'];

$sql="INSERT INTO `music`.`feedback` (`Name`, `Email`, `PhNo`, `Feedback`) VALUES ('$a', '$b', '$c', '$d')";


if(mysqli_query($conn,$sql))
{
	header("Location:single.html");
}
else
{
	echo "error";
}

mysqli_close($conn);

?>