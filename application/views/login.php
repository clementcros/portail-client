<div class="wrapper" ng-controller="LoginCtrl">
	<form class="form-signin">
		<h2 class="form-signin-heading">Bienvenue</h2>
		<h4 class="form-signin-heading">Veuillez vous authentifiez</h4>
		<input type="text" class="form-control" ng-model="user" name="username" placeholder="Numéro client" required="required" autofocus="" />
		<br>
		<input type="text" class="form-control" ng-model="password"  placeholder="Nom du site complet" required="required"/>
		<br>
		<button class="btn btn-lg btn-primary btn-block" ng-click="login()">Login</button>
		<div class="container-fluid">
		<img class="center-block img-size" src="<?php echo base_url()?>assets/imgs/logo.png">
		</div>
		<br>
		<div class="alert alert-danger" role="alert" ng-if="error == 1">
			Erreur ne ne sommes pas parvenus a vous connecter
		</div>
	</form>

	<div class="img">
		<img src="<?php echo  site_url()?>assets/imgs/login-background.jpg">
	</div>
</div>
<style>
	.img {
		z-index: -9999;
		position: fixed;
		top: 0;
	}
	.img-size {
		margin: 0 auto;
		width: 80%;
		margin-top: 15px;
		padding-bottom: -8px;
	}
</style>
