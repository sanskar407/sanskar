

<?php  

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'jobs';

$conn = mysqli_connect($server,$username,$password,$database);

if ($conn->connect_error) {
	// code...
	die("Connection failed:".$conn->connect_error);
}
echo"";

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$number=$_POST['phone_number'];
	$password=$_POST['password'];

	$sql= "INSERT INTO `users`( `Name`, `email`, `password`,`phone_number`) VALUES ('$name','$email','$password','$number')";
	if(mysqli_query($conn,$sql)){
		echo "Record inserted Successfully.";
	}
	else{
		echo "ERROR: Could not able to execute $sql. " .mysqli_error($conn);
	}
}

session_start();
if(isset($_POST['Login'])){
	$email=$_POST['email'];
	$password=$_POST['password'];

	$query="SELECT * FROM users WHERE `email`='$email' AND `password`='$password'";
	$result=mysqli_query($conn,$query);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	if(mysqli_num_rows($result)==1){
		header("location:dashboard.php");
	}
	else{
		$error='EmailId or Password is incorrect';
	}
}

if(isset($_POST['job'])){
	$cname=$_POST['cname'];
	$pos=$_POST['pos'];
	$Jdesc=$_POST['Jdesc'];
	$skills=$_POST['skills'];
	$CTC=$_POST['CTC'];

	$sql= "INSERT INTO `jobs`(`cname`,`position`,`Jdesc`,`skills`, `CTC`) VALUES ('$cname','$pos','$Jdesc','$skills','$CTC')";
	if(mysqli_query($conn,$sql)){
		echo "New job Posted";
	}
	else{
		echo "ERROR: Failed to Post the job $sql." . mysqli_error($conn);
	}
	mysqli_close($conn,$sql);	
}


if(isset($_POST['go'])){
	$name= $_POST['name'];
	$qual=$_POST['qual'];
	$apply=$_POST['apply'];
	$year=$_POST['year']; 
    // 42 min
    
	$sql="INSERT INTO `candidates`(`Name`,`apply`,`qual`,`year`) VALUES ('$name','$apply','$qual','$year')";
	
	mysqli_query($conn,$sql);
}

?>





















