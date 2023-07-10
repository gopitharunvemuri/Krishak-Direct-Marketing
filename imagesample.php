<hmtl>
<head>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
                <div class="input-box">
                    
                    <label for="avatar"><b>Upload a photo:</b></label>
                    <input type="file"
                                id="avatar" name="image"
                          accept="image/png, image/jpeg">

                </div>
               <div class="button">
                    <input type="submit" name="register" value="Register">
                </div>    
            </div>
</form>
</body>
</html>
<?php
if(isset($_POST["register"])){

  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  





   $servername="localhost";
   $root="root";
   $password="";
   $dbname="test1";
     $conn=mysqli_connect($servername,$root,$password,$dbname);
   if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
   }

  
   $sql="INSERT INTO sample  VALUES ('$file')";
   if($conn->query($sql)===TRUE){
 	echo ("<script LANGUAGE='JavaScript'>
window. alert('Succesfully Updated');
window. location. href='home.php';
</script>");
   }
    else{
     echo "Error: ".$sql.mysqli_error($conn);
    }
}

?>
