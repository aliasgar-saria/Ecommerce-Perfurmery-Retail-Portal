<?php require('./session.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
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
			<h3 style="text-align:center; color: #000099; font-weight:bold; text-decoration:underline">Registration page</h3>
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
						<td>Address:</td>
						<td><input type="text" name="add" placeholder="Enter address" required></td>
					</tr>
					<tr>
						<td>Phone number:</td>
						<td><input type="number" name="phone" placeholder="Enter phone number" required></td>
					</tr>
					<tr>
						&emsp;&emsp;&emsp;<td colspan="2" style="text-align:center"><input type="submit" name="login1" value="Register"></td>
					</tr>
				</table>
			</form>
			<?php
				if(isset($_POST['login1']))
				{
					
					$email=$_POST['email'];
					$pass=$_POST['pass'];
					$add=$_POST['add'];
					$phone=$_POST['phone'];
					
					if(pg_query("insert into account (email,pass,address,phone) values ('".$email."','".$pass."','".$add."','".$phone."');") or die("no no"))
					
					{
						
							echo "<script> alert('user is registered '); </script>";
							echo "<script> window.location.replace('./login.php'); </script>";
					}
					else
					{
						echo "<script> alert('unsuccessful'); </script>";
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
