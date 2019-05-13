app.controller('maps', ['$scope', '$location','LoginFactory',
	function ($scope, $location, LoginFactory)
	{
		$scope.src='https://maps.google.com/maps?q=';
		$scope.city='béziers'+'%20';
		$scope.country='franc%20';
		$scope.postcode='34500';
		$scope.lastSrc= '&t=&z=13&ie=UTF8&iwloc=&output=embed';
		$scope.url = $scope.src + $scope.city + $scope.country + $scope.postcode + $scope.lastSrc;


	}
]);
