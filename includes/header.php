<?php

	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "linkfurniture";

	$connection = mysqli_connect($server, $username, $password, $database);

	if(!$connection) {
		die(mysqli_connect_error());
	}

    if ($_SERVER['HTTP_USER_AGENT']=='Mozilla/5.0 (Windows NT 10.0; WOW64; Trident/7.0; Touch; rv:11.0) like Gecko') {
        header("Location: notice.php");
        exit();
    } 
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php print $page ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="foundation_icons_general/stylesheets/general_foundicons.css">
	</head>
    <body>
	<header class="white-bg platinum-underline fullwidth padding">
        <div class="flex-center fade-in">
            <a href="index.php" class="titillium small">Link Furniture</a>
        </div>
        <nav id="desktopMenu" class="fade-in">
        <ul class="titillium no-list-style flex-center">
            <li class="hamburger pointer"><a>&#9776;</a>
            <li class="link"><a href="index.php">Home</a>
            <li class="link"><a href="products.php">Products</a>
            <li class="link"><a href="about.php">About</a>
            <li class="link"><a href="contact.php">Contact</a>
            <li class="toggle pointer"><a href="#"><i class="open-cart foundicon-cart"></i></a><span class="quantity-icon tan-bg">0</span>
        </ul>
        </nav>
    </header>
    <aside id="shoppingCart" class="white-bg fullheight fullwidth position-fixed-right pop-up">
        <div class="scrollable fullheight-vertical">
            <form method="post" action="checkout.php">
            <div id="cartHeading" class="padding">
                <h2 class="titillium small platinum-underline flex-between">Shopping Cart <span class="exit-cart pointer">&#10006;</span></h2>
            </div>
            <div id="cartContent">
                <div id="items">
                    <p>There aren't any items in your cart.</p>
                </div>
                <div id="tab" class="fullwidth margins padding">
                </div>
            </div>
            </form>
        </div>
    </aside>
    <div id="fullscreen">
        <div id="mobileMenu" class="white-bg fullheight-vertical fullwidth position-fixed-left margins padding">
            <nav id="mobileNav">
            <h3 class="titillium small platinum-underline pointer flex-between fade-bottom">Main Menu <span class="exit-mobile margin-none red-hover">&#10006;</span></h3>
            	<ul class="titillium pointer no-list-style margin-none fade-right">
                    <li><a href="index.php" class="margin-none">Home</a>
                    <li><a href="products.php" class="margin-none">Products</a>
                    <li><a href="about.php" class="margin-none">About</a>
                    <li class="margin-none"><a href="contact.php" class="margin-none">Contact</a>
            	</ul>
			</nav>
        </div>
    </div>