var career = angular.module('career', []);
career.config(function($stateProvider, $urlRouterProvider) {
	$stateProvider
	.state('career', {
		url: '/career',
		templateUrl: 'js/impact/impact.tpl',
		controller: 'CareerCtrl',
		// resolve: { 
		// 	getPage: function(HomeService){ 
		// 		return HomeService.getPageData();

		// 	}
		// }
	});
}).controller('CareerCtrl',  function($rootScope, $scope, Upload, $timeout,$state, HomeService) {

	HomeService.getPageData('5').success(function(response){
		if (response.status == 200) {
			console.log(response);
			$scope.data = response.data;
		}else{
			$state.go('home');
		}
	});	
    $scope.uploadPic = function(file) {
    file.upload = Upload.upload({
      url: 'https://www.luxbill.com/api/index.php/common/sendResume',
      data: {name: $scope.name, email: $scope.email,phone: $scope.phone,applying_for:$scope.applying_for,message:$scope.message,file: file},
    });
        file.upload.then(function (response) {
      $timeout(function () {
        file.result = response.data;
      });
    }, function (response) {
      if (response.status > 0)
        $scope.errorMsg = response.status + ': ' + response.data;
    }, function (evt) {
      // Math.min is to fix IE which reports 200% sometimes
      file.progress = Math.min(100, parseInt(100.0 * evt.loaded / evt.total));
    });
    }
});