app.factory('ChangelogFactory', ['$http', '$location', function ($http, $location) {
	return {
		getProducts: function (slug) {
			return $http({
				method: 'GET',
				url: 'http://changelog.local/api/products/' + slug
			}).then(function (x) {
				return x.data;
			});
		},

	}
}]);

