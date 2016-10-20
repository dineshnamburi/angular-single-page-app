<div ng-include="'js/header/header.tpl'"></div>
<section id="banner" style="background-image: url(assets/images/overlay.png), url(images/cms/image2.jpg); height:200px!important;">
   <h2>Login</h2>
</section>
<section class="special">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-6 col-md-offset-3">
            <div class="login_form">
               <ul class="tab-group">
                  <li class="tab active"><a href="#signup">Sign Up</a></li>
                  <li class="tab"><a href="#login">Log In</a></li>
               </ul>
               <div class="tab-content">
                  <div id="signup">
                    		 
					<label style="padding-right: 5px;" >
                           Register as:
                    </label>			 
					<label for="inlineRadio1" >
						<input type="radio" name="type" ng-model="value.type" id="inlineRadio1" value="partner" ng-checked="true" /><span style="padding-right: 5px;">Partner</span>
					</label>

					<label for="inlineRadio2" >
						<input type="radio" name="type" ng-model="value.type" id="inlineRadio2" value="trainee"> <span style="padding-right: 5px;">Trainee</span>
					</label>

 	 
                     <form name="userForm" style="padding-top:10px;" method="post" novalidate>
                        <div class="field-wrap" ng-show="value.type=='trainee'" >
                           <label class="login_label">
                           Title
                           </label>
						   <select class="login_input sel-box" name="title" ng-model="value.title" class="form-control">
							  <option value=""></option>
                              <option>Mr.</option>
                              <option>Mrs.</option>
                              <option>Dr.</option>
                              <option>Miss.</option>
                           </select>
                           
                        </div>
						<div class="field-wrap">
                           <label class="login_label">
                           Name<span class="req">*</span>
                           </label>
                           <input class="login_input" ng-class="{ 'has-error' : userForm.name.$invalid && userForm.name.$touched }" name="name" ng-model="value.name"  id="inputName" required />
						   <span class="validation_err" ng-show="userForm.name.$invalid && userForm.name.$touched">* Required field</span>
                        </div>
						
                        <div class="field-wrap">
                           <label class="login_label">
                           Email Address<span class="req">*</span>
                           </label>
                           <input class="login_input" ng-class="{ 'has-error' : userForm.email.$invalid && userForm.email.$touched }" type="email" name="email" ng-model="value.email" id="inputEmail" required/>
						   <span class="validation_err" ng-show="userForm.email.$invalid && userForm.email.$touched">* Not a valid email address</span>
						</div>
                        <div class="field-wrap">
                           <label class="login_label">
                           Mobile<span class="req">*</span>
                           </label>
                           <input class="login_input" ng-class="{ 'has-error' : userForm.phone.$invalid && userForm.phone.$touched }" type="text" ng-model="value.phone" name="phone"  id="inputMobile" required/>
                           <span class="validation_err" ng-show="userForm.phone.$invalid && userForm.phone.$touched">* Required Field</span>
						</div>
						<div class="field-wrap" ng-show="value.type=='trainee'">
                           <label class="login_label">
                           Position
                           </label>
                           <input class="login_input" type="text" name="position" ng-model="value.position"  id="inputName"/>
                        </div>
						<div class="field-wrap" ng-show="value.type=='partner'">
                           <label class="login_label">
                           Website
                           </label>
                           <input class="login_input" type="text" name="position" ng-model="value.website"  id="inputName"/>
                        </div>
						<div class="field-wrap">
                           <label class="login_label">
                           Company
                           </label>
                           <input class="login_input" type="text" name="company" ng-model="value.company"  id="inputName" />
                        </div>
						<div class="field-wrap">
                           <label class="login_label1">
                           Address
                           </label>
                           <textarea class="login_input" name="address" ng-model="value.address"  id="inputMessage"></textarea>
                        </div>
						<div class="top-row">
						<div class="field-wrap">
                           <label class="login_label">
                           City
                           </label>
                           <input class="login_input" type="text" name="city" ng-model="value.city"  id="inputMobile" />
                        </div>
						
						<div class="field-wrap">
                           <label class="login_label">
                           Country
                           </label>
						   <select class="login_input sel-box" name="country" ng-model="value.country" ng-options="countries as countries for countries in country_arr" ng-change="state_toggle()" >
							  <option value=""></option>
                           </select>
                           
                        </div>
						</div>
						<div class="top-row">
						
						
						<div class="field-wrap">
                           <label class="login_label">
                           State/Province
                           </label>
						   <select class="login_input sel-box" name="state" ng-model="value.state" ng-options="states as states for states in state_select"  >

                           </select>
                           
                        </div>
						
						
						<div class="field-wrap">
                           <label class="login_label">
                           Zip Code
                           </label>
                           <input class="login_input" type="text" name="postal_code" ng-model="value.postal" onkeyup="label_annimate()"  id="inputMobile"/>
                        </div>
						</div>
                        <button ng-click="registerQuery(userForm)" class="login_button login_button-block">Sign Up</button>
                     </form>
                  </div>
                  <div id="login">
                     <label style="padding-right: 5px;"  >
                           Login as:
                    </label>			 
					<label for="inlineRadio3" >
						<input type="radio" name="type1" ng-model="user.type1" id="inlineRadio3" value="partner" ng-checked="true" /><span style="padding-right: 5px;">Partner</span>
					</label>

					<label for="inlineRadio4" >
						<input type="radio" name="type1" ng-model="user.type1" id="inlineRadio4" value="trainee"> <span style="padding-right: 5px;">Trainee</span>
					</label>
                     <form name="loginForm" style="padding-top:10px;" novalidate>
                        <div class="field-wrap">
                           <label class="login_label">
                           Email Address<span class="req">*</span>
                           </label>
                           <input class="login_input" id="login_email" type="email" name="email" ng-model="login_email" ng-class="{ 'has-error' : loginForm.email.$invalid && loginForm.email.$touched }" required />
						   <span class="validation_err" ng-show="loginForm.email.$invalid && loginForm.email.$touched">* Not a valid email address</span>
                        </div>
                        <div class="field-wrap">
                           <label class="login_label">
                           Password<span class="req">*</span>
                           </label>
                           <input class="login_input" type="password" name="password" ng-model="user.password" ng-class="{ 'has-error' : loginForm.password.$invalid && loginForm.password.$touched }" required/>
						   <span class="validation_err" ng-show="loginForm.password.$invalid && loginForm.password.$touched">* Required</span>
                        </div>
                        <button class="login_button login_button-block" ng-click="loginUser()" >Log In</button>
                     </form>
                  </div>
               </div>
               <!-- tab-content -->
            </div>
            <!-- /form -->
            <!--<div class="panel panel-default">
               <div class="panel-heading">Login Form</div>
               <div class="panel-body">
               
               
               
               
               <form name="LoginForm" class="form-horizontal">
               <div class="form-group">
               <label for="inputName" class="col-sm-4 control-label">Login Type:</label>
               <div class="col-sm-8">
                      <label class="radio-inline">
               <input type="radio" name="type" ng-model="user.type" id="inlineRadio1" value="partner" required> Partner
               </label>
               <label class="radio-inline">
               <input type="radio" name="type" ng-model="user.type" id="inlineRadio2" value="trainee" required> Trainee
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
               <input type="password"   class="form-control" id="pwd" placeholder="Enter password" required>
               </div>
               </div>
               
               <div class="form-group"> 
               <div class="col-sm-8 col-sm-offset-4">
               <button type="submit" class="btn btn-primary" ng-click="loginUser()">Login</button>
               </div>
               </div>
               </form>
               </div>
                </div>-->
         </div>
      </div>
   </div>
</section>

<div ng-include="'js/footer/footer.tpl'"></div>