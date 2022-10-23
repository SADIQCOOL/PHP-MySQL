
<?php

session_start();
include 'connection_start.php';

$name = '';
$email = '';
$phone = '';
$password = '';


if(isset($_POST["submit"]))
{

 if(!empty($_POST["name"]))
 {
  $name = $_POST["name"];
 }

 if(!empty($_POST["email"]))
 {
  $email = $_POST["email"];
 }
 
 if(!empty($_POST["phone"]))
 {
  $phone = $_POST["phone"];
 }

 if(!empty($_POST["password"]))
 {
    $password = $_POST["password"];
 }
 
date_default_timezone_set('ASIA/DHAKA');

$currentDate = date('Y-m-d H:i:s');


$sqlCheck = 'SELECT * FROM user WHERE user_email = "'.$email.'"';
$resultCheck = mysqli_query($link,$sqlCheck);

$no_of_data = mysqli_num_rows($resultCheck);


if($no_of_data>0){
	
	
	echo "email already";
}

else{

	
	$sqlInsert = 'INSERT INTO user (user_name,user_email,user_phone,user_password,status,created_date,updated_date) 
	VALUES ("'.$name.'","'.$email.'","'.$phone.'","'.$password.'",1,"'.$currentDate.'","'.$currentDate.'")';
	
	$resultInsert = mysqli_query($link,$sqlInsert);
	
	
	

}




 
 
 
 
 
 
 


}



 include 'connection_end.php';
 

 

?>
<!DOCTYPE html>
<html>
 <head>
  <title>Register</title>
  
 </head>
 
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
 <body>
 <h2 align=center>Registration</h2>
 </br>
   <div class="container">
   

   <div class="row">
    <div class="col-md-12">
	<form action="" method="POST">
     
  
     <div class="form-group mb-3">
      <label>Name</label>
      <input type="text" name="name" placeholder="Enter your name" class="form-control" value="" />
     </div>
     <div class="form-group mb-3">
      <label>Email</label>
      <input type="email" name="email" class="form-control" placeholder="Enter your email" value="" />
     </div>
     <div class="form-group mb-3">
      <label>Phone</label>
      <input type="tel" name="phone" class="form-control" placeholder="Enter your number" value="" />
     </div>
     <div class="form-group mb-3">
      <label>Password</label>
	  <input type="password" name="password" class="form-control" placeholder="Enter password" value="" />
     
     </div>
     <div class="form-group mb-3">
      <input type="submit" name="submit" class="btn btn-success" value="REGISTER" />
	  
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