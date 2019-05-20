app.factory('ActusFactory', ['$http', '$location', function ($http, $location) {
	return {
		getActus: function () {
			return $http({
				method: 'GET',
				url: $location.protocol() + "://" + $location.host() + '/index.php/ActusController/getArticles'
			}).then(function (x) {
				return x.data;
			});
		}

	}
}]);
