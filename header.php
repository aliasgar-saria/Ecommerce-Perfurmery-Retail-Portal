<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<header>
			<div class="wrapper">
				 <a href="./index.php"><img src="logo.png"  height="90" width="90" /></a> 
				<a href="#" class="hamburger"></a>
				<nav>
					<?php
						if(!$_SESSION['email'] && (!$_SESSION['pass'])){
					?>
					<ul>
						<li><a href="index.php">Home</a></li>
						
						<li><a href="./about.php">About</a></li>
						<li><a href="./contact.php">Contact</a></li>
						<li><a href="login.php">Login</a></li>
						<li><a href="register.php">Register</a></li>
					</ul>
					
					<?php
						} else{
					?>
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="purchase.php">Purchase</a></li>
								<li><a href="order.php">Your Orders</a></li>
								<li><a href="./about.php">About</a></li>
								<li><a href="./contact.php">Contact</a></li>
								<li><a href="./logout.php">Logout</a></li>
								<!--<li><a href="status.php">View Status</a></li>
								<li><a href="message_admin.php">Message Admin</a></li>-->
							</ul>
					
					<?php
						}
					?>
				</nav>
			</div>
		</header>