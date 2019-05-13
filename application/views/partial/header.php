<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>Sequoiasoft - portail client</title>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="<?php echo base_url()?>favicon.ico">


	<!-- Start load module angularjs	-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script
		src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
		integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
		crossorigin="anonymous"></script>
	<script src="<?php echo base_url()?>node_modules/angular/angular.js"></script>
	<script src="<?php echo base_url()?>node_modules/angular-sanitize/angular-sanitize.js"></script>
	<script src="<?php echo base_url()?>assets/js/app.js"></script>
	<script src="<?php echo base_url()?>assets/js/LoginCtrl.js"></script>
	<script src="<?php echo base_url()?>assets/js/LoginFactory.js"></script>


	<!-- End load module angularjs	-->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/bootstrap/css/bootstrap.min.css">
	<!-- Global CSS -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


	<!-- Theme CSS -->
	<link id="theme-style" rel="stylesheet" href="<?php echo base_url()?>assets/css/login.css">
<!--	<link id="theme-style" rel="stylesheet" href="--><?php //echo base_url()?><!--assets/css/introjs.css">-->
<!--	<link id="theme-style" rel="stylesheet" href="--><?php //echo base_url()?><!--assets/css/navbar.css">-->
	<!-- Our CSS  -->
<!--	<link rel="stylesheet" href="--><?php //echo base_url()?><!--assets/css/changelog.css">-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body class="landing-page" ng-app="portailClient">



