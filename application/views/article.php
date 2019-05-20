<div class="container h-100" ng-controller="ArticleCtrl">
	<div class="row">
		<button type="button" class="btn btn-primary" ng-click="goBack()">Revenir aux actus</button>
	</div>
	<br>
	<h1 class="font-weight-light">{{actus.title}}</h1>
	<p class="h6"> <i class="far fa-calendar-alt fa-1x"></i> {{actus.publication}}</p>
	<br>



	<div class="content" ng-bind-html="actus.article">
	</div>

</div>




