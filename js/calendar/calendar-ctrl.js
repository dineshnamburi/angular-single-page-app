var calendar = angular.module('calendar', []);
calendar.config(function($stateProvider, $urlRouterProvider) {
	$stateProvider
	.state('calendar', {
		url: '/outsourcing-services',
		templateUrl: 'js/common/common.tpl',
		controller: 'CalendarCtrl',
		// resolve: { 
		// 	getPage: function(HomeService, $stateParams){ 
		// 		return HomeService.getPageData($stateParams.id);

		// 	}
		// },
	});
}).controller('CalendarCtrl',  function($rootScope, $scope, $state, HomeService) {
	// console.log($stateParams);
	HomeService.getPageData('13').success(function(response){
		if (response.status == 200) {
			//console.log(response);
			$scope.data = response.data;
		}else{
			$state.go('home');
		}
	});
	
});