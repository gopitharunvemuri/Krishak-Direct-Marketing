<html>
<head>
<link rel="stylesheet" href="signupstyle.css">

</head>
<body align = "center">
<video autoplay muted loop id="myVideo" class="back-video">
  <source src="video.mp4" type="video/mp4">
</video>

<div style="background-color:white;" class="center">

<h1><font color="black">Procurer SignUp</font></h1>
      <form action="firstphp.php" method="post">
        <div class="txt_field">
          <input type="text" style="color:black;" name="username" required>
          <span></span>
          <label><font color="black">Username</font></label>
        </div>

        <div class="txt_field">
          <input type="password" style="color:black;" name="password" required>
          <span></span>
          <label><font color="black">Password</font></label>
        </div>
        <div class="txt_field">
          <input type="text" style="color:black;" name="contact" required>
          <span></span>
          <label><font color="black">Contact No.</font></label>
        </div>
	<div class="txt_field">
          <input type="text" style="color:black;" name="state" required>
          <span></span>
          <label><font color="black">state</font></label>
        </div>
	<div class="txt_field">
          <input type="text" style="color:black;" name="districts" required>
          <span></span>
          <label><font color="black">District</font></label>
        </div>

	<div class="txt_field">
          <input type="text" style="color:black;" name="village" required>
          <span></span>
          <label><font color="black">Village and Landmark</font></label>
	</div>
  

        <input type="submit" style="color:black;" value="Sign-Up">

        
      </form>
</div>
</body>
</html>