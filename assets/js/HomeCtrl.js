app.controller('HomeCtrl', ['$scope', '$location','LoginFactory', 'ChangelogFactory',
	function ($scope, $location, LoginFactory, ChangelogFactory)
	{

		$scope.base_url = $location.protocol() + "://" + $location.host()+'/index.php/';

		$scope.loaded = 0;



			LoginFactory.getInfos().then(function (data) {
				$scope.camping= data;
				$scope.product = data.product;
				$scope.loaded = 1
			});
			LoginFactory.getResponsableClient().then(function (data) {

				$scope.responsable = data;
			});
			ChangelogFactory.getProducts('eseason_resa').then(function (data) {
				$scope.product = data;

				$scope.getLog = function (changelog) {
					if (changelog.logs.length > 0) {
						return changelog.logs[0];
					}

					return [];
				};

				$scope.logIsPrivate = function (changelog) {
					if (changelog.private === 1)
						return true ;
				};

				$scope.getChangelogType = function (changelog) {
					switch (changelog.type) {
						case 'amelio':
							return 1;
						case 'evol':
							return 2;
						case 'bug':
							return 3;
					}
				};

				$scope.filterVersions = function (version) {
					for (var i in version.changelogs) {
						if (true === $scope.filter.types.amelioration &&
							'amelio' === version.changelogs[i].type) {
							version.changelogs[i].enabled = true;
						} else if (true === $scope.filter.types.bug &&
							'bug' === version.changelogs[i].type) {
							version.changelogs[i].enabled = true;
						} else if (true === $scope.filter.types.evolution &&
							'evol' === version.changelogs[i].type) {
							version.changelogs[i].enabled = true;
						} else {
							version.changelogs[i].enabled = false;
						}
					}
					if (0 === version.changelogs.filter(function (a) {
						return a.enabled;
					}).length) {
						return false;
					}

					if (!$scope.filter.version) {
						return true;
					}
					return $scope.filter.version === version.number;
				};
				$scope.src='https://maps.google.com/maps?q=';
				$scope.city='béziers'+'%20';
				$scope.country='franc%20';
				$scope.postcode='34500';
				$scope.lastSrc= '&t=&z=13&ie=UTF8&iwloc=&output=embed';
				$scope.url = $scope.src + $scope.city + $scope.country + $scope.postcode + $scope.lastSrc;

			})
	}
]);
