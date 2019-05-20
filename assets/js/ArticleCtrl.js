app.controller('ArticleCtrl', ['$scope', '$location','ActusFactory',
	function ($scope, $location, ActusFactory)
	{

		$scope.goBack = function () {
			location.href = $scope.base_url + 'actus';
		};
		$scope.base_url = $location.protocol() + "://" + $location.host()+'/index.php/';
		var id = $location.path().split('/')[3];
		ActusFactory.getArticle(id).then(function (data) {
			console.log(data);
			$scope.actus = data[0];
		});

		$scope.readMore = function (id) {
			location.href = $location.protocol() + "://" + $location.host() + '/index.php/actus/'+id
		};
	}
]);
