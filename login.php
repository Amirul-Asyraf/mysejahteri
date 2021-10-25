<?php include('db.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Name</label>
  		<input type="text" name="name" >
  	</div>
  	<div class="input-group">
  		<label>Phone Number</label>
  		<input type="number" name="phone">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="index.php">Sign up</a>
  	</p>
  </form>
</body>
</html>