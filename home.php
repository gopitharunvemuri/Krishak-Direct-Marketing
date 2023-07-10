<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<title> Login and Registration Form </title>
<meta name="Author" content="">
<meta name="Keywords" content="">
<meta name="Description" content="">
<link rel="stylesheet" href="home.css"/>
<link rel="stylesheet" href="K:\fontawesome\fontawesome-free-5.13.0-web\fontawesome-free-5.13.0-web\css\all.min.css">
<script>
    function stickyMenu(){
        var sticky=document.getElementById('sticky');
        if(window.pageYOffset > 220){
            sticky.classList.add('sticky');
        }
        else{
            sticky.classList.remove('sticky');
        }
    }
    window.onscroll = function(){
        stickyMenu();
    }
</script>
<style>
    button{
    background: transparent;
    border:none;
    outline: none;
}
img:hover{
    background: none;
}
.dropbtn img{
    background: none;
    border-radius: 50%;
    size: 1px;
    width: 33px;
    top: 0px;
}
.dropbtn:hover{
    box-shadow: 0;
} 
.dropdown{
    position: relative;
    display: inline-block;
} 
.dropdown-content{
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    right: 10px;
    top: 40px;
    font-size: 16px;
} 
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}
.dropdown-content a:hover {background-color: #ddd;}
.dropdown:hover .dropdown-content {display: block;}
</style>
</head>
<body>
    <div class="parallax">
        <div class="page-title">KRISHAK DIRECT MARKETING</div>
    </div>
    <div class="menu" id="sticky">
        <ul class="menu-ul">
            
            <a href="#" class="a-menu"><li>Home</li></a>
            <a href="productrf.php" class="a-menu"><li>Product Registration</li></a>
            
        </ul>

        <ul class="menu-ul" style="float: right;">
            <a href="#" class="a-menu">
                <li>
                <div class="dropdown" name="d">
                    <button class="dropbtn"><img src="myprofile.png"></button>
                    <div class="dropdown-content">
                    
                      <a href="feditprofile.php" class="a-menu">EditProfile</a>
                      <a href="https://docs.google.com/forms/d/e/1FAIpQLScA7Y2k_uqD2XHB0Mdace6KSSWjz36_ShQrY03k7AfqRHro8w/viewform?usp=sf_link" class="a-menu">Help</a>
                      <a href="main.php" class="a-menu">Logout</a>

                    </div>
                </div>
                </li>
            </a>
            </ul>
    </div>
    
</body>
</html>

<html>
  <head>
  <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
<?php
      $servername="localhost";
      $root="root";
      $password="";
      $dbname="test1";
      $conn=mysqli_connect($servername,$root,$password,$dbname);
      $buyphone=$_SESSION['phone'];
      $sql="SELECT * FROM farmersdata WHERE phoneno='$buyphone'";
      $result = mysqli_query($conn,$sql);
    ?>
<table id="customers">
    
  <tr>
  <th>Name</th>
  <th>Phone no</th>
<th>state</th>
<th>district</th>
<th>Mandal</th>
<th>Village</th>
<th>Product Type</th>


  </tr>


  
            <?php while($row = mysqli_fetch_array($result))
            {
              echo "
              <tr>
              <td>".$row['name']."</td>
              <td>".$row['phoneno']."</td>
              <td>".$row['state']."</td>
              <td>".$row['district']."</td>
              <td>".$row['mandal']."</td>
              <td>".$row['village']."</td>
              <td>".$row['productype']."</td>
              </tr>";
            }
            ?>
</table>
</body>
</html>
