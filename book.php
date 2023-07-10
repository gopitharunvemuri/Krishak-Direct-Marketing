<?php
error_reporting(0);
   $servername="localhost";
   $root="root";
   $password="";
   $dbname="test1";
   
  $conn=mysqli_connect($servername,$root,$password,$dbname);
   if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
   }
   $name=$_GET['rn'];
   $phoneno=$_GET['pn'];
   $state=$_GET['kn'];
   $district=$_GET['gn'];
   $mandal=$_GET['mn'];
   $village=$_GET['an'];
   $myphn=$_GET['myphn'];
   $sqli = "select * from cart where phoneno='{$phoneno}' and productype='paddy'";
   $result = $conn->query($sqli);
   $count=mysqli_num_rows($result);
   if($count>0){
    echo ("<script>
    window. alert('Product has been already added to the cart');
    window. location. href='top11.php';
    </script>");
   }
   else
   {
   $sql="INSERT INTO cart VALUES ('$name','$phoneno','$state','$district','$mandal','$village','paddy','$myphn')";
   if($conn->query($sql)===TRUE){
    echo ("<script>
    window. alert('Product added to cart');
    window. location. href='top11.php';
    </script>");
}
else{
echo "Error: ".$sql.mysqli_error($conn);
}}
?>