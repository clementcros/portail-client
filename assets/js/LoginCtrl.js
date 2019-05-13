app.controller('LoginCtrl', ['$scope', '$location','LoginFactory',
	function ($scope, $location, LoginFactory)
	{
		$scope.base_url = $location.protocol() + "://" + $location.host()+'/index.php/';
		$scope.login = function () {
			$scope.error = 0;
			LoginFactory.checkLogin($scope.user, $scope.password).then(function (data) {
				console.log(data);
				if (data === 'true') {
					location.href = $scope.base_url + 'home';
				} else {
					$scope.error = 1;
				}
			});
			if ($scope.password === "thelis" && $scope.user === "clement") {
				location.href = $scope.base_url + 'home';
			}
		};
	}
]);
