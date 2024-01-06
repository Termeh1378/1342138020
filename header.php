<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>فروشگاه آنلاین محصولات الکترونیکی ریتما</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
	.set_style_link{
		text-decoration: none;
		font-weight: bold;
	}
	li a:hover{
		color: dodgerblue;
	}
	li.divTableCell:hover{
		background-color: whitesmoke;
	}
	td.mahs:hover{
	background-color: whitesmoke;
    transform: scale(1.02);
	}
	img.img_index:hover{
	box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
	}
-->
</style>
</head>

<body>
<div class="divTable">
	<div class="divTableRow">
		<div class="divTableCell" style="border-style: hidden;">
			<header class="divTable">
				<div class="divTableRow" style="text-align: center;">
					<div style="background-color: dimgray; color: white;" class="divTableCell">
						Ritma Online Store Of Electronic Products
					</div>
				</div>
			</header>
			<nav class="divTable">
				<ul class="divTableRow" style="text-align: center;">
					<li class="divTableCell"><a class="set_style_link" href="index.php">صفحه اصلی</a></li>
					<li class="divTableCell"><a class="set_style_link" href="register.php">عضویت در سایت</a></li>
					
					<?php
					if(isset($_SESSION["state_login"])&& $_SESSION["state_login"]===true)
					{
					?>
					<li class="divTableCell"><a href="logout.php" class="set_style_link" >خروج از سایت
					<?php echo(" ({$_SESSION["realname"]}) ")?>
						</a></li>
					<?php
					}
					else
					{
				    ?>
					<li class="divTableCell"><a class="set_style_link" href="login.php">ورود به سایت</a></li>
					<?php
					}
					?>
					<li class="divTableCell"><a class="set_style_link" href="about_us.php">درباره ما</a></li>
					<li class="divTableCell"><a class="set_style_link" href="contact.php">تماس با ما</a></li>
					
					<?php
					if(isset($_SESSION["state_login"])&& $_SESSION["state_login"]===true && $_SESSION["user_type"]=="admin")
					{
					?>
					<li class="divTableCell"><a href="admin_products.php" class="set_style_link">مدیریت محصولات</a></li>
					<?php
					}
					?>
					
				</ul>
			</nav>

			<section class="divTable">
				<section class="divTableRow">
					<section class="divTableCell" style="width: 100%;">
