var about = angular.module('about', []);
about.config(function($stateProvider, $urlRouterProvider) {
	$stateProvider
	.state('about', {
		url: '/about',
		templateUrl: 'js/common/common.tpl',
		controller: 'AboutCtrl',
		// resolve: { 
		// 	getPage: function(HomeService, $stateParams){ 
		// 		return HomeService.getPageData($stateParams.id);

		// 	}
		// },
	});
}).controller('AboutCtrl',  function($rootScope, $scope, $state, HomeService) {
	// console.log($stateParams);
	HomeService.getPageData('2').success(function(response){
		if (response.status == 200) {
			console.log(response);
			$scope.data = response.data;
		}else{
			$state.go('home');
		}
	});
	
});

var mission = angular.module('mission', []);
about.config(function($stateProvider, $urlRouterProvider) {
	$stateProvider
	.state('mission', {
		url: '/mission',
		templateUrl: 'js/common/common.tpl',
		controller: 'MissionCtrl',
		// resolve: { 
		// 	getPage: function(HomeService, $stateParams){ 
		// 		return HomeService.getPageData($stateParams.id);

		// 	}
		// },
	});
}).controller('MissionCtrl',  function($rootScope, $scope, $state, HomeService) {
	// console.log($stateParams);
	HomeService.getPageData('17').success(function(response){
		if (response.status == 200) {
			console.log(response);
			$scope.data = response.data;
		}else{
			$state.go('home');
		}
	});
	
});

var mission = angular.module('team', []);
about.config(function($stateProvider, $urlRouterProvider) {
	$stateProvider
	.state('team', {
		url: '/team',
		templateUrl: 'js/common/common.tpl',
		controller: 'TeamCtrl',
		// resolve: { 
		// 	getPage: function(HomeService, $stateParams){ 
		// 		return HomeService.getPageData($stateParams.id);

		// 	}
		// },
	});
}).controller('TeamCtrl',  function($rootScope, $scope, $state, HomeService) {
	// console.log($stateParams);
	HomeService.getPageData('19').success(function(response){
		if (response.status == 200) {
			console.log(response);
			$scope.data = response.data;
		}else{
			$state.go('home');
		}
	});
	
});

var mission = angular.module('social', []);
about.config(function($stateProvider, $urlRouterProvider) {
	$stateProvider
	.state('social', {
		url: '/social-initiative',
		templateUrl: 'js/common/common.tpl',
		controller: 'SocialCtrl',
		// resolve: { 
		// 	getPage: function(HomeService, $stateParams){ 
		// 		return HomeService.getPageData($stateParams.id);

		// 	}
		// },
	});
}).controller('SocialCtrl',  function($rootScope, $scope, $state, HomeService) {
	// console.log($stateParams);
	HomeService.getPageData('18').success(function(response){
		if (response.status == 200) {
			console.log(response);
			$scope.data = response.data;
		}else{
			$state.go('home');
		}
	});
	
});