<?php
require_once('../classes/Session.php');
Session::init();
//error_reporting();
require_once('../classes/DB.php');
require_once('../classes/Fabric.php');
require_once('../classes/Product.php');
require_once('../classes/Session.php');
require_once('../classes/Style.php');
require_once('../classes/Size.php');
require_once('../classes/Tag.php');

$user = Session::get('isLoggedIn') ? Session::get('user') : null;

?>

<!doctype html>
<html lang="en-US">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
	<title>Shop | Chilista Services</title>
	<link rel="shortcut icon" href="images/favicon.png">
	<link rel='stylesheet' href='css/settings.css' type='text/css' media='all' />
	<link rel='stylesheet' href='css/swatches-and-photos.css' type='text/css' media='all' />
	<link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all' />
	<link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Montserrat%3A400%2C700&amp;" type='text/css'
		media='all' />
	<link rel='stylesheet' href='css/elegant-icon.css' type='text/css' media='all' />
	<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
	<link rel='stylesheet' href='css/shop.css' type='text/css' media='all' />
	<link rel='stylesheet' href='css/skin-selector.css' type='text/css' media='all' />


	<!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
