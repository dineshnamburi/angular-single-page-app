angular.module('home').factory('HomeService', function($http) {
	return {
		getPageData: function(id){

			return $http({
				method : 'POST',
				url : 'https://www.luxbill.com/api/index.php/common/getPageById',
				data: 'id='+id,
				headers : {
					'Content-Type' : 'application/x-www-form-urlencoded'
				}
			});

			// return $http.post ('http://localhost/luxbill/common/getPageById', {'id':'1'});
		},

		sendEmail: function(email){
			return $http({
				method : 'POST',
				url : 'https://www.luxbill.com/api/index.php/common/sendEmail',
				data: 'email='+email,
				headers : {
					'Content-Type' : 'application/x-www-form-urlencoded'
				}
			});
		},

		enquiry: function(val){
			return $http({
				method : 'POST',
				url : 'https://www.luxbill.com/api/index.php/common/sendEnquiry',
				data: 'category='+val.category+'&name='+val.name+'&email='+val.email+'&msg='+val.msg,
				headers : {
					'Content-Type' : 'application/x-www-form-urlencoded'
				}
			});
		},
		registerTraining: function(val){
			return $http({
				method : 'POST',
				url : 'https://www.luxbill.com/api/index.php/common/registerTraining',
				data:'title='+val.title+'&name='+val.name+'&email='+val.email+'&phone='+val.phone+'&position='+val.position+'&company='+val.company+'&address='+val.address+'&city='+val.city+'&state='+val.state+'&postal_code='+val.postal_code+'&country='+val.country+'&training='+val.training,
				headers : {
					'Content-Type' : 'application/x-www-form-urlencoded'
				}
			});
		},
		getTraining: function(){
			return $http({
				method : 'POST',
				url : 'https://www.luxbill.com/api/index.php/common/getTrainingData',
				data: '',
				headers : {
					'Content-Type' : 'application/x-www-form-urlencoded'
				}
			});
		},
		getClientsData: function(){
			return $http({
				method : 'POST',
				url : 'https://www.luxbill.com/api/index.php/common/getAllClients',
				data: '',
				headers : {
					'Content-Type' : 'application/x-www-form-urlencoded'
				}
			});
		},
		getCourseDetail: function(id){
			return $http({
				method : 'POST',
				url : 'https://www.luxbill.com/api/index.php/common/getcourseById',
				data: 'id='+id,
				headers : {
					'Content-Type' : 'application/x-www-form-urlencoded'
				}
			});
		},

		getTrainingMenu: function(){
			return $http({
				method : 'POST',
				url : 'https://www.luxbill.com/api/index.php/common/getTrainingMenu',
				data : '',
				headers : {
					'Content-Type' : 'application/x-www-form-urlencoded'
				}
			});
		},
		getSettings: function(){
			return $http({
				method : 'POST',
				url : 'https://www.luxbill.com/api/index.php/common/getSettings',
				data : '',
				headers : {
					'Content-Type' : 'application/x-www-form-urlencoded'
				}
			});
		},
		register: function(val){
			return $http({
				method : 'POST',
				url : 'https://www.luxbill.com/api/index.php/common/register',
				data:'type='+val.type+'&title='+val.title+'&name='+val.name+'&email='+val.email+'&phone='+val.phone+'&position='+val.position+'&company='+val.company+'&address='+val.address+'&city='+val.city+'&state='+val.state+'&postal='+val.postal+'&country='+val.country+'&website='+val.website+'&tax='+val.taxId,
				headers : {
					'Content-Type' : 'application/x-www-form-urlencoded'
				}
			});
		},

		loginUser: function(val){
			return $http({
				method : 'POST',
				url : 'https://www.luxbill.com/api/index.php/common/login',
				data:'type='+val.type+'&email='+val.email+'&password='+val.password,
				headers : {
					'Content-Type' : 'application/x-www-form-urlencoded'
				}
			});
		},

		getUserProfile: function(id, type){
			return $http({
				method : 'POST',
				url : 'https://www.luxbill.com/api/index.php/common/getProfile',
				data: 'id='+id+'&type='+type,
				headers : {
					'Content-Type' : 'application/x-www-form-urlencoded'
				}
			});
		},

		updatePartner: function(val, type){
			return $http({
				method : 'POST',
				url : 'https://www.luxbill.com/api/index.php/common/updateUser',
				data:'type='+type+'&name='+val.name+'&email='+val.email+'&phone='+val.phone+'&website='+val.website+'&street='+val.street+'&city='+val.city+'&state='+val.state+'&company='+val.company+'&country='+val.country+'&website='+val.website+'&tax='+val.tax+'&id='+val.id,
				headers : {
					'Content-Type' : 'application/x-www-form-urlencoded'
				}
			});
		},

		updateUser: function(val, type){
			return $http({
				method : 'POST',
				url : 'https://www.luxbill.com/api/index.php/common/updateUser',
				data:'type='+type+'&title='+val.title+'&name='+val.name+'&email='+val.email+'&phone='+val.phone+'&position='+val.position+'&company='+val.company+'&address='+val.address+'&city='+val.city+'&state='+val.state+'&postal_code='+val.postal_code+'&country='+val.country+'&id='+val.id,
				headers : {
					'Content-Type' : 'application/x-www-form-urlencoded'
				}
			});
		},
	}

});