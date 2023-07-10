<?php
include("productrf.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $name=$_POST["username"];
  $phoneno=$_POST["mobileno"];
  $state=str_replace(' ','',$_POST["state"]);
 
  $district=str_replace(' ','',$_POST["district"]);
  
  $mandal=$_POST["mandal"];
  $pincode=$_POST["pincode"];
  $productype=$_POST["productype"];
  $quantity=$_POST["quantity"];
  $price=$_POST["price"];
  $productreg="no";
  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  
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



}




 if($flag){
   $servername="localhost";
   $root="root";
   $password="";
   $dbname="test";
   

  
   $sql="INSERT INTO farmersdata  VALUES ('$name','$phoneno','$state','$district','$mandal','$pincode','$productype','$quantity','$price','$productreg','$file')";
   if($conn->query($sql)===TRUE){
	
   echo "<script>alert('Product Registered Successfully')</script>";
      echo "<a href='home.php'></a>";
   }
    else{
     echo "Error: ".$sql.mysqli_error($conn);
    }
}

?>
