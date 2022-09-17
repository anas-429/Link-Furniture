<?php

	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "trailrush";

	$connection = mysqli_connect($server, $username, $password, $database, '3306');

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
		<title>Trail Rush Outdoors - Homepage</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="foundation_icons_general/stylesheets/general_foundicons.css">
	</head>
	<body>