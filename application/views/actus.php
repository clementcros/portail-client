<div class="container" ng-controller="ActusCtrl">
	<div class="row">
		<div class="col-md-4" ng-repeat="news in actus">
			<div class="card mb-4 border-dark">
				<img class="card-img-top" src="<?php echo base_url() ?>assets/uploads/files/{{news.img}}" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">{{news.title}}</h5>
					<p class="card-text">{{news.extrait | limitTo: 100 }}{{news.extrait.length > 100 ? '...' : ''}}</p>
					<a href="http://www.jquery2dotnet.com/" class="btn btn-dark btn-sm">Voir l'article</a>
				</div>
			</div>
		</div>

	</div>

</div>

