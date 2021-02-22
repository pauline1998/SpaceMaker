<?php 
	include("function/login.php");
	include("function/customer_signup.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php include("title.php");?></title>
	<link rel="icon" href="assets/img/makerspace.jpg" />
	<link rel = "stylesheet" type = "text/css" href="css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
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
.containert {
  position: relative;
  max-width: 800px;
  margin: 0 auto;
}

.containert img {vertical-align: middle;}

.containert .contentt {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  padding: 5px;
}
</style>
</head>
<body>
	<div id="logo" class="">
	<div id="header">
		 
<!-- <h1><a href="index.html">Reve<span>al</span></a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <img src="assets/img/makerspace.jpg" alt="" width="80" height="60" top="10"></a>
      
		<!-- <img src="img/wsh.png">
		<label>-Westerwell</label>-->
			<ul>
				<li><a href="#signup"   data-toggle="modal">Sign Up</a></li>
				<li><a href="#login"   data-toggle="modal">Login</a></li>
			</ul>
	</div>
		<div id="login" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:400px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h3 id="myModalLabel">Login...</h3>
			</div>
				<div class="modal-body">
					<form method="post">
					<center>
						<input type="email" name="email" placeholder="Email" style="width:250px;">
						<input type="password" name="password" placeholder="Password" style="width:250px;">
					</center>
				</div>
			<div class="modal-footer">
				<input class="btn btn-primary" type="submit" name="login" value="Login">
				<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
					</form>
			</div>
		</div>
		
		<div id="login1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:400px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h3 id="myModalLabel">Please login before purchasing...</h3>
			</div>
				<div class="modal-body">
					<form method="post">
					<center>
						<input type="email" name="email" placeholder="Email" style="width:250px;">
						<input type="password" name="password" placeholder="Password" style="width:250px;">
					</center>
				</div>
			<div class="modal-footer">
				<p style="float:left;">No account? <a href="#signup" data-toggle="modal">Sign up here!</a></p>
				<input class="btn btn-primary" type="submit" name="login" value="Login">
				<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
					</form>
			</div>
		</div>
	
		<div id="signup" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:700px;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel">Sign Up Here...</h3>
				</div>
					<div class="modal-body">
						<center>
					<form method="post">
						<input type="text" name="firstname" placeholder="Firstname" required>
						<input type="text" name="mi" placeholder="Middle Initial" maxlength="1" required>
						<input type="text" name="lastname" placeholder="Lastname" required>
						<input type="text" name="address" placeholder="Address" style="width:430px;"required>
						<input type="text" name="country" placeholder="Province" required>
						<input type="text" name="zipcode" placeholder="ZIP Code" required maxlength="4">
						<input type="text" name="mobile" placeholder="Mobile Number" maxlength="11">
						<input type="text" name="telephone" placeholder="Telephone Number" maxlength="8">
						<input type="email" name="email" placeholder="Email" required>
						<input type="password" name="password" placeholder="Password" required>
						</center>
					</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-primary" name="signup" value="Sign Up">
					<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
				</div>
					</form>
			</div>
	<br>
<div id="container">
	<div class="nav">
	
			<?php 
	include("menu.php");
?>
	</div>
	<div id="video" style="background-color:#00a3e8; width:100%; height:100px;">
		<center><h3><p STYLE="color:white;"><b>products </br>--------------</hr></b></p></h3></center>
	</div>
	
	<div class="nav1">
		<ul> <h2>Product Categories List</h2>

						<?php
				      $query = mysqli_query($conn, "SELECT * FROM `category`") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query))
						{
						$cat = $fetch['category'];
						$id = $fetch['cat_id'];
				?>		
			
			<li><a href="product.php" class="active" style="color:#111;"><?php echo $fetch['category']?></a></li>
			&nbsp;
			
			<?php
					}
				?>
		</ul>
			
	</div>
	
	<div id="content">
		<br />
		<br />
		<div id="product">
			
			<?php 
			include ('function/addcart.php');
				
				$query = mysqli_query($conn, "SELECT *FROM product ORDER BY product_id DESC") or die (mysqli_error());
				
					while($fetch = mysqli_fetch_array($query))
						{
							
						$pid = $fetch['product_id'];
						
						$query1 = mysqli_query($conn, "SELECT * FROM stock WHERE product_id = '$pid'") or die (mysqli_error());
						$rows = mysqli_fetch_array($query1);
						
						$qty = $rows['qty'];
						if($qty <= 5){
						
						}else{
						echo "<div class='float'>";
							echo "<center>";
							echo "<div class='containert'>";
							echo "<a href='details.php?id=".$fetch['product_id']."'><img class='img-polaroid' src='photo/".$fetch['product_image']."' height = '300px' width = '300px'></a>";
							echo "<div class='contentt'>";
							echo " ".$fetch['product_name']."";
							echo "<br />";

							echo " Size: ".$fetch['product_size']."";
							echo "<br />";

							echo "RWF ".$fetch['product_price']."";
							echo "<br />";
                            echo "</div>";
							echo "</div>";
							
							echo "</center>";
							echo "</div>";
						}
							
						}
			?>
		</div>
	</div>





		<br />
</div>
	<br />
	<?php include("footer.php");?>
</body>
</html>