var login = angular.module('login', []);
login.config(function($stateProvider, $urlRouterProvider) {
	$stateProvider
	.state('login', {
		url: '/login',
		templateUrl: 'js/login/login.tpl',
		controller: 'LoginCtrl',
		// resolve: { 
		// 	getPage: function(HomeService, $stateParams){ 
		// 		return HomeService.getPageData($stateParams.id);

		// 	}
		// },
	});
}).controller('LoginCtrl',  function($rootScope, $scope, $state, HomeService, localStorageService, toastr) {

	$scope.value = {

		'title': '',
		'name': '',
		'email': '',
		'phone': '',
		'position': '',
		'company': '',
		'address': '',
		'city': '',
		'state': '',
		'postal': '',
		'country': '',
		'type': '',
		'website': '',
		'taxId': ''
		
	}
	$scope.registerQuery = function(){
        if($scope.value.name!='' && $scope.value.email!='' && $scope.value.phone!='' && $scope.value.type!=''){
		HomeService.register($scope.value).success(function(res){
			// console.log(res);
			if(res.status == 200){
				toastr.success('Registration Successfull, Check your email for your Password');
				$state.go('home');
			}else{
				toastr.error(res.data);
			}
		});
        }
        else {return false;}
		// console.log($scope.value);
	};

	$scope.loginUser = function(){
        if($scope.user.password!='' && $scope.user.email!='' && $scope.user.type!=''){
		HomeService.loginUser($scope.user).success(function(res){
			if(res.status == 200){
				localStorageService.set("user", JSON.stringify(res.data));
				toastr.success('Login Successfull');
				$state.go('home');
			}else{
				toastr.error(res.message);
			}
			// console.log(res);
		});
        }
         else {return false;}
	};

});