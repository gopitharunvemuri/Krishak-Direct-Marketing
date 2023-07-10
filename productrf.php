<!DOCTYPE html>
    <html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<title> Registration Form </title>
<link rel="stylesheet" href="productrf.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta Stencil"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<style>
    body{
background-image: url("h1.jpg");
background-attachment: fixed;
background-repeat: no-repeat;
background-size: 100% 100%;
font-family: 'Allerta Stencil';font-size: 22px;
}

</style>
</head>
<body>
    <div class="main">
        <div class="title"><h1>REGISTRATION FORM</h1></div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="user-details">
                <div class="input-box">
                    <span class="details"><b>Full Name</b></span>
                    <input type="text" name="username" placeholder="Enter your name" required>
                </div>
                <div class="input-box">
                    <span class="details"><b>Mobile Number</b></span>
                    <input type="text" name="mobileno" placeholder="Enter your mobile number" required>
                </div>
                <div class="f1-group">
                    <label for=" "><b>State</b><br></label>
                    <select name="state" id="slcta" onchange="populate1(this.id,'slctb')">
                        <option>SELECT STATE</option>
                <option>Andhra Pradesh</option>
                <option>Arunachal Pradesh</option>
                <option>Assam</option>
                <option>Bihar</option>
                <option>Tamil Nadu</option>
                <option>Telangana</option>
                <option>Punjab</option>
                <option>Odisha</option>
                
                    </select>
                </div> 
                <div class="f1-group">
                    <label for=""><b>District</b><br></label>
                    <select name="district" id="slctb" ></select>
                </div> 
                
                <div class="input-box">
                    <span class="details"><b>Mandal</b></span>
                    <input type="text" name="mandal" placeholder="Enter your mandal" required>
                </div>
                <div class="input-box">
                    <span class="details"><b>Village</b></span>
                    <input type="text" name="pincode" placeholder="Enter your Village" required>
                </div>  
                <div class="container">
                <div class="f-group">
                    <label for=" "><b>Fields</b><br></label>
                    <select name="slct1" id="slct1" onchange="populate(this.id,'slct2')">
                        <option value=""> --Choose-- </option>
                        <option value="AGRICULTURE">AGRICULTURE</option>
                        <option value="AQUACULTURE">AQUACULTURE</option>
                        <option value="HORTICULTURE">HORTICULTURE</option>
                        <option value="VEGETABLEOIL">VEGETABLEOIL</option>
                        <option value="POULTRY">POULTRY</option>
                        <option value="FLOWERS">FLOWERS</option>
                    </select>
                </div>  
                </div>  
                <div class="container2">
                <div class="f-group">
                    <label for=""><b>Type</b><br></label>
                    <select name="productype" id="slct2" ></select>
                </div>
                </div>
            
                <div class="input-box">
                    <span class="details"><b>Availability of Stock<br>(kg/quintal)</b></span>
                    <input type="text" name="quantity" placeholder="Enter available amount" required >
                </div>
                  
                <div class="input-box">
                    <span class="details"><b>Amount<br>(per kg)</b></span>
                    <input type="text" name="price" placeholder="Price" required>
                </div>
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
            <script>
                function populate(s1,s2)
                {
                    var s1 = document.getElementById(s1);
                    var s2 = document.getElementById(s2);
                    s2.innerHTML = " ";
                    if(s1.value == "AGRICULTURE")
                    {
                        var optionArray = ['Choose|Choose','paddy|Paddy','tomato|Tomato'];
                    }
                    else if(s1.value == "AQUACULTURE"){
                        var optionArray = ['|','prawn|Prawn','Fish|Fish'];
                    }
                    else if(s1.value == "HORTICULTURE"){
                        var optionArray = ['|','mango|Mango','strawberry|Strawberry'];
                    }
                    else if(s1.value == "VEGETABLEOIL"){
                        var optionArray = ['|','palm oil|Palmoil','edible oil|Edible oil'];
                    }
                    else if(s1.value == "POULTRY"){
                        var optionArray = ['|','hens|Hens','eggs|Eggs'];
                    }
                    else if(s1.value =="FLOWERS"){
                        var optionArray = ['|','rose|Rose','mariegold|Mariegold'];
                    }
                    for(var option in optionArray)
                    {
                        var pair = optionArray[option].split("|");
                        var newoption = document.createElement("option");
                        newoption.value = pair[0];
                        newoption.innerHTML=pair[1];
                        s2.options.add(newoption);
                    }
                }
                    
            </script>
            <script>
                function populate1(sa,sb)
                {
                    var sa = document.getElementById(sa);
                    var sb = document.getElementById(sb);
                    sb.innerHTML = " ";
                    if(sa.value == "Andhra Pradesh")
                    {
                        var optionArray = ['Choose|Choose','Krishna|Krishna','East Godavari|East Godavari','West Godavari|West Godavari','Prakasam|Prakasam','Nellore|Nellore','Rayalaseema|Rayalaseema','Kurnool|Kurnool'];
                    }
                    else if(sa.value == "Arunachal Pradesh"){
                        var optionArray = ['Choose|Choose','Changlang|Changlang','Twang|Twang','Lohit|Lohit','Anjaw|Anjaw','Namsai|Namsai'];
                    }
                    else if(sa.value == "Assam"){
                        var optionArray = ['Choose|Choose','Sonitpur|Sonitpur','Tinsukia|Tinsukia','Udaiguri|Udaiguri','Baksa|Baksa','Barpeta|Barpeta'];
                    }
                    else if(sa.value == "Bihar"){
                        var optionArray = ['Choose|Choose','Saharsa|Sahasara','Patna|Patna','Gaya|Gaya','Saran|Saran','Banka|Banka'];
                    }
                    else if(sa.value == "Tamil Nadu"){
                        var optionArray = ['Choose|Choose','Kanchipuram|Kanchipuram','Dharmapuri|Dharmapuri','Salem|Salem','Coimbatore|Coimbatore','Erode|Erode'];
                    }
                    else if(sa.value =="Telangana"){
                        var optionArray = ['Choose|Choose','Nizamabad|Nizamabad','Medak|Medak','Adilabad|Adilabad','Karimnagar|Karimnagar'];
                    }
                    else if(sa.value =="Punjab"){
                        var optionArray = ['Choose|Choose','Hoshiarpur|Hoshiarpur','Patiala|Patiala','Mansa|Mansa','Sanguru|Sanguru'];
                    }
                    else if(sa.value =="Odisha"){
                        var optionArray = ['Choose|Choose','kalahandi|kalahandi','cuttack|Cuttack','Jajpur|Jajpur','Bargarh|Bargarh'];
                    }
                    for(var option in optionArray)
                    {
                        var pair = optionArray[option].split("|");
                        var newoption = document.createElement("option");
                        newoption.value = pair[0];
                        newoption.innerHTML=pair[1];
                        sb.options.add(newoption);
                    }
                }
                    
            </script>
                
        </form>
   
    </div>


    

</body>

</html>
<?php

if(isset($_POST["register"])){
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
   $servername="localhost";
   $root="root";
   $password="";
   $dbname="test1";
   
  $conn=mysqli_connect($servername,$root,$password,$dbname);
   if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
   }
  $sqlx="select * from farmersdata";
  $sqlquery=mysqli_query($conn,$sqlx);
  $id=mysqli_num_rows($sqlquery)+1;

   $sql="INSERT INTO farmersdata  VALUES ($id,'$name','$phoneno','$state','$district','$mandal','$pincode','$productype','$quantity','$price','$productreg','$file')";
   if($conn->query($sql)===TRUE){
	 	echo ("<script LANGUAGE='JavaScript'>
window. alert('Product Registered Succesfully');
window. location. href='home.php';
</script>");
   }
    else{
     echo "Error: ".$sql.mysqli_error($conn);
    }

}
?>

