
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
	<link rel="stylesheet" href="https://npmcdn.com/leaflet@1.0.0-rc.2/dist/leaflet.css" />
	<!-- Import Leaflet JS Library -->
	<script src="https://npmcdn.com/leaflet@1.0.0-rc.2/dist/leaflet.js"></script>
	<script src="<?php echo base_url() ?>node_modules/angular/angular.js"></script>
	<script src="<?php echo base_url() ?>node_modules/angular-sanitize/angular-sanitize.js"></script>
	<script src="<?php echo base_url() ?>assets/js/app.js"></script>
	<script src="<?php echo base_url() ?>assets/js/maps.js"></script>
	<script src="<?php echo base_url() ?>assets/js/NavCtrl.js"></script>
	<script src="<?php echo base_url() ?>assets/js/SupportCtrl.js"></script>
	<script src="<?php echo base_url() ?>assets/js/HomeCtrl.js"></script>
	<script src="<?php echo base_url() ?>assets/js/LoginFactory.js"></script>
	<script src="<?php echo base_url() ?>assets/js/ChangelogFactory.js"></script>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
		  integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


	<!------ Include the above in your HEAD tag ---------->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body ng-app="portailClient">
<style>
	#my_osm_widget_map { /* use the same name as <div id=""> */
		width: 100%; /* important! if you need full width display */
		height: 400px;
		margin: 0;
		border-radius: 5px;
		/* ... */
	}
</style>
<div ng-controller="HomeCtrl">
	<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3 color">
		<div class="container" ng-controller="NavCtrl">

			<button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
			<div class="collapse navbar-collapse text-center justify-content-between" id="navbar2SupportedContent">
				<a class="p-2 text-secondary" href="#"><i class="fas fa-headset fa-1x"></i></a>
				<a class="p-2 text-secondary" ng-click="nav('home')">Accueil</a>
				<a class="p-2 text-secondary" ng-click="nav('products')">Mes produits</a>
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
	<div class="pix_section pix-padding" id="section_titles_2" style="display: block;">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable">
					<div class="pix-content pix-padding-bottom-30">
						<h2 class="pix-black-gray-dark text-center pix-no-margin-top secondary-font">
							<span class="pix_edit_text"><strong>Bonjour {{camping.name_full}}</strong></span>
						</h2>
						<p class="pix-black-gray-light big-text text-center">
							<span class="pix_edit_text"></span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="pix_section pix-padding-v-85" id="section_features_1" style="display: block; margin-top: 50px">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable">
					<div class="pix-content text-center">
						<h2 class="pix-navy-blue pix-no-margin-top secondary-font">
								<span class="pix_edit_text">
									Mes informations
								</span>
						</h2>
						<p class="pix-navy-blue-2 big-text pix-margin-bottom-50">
