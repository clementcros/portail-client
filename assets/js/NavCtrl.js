app.controller('NavCtrl', ['$scope', '$location',
	function ($scope, $location)
	{
		$scope.test = 'test du controller';
		console.log('test');
		$scope.base_url = $location.protocol() + "://" + $location.host()+'/index.php/';

		$scope.logout = function () {
			location.href = $scope.base_url;
		};
		$scope.nav = function (slug) {
			location.href = $scope.base_url+slug;
		};
		$scope.openModal = function() {
			console.log('test');
			var modalInstance =  $uibModal.open({
				templateUrl: "modalContent.html",
				controller: "ModalContentCtrl",
				size: '',
			});

			modalInstance.result.then(function(response){
				$scope.result = `${response} button hitted`;
			});

		};

	}


]);
