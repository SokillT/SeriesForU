<!DOCTYPE html>
<html lang="en">
	<head> 
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
		<meta charset="utf-8">
		<title>Edit Profile</title>
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
					            <legend>Edit Profile</legend>
					            <form method="POST" action="connect/connect_editpro.php?username=<?php echo $_GET['username'] ?>" accept-charset="UTF-8">
					           	<input class="form-control span4" id="disabledInput" type="text" placeholder="<?php echo $_GET['username'] ?>" disabled>
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

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>