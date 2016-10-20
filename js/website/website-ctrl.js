var website = angular.module('website', []);
website.config(function($stateProvider, $urlRouterProvider) {
	$stateProvider
	.state('website', {
		url: '/bill-management-services',
		templateUrl: 'js/common/common.tpl',
		controller: 'WebsiteCtrl',
		// resolve: { 
		// 	getPage: function(HomeService, $stateParams){ 
		// 		return HomeService.getPageData($stateParams.id);

		// 	}
		// },
	});
}).controller('WebsiteCtrl',  function($rootScope, $scope, $state, HomeService) {
	// console.log($stateParams);
	HomeService.getPageData('15').success(function(response){
		if (response.status == 200) {
			//console.log(response);
			$scope.data = response.data;
		}else{
			$state.go('home');
		}
	});
	
});