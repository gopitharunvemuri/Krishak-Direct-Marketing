<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body align = "center">

<video autoplay muted loop id="myVideo" class="back-video">
  <source src="farmer.mp4" type="video/mp4">
</video>
<div class="heading">
<h1>"Farming is a profession of hope"</h1>
</div>
<div bgcolor="red" class="center">

<h1><font>Farmer Login</font></h1>
      <form action="validate.php" method="post">
        <div class="txt_field">
          <input type="text" name="username" required>
          <span></span>
          <label><font color="white">Username</font></label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label><font color="white">Password</font></label>
        </div>
        <div class="pass"><font color="white">Forgot Password?</font></div>
        <input type="submit" name="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="plogin.php">Signup</a>
        </div>


      </form> 
</div>
<div class="center1">
<h1><font color="white">Procurer Login</font></h1>
      <form action="pvalidate.php" method="post">
        <div class="txt_field">
          <input type="text" name="username" required>
          <span></span>
          <label><font color="white">Username</font></label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label><font color="white">Password</font></label>
        </div>
        <div class="pass"><font color="white">Forgot Password?</font></div>
        <input type="submit" name="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="plogin.php">Signup</a>
        </div>

      </form>
</div>

</body>
</html>