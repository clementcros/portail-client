<div class="container-fluid" ng-controller="ActusCtrl">
	<div class="row flex-xl-nowrap">
		<div class="col-12 col-md-3 col-xl-2 bd-sidebar">
			<h3>Filter les articles</h3>

			<div class="md-form active-pink active-pink-2 mb-3 mt-0">
				<input class="form-control" type="text" placeholder="Rechercher des articles" aria-label="Search" ng-model='actus.title'>
			</div>
		</div>
		<main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content">
		<div class="row">
			<div class="col-md-4" ng-repeat="news in actus">
				<div class="card mb-4 border-dark">
					<img class="card-img-top" src="<?php echo base_url() ?>assets/uploads/files/{{news.img}}" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">{{news.title}}</h5>
						<p class="card-text">{{news.extrait | limitTo: 100 }}{{news.extrait.length > 100 ? '...' : ''}}</p>
						<a class="btn btn-dark btn-sm" ng-click="readMore(news.id)">Voir l'article</a>
					</div>
				</div>
			</div>

		</div>
		</main>
	</div>

</div>

