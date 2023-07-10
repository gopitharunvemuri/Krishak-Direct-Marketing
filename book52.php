<?php
error_reporting(0);
    echo $_GET['rn'];
    echo '    '.$_GET['pn'];
    echo '    '.$_GET['kn'];
    echo '       '.$_GET['gn'];
    echo '       '.$_GET['myphn'];
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

   $sql="INSERT INTO cart  VALUES ('$name','$phoneno','$state','$district','$mandal','$village','eggs','$myphn')";
   if($conn->query($sql)===TRUE){
    echo ("<script LANGUAGE='JavaScript'>
window. alert('Product Registered Succesfully');
window. location. href='top52.php';
</script>");
}
else{
echo "Error: ".$sql.mysqli_error($conn);
}
?>