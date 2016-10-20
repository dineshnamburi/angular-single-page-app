var profile = angular.module('profile', []);
profile.config(function($stateProvider, $urlRouterProvider) {
	$stateProvider
	.state('profile', {
		url: '/profile',
		templateUrl: 'js/profile/profile.tpl',
		controller: 'ProfileCtrl',
		resolve: { 
			getProfile: function(HomeService, $stateParams, localStorageService){ 
				var user = localStorageService.get('user');
				return HomeService.getUserProfile(user.id, user.type);

			}
		},
	});
}).controller('ProfileCtrl',  function($rootScope, $scope, $state, HomeService, localStorageService, toastr, getProfile) {

	$scope.user = localStorageService.get('user');
	$scope.value = getProfile.data.data;
	console.log(getProfile.data.data);

	

	$scope.updateProfile = function(){
		if($scope.value.name!='' && $scope.value.email!='' && $scope.value.phone!=''){
			if($scope.user.type == 'trainee'){
				HomeService.updateUser($scope.value, $scope.user.type).success(function(res){
					if(res.status == 200){
						toastr.success('Profile Updated Successfully');
						// $state.go('home');
					}else{
						toastr.error("Something Went Wrong");
					}
				});
			}else{

				HomeService.updatePartner($scope.value, $scope.user.type).success(function(res){
					if(res.status == 200){
						toastr.success('Profile Updated Successfully');
						// $state.go('home');
					}else{
						toastr.error("Something Went Wrong");
					}
				});
			}
		}else{
			return false;
		}
	};


});