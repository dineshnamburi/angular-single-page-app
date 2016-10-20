var booking = angular.module('booking', []);
booking.config(function($stateProvider, $urlRouterProvider) {
	$stateProvider
	.state('booking', {
		url: '/it-staffing',
		templateUrl: 'js/common/common.tpl',
		controller: 'BookingCtrl',
		// resolve: { 
		// 	getPage: function(HomeService, $stateParams){ 
		// 		return HomeService.getPageData($stateParams.id);

		// 	}
		// },
	});
}).controller('BookingCtrl',  function($rootScope, $scope, $state, HomeService) {
	// console.log($stateParams);
	HomeService.getPageData('14').success(function(response){
		if (response.status == 200) {
			//console.log(response);
			$scope.data = response.data;
		}else{
			$state.go('home');
		}
	});
	
});