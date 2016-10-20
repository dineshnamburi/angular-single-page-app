var client = angular.module('client', []);
home.config(function($stateProvider, $urlRouterProvider) {
	$stateProvider
	.state('client', {
		url: '/client',
		templateUrl: 'js/client/client.tpl',
		controller: 'ClientCtrl',
		// resolve: { 
		// 	getPage: function(HomeService){ 
		// 		return HomeService.getPageData();

		// 	}
		// }
	});
}).controller('ClientCtrl',  function($rootScope, $scope, $state, HomeService) {
	HomeService.getPageData('4').success(function(response){
		if (response.status == 200) {
			// console.log(response);
			$scope.data = response.data;
		}else{
			$state.go('home');
		}
	});

	HomeService.getClientsData().success(function(response){
		if (response.status == 200) {
			// console.log(response);
			$scope.clients = response.data;
		}else{
			// $state.go('home');
		}
	});
});