
<?php

session_start();
include 'connection_start.php';


$email = '';

$password = '';


if(isset($_POST["submit"]))
{



 if(!empty($_POST["email"]))
 {
  $email = $_POST["email"];
 }


 if(!empty($_POST["password"]))
 {
    $password = $_POST["password"];
 }
 
date_default_timezone_set('ASIA/DHAKA');

$currentDate = date('Y-m-d H:i:s');



$sql = "SELECT * FROM user WHERE user_email ='".$email."'";


$result = mysqli_query($link,$sql) or die(mysqli_error($link));


$no_of_data = mysqli_num_rows($result);

if($no_of_data){
	while($row = mysqli_fetch_assoc($result)){
		
		if($row['status'] == 1 && $row['user_password'] == $password){
			
			echo "Login success!";
			
			$userData = array(
			"id" => $row["user_id"],
			"name" => $row["user_name"],
			"email" => $row["user_email"]
			
			);
			$_SESSION['user_data'] = $userData;
			
			
			header('Location:http://localhost/aust/b1/fifthclass/user-details.php');
		
		}else if($row['status'] == 1 && $row['user_password'] != $password){
			
			echo "Login fail!";
		}else if ($row['status'] !=1){
			
			echo "Something wrong!";
		}
		
	}
	
}



}



 include 'connection_end.php';
 

 

?>
<!DOCTYPE html>
<html>
 <head>
  <title>Login</title>
  
 </head>
 
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
 <body>
 
 
 
 <h2 align=center>Login</h2>
 </br>
   <div class="container">
   

   <div class="row">
    <div class="col-md-12">
	<form action="" method="POST">
     
  
     
     <div class="form-group mb-3">
      <label>Email</label>
      <input type="email" name="email" class="form-control" placeholder="Enter your email" value="" />
     </div>
     
     <div class="form-group mb-3">
      <label>Password</label>
	  <input type="password" name="password" class="form-control" placeholder="Enter password" value="" />
     
     </div>
     <div class="form-group mb-3">
      <input type="submit" name="submit" class="btn btn-success" value="LOGIN" />
	  
     </div>
    </form>
	
   </div>
  </div>
  </div>
   <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
 </body>
</html>