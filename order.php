<?php require('./session.php'); ?>
<?php
						if(!$_SESSION['email'] && (!$_SESSION['pass']))
							echo "<script> window.location.replace(\"./index.php.\"); </script>";
					?>
<!DOCTYPE html>
<html lang="en">
<head>

	<title>Orders</title>
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<style>
			p.ex1 {outline: dashed;}
			p.ex2 {outline: dotted green;}
			p.ex3 {outline: 5px solid yellow;}
			p.ex4 {outline: thick ridge pink;}
			
		</style>
		<?php
			include 'header.php';
			
			$query=pg_query("select * from item where email='".$_SESSION['emailemail']."';") or die("not successful");
			while($row=pg_fetch_assoc($query))
			{
				
				echo "<div align=\"center\">
			<br><br><br><p class=\"ex4\">
			<h4><font size=4><br>".$row['name']."</font></h4></p>";
			if($row['name']=='jannat')
			{
				echo "<br><img src=\"jannat.jpg\"  width=\"250\" height=\"250\" align=\"center\"><br>";
			}
			
			if($row['name']=='musk')
			{
				echo "<br><img src=\"musk.jpg\"  width=\"250\" height=\"250\" align=\"center\"><br>";
			}
			
			if($row['name']=='oudh')
			{
				echo "<br><img src=\"oudh.jpg\"  width=\"250\" height=\"250\" align=\"center\"><br>";
			}
			
			 	echo "<font color=black size=4>RS.".$row['price']."</font><br>
			<br><br><br><br><p class=\"ex4\"> <font size=4 >Quantity : ".$row['qty']." <br><br>
			 </p><br><br><br><p class=\"ex4\"><font size=4 >Shipment Address : ".$row['shipment']." <br><br></div>";
				
			}
		
		?>
		
		
				
			
			
		
		
			
			
			
			
	<footer>
		

		<div class="copyrights wrapper">
			Copyright &copy; <?php echo date("Y")?> All Rights Reserved .
		</div>
	</footer>
	
</body>
</html>
