<?php
$servername="localhost";
$username="root";
$password="";
$dbname="music";

$conn=mysqli_connect($servername,$username,$password,$dbname);
$a=$_POST['t1'];
$b=$_POST['t2'];



$sql= "UPDATE `regi` SET `pswd`='$b' WHERE email='$a'";

if(mysqli_query($conn,$sql))
{
	echo "Updated successfully";
	header("Location:index.html");
}
else
{
	echo "error";
}

mysqli_close($conn);

?>



