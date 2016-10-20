var home = angular.module('home', []);
home.config(function($stateProvider, $urlRouterProvider) {
	$stateProvider
	.state('home', {
		url: '/',
		templateUrl: 'js/home/home.tpl',
		controller: 'HomeCtrl',
//		resolve: { 
//			getPage: function(HomeService){ 
//				return HomeService.getPageData('1');
//
//			}
//		}
});
}).controller('HomeCtrl',  function($rootScope, $scope,$sce, $state, HomeService) {
	HomeService.getPageData('1').success(function(response){
		if (response.status == 200) {
			
			$scope.data = response.data;
		}
	});	
	
	HomeService.getSettings().success(function(response){
		
		if(response.status == 200){
			$scope.settings = response.data;
			$scope.home_video_url = $sce.trustAsResourceUrl($scope.settings.video_url);
			
		}
	});
	
});