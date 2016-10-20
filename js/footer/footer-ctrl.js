var footer = angular.module('footer',[]).controller('FooterCtrl',function($scope, $sce,$rootScope, HomeService){
    
	$scope.email = '';
	$scope.subscribe = function(subscribeForm){
		if(subscribeForm.$valid){
			
			HomeService.sendEmail($scope.email).success(function(response){
				console.log(response);
				if(response.success == 1){
					$scope.success = response.data;
				}else{
					$scope.error = response.data;
				}
			});
		}else{
			$scope.error = 'Please Fill the Email';
		}
	};


	 HomeService.getSettings().success(function(response){
		
		if(response.status == 200){
			$scope.settings = response.data;
            $scope.home_video_url = $sce.trustAsResourceUrl($scope.settings.video_url);
            
		}
	});
    
});