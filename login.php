<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['txt1']);
      $mypassword = mysqli_real_escape_string($db,$_POST['txt2']); 
      
	  if($myusername=="admin" && $mypassword=="admin")
	  {
		  header("location:adminhome.html");
	  }
	  else
	  {
      $sql = "SELECT name FROM regi  WHERE email = '$myusername' and pswd = '$mypassword'";
      $result = mysqli_query($db,$sql);
     // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        // session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         echo '<script language="javascript">alert("login success")</script>';
		 echo '<script language="javascript">window.location="single.html"</script>';
        
      }else {
        // $error = "Your Login Name or Password is invalid";
		echo '<script language="javascript">alert("Pls enter correct id and password")</script>';
		echo '<script language="javascript">window.location="index.html"</script>';
      }
	  }
   }
?>

