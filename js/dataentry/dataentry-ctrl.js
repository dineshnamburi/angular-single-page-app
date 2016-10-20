var dataentry = angular.module('dataentry', []);
dataentry.config(function($stateProvider, $urlRouterProvider) {
	$stateProvider
	.state('dataentry', {
		url: '/data-entry',
		templateUrl: 'js/common/common.tpl',
		controller: 'DataEntryCtrl',
		// resolve: { 
		// 	getPage: function(HomeService, $stateParams){ 
		// 		return HomeService.getPageData($stateParams.id);

		// 	}
		// },
	});
}).controller('DataEntryCtrl',  function($rootScope, $scope, $state, HomeService) {
	// console.log($stateParams);
	HomeService.getPageData('16').success(function(response){
		if (response.status == 200) {
			//console.log(response);
			$scope.data = response.data;
		}else{
			$state.go('home');
		}
	});
	
});