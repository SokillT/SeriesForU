<!DOCTYPE html>
<html lang="en">
	<head> 
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
		<meta charset="utf-8">
		<title>Register</title>
		<link href="css/register.css" rel="stylesheet">
	</head>
	<body>
		<br>
		<div class="container">
  			<div class="row">
  				<div class="col-md-8">
  					<div class="container">
					    <div class="row" >
					        <div class="span4 offset4 well" style="padding-bottom:0px;">
					            <legend>Register</legend>
					            <form method="POST" action="connect/connect_register.php" accept-charset="UTF-8">
					           	<input type="text" id="username" class="span4" name="username" placeholder="Username">
					            <input type="password" id="password" class="span4" name="password" placeholder="Password">
					            <input type="email" id="email" class="span4" name="email" placeholder="E-mail">
					            
								Gender : 
								<div class="radio" style="padding-bottom:5px;">
						            <label class="radio-inline">
									  <input type="radio" name = "gender" value = "male"> Male
									</label>
									<label class="radio-inline">
									  <input type="radio" name = "gender" value = "female"> Female
									</label>
								</div>
					            <button type="submit" name="submit" class="btn btn-info btn-block">Submit</button>
					            </form>
					            <center><a href="index.php"> -- Series for YOU -- </a></center>
					        </div>
					    </div>
					</div>
  				</div>
  			</div>
		</div>

    	<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>