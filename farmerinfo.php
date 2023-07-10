<?php
session_start();
?>
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
a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
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
      $sql="SELECT * FROM farmersdata WHERE name='{$_SESSION['name']}'";
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
