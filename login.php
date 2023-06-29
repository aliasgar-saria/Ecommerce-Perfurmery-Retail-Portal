<?php require('./session.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
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
		?>

			
	</section><!--  end hero section  -->


	<section class="search">
		<div class="wrapper">
		<div id="fom">
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<h3 style="text-align:center; color: #000099; font-weight:bold; text-decoration:underline">Login Area</h3>
				<table height="100" align="center">
					<tr>
						<td>Email Address:</td>
						<td><input type="email" name="email" placeholder="Enter email" required></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="pass" placeholder="Enter Password" required></td>
					</tr>
					<tr>
						&emsp;&emsp;&emsp;<td colspan="2" style="text-align:center"><input type="submit" name="login1" value="Login Here"></td>
					</tr>
				</table>
			</form>
			<?php
				if(isset($_POST['login1']))
				{
					
					$email=$_POST['email'];
					$pass=$_POST['pass'];
					
					$query=pg_query("select * from account where email='".$email."' ;") or die("no no");
					$row=pg_fetch_assoc($query);
					
						if($row['email']==$email && $row['pass']==$pass)
						{
							
							$_SESSION['email']=1;
							$_SESSION['pass']=1;
							$_SESSION['emailemail']=$email;
							echo "<script> window.location.replace(\"./index.php\"); </script>";
						}
						else
						{
							echo "<script> alert('Email and Password are not correct '); </script>";
						}
					
					
				}
			?>
			</div>
			<a href="#" class="advanced_search_icon" id="advanced_search_btn"></a>
		</div>

	</section>

	<footer>
		

		<div class="copyrights wrapper">
			Copyright &copy; <?php echo date("Y")?> All Rights Reserved .
		</div>
	</footer>
	
</body>
</html>
