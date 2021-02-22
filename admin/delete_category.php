<?php
	ob_start();
	include("../function/session.php");
	include("../db/dbconn.php");
?>
<?php
    $id = $_GET['id'];

	 $que = mysqli_query($conn, "DELETE FROM category WHERE cat_id = {$id}") or die(mysqli_error());
  
  header("Location:admin_category.php");
   // mysqli_query("DELETE FROM product WHERE product_id = {$id}");
	//header("Location:admin_running.php");
?>


