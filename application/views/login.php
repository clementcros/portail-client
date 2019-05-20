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
	body {
		background: #eee !important;
	}

	.wrapper {
		margin-top: 80px;
		margin-bottom: 80px;
	}

	.form-signin {
		max-width: 380px;
		padding: 15px 35px 45px;
		margin: 0 auto;
		background-color: #fff;
		border: 1px solid rgba(0, 0, 0, 0.1);
	}
	.form-signin .form-signin-heading,
	.form-signin .checkbox {
		margin-bottom: 30px;
	}
	.form-signin .checkbox {
		font-weight: normal;
	}
	.form-signin .form-control {
		position: relative;
		font-size: 16px;
		height: auto;
		padding: 10px;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
	}
	.form-signin .form-control:focus {
		z-index: 2;
	}
	.form-signin input[type="text"] {
		margin-bottom: -1px;
		border-bottom-left-radius: 0;
		border-bottom-right-radius: 0;
	}
	.form-signin input[type="password"] {
		margin-bottom: 20px;
		border-top-left-radius: 0;
		border-top-right-radius: 0;
	}
</style>
