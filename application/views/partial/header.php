<html lang="en">
<script id="tinyhippos-injected">if (window.top.ripple) {
		window.top.ripple("bootstrap").inject(window, document);
	}</script>
<head>
	<meta charset="utf-8">
	<title>CustomerPortal</title>
	<base href="/">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/hammerjs/2.0.8/hammer.min.js"></script>
	<link id="theme-style" rel="stylesheet" href="<?php echo base_url() ?>assets/css/home.css">
	<link id="theme-style" rel="stylesheet" href="<?php echo base_url() ?>assets/css/contrats.css">

	<script src="<?php echo base_url() ?>node_modules/angular/angular.js"></script>
	<script src="<?php echo base_url() ?>node_modules/angular-sanitize/angular-sanitize.js"></script>
	<script src="<?php echo base_url() ?>assets/js/app.js"></script>
	<script src="<?php echo base_url() ?>assets/js/NavCtrl.js"></script>
	<script src="<?php echo base_url() ?>assets/js/SupportCtrl.js"></script>
	<script src="<?php echo base_url() ?>assets/js/HomeCtrl.js"></script>
	<script src="<?php echo base_url() ?>assets/js/LoginFactory.js"></script>
	<script src="<?php echo base_url() ?>assets/js/LoginCtrl.js"></script>
	<script src="<?php echo base_url() ?>assets/js/ChangelogFactory.js"></script>
	<script src="<?php echo base_url() ?>assets/js/ActusCtrl.js"></script>
	<script src="<?php echo base_url() ?>assets/js/ActusFactory.js"></script>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
		  integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


	<!------ Include the above in your HEAD tag ---------->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body ng-app="portailClient">
<div ng-controller="HomeCtrl">
	<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3 color">
		<div class="container" ng-controller="NavCtrl">

			<button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse"
					data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false"
					aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse text-center justify-content-between" id="navbar2SupportedContent">
				<a class="p-2 text-secondary" href="#"><i class="fas fa-headset fa-1x"></i></a>
				<a class="p-2 text-secondary" ng-click="nav('home')">Accueil</a>
				<a class="p-2 text-secondary" ng-click="nav('actus')">Actualités</a>
				<a class="p-2 text-secondary" ng-click="nav('contrats')">Mes contrats</a>
				<a class="p-2 text-secondary" ng-click="nav('entreprise')">Enterprise</a>
				<a class="p-2 text-secondary" href="#">Support</a>
				<a class="p-2 text-secondary" ng-click="logout()">
					<button ng-click="logout()" type="button" class="btn btn-warning">Deconnexion</button>
				</a>
			</div>
			<div ng-controller="SupportCtrl">
				<button data-toggle="modal" data-target="#exampleModal" type="button" class="btn btn-info">Ouvrir un
					incident
				</button>
			</div>
		</div>
	</nav>
