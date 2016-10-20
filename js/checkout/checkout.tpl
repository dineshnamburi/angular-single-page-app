<div ng-include="'js/header/header.tpl'"></div>
<section id="banner" style="background-image: url(assets/css/images/overlay.png), url(images/cms/administ-assi.jpg); ">
	<h2>Training Course Signup</h2>
</section>
<section>
	<div class="container">
		<div class="row" ng-show="showreg">
			<div class="col-md-8 col-md-offset-2">
				<form class="form-horizontal" name="registerForm">
                    <p class="danger">{{msg}}</p>
                     <div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">Title</label>
    <div class="col-sm-10">
      <select name="title" ng-model="value.title" class="form-control"><option>Mr.</option><option>Mrs.</option><option>Dr.</option><option>Miss.</option></select>
    </div>
  </div>
                     <div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      <input type="text" name="name" ng-model="value.name" class="form-control" id="inputName" placeholder="Name">
    </div>
  </div>
    <div class="form-group">
    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" name="email" ng-model="value.email" class="form-control" id="inputEmail" placeholder="Email">
    </div>
  </div>  
<div class="form-group">
    <label for="inputMobile" class="col-sm-2 control-label">Mobile</label>
    <div class="col-sm-10">
      <input type="text" ng-model="value.phone" name="phone" class="form-control" id="inputMobile" placeholder="Mobile">
    </div>
  </div>  
                    
     <div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">Position</label>
    <div class="col-sm-10">
      <input type="text" name="position" ng-model="value.position" class="form-control" id="inputName" placeholder="Position">
    </div>
  </div>
 <div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">Company</label>
    <div class="col-sm-10">
      <input type="text" name="company" ng-model="value.company" class="form-control" id="inputName" placeholder="Company">
    </div>
  </div>                    
    <div class="form-group">
    <label for="inputMessage" class="col-sm-2 control-label">Address</label>
    <div class="col-sm-10">
        <textarea name="address" ng-model="value.address" class="form-control" id="inputMessage" placeholder="Address"></textarea>
    </div>
  </div>                
		<div class="form-group">
    <label for="inputMobile" class="col-sm-2 control-label">City</label>
    <div class="col-sm-10">
      <input type="text" name="city" ng-model="value.city" class="form-control" id="inputMobile" placeholder="City">
    </div>
  </div>  
                    <div class="form-group">
    <label for="inputMobile" class="col-sm-2 control-label">State/Province</label>
    <div class="col-sm-10">
      <input type="text" name="state" ng-model="value.state" class="form-control" id="inputMobile" placeholder="STate/Province">
    </div>
                    </div>            
    <div class="form-group">
    <label for="inputMobile" class="col-sm-2 control-label">Postal Code</label>
    <div class="col-sm-10">
      <input type="text" name="postal_code" ng-model="value.postal_code" class="form-control" id="inputMobile" placeholder="Postal Code">
        </div></div>
        
<div class="form-group">
    <label for="inputMobile" class="col-sm-2 control-label">Country</label>
    <div class="col-sm-10">
      <input type="text" name="country" ng-model="value.country" class="form-control" id="inputMobile" placeholder="Country">
        
    </div>        
  </div> 
					
				<button  class="btn btn-primary" ng-click="registerQuery(registerForm)">Register</button>	
				</form>
			</div>
        </div>
        <div class="row" ng-show="showpayment">
			<div class="col-md-6 col-md-offset-3">
				<label>Course Name:</label> {{course.course_name}}<br>
				<leble>Duration:</leble> {{course.duration}} Hours<br>
				<label>Price:</label>USD {{course.price}}<br>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post">

        <!-- Identify your business so that you can collect the payments. -->
        <input type="hidden" name="business" value="vnkwenti@gmail.com">
        
        <!-- Specify a Buy Now button. -->
        <input type="hidden" name="cmd" value="_xclick">
        
        <!-- Specify details about the item that buyers will purchase. -->
        <input type="hidden" name="item_name" value="{{course.course_name}}">
        <input type="hidden" name="item_number" value="{{course.id}}">
        <input type="hidden" name="amount" value="{{course.price}}">
        <input type="hidden" name="currency_code" value="USD">
        
        <!-- Specify URLs -->
        <input type='hidden' name='cancel_return' value='https://www.luxbill.com/index.php/common/payment_cancel'>
		<input type='hidden' name='return' value='https://www.luxbill.com/index.php/common/payment_success'>

        
        <!-- Display the payment button. -->
        <input type="image" name="submit" border="0"
        src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online">
        <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
        <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
    
    </form>
                
			</div>
			
		</div>
	</div>

</section>
<div ng-include="'js/footer/footer.tpl'"></div>