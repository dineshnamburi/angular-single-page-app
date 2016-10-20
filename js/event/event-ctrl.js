var event = angular.module('event', []);
event.config(function($stateProvider, $urlRouterProvider) {
	$stateProvider
	.state('event', {
		url: '/event-planning',
		templateUrl: 'js/common/common.tpl',
		controller: 'EventCtrl',
		// resolve: { 
		// 	getPage: function(HomeService, $stateParams){ 
		// 		return HomeService.getPageData($stateParams.id);

		// 	}
		// },
	});
}).controller('EventCtrl',  function($rootScope, $scope, $state, HomeService) {
	// console.log($stateParams);
	HomeService.getPageData('8').success(function(response){
		if (response.status == 200) {
			console.log(response);
			$scope.data = response.data;
		}else{
			$state.go('home');
		}
	});
	
});