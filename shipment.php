<?php require('./session.php'); ?>
<?php
						if(!$_SESSION['email'] && (!$_SESSION['pass']))
							echo "<script> window.location.replace(\"./index.php.\"); </script>";
					?>
<!DOCTYPE html>
<html lang="en">
<head>

	<title>Shipment</title>
	<meta charset="utf-8">
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="">
		<?php
			include 'header.php';
			
			if(isset($_POST['s1']))
			{
				$_SESSION['apple']='jannat';
				$carrot=$_POST['jannat'];
				$input=$_POST['jannat']*2000;
				$_SESSION['milk']=2000;
				$_SESSION['carrot']=$carrot;
			$_SESSION['input']=$input;
				
			}
			
			if(isset($_POST['s2']))
			{
				$_SESSION['apple']='musk';
				$carrot=$_POST['musk'];
				
			$input=$_POST['musk']*4000;
			$_SESSION['milk']=4000;
			$_SESSION['carrot']=$carrot;
			$_SESSION['input']=$input;
			}
			
			if(isset($_POST['s3']))
			{
				$_SESSION['apple']='oudh';
				$_SESSION['milk']=8000;
				$carrot=$_POST['oudh'];
			$input=$_POST['oudh']*8000;	
			$_SESSION['carrot']=$carrot;
			$_SESSION['input']=$input;
			}
		?>

			<section class="caption">
				<h2 class="caption" style="text-align: center">Shipment Address for Cash on Delivery </h2>
				<h3 class="properties" style="text-align: center">Total Price to pay <?php echo $_SESSION['input']; ?>
</h3>


				<?php
				
				if(isset($_POST['s1']))
			{
				
				echo "<center><img src=\"jannat.jpg\"  width=\"200\" height=\"200\" align=\"center\">";
				echo "<font size=5>Quantity : ".$_SESSION['carrot']."</center>";
			
			}
			
			if(isset($_POST['s2']))
			{
				echo "<center><img src=\"musk.jpg\"  width=\"200\" height=\"200\" align=\"center\">";
				echo "<font size=5>Quantity : ".$_SESSION['carrot']."</center>";
			
			}
			
			if(isset($_POST['s3']))
			{
				echo "<center><img src=\"oudh.jpg\"  width=\"200\" height=\"200\" align=\"center\">";
				echo "<font size=5>Quantity : ".$_SESSION['carrot']."</center>";
			
			}
			
			?>
			</section><br><br><br><br>
	</section>

		<center><form action=ack.php method=POST >
		Enter shipment address <br><br><textarea name=ta ></textarea>
		<br><br>
		<button id=submit onclick="myFunction()">submit</button><br><br>
		</form>
		<script>
		function myFunction()
		{
			var r = alert("Are you sure address is correct ?!");
    
				
			
		}
		</script>
				
			
	

	<footer>
		

		<div class="copyrights wrapper">
			Copyright &copy; <?php echo date("Y")?> All Rights Reserved .
		</div>
	</footer>
	
</body>
</html>
