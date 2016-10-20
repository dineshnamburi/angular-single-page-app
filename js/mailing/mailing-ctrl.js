var mailing = angular.module('mailing', []);
mailing.config(function($stateProvider, $urlRouterProvider) {
	$stateProvider
	.state('mailing', {
		url: '/mailings',
		templateUrl: 'js/common/common.tpl',
		controller: 'MailingCtrl',
		// resolve: { 
		// 	getPage: function(HomeService, $stateParams){ 
		// 		return HomeService.getPageData($stateParams.id);

		// 	}
		// },
	});
}).controller('MailingCtrl',  function($rootScope, $scope, $state, HomeService) {
	// console.log($stateParams);
	HomeService.getPageData('10').success(function(response){
		if (response.status == 200) {
			//console.log(response);
			$scope.data = response.data;
		}else{
			$state.go('home');
		}
	});
	
});