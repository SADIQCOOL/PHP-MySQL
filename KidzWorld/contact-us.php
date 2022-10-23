<?php

session_start();
include 'connection_start.php';
$name = '';
$email = '';
$phone = '';

if(isset($_POST['message'])){
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
	$message = $_POST['message'];
	//$name = 'sadiq chy';
	
	$sql = 'INSERT INTO contact (name,message,status,user_email,user_phone) VALUES("'.$name.'","'.$message.'",1,"'.$email.'","'.$phone.'")';
	$result = mysqli_query($link,$sql);
	$lastInsertID = mysqli_insert_id($link);
	
	
	
	
}
include 'connection_end.php';
?>

<!DOCTYPE html>
<html>
 <head>
  <title>Contact  Form</title>
  
 </head>
 
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
 
 
 <body>


 
	 
	 
	    <div class="container">
   

<div class="row">
    <div class="col-md-12">
	<form action="" method="POST">
     
  
     <div class="form-group mb-3">
      <label>Name</label>
      <input type="text" name="name" placeholder="Enter your name" class="form-control" value="" />
     </div>
	  <label>Email</label>
      <input type="email" name="email" class="form-control" placeholder="Enter your email" value="" />
     </div>
     <div class="form-group mb-3">
      <label>Phone</label>
      <input type="tel" name="phone" class="form-control" placeholder="Enter your number" value="" />
     </div>
	  <div class="form-group mb-3">
      <label>Message</label>
      <textarea name="message" placeholder="Type message" class="form-control"  ></textarea>
	 <input type = 	"submit" value = "send" />
     </div>
     
    
   
 
    </form>
	
	
	
   </div>
  </div>
  
  </div>
  
  
  
   <div class="contact">
         <div class="container-fluid padddd">
           
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 padddd">
                <div class="map_section">
                     <div id="map">
                     </div>
                   </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 padddd">
                <form class="main_form" action="" method="POST">
                   <div class="row">
                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                         <input class="form-control" placeholder="Name" type="text" name="name">
                      </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                         <input class="form-control" placeholder="Email" type="email" name="email">
                      </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                         <input class="form-control" placeholder="Phone" type="tel" name="phone">
                      </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
					     <label>Message</label>
                        <textarea name="message" placeholder="Type message" class="form-control"  ></textarea>
							 <input class="send" type = 	"submit" value = "send" />
                      </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                         <button class="send">Send</button>
						 
						
                      </div>
					  
					
        


    
                   </div>
                </form>
               </div> 
            </div>
         </div>
      </div>
  
  
  
  
  
	
 
 </body>
 </html>