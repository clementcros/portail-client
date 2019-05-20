app.controller('ActusCtrl', ['$scope', '$location','ActusFactory',
	function ($scope, $location, ActusFactory)
	{
		$scope.base_url = $location.protocol() + "://" + $location.host()+'/index.php/';
		ActusFactory.getActus().then(function (data) {
			console.log(data);
			$scope.actus = data;
		})
	}
]);
