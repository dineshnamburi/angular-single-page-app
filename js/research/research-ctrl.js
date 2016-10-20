var research = angular.module('research', []);
research.config(function($stateProvider, $urlRouterProvider) {
	$stateProvider
	.state('research', {
		url: '/research',
		templateUrl: 'js/common/common.tpl',
		controller: 'ResearchCtrl',
		// resolve: { 
		// 	getPage: function(HomeService, $stateParams){ 
		// 		return HomeService.getPageData($stateParams.id);

		// 	}
		// },
	});
}).controller('ResearchCtrl',  function($rootScope, $scope, $state, HomeService) {
	// console.log($stateParams);
	HomeService.getPageData('9').success(function(response){
		if (response.status == 200) {
			//console.log(response);
			$scope.data = response.data;
		}else{
			$state.go('home');
		}
	});
	
});