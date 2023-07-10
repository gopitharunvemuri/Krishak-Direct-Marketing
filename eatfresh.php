<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>KRISHAK DIRECT MARKETING</title>
<link rel="stylesheet" href="eatfresh.css"/>
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
    body{
    margin:0;
    font-family:system-ui;
}
.parallax{
    background-image: url('images/background3.jpg');
    height: max-content;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.page-title{
    background: rgba(0,0,0,0.5);
    text-align: center;
    color: white;
    padding: 50px;
    font-variant: small-caps;
    font-size: 70px;
    font-family: fantasy;
    letter-spacing: 10px;
}
.sticky{
    position: fixed;
    top: 0;
    width: 100%;
}
.menu{
    background: #184d47;
    text-align: center;
}
.menu-ul{
    margin: 0;
    padding: 0;
    display: inline;
}
.menu-ul li{
    font-size: 17px;
    list-style: none;
    display: inline-block;
    padding: 25px 25px 26px 25px;
}
.a-menu{
    text-decoration: none;
    color: white;

}
.menu-ul li:hover{
    transform:scale(1.1);
}
.search-box{

    border: 1px solid white;
    border-radius: 50px;
    background: white;
    width: max-content;
    display: inline-block;
    margin: 8px;
}
.search-box:hover{
    box-shadow: 0 0 10px 2px #5b8c5a;
    border:1px solid #5b8c5a;
}  
.search-input{
    width: 100px;
    border: none;
    font-size: 18px;
    outline: none;
    background: transparent;
    margin: 5px 0 0 5px;
}
i{
    font-size: 20px;
    margin: 0 10px 0 0;
}
button{
    background: transparent;
    border:none;
    outline: none;
}
.container{
    margin: 45px 45px 45px 5%;
    width: 90%;
    text-align:center;
}
.categories{
    width: max-content;
    margin: 25px;
    border: 1px solid #184d47;
    border-radius: 50px 50px 50px 50px;
    display: inline-block;
}
.categories:hover{
    box-shadow: 0 0 10px 3px #184d47;
}
.item-image{
    height: 200px;
    width: 200px;
    border-radius: 50px 50px 50px 50px;
    padding: 10px;
}
.image-title{
    text-align: center;
    padding: 1px;
    font-weight: bold;
    font-size: 20px;
}
a{
    text-decoration: none;
}
.title{
    padding: 50px;
    font-size: 50px;
    font-weight: bold;
    letter-spacing: 4px;
    color: white;
    background: rgba(0,0,0,0.5);
}
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
    <div class="parallax" name="p">
        <div class="page-title" name="pt">KRISHAK DIRECT MARKETING</div>
    </div>
    <div class="menu" id="sticky" name="m">
        <ul class="menu-ul">
            <a href="#" class="a-menu"><li>Home</li></a>
            <a href="agriculture.php" class="a-menu"><li>Agriculture</li></a>
            <a href="aquaculture.php" class="a-menu"><li>Aquaculture</li></a>
            <a href="horticulture.php" class="a-menu"><li>Horticulture</li></a>
            <a href="vegetableoils.php" class="a-menu"><li>Vegetable oils</li></a>
            <a href="poultry.php" class="a-menu"><li>Poultry</li></a>
            <a href="flowers.php" class="a-menu"><li>Flowers</li></a>
            <a href="addreview.php" class="a-menu"><li>Add a Review</li></a>
            <a href="tablesample.php" class="a-menu"><li>Cart</li></a>
            <ul class="menu-ul" style="float: right;">
            <a href="#" class="a-menu">
                <li>
                <div class="dropdown" name="d">
                    <button class="dropbtn"><img src="images/myprofile.png"></button>
                    <div class="dropdown-content">
                      <a href="editprofile.php" class="a-menu">EditProfile</a>
                      <a href="https://docs.google.com/forms/d/e/1FAIpQLScA7Y2k_uqD2XHB0Mdace6KSSWjz36_ShQrY03k7AfqRHro8w/viewform?usp=sf_link" class="a-menu">Help</a>
                      <a href="loginpage.php" class="a-menu">Logout</a>

                    </div>
                </div>
                </li>
            </a>
            </ul>
        </ul>

    </div>
    <div class="container" name="c">
        <a href="agriculture.php">
            <div class="categories" name="cc1">
                <img src="images/paddy.jpg" class="item-image"/>
                <div class="image-title">AGRICULTURE</div>
            </div>
        </a>
        <a href="aquaculture.php">
            <div class="categories" name="cc2">
                <img src="images/fish1background.jpg" class="item-image"/>
                <div class="image-title">AQUACULTURE</div>
            </div>
        </a>
        <a href="horticulture.php">
            <div class="categories" name="cc3">
                <img src="images/fruits1.jpg" class="item-image"/>
                <div class="image-title">HORTICULTURE</div>
            </div>
        </a>
        <a href="http://localhost/tharun/vegetableoils.php">
            <div class="categories" name="cc4">
                <img src="images/vegetableoilsbackground.jpg" class="item-image"/>
                <div class="image-title">VEGETABLE OILS</div>
            </div>
        </a>
        <a href="poultry.php">
            <div class="categories" name="cc5">
                <img src="images/poultrybackground.jpg" class="item-image"/>
                <div class="image-title">POULTRY</div>
            </div>
        </a>
        <a href="flowers.php">
            <div class="categories" name="cc6">
                <img src="images/flowersbackground.jpg" class="item-image"/>
                <div class="image-title">FLOWERS</div>
            </div>
        </a>
    </div>
</body>
</html>