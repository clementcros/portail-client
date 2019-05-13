// app initialization
var app = angular.module('portailClient', ['ngSanitize'],
	function ($locationProvider) {
	$locationProvider.html5Mode({
		enabled: true,
		requireBase: false
	});
});
