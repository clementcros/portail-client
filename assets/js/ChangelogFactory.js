app.factory('ChangelogFactory', ['$http', '$location', function ($http, $location) {
	return {
		getProducts: function (slug) {
			console.log('test');
			return $http({
				method: 'GET',
				url: 'http://changelog.local/api/products/' + slug
			}).then(function (x) {
				return x.data;
			});
		},

	}
}]);

