<!DOCTYPE html>
<?php include 'config.php'?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
    body{
      background-image: url('jobportal.png');
      background-size: cover;
    }
    form{
      background-color: #fff;
      margin-top: 2em  ;
      margin-left: 20em;
      margin-right: 10em;
      padding: 15px;
      box-shadow: 10px 10px 8px #888888;
    }
  </style>
	<title>Login</title>
</head>
<body>
	<div class="container">
	<form method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary" name="Login">Login</button>
  
  <p style="text-align: center;"> New User?<br> Create Account <a href="register.php">Sign Up</a></p>
</form>
		
	</div>

</body>
</html>
