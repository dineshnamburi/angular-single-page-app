var contact = angular.module('contact', []);
contact.config(function($stateProvider, $urlRouterProvider) {
	$stateProvider
	.state('contact', {
		url: '/contact',
		templateUrl: 'js/contact/contact.tpl',
		controller: 'ContactCtrl',
	});
}).controller('ContactCtrl',  function($rootScope, $scope, $state, HomeService) {
	$scope.sendQuery = function(enquiryForm){
		if (enquiryForm.$valid) {
			HomeService.enquiry($scope.value).success(function(response){
				if (response.status = 200) {
					$scope.val = {};
					$scope.value = '';
					$scope.msg = response.data;
				}
			});
		}

	};
});