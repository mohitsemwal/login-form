<?php
include("config.php");

  if(isset($_POST['submit'])){
	  
    $name =$_POST['name'];
	$email =$_POST['email'];
	$phone_number =$_POST['phone_number'];
	$job =$_POST['job'];
	$password =$_POST['password'];
	$repeat_password =$_POST['repeat_password'];

	 if(empty($name)){
	  
		  $name_err =" Please Enter your name";
	 }elseif(empty($email)){
		$email_err =" Please Enter your Email";
	 }elseif(empty($phone_number)){

		$phone_number_err =" Please Enter your phone number";
	
	 }elseif(empty($job)){
       
		$job_error ="select your job";

	 } 
	 elseif(empty($password)){
		$password_err ="Please Enter your password";
		 
	 }elseif(empty($repeat_password)){
		$repeat_password_err ="Please Enter your repeat_password";
	 }
	 elseif($password !=$repeat_password){

		    $err = "password and repeat password not match";
	 }
	 elseif($password ==$repeat_password){

		  $q ="SELECT * FROM `registration` WHERE `email`='$email'";
		  $res =mysqli_query($con,$q);
		 
		   if(mysqli_num_rows($res)>0){
			   echo "alerdy email exit";
		   }else{
             
			$q ="INSERT INTO `registration`( `name`, `email`, `phone_number`, `job`, `password`) VALUES ('$name','$email','$phone_number','$job','$password')";
			$res =mysqli_query($con,$q);
			if($res){
				echo "Registration successfully";
			}else{
				echo "Registration fail successfully";
			}
		   }
 }	  	  
		  

	 }
		  
  




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">



<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Create Registration  Account</h4>
	

	<form action="" method="POST">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="name" class="form-control" placeholder="Full name" type="text">
    </div> <!-- form-group// -->
	<span class="text-danger"><?php if(isset($name_err)){ echo $name_err;}?></span>
    <span class="text-danger"></span>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input type="email" name="email" class="form-control" placeholder="Email address" >

    </div> <!-- form-group// -->
	<span class="text-danger"><?php if(isset($email_err)){ echo $email_err;}?></span>
    <span class="text-danger"></span>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
    	<input type="text" name="phone_number" class="form-control" placeholder="Phone number" >
    </div> <!-- form-group// -->
	<span class="text-danger"><?php if(isset($phone_number_err)){ echo $phone_number_err;}?></span>
    <span class="text-danger"></span>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
		</div>
		<select class="form-control" name="job">
			<option value ="">Select job type</option>
			<option value='Designer'>Designer</option>
			<option value='Manager'>Manager</option>
			<option value='Accaunting'>Accaunting</option>
		</select>
	</div> <!-- form-group end.// -->
	<span class="text-danger"><?php if(isset($job_error)){ echo $job_error;}?></span>
    <span class="text-danger"></span>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" name="password" placeholder="Create password" type="password">
		
    </div> <!-- form-group// -->
	<span class="text-danger"><?php if(isset($password_err)){ echo $password_err;}?></span>
    <span class="text-danger"></span>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" name="repeat_password" placeholder="Repeat password" type="password">

    </div> <!-- form-group// --> 
    <span class="text-danger"><?php if(isset($repeat_password_err)){ echo $repeat_password_err;}?></span>    

    <div class="form-group">
        <button type="submit"  name="submit"class="btn btn-primary btn-block"> Create Registration  Account  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a href="login.php">Log In</a> </p>   
	<span class="text-danger"><?php if(isset($err)){ echo $err;}?></span>                                                               
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->


</body>
</html>