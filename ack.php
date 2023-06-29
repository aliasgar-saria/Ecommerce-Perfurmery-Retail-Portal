<?php require('./session.php'); ?>
<?php
						if(!$_SESSION['email'] && (!$_SESSION['pass']))
							echo "<script> window.location.replace(\"./index.php.\"); </script>";
					?>
<!DOCTYPE html>
<html lang="en">
<head>

	<title>About us</title>
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="">
		<?php
			include 'header.php';
			
			if($_SERVER['REQUEST_METHOD']==='POST')
			{
				$shipment=$_POST['ta'];
				$price=$_SESSION['milk'];
				$name=$_SESSION['apple'];
				$qty=$_SESSION['carrot'];
				$email=$_SESSION['emailemail'];
				$item_id=rand(1000000,9999999);
				
				pg_query("insert into item (item_id,name,qty,price,shipment,email) values ('".$item_id."','".$name."','".$qty."','".$price."','".$shipment."','".$email."'); ") or die("not successful");
			
			
			}
			
		?><br><br><br><br><br><br><br><br>
			<div align=center> <font size=6> Thank you for purchasing , <br> Please Visit again </font></div>
			<br><br><br><br><br><br><br><br>

	<footer>
		

		<div class="copyrights wrapper">
			Copyright &copy; <?php echo date("Y")?> All Rights Reserved .
		</div>
	</footer>
	
</body>
</html>
