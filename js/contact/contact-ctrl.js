
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
	
	$scope.mapOptions = {
    zoom: 4,
    center: new google.maps.LatLng(39.1031182,-84.51201960000003),
	mapTypeId: google.maps.MapTypeId.ROADMAP
}

$scope.map = new google.maps.Map(document.getElementById('map'), $scope.mapOptions);
var cities = "Atlanta, USA";
 var geocoder= new google.maps.Geocoder();

 $scope.markers = [];

 var createMarker = function (info){
    var marker = new google.maps.Marker({
        map: $scope.map,
        position: new google.maps.LatLng(info.lat(), info.lng())
    });
 }

geocoder.geocode( { 'address': cities }, function(results, status) {
 if (status == google.maps.GeocoderStatus.OK) {
    newAddress = results[0].geometry.location;
    $scope.map.setCenter(newAddress);
    createMarker(newAddress)
 }
});

});

