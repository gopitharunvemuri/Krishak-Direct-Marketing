<?php
session_start();
?>
<?php
include("loginpage.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $username=$_POST["username"];
  $password=$_POST["password"];
  $flag=false;


   $servername="localhost";
   $root="root";
   $password="";
   $dbname="test1";
   
   $conn=mysqli_connect($servername,$root,$password,$dbname);
   if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
   }
   $password=$_POST["password"];
   $sql="SELECT * FROM second";
   $result=$conn->query($sql);
   $x="";
   while($row = $result->fetch_assoc()) {
    if($username===$row["username"] && $password===$row["password"]){
      $_SESSION['phone']=$row['contact'];
     $flag=true;
    }
  }
  if($flag){
    header("Location: eatfresh.php");
    exit();
  }
  else{
   echo "<script>alert('Invalid Username or Password')</script>";
   echo "<a href='loginpage.php'></a>";
  }
}

?>
