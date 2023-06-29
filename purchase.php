<?php require('./session.php'); ?>
<?php
						if(!$_SESSION['email'] && (!$_SESSION['pass']))
							echo "<script> window.location.replace(\"./index.php.\"); </script>";
					?>
<!DOCTYPE html>
<html lang="en">
<head>

	<title>Purchase</title>
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	
		<?php
			include 'header.php';
		?>
		<style>
			p.ex1 {outline: dashed;}
			p.ex2 {outline: dotted green;}
			p.ex3 {outline: 5px solid yellow;}
			p.ex4 {outline: thick ridge pink;}
			
		</style>
		<form action="shipment.php" method=POST >
		<div align="center">
			<br><br><br><p class="ex4">
			<h4><font size=6><br>Jannat</font></h4></p>
			 <img src="jannat.jpg"  width="350" height="350" align="center"><br>
				<font color=black size=5>RS.2000</font><br>
			<br><p class="ex4"> <font size=4 >Enter Quantity </font><input type=number name=jannat />&emsp;&emsp;&emsp;&emsp;<input type=submit name=s1 value=next />
			 </p></form>
			 <form action="shipment.php" method=POST >
			 <br><br><br><p class="ex4">
			<h4><font size=6><br>Musk</font></h4></p>
			 <img src="musk	.jpg"  width="350" height="350" align="center"><br>
				<font color=black size=5>RS.4000</font><br>
			<br> 
			<p class="ex4"> <font size=4 >Enter Quantity </font><input type=number name=musk />&emsp;&emsp;&emsp;&emsp;<input type=submit name=s2 value=next />
			 </p></form>
			 <form action="shipment.php" method=POST >
			
			 <br><br><br><p class="ex4">
			<h4><font size=6><br>Oudh</font></h4></p>
			 <img src="oudh.jpg"  width="350" height="350" align="center"><br>
				<font color=black size=5>RS.8000</font><br>
			<br> 
			<p class="ex4"> <font size=4 >Enter Quantity </font><input type=number name=oudh />&emsp;&emsp;&emsp;&emsp;<input type=submit name=s3 value=next />
			 </p>
			 </form>
				
			
			</div>
		
		
			
			
			
	<footer>
		

		<div class="copyrights wrapper">
			Copyright &copy; <?php echo date("Y")?> All Rights Reserved .
		</div>
	</footer>
	
</body>
</html>
