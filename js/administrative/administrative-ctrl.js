var administrative = angular.module('administrative', []);
administrative.config(function($stateProvider, $urlRouterProvider) {
	$stateProvider
	.state('administrative', {
		url: '/it-strategy-consulting',
		templateUrl: 'js/common/common.tpl',
		controller: 'AdministrativeCtrl',
		// resolve: { 
		// 	getPage: function(HomeService, $stateParams){ 
		// 		return HomeService.getPageData($stateParams.id);

		// 	}
		// },
	});
}).controller('AdministrativeCtrl',  function($rootScope, $scope, $state, HomeService) {
	// console.log($stateParams);
	HomeService.getPageData('7').success(function(response){
		if (response.status == 200) {
			console.log(response);
			$scope.data = response.data;
		}else{
			$state.go('home');
		}
	});
	
});