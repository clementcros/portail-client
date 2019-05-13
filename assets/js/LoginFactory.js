app.factory('LoginFactory', ['$http', '$location', function ($http, $location) {
	return {
		checkLogin: function (idclient, name) {
			return $http({
				method: 'GET',
				params: {
					'idclient': idclient,
					'name': name
				},
				url: $location.protocol() + "://" + $location.host() + '/index.php/login'
			}).then(function (x) {
				return x.data;
			});
		},
		getInfos: function () {
			return $http({
				method: 'GET',
				url: $location.protocol() + "://" + $location.host() + '/index.php/getInfos'
			}).then(function (x) {
				return x.data;
			});
		},
		getResponsableClient: function () {
			return $http({
				method: 'GET',
				url: $location.protocol() + "://" + $location.host() + '/index.php/getResponsableClient'
			}).then(function (x) {
				return x.data;
			});
		},
	}
}]);

