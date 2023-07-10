<html>
    <head>
        <title>Edit Profile</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css">
        <STYLE>
            body{
                background: url('h1.jpg');
                background-repeat: no repeat;
                background-size: cover;
            }
            *:focus{
                outline: none;
            }
            .box{
                box-sizing: border-box;
                width: 300px;
                height: 280px;
                border: 2px solid #070707;
                box-shadow: -3px -3px 7px #ffffff73,
                            3px 3px 5px rgba(94,104,121,0.288);
                border-radius: 5px;
                background: transparent;
                margin-top: 190px;
                overflow: hidden;
                padding-top: 10px;
                align-items: center;
                top: 500px;
            }
            .box h3{
                color: black;
            }
            input[type="text"],input[type="password"]{
                display: block;
                box-sizing: border-box;
                background: none;
                color: black;
                margin-bottom: 30px;
                padding: 2px;
                width: 220px;
                height: 20px;
                border: none;
                border-bottom: 1px solid #090909;
                font-family: 'Roboto',sans-serif;
                font-weight: 400;
                font-size: 15px;
                transition: 0.2s ease;
            }
            input[type="text"]:focus,input[type="password"]:focus{
                border-bottom: 2px solid #070707;
                border-bottom-right-radius: 20px;
                color: #080808;
                transition: 0.2s ease;
            }
            .box a{
                border: 1px solid #050505;
                background-color: black;
                color: white;
                height: 30px;
                width: 500px;
                border-radius: 5px;
                margin: 0px;
                transition: all 0.3s;
                text-decoration: none;
                padding-left: 25px;
                padding-right: 25px;
                padding-top: 10px;
                padding-bottom: 10px;
            }
            .box a:hover{
                transition: 0.2s ease;
            }
        </STYLE>
    </head>
    <body>
    <form action="" method="post">
        <center>
            <div class="box" name="box1">
                <h3><b>EDIT PROFILE</b></h3>
                <input type="text" name="name1" placeholder="Username">
                <input type="password" name="password1" placeholder="Old password">
                <input type="password" name="password2" placeholder="New password">
                <input type="submit" name="submit" value="submit"></input>
            </div>
        </center>
     </form>
<?php

if(isset($_POST["submit"])){
  $username=$_POST["name1"];
  $password1=$_POST["password1"];
  $password2=$_POST["password2"];
  $flag=true;
  $flag1=false;


   $servername="localhost";
   $root="root";
   $password="";
   $dbname="test1";
   
   $conn=mysqli_connect($servername,$root,$password,$dbname);
   if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
   }

if($password1==$password2){
     echo "<script>alert('Password Cannot be same')</script>";
     $flag=false;
}


   $sql = "UPDATE second SET password='{$password2}' WHERE username='{$username}' and password='{$password1}'";
         
      

if ($conn->query($sql) === TRUE && $flag) {
      	echo ("<script LANGUAGE='JavaScript'>
window. alert('Succesfully Updated Password');
window. location. href='eatfresh.php';
</script>");
} 

}

?>
    </body>

</html>