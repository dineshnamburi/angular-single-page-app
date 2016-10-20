var database = angular.module('database', []);
database.config(function($stateProvider, $urlRouterProvider) {
	$stateProvider
	.state('database', {
		url: '/database-management',
		templateUrl: 'js/common/common.tpl',
		controller: 'DatabaseCtrl',
		// resolve: { 
		// 	getPage: function(HomeService, $stateParams){ 
		// 		return HomeService.getPageData($stateParams.id);

		// 	}
		// },
	});
}).controller('DatabaseCtrl',  function($rootScope, $scope, $state, HomeService) {
	// console.log($stateParams);
	HomeService.getPageData('11').success(function(response){
		if (response.status == 200) {
			//console.log(response);
			$scope.data = response.data;
		}else{
			$state.go('home');
		}
	});
	
});