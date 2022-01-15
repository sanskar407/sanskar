
<!DOCTYPE html>
<?php include 'config.php'?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		.banner{
			background: url('hero_ontheclock.jpg');
			background-size: cover;
		}
		.navbar{
        overflow: hidden;
        background-color: #333;
        position: fixed;
        top: 0; 
        width: 100%;

}

	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <title>Career</title>
</head>
<body>

<div class="container-fluid">
	
<div class="banner">
<div class="jumbotron jumbotron-fluid" style="background-image: url('jobportal.png');background-size:cover;">
  <div class="container">
    <h1 class="display-4" style="text-align:center;"><b>JOB PORTAL</b></h1>
    <p class="lead" style="text-align:center;"><b>Best jobs available for you</b></p>
  </div>
</div>                                        
</div>

<!-- <div class="div_p1" style="margin:50px; padding:30px; background-color:white; width:20%; 
overflow:hidden; word-wrap:break-word; border: 2px solid black; border-radius: 10px;
box-shadow: 0 5px 10px 0 black; ">
    <h1>HR</h1> 
    <p class="p1">
      <div style="font-size:20px;align-items=center;justify-content=center;" >AMAZON</div>
    
    <b>Skills Required:</b>good comunication skills<br>
    <b>Job Location:</b>Delhi<br>
    <b>CTC:</b> 3-5 LPA<br>
    <button type="submit" class="btn btn-primary" name="apply">Apply</button>
  
    </p>
    </div>
</div> -->
<div class="row">
<?php $sql = "SELECT `id`, `cname`, `position`, `Jdesc`, `skills`, `CTC` FROM `jobs`";
$result= mysqli_query($conn,$sql);
if($result->num_rows>0){
  while($row=$result->fetch_assoc()){
    echo'
    <div class="col-md-4">
    <div class-"jobs" style="border: 1px solid black; border-radius: 5px; box-shadow: 0 5px 5px 0 black;margin:50px; padding:30px;">
    <h3 style="text-align:center;">'.$row['position'].'</h3>
    <h4 style="text-align:center;">'.$row['cname'].'</h4>
    <p style="color:black; text-align=justify;">'.$row['Jdesc'].'</p>
    <p style="color:black;"><b>Skills Required</b>'.$row['skills'].'</p>
    <p style="color:black;"><b>CTC:</b>'.$row['CTC'].'</p>
    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal" style="margin-top: 65px;">
    Apply Now
    </button>
    </div>
  </div>';
  }
}
?>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply for Jobs</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying For </label>
            <input type="text" class="form-control" name="apply">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Qualification</label>
            <input type="text" class="form-control" name="qual">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Year Passout</label>
            <input type="text" class="form-control" name="year">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="go" >Apply</button>
        </form>
      </div>
    </div>
  </div>
</div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

