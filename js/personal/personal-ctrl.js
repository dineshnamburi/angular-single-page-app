var personal = angular.module('personal', []);
personal.config(function($stateProvider, $urlRouterProvider) {
	$stateProvider
	.state('personal', {
		url: '/personal-assistant-support',
		templateUrl: 'js/common/common.tpl',
		controller: 'PersonalCtrl',
		// resolve: { 
		// 	getPage: function(HomeService, $stateParams){ 
		// 		return HomeService.getPageData($stateParams.id);

		// 	}
		// },
	});
}).controller('PersonalCtrl',  function($rootScope, $scope, $state, HomeService) {
	// console.log($stateParams);
	HomeService.getPageData('6').success(function(response){
		if (response.status == 200) {
			// console.log(response);
			$scope.data = response.data;
		}else{
			$state.go('home');
		}
	});
	
});