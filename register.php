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
	<title>Register</title>
</head>
<body>
	<div class="container">
		<form method="POST" action="config.php">
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="exampleInputName" name="name" >
    </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email Address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputNumber" class="form-label">Phone Number</label>
    <input type="number" class="form-control" id="exampleInputNumber" name="phone_number" >
    </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword2">
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  <br>
  Already Registered? <a href="Login.php">Login</a>
</form>
		
	</div>

</body>
</html>