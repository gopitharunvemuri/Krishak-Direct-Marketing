<?php
  if(!$_SESSION['logout1']){
	if($_SESSION['sid']==session_id())
	{
		echo "Welcome to you<br>";
		echo "<a href='logout.php'>Logout</a>";
	}
	else
	{
		header("location:login.php");
	}
  }
  else{
   header("location:login.php");
  }
?>