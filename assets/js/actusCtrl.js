app.controller('ActusCtrl', ['$scope', '$location','ActusFactory',
	function ($scope, $location, ActusFactory)
	{
		$scope.base_url = $location.protocol() + "://" + $location.host()+'/index.php/';
		ActusFactory.getActus().then(function (data) {
			$scope.actus = data;
		});

		$scope.readMore = function (id) {
			location.href = $location.protocol() + "://" + $location.host() + '/index.php/actus/'+id
		};
	}
]);