<!--							<span class="pix_edit_text">This is just a simple text made for this unique and awesome template, you can replace it with any text.</span>-->
						</p>
					</div>
				</div>
				<div class="col-md-4 col-xs-12 col-sm-3 column ui-droppable">
					<div class="pix-content text-center pix-border-box-3-light-blue pix-padding-v-30 pix-margin-v-10 pix-padding-h-10">
						<div class="pix-margin-bottom-20">
							<i class=" pixicon-schoolmaterial2 pix-green-light big-icon-60"></i>
						</div>
						<i class="fas fa-building fa-3x"></i>
						<h5 class="pix-navy-blue secondary-font">
							<span class="pix_edit_text">Mon entreprise</span>
						</h5>
						<p class="pix-navy-blue-2 text-center pix-margin-bottom-10">
							<span class="pix_edit_text">{{camping.name_full}}</span>
						</p>
					</div>
				</div>
				<div class="col-md-4 col-xs-12 col-sm-3 column ui-droppable">
					<div class="pix-content text-center pix-border-box-3-light-blue pix-padding-v-30 pix-margin-v-10 pix-padding-h-10">
						<div class="pix-margin-bottom-20">
							<i class=" pixicon-boxes30 pix-green-light big-icon-60"></i>
						</div>
						<i class="fas fa-map-marker-alt fa-3x"></i>
						<h5 class="pix-navy-blue secondary-font">
							<span class="pix_edit_text">Adresse</span>
						</h5>
						<p class="pix-navy-blue-2 text-center pix-margin-bottom-10">
							<span class="pix_edit_text">{{camping.address2}} {{camping.adress1}} {{camping.postCode}}</span>
							<span>{{camping.ville}}</span>
						</p>
					</div>
				</div>
				<div class="col-md-4 col-xs-12 col-sm-3 column ui-droppable">
					<div class="pix-content text-center pix-border-box-3-light-blue pix-padding-v-30 pix-margin-v-10 pix-padding-h-10">
						<div class="pix-margin-bottom-20">
							<i class=" pixicon-ipad39 pix-green-light big-icon-60"></i>
						</div>
						<i class="fas fa-phone fa-3x"></i>
						<h5 class="pix-navy-blue secondary-font">
							<span class="pix_edit_text">Téléphone</span>
						</h5>
						<p class="pix-navy-blue-2 text-center pix-margin-bottom-10">
							<span class="pix_edit_text">{{camping.phone}}</span>
						</p>
					</div>
				</div>

			</div>
		</div>

	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-7">

				<div class="pix_section pix-padding-top-80" id="section_content_2" style="display: block; margin-top: 50px">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable">
								<div class="pix-content text-left">
									<div>
										<h2 class="pix-black-gray-dark secondary-font pix-small-width-text">
											<span class="pix_edit_text">Vous avez completez votre profils a <span class="pix-count-sec pix-count-num">80%</span></span>
										</h2>
									</div>
									<div>
										<h6 class="pix-gray pix-small-width-text text-center">
											<span class="pix_edit_text">Pensez à mettre votre profil à jour pour faciliter nos interventions</span>
										</h6>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable text-center">
								<div class="card text-center" style="width: 20rem; margin-top: 20px; padding-top: 10px; left: 25%;
    							right: 25%;">
									<i class=" text-center fas fa-user-tie fa-3x"></i>
									<div class="card-body">
										<h5 class="card-title">Votre commercial</h5>
										<p class="card-text">{{responsable.civilite}} {{responsable.nom}} {{responsable.prenom}} est actullement votre commercial référent </p>
									</div>
									<ul class="list-group list-group-flush">
										<li class="list-group-item">Mail : {{responsable.mail}}</li>
									</ul>
									<div class="card-body">
										<a href="mailto:{{responsable.mail}}" class="btn btn-primary btn-lg active"  role="button" aria-pressed="true">contactez moi</a>
									</div>
								</div>
							</div>


							<div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable">
								<div class="pix-content text-center pix-padding-top-20"><img src="images/services/services-image-hero.png" alt="" class="img-responsive pix-inline-block"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-5">
				<div class="pix_section pix-padding-top-80" id="section_content_2" style="display: block; margin-top: 50px" ng-controller="maps">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable">
								<div style="overflow:hidden;width: 700px;position: relative;">
									<iframe width="700" height="440"

											src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=91%20RUE%20THOR%2034000%20+(Titre)&amp;ie=UTF8&amp;t=&amp;z=10&amp;iwloc=B&amp;output=embed"
											frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
									<div
										style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;">
										<small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a
												href="https://embedgooglemaps.com/en/">https://embedgooglemaps.com/en/</a>
											& <a href="https://lasagradafamiliatickets.de/la-sagrada-familia-ticket/">https://lasagradafamiliatickets.de/la-sagrada-familia-ticket/</a>
										</small>
									</div>
									<style>#gmap_canvas img {
											max-width: none !important;
											background: none !important
										}</style>
								</div>
								<br/>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div ng-app="portailClient" ng-controller="SupportCtrl" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Crée une nouvelle DMS</h5>
					<button type="button"  class="close" data-dismiss="modal" aria-label="Close">

					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="exampleFormControlSelect1">Produit</label>
						<select class="form-control" id="exampleFormControlSelect1" ng-repeat="soft in listproduct">
							<option  >{{soft}}</option>
						</select>
						<label for="exampleInputsujet">Sujet</label>
						<input type="text" class="form-control" id="exampleInputsujet" aria-describedby="emailHelp" placeholder="Enter email">
						<small id="tittle" class="form-text text-muted">Titre de votre incident</small>
						<textarea class="form-control" aria-label="With textarea"></textarea>
						<small id="textAera" class="form-text text-muted">Décrivez votre incident</small>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
					<button type="button" ng-click="validate()" class="btn btn-primary" data-dismiss="modal">Valider ma DSM</button>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<hr>

