var training = angular.module('training', []);
training.config(function($stateProvider, $urlRouterProvider) {
	$stateProvider
	.state('training', {
		url: '/training',
		templateUrl: 'js/training/training.tpl',
		controller: 'TrainingCtrl',
		// resolve: { 
		// 	getPage: function(HomeService){ 
		// 		return HomeService.getPageData();

		// 	}
		// }
	});
}).controller('TrainingCtrl',  function($rootScope, $scope, $state, HomeService) {

	HomeService.getPageData('3').success(function(response){
		if (response.status == 200) {
			console.log(response);
			$scope.data = response.data;
		}else{
			$state.go('home');
		}
	});	

	HomeService.getTraining().success(function(response){
		if (response.status == 200) {
			// console.log(response);
			$scope.training = response.data;
		}else{
			// $state.go('home');
		}
	});
	
	$scope.enroll = function(id){
		//console.log(id);
		$state.go('checkout', {'id': id});
	}	
});

var trainingdetails = angular.module('trainingdetails', []);
training.config(function($stateProvider, $urlRouterProvider) {
	$stateProvider
	.state('trainingdetails', {
		url: '/training-details/:id',
		templateUrl: 'js/training/training-details.tpl',
		controller: 'TrainingDetailsCtrl',
        resolve: { 
			getcourse: function(HomeService,  $stateParams){ 
				console.log($stateParams);
				return HomeService.getCourseDetail($stateParams.id);

			}
		},
		
	});
}).controller('TrainingDetailsCtrl',  function($rootScope,getcourse, $scope, $state, HomeService) {
    HomeService.getPageData('3').success(function(response){
		if (response.status == 200) {
			console.log(response);
			$scope.data = response.data;
		}else{
			$state.go('home');
		}
	});	
	$scope.course = getcourse.data;
	
	$scope.enroll = function(id){
		//console.log(id);
		$state.go('checkout', {'id': id});
	}	
});