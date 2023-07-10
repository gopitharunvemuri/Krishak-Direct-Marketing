<?php
include("signup.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $firstnameerr=$passwordnameerr="";
  $username=$_POST["username"];
  $password=$_POST["password"];
  $contact=$_POST["contact"];
  $state=$_POST["state"];
  $districts=$_POST["districts"];
  $village=$_POST["village"];
  $flag=true; 
  $servername="localhost";
  $root="root";
  $password="";
  $dbname="test1";
  $conn=mysqli_connect($servername,$root,$password,$dbname);
   if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
   }
  $sql = "SELECT id,contact FROM first";
  $result = $conn->query($sql);
  $id=1+mysqli_num_rows($result);
  while($row=$result->fetch_assoc()){
     if($id==$row["id"]){
     $id=1+$row["id"];
  }
   if($contact===$row["contact"]){
     $flag=false;
        echo "<script>alert('This account is already registered')</script>";
      echo "<a href='signup.php'></a>";
  }


}


  if(strlen($contact)<10){
   $flag=false;
      echo "<script>alert('Invalid Phone number')</script>";
      echo "<a href='signup.php'></a>";
  }

 if($flag){
   $servername="localhost";
   $root="root";
   $password="";
   $dbname="test";
   
   
   $password=$_POST["password"];
  
   $sql="INSERT INTO first  VALUES ('$id','$username','$password','$contact','$state','$districts','$village')";
   if($conn->query($sql)===TRUE){
         header("Location: home.php");
    	exit();
   }

}
}
?>
