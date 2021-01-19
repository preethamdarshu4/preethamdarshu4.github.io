<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name = "viewport" content = "width = device-width, initial-sccale = 1.0">
	<title>User Profile</title>
	<link rel="stylesheet" type="text/css" href="usr_prof.css">
	<link rel="icon" type="image/png" href="https://www.flaticon.com/svg/static/icons/svg/2913/2913967.svg">
</head>
<body>
	<?php include "user_info.php";?>
	<section class="main-cont">
		<header>
			<ul class="out-ul">
				<li class="fli">
					<span>
						<img src="https://www.flaticon.com/svg/static/icons/svg/3285/3285719.svg" style="height: 26px; width: 32px;">  
						Online Book Store
					</span>
				</li>
				<a href="index.html"><li>Home</li></a>
				<a href="catalogue.php"><li>Catalogue</li></a>
				<a href="shopCart.php"><li>Cart</li></a>
				<a href="sout.php"><li>Sign out</li></a>
			</ul>
		</header>
		<section class="opt-cont">
			<h1>Your Account</h1>
			<div class="opt-wrapper">
				<div>
					<div class="det">
						<img src="https://www.flaticon.com/svg/static/icons/svg/3462/3462325.svg" style="height: 30px; width: 42px;">
						Details
					</div>
					<ul>
						<li>
							First Name: <span><?php echo $_SESSION["firstname"]; ?></span>
						</li>
						<li>
							Last Name: <span><?php echo $_SESSION["lastname"]; ?></span>
						</li>
						<li>
							User Name: <span><?php echo $_SESSION["username"]; ?></span>
						</li>
						<li>
							Mobile Number: <span><?php echo $_SESSION["mobileno"]; ?></span>
						</li>
						<li>
							Email id: <span><?php echo $_SESSION["email"]; ?></span>
						</li>
					</ul>
				</div>
				<div class="sm_wrapper">
					<div class="sm">
						<img src="https://www.flaticon.com/svg/static/icons/svg/815/815062.svg">
						<h2>Your Orders</h2>
						Track, return, or view all your orders
					</div>
					<div class="sm">
						<img src="https://www.flaticon.com/svg/static/icons/svg/3176/3176116.svg">
						<h2>Your Addersses</h2>
						View and edit your addresses
					</div>
					<div class="sm">
						<a href="cred_paym.html">
							<img src="https://www.flaticon.com/svg/static/icons/svg/1086/1086741.svg">
							<h2>Payment Options</h2>
							View, edit or add payment methods
						</a>
					</div>
				</div>
			</div>
		</section>
	</section>
</body>
</html>