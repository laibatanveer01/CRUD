
<!DOCTYPE html>
<html>
<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/styling.css">

<!-- jQuery library -->
<script src="../jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="../bootstrap.min.js"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<title>PHP</title>
	<style type="text/css">
		
	</style>
</head>
<body>

		<div class="container" style="margin: auto; width: 500px;background-color:darkkhaki; height: 700px;">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 header">
				<p align="center">Login Form</p>
				
			</div>
            <?php

include('config/db.php');
if(!empty($_POST['username']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
   
   
    if($username=='Admin' && $password=='technical@456')
    {
        header('location:admin/dashboard.php?username='.$username);
    }
    else{
   ?>
    
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " style="background-color:red;height: 100px;width:100%; font-size:14px;">
        <p align="center" style="padding:25px; font-weight:bold;">Please enter the user name and password</p>
        
    </div>
    <?php
}
    
}




?>

           
			<form action="" method="post">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-top:40px;padding-left: 20px;">
					<label style="color: white;">User Name</label>
				
				<input class="input" type="text" name="username" style="padding-left: 2px;">
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-top:40px;padding-left: 20px;">
					<label style="color: white;">Password</label>
				
				<input class="input" type="password" name="password" style="padding-left: 5px;">
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-top:40px;padding-left: 70px;">
					
				
				<input class="submit" type="submit" name="submit" value="Submit">
				</div>
			</form>
			<!--<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-top:40px;padding-left: 50px;">
					
				
				<input class="newaccount" type="submit" name="newaccount" value="Create New Account">
				</div>
			

			
		</div>
	-->
	
		
	

</body>
</html>