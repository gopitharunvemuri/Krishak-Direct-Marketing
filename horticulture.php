<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Horticultural Products</title>
<link rel="stylesheet" href="horticulture.css"/>
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
    background-image: url('images/fruits1.jpg');
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
    background: #d87614;
    text-align: center;
}
.menu-ul{
    margin: 0;
    padding: 0;
    display: inline;
}
.menu-ul li{
    font-size: 20px;
    list-style: none;
    display: inline-block;
    padding: 25px 25px 26px 25px;
}
.a-menu{
    text-decoration: none;
    color: white;

}
.menu-ul li:hover{
    background: #eaad52;
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
    box-shadow: 0 0 10px 2px #d87614;
    border:1px solid #d87614;
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
    border: 1px solid #d87614;
    border-radius: 50px 50px 50px 50px;
    display: inline-block;
    color: #d87614;
}
.categories:hover{
    box-shadow: 0 0 10px 3px #d87614;
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

</style>
</head>
<body>
    <div class="parallax" name="p3">
        <div class="page-title" name="pt3">HORTICULTURE</div>
    </div>
    <div class="menu" name="m3" id="sticky">
        <ul class="menu-ul">
            <a href="eatfresh.php" class="a-menu"><li>Home</li></a>
            <a href="top31.php" class="a-menu"><li>Mangoes</li></a>
            <a href="top32.php" class="a-menu"><li>Strawberries</li></a>
        </ul>

    </div>
    <div class="container" name="c3">
        <a href="top31.php">
            <div class="categories">
                <img src="images/mango.jpg" class="item-image"/>
                <div class="image-title">Mangoes</div>
            </div>
        </a>
        <a href="top32.php">
            <div class="categories" name="cat3">
                <img src="images/strawberries.jpg" class="item-image"/>
                <div class="image-title">Strawberries</div>
            </div>
        </a>
    </div>
</body>
</html>