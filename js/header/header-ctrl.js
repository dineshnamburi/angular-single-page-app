var header = angular.module('header',[]).controller('HeaderCtrl',function($scope, $state, $rootScope, HomeService, localStorageService, toastr){
	$scope.LoggedIn = false;
	$scope.typeTrainee = false;
	$scope.typePartner = false;

	HomeService.getTrainingMenu().success(function(response){
		
		if(response.success == 1){
			$scope.training = response.data;
		}
	});
	if(localStorageService.get('user')){
		$scope.LoggedIn = true;
	}

	if(localStorageService.get('user') && localStorageService.get('user').type.toLowerCase() == 'trainee'){
		$scope.typeTrainee = true;
	}else if(localStorageService.get('user') && localStorageService.get('user').type.toLowerCase() == 'partner'){
		$scope.typePartner = true;
	}
    
   $scope.logout = function(){
		localStorageService.clearAll();
		toastr.success('Logout SuccessFull');
		$state.reload();
	};

});