<!DOCTYPE html>
<html>
<head>
<title>Send sms from Localhost</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
<div class="container" style="border:1px solid black;">
<div class="row">
<div class="col-sm-12">
<form action="sendsms.php" method="post">
<div class="form-group">
<label>Mobile No :</label>
<input type="number" name="mno"class="form-control" placeholder="Mobile No">
</div>
<div class="form-group">
<label>Messege :</label>
<textarea class="form-control" name="msg"></textarea>
</div>
<div class="form-group">
<input type="submit" name="ok" class="btn btn-primary" value="Send">
</div>
</form>
</div>
</div>
</div>
</body>
</html>