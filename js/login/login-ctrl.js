function label_annimate(){
		var $this = $(this);
		label = $this.prev('label');
		if ($this.val() === '') {
				label.removeClass('active highlight');
			} else {
				label.addClass('active highlight');
			}
	}

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
$scope.email_err = true;
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
	
	$scope.country_arr = ["Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe"];
	$scope.state_arr = ["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Carolina","North Dakota","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming","District of Columbia","Puerto Rico","Guam","American Samoa","U.S. Virgin Islands","Northern Mariana Islands"];
	$scope.state_toggle = function(){
		if($scope.value.country == "United States"){
			$scope.state_select = angular.copy($scope.state_arr);
		}
		else{
			$scope.state_select = ["Other"];
		}
	};
	
	$scope.registerQuery = function(){
		if($scope.userForm.$invalid){
			$scope.userForm.name.$setTouched();
			$scope.userForm.email.$setTouched();
			$scope.userForm.phone.$setTouched();
			return false;
		}
		else {
			
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
		// console.log($scope.value);
	};
	$scope.user = {'type1':'partner','type':'','email':''};
	$scope.value = {'type':'partner'};
	$scope.loginUser = function(){
		if($scope.loginForm.$invalid){
			$scope.loginForm.password.$setTouched();
			$scope.loginForm.email.$setTouched();
			return false;
		}
		else {
			$scope.user.email = $scope.login_email;
			$scope.user.type = $scope.user.type1
			HomeService.loginUser($scope.user).success(function(res){
			
				if(res.status == 200){
					localStorageService.set("user", JSON.stringify(res.data));
					toastr.success('Login Successfull');
					$state.go('home');
				}else{
					toastr.error(res.message);
				}
				// console.log(res);
			});}
	};
	$('.login_form').find('input, textarea').on('keyup blur focus', function (e) {

		var $this = $(this),
		label = $this.prev('label');

		if (e.type === 'keyup') {
			if ($this.val() === '') {
				label.removeClass('active highlight');
			} else {
				label.addClass('active highlight');
			}
		} else if (e.type === 'blur') {
			if( $this.val() === '' ) {
				label.removeClass('active highlight'); 
			} else {
				label.removeClass('highlight');   
			}   
		} else if (e.type === 'focus') {
			
			if( $this.val() === '' ) {
				label.removeClass('highlight'); 
			} 
			else if( $this.val() !== '' ) {
				label.addClass('highlight');
			}
		}

	});
	
	
	$('.sel-box').on('change', function (e) {

		var $this = $(this),
		label = $this.prev('label');
		if($this.val() !== ''){
			label.addClass('active highlight');
		}
		else{
			label.removeClass('active highlight');
		}
		
	

	});

	$('.tab a').on('click', function (e) {

		e.preventDefault();

		$(this).parent().addClass('active');
		$(this).parent().siblings().removeClass('active');

		target = $(this).attr('href');
		
		$scope.flag_var = target;
		$('.tab-content > div').not(target).hide();

		$(target).fadeIn(600);

	});

});