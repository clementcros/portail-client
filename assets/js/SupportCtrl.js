app.controller('SupportCtrl', ['$scope', '$location','LoginFactory',
	function ($scope, $location,LoginFactory)
	{
		$scope.validate = function () {
			$scope.send = 1;
			console.log('test');
		};
		LoginFactory.getInfos().then(function (data) {

			$scope.listproduct = data.product;
		});

	}


]);
