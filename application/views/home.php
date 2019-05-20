	<div class="py-5 text-center mx-3 mb-3">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h1 class="display-4"><img class="align-content-center position-logo"
											   src="<?php echo base_url() ?>assets/imgs/Sequoiasoft_Direct_logo.png">
					</h1>
					<h4>Bienvenue {{camping.name_full}}</h4>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<h5>
							<strong><i class="fas fa-exclamation-triangle"></i></strong>  Attention vous arrivez en fin de contrat
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							</h5>

						</div>
					</div>
				</div>
			</div>

			<div class="row">

			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div class="row border">
					<div class="col-md-6 background-tips">
						<div class="about_box background-tips">
							<br>
							<div class="about_box_1">
								<div class="about_img_box text-center">
									<i class="fas fa-lightbulb fa-3x text-center"></i>
								</div>
								<div class="container">
									<div class="about_con_box">
										<h3 class="text-center">Le saviez vous</h3>
										<p>Vous pouvez exporter vos statistiques depuis le back-office WEBCAMP de vos
											dernières réservations pour en savoir plus cliquer ici</p>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="col-md-6">
						<div class="col-md-12">
							<h3 class="service-title main-title">Documentation sur vos produits</h3>
							<div class="row">
								<div class="col-6 center-element">
									<a href="http://helpdesk.thelis.fr/article-categories/eseasonresa/" class="thumbnail">
										<img class="size-logo"
											 src="<?php echo base_url() ?>assets/imgs/esaeson_resa.png"/>
									</a>
								</div>
								<div class="col-6 center-element">
									<a href="http://helpdesk.thelis.fr/article-categories/webcamp/" class="thumbnail">
										<img class="size-logo"
											 src="<?php echo base_url() ?>assets/imgs/logo_webcamp.gif"/>
									</a>
								</div>
								<div class="col-6 center-element">
									<a href="http://helpdesk.thelis.fr/article-categories/eseason/" class="thumbnail">
										<img class="size-logo" src="<?php echo base_url() ?>assets/imgs/eseason.png"/>
									</a>
								</div>

							</div>
						</div>

					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-12 border">
						<div class="col-12">
							<div class="row">
								<div class="col-6">
									<div class="container">
										<table class="table">
											<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">Demande</th>
												<th scope="col">date</th>
												<th scope="col">status</th>
											</tr>
											</thead>
											<tbody>
											<tr>
												<th scope="row">1</th>
												<td>Tracking</td>
												<td>10/04/2019</td>
												<td><i class="far fa-hourglass"></i> en cour</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>Intégration bancaire</td>
												<td>05/03/2019</td>
												<td><i class="fas fa-check"></i> Valider</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td>Ajout de css custom</td>
												<td>03/01/2019</td>
												<td><i class="fas fa-times-circle"></i> Annuler</td>
											</tr>
											</tbody>
										</table>
										<a href="akuiteo://client=500020754">Akuiteo</a>
										<a href="akuiteo://client=105443">TEest</a>
										<a class="btn btn-primary" href="https://my.sequoiasoft.com" role="button">Accèder
											a akuiteo</a>
										<br>
										<br>

									</div>

								</div>
								<div class="col-6">
									<h4 class="text-center">Demander une formation</h4>
									<form>
										<div class="form-group">
											<div class="form-group">
												<label class="text-center" for="exampleFormControlSelect1">Selectionner
													votre produit</label>
												<select class="form-control" id="exampleFormControlSelect1">
													<option>ESeason Resa</option>
													<option>Webcamp</option>
													<option>Eseason</option>
												</select>
											</div>
										</div>
										<div class="text-center">
											<button type="button" class="btn btn-primary">Contacter mon commercial
											</button>
										</div>
									</form>

								</div>

							</div>
						</div>

					</div>
				</div>
				<br>
				<h4>Les dernières mise a jour de nos produits :</h4>
				<div class="row">
					<div class="col-md-12 border" style="height: 450px; overflow: auto;">
						<div class="col-12">

							<select class="form-control lead"
									data-step="2" data-intro="Vous pouvez choisir diférente version ici"
									ng-model="filter.version"
									ng-options="v.number as v.number for v in product.versions track by v.number">
								<option value="">Toutes les versions</option>

							</select>


							<label class="checkbox-inline amelioration lead"
								   data-step="3"
								   data-intro="Vous pouvez choisir de filtrer par Type d'amélioration">
								<input type="checkbox" id="inlineCheckbox1"
									   ng-init="filter.types.amelioration = true"
									   ng-model="filter.types.amelioration">
								Améliorations
							</label>
							<label class="checkbox-inline evolution lead"
								   data-step="4"
								   data-intro="Vous pouvez choisir de filtrer par Type d'évolution">
								<input type="checkbox" id="inlineCheckbox2"
									   ng-init="filter.types.evolution = true"
									   ng-model="filter.types.evolution">
								Evolutions
							</label>
							<label class="checkbox-inline bugs lead"
								   data-step="5"
								   data-intro="Et par Type de Bug">
								<input type="checkbox" id="inlineCheckbox3"
									   ng-init="filter.types.bug = true"
									   ng-model="filter.types.bug">
								Bugs
							</label>
							<div class="doc-body" style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif">
								<div class="content-inner">
									<div class="alert alert-info text-center"
										 ng-if="0 === filteredVersions.length">
										Aucun résultat ne correspond à vos filtres de recherche
									</div>
									<div
										ng-repeat="version in filteredVersions = (product.versions | filter: filterVersions)">
										<section class="doc-section">
											<div class="section-title panel panel-default">
							<span id="{{version.number}}" class="release-version"
								  data-step="7" data-intro="Vous trouverez le numéro de version ici">
								v {{version.number}}</span><span
													class="release-date"> - <em>{{version.date | date:"dd/MM/yyyy"}}</em></span>
											</div>
											<div class="section-block"
												 ng-if="changelog.enabled"
												 ng-repeat="changelog in version.changelogs">
												<div class="task-block">
													<div class="task-title">
														<i class="icon fa fa-ban"
														   ng-if="logIsPrivate(changelog)"></i>
														<span data-step="8"
															  data-intro="Le titre du changelog"
															  ng-bind="getLog(changelog).title"></span>
													</div>
													<div data-step="9" data-intro="ici le type du changelog">
														<span class="badge badge-amelioration"
															  ng-if="getChangelogType(changelog) == 1">Amélioration</span>
														<span class="badge badge-evol"
															  ng-if="getChangelogType(changelog) == 2">Evolution</span>
														<span class="badge badge-bug"
															  ng-if="getChangelogType(changelog) == 3">Bug</span>
														<div class="clear"></div>
													</div>
													<p class="task-description"
													   data-step="10"
													   data-intro="Et pour finir la desciption du log"
													   ng-bind-html="getLog(changelog).description"></p>
												</div>
											</div>
										</section>
									</div>

								</div>
							</div>

						</div>

					</div>
				</div>

			</div>
			<div class="col-md-4" style="" >
				<div class="col mx-2 pt-5 px-5 mb-3 border">
					<h4>Actualités</h4>
					<div class="card">
						<img class="card-img-top"
							 src="<?php echo base_url() ?>assets/uploads/files/{{actusHome[0].img}}"
							 alt="Card image cap">
						<div class="card-body">
							<p class="card-text">{{actusHome[0].extrait | limitTo: 100 }}{{actusHome[0].extrait.length > 100 ? '...' : ''}}
								<a class="cursor" ng-click="readMore(actusHome[0].id)">Voir plus</a></p>
						</div>
					</div>

					<div class="card">
						<img class="card-img-top"
							 src="<?php echo base_url() ?>assets/uploads/files/{{actusHome[1].img}}"
							 alt="Card image cap">
						<div class="card-body">
							<p class="card-text">{{actusHome[1].extrait | limitTo: 100 }}{{actusHome[1].extrait.length > 100 ? '...' : ''}}
								<a class="cursor" ng-click="readMore(actusHome[1].id)">Voir plus</a></p>
						</div>
					</div>
					<a ng-controller="NavCtrl" ng-click="nav('actus')" class="btn btn-info text-center" role="button">Voir plus d'actus</a>
					<br>


				</div>

			</div>
		</div>
	</div>


	<div class="text-center">
		<div class="container-fluid">
			<div class="row px-2"></div>
			<div class="row px-2">
			</div>
			<div class="row px-2"></div>
		</div>
	</div>
