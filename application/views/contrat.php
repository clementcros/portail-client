
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
	<script src="<?php echo base_url() ?>assets/js/ChangelogFactory.js"></script>
	<script src="<?php echo base_url() ?>assets/js/LoginFactory.js"></script>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
		  integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


	<!------ Include the above in your HEAD tag ---------->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body ng-app="portailClient">
<div ng-controller="HomeCtrl">
	<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3 color">
		<div class="container" ng-controller="NavCtrl">

			<button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
			<div class="collapse navbar-collapse text-center justify-content-between" id="navbar2SupportedContent">
				<a class="p-2 text-secondary" href="#"><i class="fas fa-headset fa-1x"></i></a>
				<a class="p-2 text-secondary" ng-click="nav('home')">Accueil</a>
				<a class="p-2 text-secondary" href="#">Mes produits</a>
				<a class="p-2 text-secondary" ng-click="nav('contrats')">Mes contrats</a>
				<a class="p-2 text-secondary" ng-click="nav('entreprise')">Enterprise</a>
				<a class="p-2 text-secondary" href="#">Support</a>
				<a class="p-2 text-secondary" ng-click="logout()"><button ng-click="logout()" type="button" class="btn btn-warning">Deconnexion</button></a>
			</div>
			<div ng-controller="SupportCtrl">
				<button data-toggle="modal" data-target="#exampleModal" type="button" class="btn btn-info">Ouvrir un incident</button>
			</div>
		</div>
	</nav>

	<div class="pix_section pix-padding-v-85 gray-bg" id="section_call_to_action_1" style="display: block; margin-top: 60px">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable">
					<div class="pix-content text-center">
						<div class="pix-margin-bottom-30">
							<img class="img-size" src="<?php echo base_url()?>assets/imgs/platinum.jpg">
						</div>
						<h5 class="text-center pix-purple"><span class="pix_edit_text"><strong>Obtenez votre pack platinum</strong></span></h5>
						<h2 class="pix-black-gray-dark text-center pix-no-margin-top secondary-font">
							<span class="pix_edit_text"><strong>Augmentez vos possibilitez !</strong></span>
						</h2>
						<h5 class="pix-black-gray-light text-center pix-margin-bottom-30">
							<span class="pix_edit_text">Mettez-vous à jour grâce au pack Platinum et bénéficiez de toute notre gamme de produits dés au aujourd'hui</span>
						</h5>
						<a href="#" class="btn purple-bg btn-lg pix-white btn-round-lg">
							<span class="pix_edit_text">
								<button type="button" class="btn btn-lg btn-primary">Contactez nous</button>
							</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="pix_section pix-padding-v-50" id="section_accordions_1" style="display: block; margin-top: 50px">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xs-12 col-sm-6 column ui-droppable">
					<div class="pix-content">
						<div class="pix-margin-bottom-20">
							<i class="pixicon-chat2 big-icon-65 pix-orange"></i>
						</div>
							<img style="margin-left: 35%" class="img-size text-center" src="<?php echo base_url()?>assets/imgs/premium.png">
						<p class="pix-black-gray-light big-text pix-margin-bottom-30">
								<span class="pix_edit_text">
									<h3 class="text-center">Vous disposez actuellement du pack premium</h3>
								</span>
						</p>

						<div class="pix-margin-bottom-30">
							<a href="#" class="btn orange-bg btn-lg btn-round-lg small-text pix-white secondary-font">
									<span class="pix_edit_text">
										
									</span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xs-12 col-sm-6 column ui-droppable">
					<h2 class="text-center">Voici les options que vous avez souscrites</h2>
					<table class="table table-striped">
						<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Nom de l'option</th>
							<th scope="col">Produit</th>
							<th scope="col">date</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Facturation PDF</td>
							<td>Eseason</td>
							<td>10/02/2019</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>E signature</td>
							<td>Eseason</td>
							<td>28/01/2019</td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td>Assistance support premium</td>
							<td>ALL</td>
							<td>02/01/2019</td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


