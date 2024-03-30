<?php
include("config.php");

  if(isset($_POST['submit'])){
	  
    
	$email =$_POST['email'];
	
	$password =$_POST['password'];
	

	 
	 }if(empty($email)){
		$email_err =" Please Enter your Email";
	 }
	 elseif(empty($password)){
		$password_err ="Please Enter your password";
     }else{
            $q ="SELECT * FROM `registration` WHERE email ='$email' && password ='$password'";
            $result =mysqli_query($con,$q);
            if(mysqli_num_rows($result)){

                    echo "login successfully";
            }else{
                 echo "login not successfully";
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
	<h4 class="card-title mt-3 text-center">Login Account </h4>
	

	<form action="" method="POST">
	
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input type="email" name="email" class="form-control" placeholder="Email address" >

    </div> <!-- form-group// -->
	<span class="text-danger"><?php if(isset($email_err)){ echo $email_err;}?></span>
    <span class="text-danger"></span>

    <span class="text-danger"></span>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" name="password" placeholder="Create password" type="password">
		
    </div> <!-- form-group// -->
	<span class="text-danger"><?php if(isset($password_err)){ echo $password_err;}?></span>
    <span class="text-danger"></span>
    
    <div class="form-group">
        <button type="submit"  name="submit"class="btn btn-primary btn-block">LOGIN</button>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a href="">Log In</a> </p>   
	<span class="text-danger"><?php if(isset($err)){ echo $err;}?></span>                                                               
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->


</body>
</html>