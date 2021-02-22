<!DOCTYPE html>
<html>
<head>
	<title><?php include("title.php");?></title>
	<link rel="icon" href="assets/img/makerspace.jpg" />
	<link rel = "stylesheet" type = "text/css" href="../css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/carousel.js"></script>
	<script src="js/button.js"></script>
	<script src="js/dropdown.js"></script>
	<script src="js/tab.js"></script>
	<script src="js/tooltip.js"></script>
	<script src="js/popover.js"></script>
	<script src="js/collapse.js"></script>
	<script src="js/modal.js"></script>
	<script src="js/scrollspy.js"></script>
	<script src="js/alert.js"></script>
	<script src="js/transition.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<style>
.hero-image {
  background-image: url("assets/img/makerspace.jpg");
  background-color: #cccccc;
  height: 500px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

</style>
</head>
<body class="hero-image" >
	
		<?php include('../function/admin_login.php');?>
	<div id="admin">
		<form method="post" class="well">
			<center>
				<legend>Adminstrator's Login</legend>
					<table>
						<tr>
							<input type="text" name="username" placeholder="Username" required>
						</tr>
						<tr>
							<input type="password" name="password" placeholder="Password" required>
						</tr>
						<br>
						<br>
							<input type="submit" name="enter" value="Enter" class="btn btn-primary" style="width:200px;">
						
					</table>
			</center>
		</form>
	</div>
	



</div>

</body>
</html>