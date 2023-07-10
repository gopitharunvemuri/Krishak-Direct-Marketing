<html>
    <head>
        <title>Edit Profile</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css">
        <STYLE>
            body{
                background: url('images/image1.jpeg');
                background-repeat: no repeat;
                background-size: cover;
            }
            *:focus{
                outline: none;
            }
            .box{
                box-sizing: border-box;
                width: 300px;
                height: 420px;
                border: 2px solid #585454;
                box-shadow: -3px -3px 7px #ffffff73,
                            3px 3px 5px rgba(94,104,121,0.288);
                border-radius: 5px;
                background: white;
                margin-top: 150px;
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
            a{
                transform:scale(1.1);
            }
        </STYLE>
    </head>
    <body>
        <form action="" method="POST">
        <center>
            <div class="box" name="box1">
                <h3><b>ADD REVIEW</b></h3>
                <input type="text" name="id" placeholder="id"/>
                <input type="radio" name="r1" value="good" id="a"/>
                <label for="a">Good</label>
                <input type="radio" name="r1" value="average" />
                <label for="a">Average</label>
                <input type="radio" name="r1" value="bad" />
                <label for="a">Bad</label>
                <textarea id="Description" name="Description" rows="4" cols="50" style="width: 200px; height: 50px; margin-top: 20px; background: transparent;margin-bottom: 0px;" placeholder="Comment!!"></textarea>
                <br/>
                <br/>
                <br/>
                <a type="submit" name="review" value="review" href="eatfresh.php">Home</a>
                <a href="eatfresh.php"><input type="submit" name="review" value="submit"></input></a>
            </div>
        </center>
        </form>
        <?php
        if (isset($_POST['review'])) {
            $servername="localhost";
            $root="root";
            $password="";
            $dbname="test1";
            $review=$_POST["r1"];
            $id=$_POST['id'];
            $id=(int)$id;
            // Create connection
            $conn=mysqli_connect($servername,$root,$password,$dbname);
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }

            $sql = "UPDATE farmersdata SET review='{$review}' WHERE id='{$id}'";

            if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            } else {
            echo "Error updating record: " . $conn->error;
            }
        }
        ?>
    </body>
</html>