</div>
<footer>
	<div class="container py-5">
		<div class="row">
			<div class="col-12 col-md"><i class="fa fa-dot-circle-o fa-lg d-block pt-1"></i>
				<small class="d-block my-3 text-muted">© 2017-2018</small>
			</div>
			<div class="col-6 col-md">
				<h5><b>Features</b></h5>
				<ul class="list-unstyled text-small">
					<li>
						<a class="text-muted" href="#">Cool stuff</a>
					</li>
					<li>
						<a class="text-muted" href="#">Random feature</a>
					</li>
					<li>
						<a class="text-muted" href="#">Team feature</a>
					</li>
					<li>
						<a class="text-muted" href="#">Stuff for developers</a>
					</li>
					<li>
						<a class="text-muted" href="#">Another one</a>
					</li>
					<li>
						<a class="text-muted" href="#">Last time</a>
					</li>
				</ul>
			</div>
			<div class="col-6 col-md">
				<h5><b>Resources</b></h5>
				<ul class="list-unstyled text-small">
					<li>
						<a class="text-muted" href="#">Resource</a>
					</li>
					<li>
						<a class="text-muted" href="#">Resource name</a>
					</li>
					<li>
						<a class="text-muted" href="#">Another resource</a>
					</li>
					<li>
						<a class="text-muted" href="#">Final resource</a>
					</li>
				</ul>
			</div>
			<div class="col-6 col-md">
				<h5><b>Resources</b></h5>
				<ul class="list-unstyled text-small">
					<li>
						<a class="text-muted" href="#">Business</a>
					</li>
					<li>
						<a class="text-muted" href="#">Education</a>
					</li>
					<li>
						<a class="text-muted" href="#">Government</a>
					</li>
					<li>
						<a class="text-muted" href="#">Gaming</a>
					</li>
				</ul>
			</div>
			<div class="col-6 col-md">
				<h5><b>About</b></h5>
				<ul class="list-unstyled text-small">
					<li>
						<a class="text-muted" href="#">Team</a>
					</li>
					<li>
						<a class="text-muted" href="#">Locations</a>
					</li>
					<li>
						<a class="text-muted" href="#">Privacy</a>
					</li>
					<li>
						<a class="text-muted" href="#">Terms</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div ng-app="portailClient" ng-controller="SupportCtrl" class="modal fade" id="exampleModal" tabindex="-1"
		 role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Crée une nouvelle DMS</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">

					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="exampleFormControlSelect1">Produit</label>
						<select class="form-control" id="exampleFormControlSelect1">
							<option ng-repeat="soft in listproduct">{{soft}}</option>
						</select>
						<label for="exampleInputsujet">Sujet</label>
						<small id="tittle" class="form-text text-muted">Titre de votre incident</small>
						<input type="text" class="form-control" id="exampleInputsujet" aria-describedby="emailHelp"
							   placeholder="Titre" ng-model="camping.mail">

						<small id="textAera" class="form-text text-muted">Décrivez votre incident</small>
						<textarea class="form-control" aria-label="With textarea"></textarea>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
					<button type="button" ng-click="validate()" class="btn btn-primary" data-dismiss="modal">Valider ma
						DMS
					</button>
				</div>
			</div>
		</div>
	</div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
		integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
		crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
		integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
		crossorigin="anonymous"></script>


