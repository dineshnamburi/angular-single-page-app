<div ng-include="'js/header/header.tpl'"></div>
<!-- <section id="banner" style="background-image: url(assets/images/overlay.png), url(images/cms/image2.jpg); height:200px!important;">
	<h2>Login</h2>
</section>
<section class="special">
	<div class="container-fluid">
		<div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                     <div class="panel-heading">Login Form</div>
  <div class="panel-body">
   

			
            
			<form name="LoginForm" class="form-horizontal">
				<div class="form-group">
						<label for="inputName" class="col-sm-4 control-label">Login Type:</label>
						<div class="col-sm-8">
                            <label class="radio-inline">
  <input type="radio" name="type" ng-model="user.type" id="inlineRadio1" value="partner"> Partner
</label>
<label class="radio-inline">
  <input type="radio" name="type" ng-model="user.type" id="inlineRadio2" value="trainee"> Trainee
</label>

						</div>
					</div>
					
				<div class="form-group">
					<label class="control-label col-sm-4" for="email">Email:</label>
					<div class="col-sm-8">
						<input type="email"  ng-model="user.email" class="form-control" id="email" placeholder="Enter email" required>
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Password:</label>
					<div class="col-sm-8"> 
						<input type="password"  ng-model="user.password" class="form-control" id="pwd" placeholder="Enter password" required>
					</div>
				</div>
				
				<div class="form-group"> 
					<div class="col-sm-8 col-sm-offset-4">
						<button type="submit" class="btn btn-primary" ng-click="loginUser()">Login</button>
					</div>
				</div>
			</form>
                </div>
                      </div>
</div>
		</div>
	</div>
</section> -->
<section class="special">
	<div class="container-fluid">
		<div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                      <div class="panel-heading">My Profile</div>
  <div class="panel-body">
		
			
				<form class="form-horizontal" name="registerForm">
					<p class="danger">{{msg}}</p>
					<!-- <div class="form-group">
						<label for="inputName" class="col-sm-4 control-label">Register as</label>
						<div class="col-sm-8">
                            <label class="radio-inline">
  <input type="radio" name="type" ng-model="value.type" id="inlineRadio1" value="partner"> Partner
</label>
<label class="radio-inline">
  <input type="radio" name="type" ng-model="value.type" id="inlineRadio2" value="trainee"> Trainee
</label>

							<select name="title" ng-model="value.type" class="form-control">
								<option value="" disabled selected>Please Select</option>
								<option value="partner">Partner</option>
								<option value="trainee">Trainee</option>
							</select>
-->
						<!-- </div>
					</div>  -->
					<div class="form-group" ng-if="user.type == 'trainee'">
						<label for="inputName" class="col-sm-4 control-label">Title</label>
						<div class="col-sm-8">
							<select name="title" ng-model="value.title" class="form-control">
								<option disabled value="" selected>Please Select</option>
								<option>Mr.</option>
								<option>Mrs.</option>
								<option>Dr.</option>
								<option>Miss.</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="inputName" class="col-sm-4 control-label">Name</label>
						<div class="col-sm-8">
							<input type="text" name="name" ng-model="value.name" class="form-control" id="inputName" placeholder="Name" required>
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail" class="col-sm-4 control-label">Email</label>
						<div class="col-sm-8">
							<input type="email" name="email" ng-model="value.email" disabled class="form-control" id="inputEmail" placeholder="Email" required>
						</div>
					</div>  
					<div class="form-group">
						<label for="inputMobile" class="col-sm-4 control-label">Mobile</label>
						<div class="col-sm-8">
							<input type="text" ng-model="value.phone" name="phone" class="form-control" id="inputMobile" placeholder="Mobile" required>
						</div>
					</div>  

					<div class="form-group" ng-if="user.type == 'trainee'">
						<label for="inputName" class="col-sm-4 control-label">Position</label>
						<div class="col-sm-8">
							<input type="text" name="position" ng-model="value.position" class="form-control" id="inputName" placeholder="Position">
						</div>
					</div>
					<div class="form-group" ng-if="user.type == 'partner'">
						<label for="inputName" class="col-sm-4 control-label">Website</label>
						<div class="col-sm-8">
							<input type="text" name="position" ng-model="value.website" class="form-control" id="inputName" placeholder="Website">
						</div>
					</div>
					<div class="form-group">
						<label for="inputName" class="col-sm-4 control-label">Company</label>
						<div class="col-sm-8">
							<input type="text" name="company" ng-model="value.company" class="form-control" id="inputName" placeholder="Company">
						</div>
					</div>                    
					<div class="form-group" ng-if="user.type == 'trainee'">
						<label for="inputMessage" class="col-sm-4 control-label">Address</label>
						<div class="col-sm-8">
							<textarea name="address" ng-model="value.address" class="form-control" id="inputMessage" placeholder="Address"></textarea>
						</div>
					</div>  
					<div class="form-group" ng-if="user.type == 'partner'">
						<label for="inputMessage" class="col-sm-4 control-label">Street</label>
						<div class="col-sm-8">
							<textarea name="address" ng-model="value.street" class="form-control" id="inputMessage" placeholder="Address"></textarea>
						</div>
					</div>                
					<div class="form-group">
						<label for="inputMobile" class="col-sm-4 control-label">City</label>
						<div class="col-sm-8">
							<input type="text" name="city" ng-model="value.city" class="form-control" id="inputMobile" placeholder="City">
						</div>
					</div>  
					<div class="form-group">
						<label for="inputMobile" class="col-sm-4 control-label">State/Province</label>
						<div class="col-sm-8">
							<input type="text" name="state" ng-model="value.state" class="form-control" id="inputMobile" placeholder="State/Province">
						</div>
					</div>            
					<div class="form-group" ng-if="user.type == 'trainee'">
						<label for="inputMobile" class="col-sm-4 control-label">Postal Code</label>
						<div class="col-sm-8">
							<input type="text" name="postal_code" ng-model="value.postal_code" class="form-control" id="inputMobile" placeholder="Postal Code">
						</div></div>

						<div class="form-group">
							<label for="inputMobile" class="col-sm-4 control-label">Country</label>
							<div class="col-sm-8">
								<input type="text" name="country" ng-model="value.country" class="form-control" id="inputMobile" placeholder="Country">

							</div>        
						</div>
						<div class="form-group" ng-if="user.type == 'partner'">
							<label for="inputMobile" class="col-sm-4 control-label">Tax Id/ Vat No.</label>
							<div class="col-sm-8">
								<input type="text" name="country" ng-model="value.tax" class="form-control" id="inputMobile" placeholder="Tax No. / Vat No.">

							</div>        
						</div> 
						<button  class="btn btn-primary" ng-click="updateProfile(registerForm)">Update</button>	
					</form>
				
            </div>
			</div>
                 </div>
			</div>
		</div>
	</section>
	<div ng-include="'js/footer/footer.tpl'"></div>