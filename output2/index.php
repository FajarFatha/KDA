<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Login</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>

body {
	color: #566787;
	background: #f5f5f5;
	font-family: 'Varela Round', sans-serif;
	font-size: 13px;
}

.container{
    width: 30%;
    background-color: white;
	padding: 20px;
}
</style>

</head>
<body>

<div class="container" style="background-color: #435d7d; margin-top: 70px;">
<h2 style="color:white; text-align:center">Login</h2>
</div>
<div class="container">
<form action="ceklogin.php" method="POST">
  <div class="mb-3">
    <label for="inputusername" class="form-label">Username</label>
    <input type="text" class="form-control" id="inputusername" name="username">
  </div>
  <div class="mb-3">
    <label for="inputpassword" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputpassword" name="password">
  </div>
	<div style="text-align: center;">
	  <button type="submit" class="btn btn-primary" value="LOGIN">login</button>
  </div>
</form>
</div>

</body>
</html>
