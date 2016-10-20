var project = angular.module('project', []);
project.config(function($stateProvider, $urlRouterProvider) {
	$stateProvider
	.state('project', {
		url: '/project-management',
		templateUrl: 'js/common/common.tpl',
		controller: 'ProjectCtrl',
		// resolve: { 
		// 	getPage: function(HomeService, $stateParams){ 
		// 		return HomeService.getPageData($stateParams.id);

		// 	}
		// },
	});
}).controller('ProjectCtrl',  function($rootScope, $scope, $state, HomeService) {
	// console.log($stateParams);
	HomeService.getPageData('12').success(function(response){
		if (response.status == 200) {
			//console.log(response);
			$scope.data = response.data;
		}else{
			$state.go('home');
		}
	});
	
});