var checkout = angular.module('checkout', []);
checkout.config(function($stateProvider, $urlRouterProvider) {
	$stateProvider
	.state('checkout', {
		url: '/register-for-training/:id',
		templateUrl: 'js/checkout/checkout.tpl',
		controller: 'CheckoutCtrl',
		resolve: { 
			getcourse: function(HomeService,  $stateParams){ 
				console.log( $stateParams);
				return HomeService.getCourseDetail($stateParams.id);

			}
		},
	});
}).controller('CheckoutCtrl',  function($rootScope, $scope, $stateParams,$state, HomeService, getcourse) {
	

	$scope.course = getcourse.data.data;
    
    $scope.showreg=true;
    $scope.showpayment = false;
    
    $scope.registerQuery = function(registerForm){
		if (registerForm.$valid) {
            $scope.value.training=$stateParams.id;
			HomeService.registerTraining($scope.value).success(function(response){
				if (response.status = 200) {
                    if(response.message=='error'){
                        $scope.msg = response.data;
                    }else{
					$scope.val = {};
					$scope.value = '';
					$scope.msg = response.data;
                    $scope.showreg=false;
                   $scope.showpayment = true;
                        console.log($scope.showreg)
                    }
				}
			});
		}

	};
});