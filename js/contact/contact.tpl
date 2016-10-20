<div ng-include="'js/header/header.tpl'"></div>
<section id="banner" style="background-image: url(assets/css/images/overlay.png), url(assets/images/banner.jpg); ">
	<h2>Contact us</h2>
</section>
<section >
    <div class="container-fluid">
    <div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-6 col-md-offset-3">
		<h4 class="text-center">Contact Us</h4>
        <p class="text-center"><strong>Our team is standing by to help you manage your project, learn more about our service offerings, or provide a quote.</strong> </p>
        <address class="text-center">
  <strong>Call Client Services at 513-449-4901<br>
  Email : sales@luxbill.com<br>
  Reach Us: Luxbill LLC, <br>4107 Hunting Horn act # 7,<br>Cincinnati, OH 45255,<br>Tel: 513-449-4901<br></strong>
</address>
        
        </div>
			
		
		</div>
	
	<div class="col-md-12 col-sm-12 col-xs-12">
        
         <div class="col-md-4 col-md-offset-4">
		<p class="text-center"><strong>Or fill out the form below.</strong></p>
		<form class="" name="enquiryForm">
			<p class="success">{{msg}}</p>
			<label>Choose Service:</label>
			<select ng-model="value.category" class="form-control" required>
				<option>IT strategy Consulting</option>
				
				<option>Database Management</option>
                <option>Project Management</option>
				<option>Outsourcing Services</option>
				<option>IT Staffing</option>
                <option>Bill Management Service</option>
				
			</select>
			<label>Name:</label><input type="text" ng-model="value.name" class="form-control" required>
			<label>Email:</label><input type="email" ng-model="value.email" class="form-control" required>
			<label>Message:</label><textarea rows="3"class="form-control" ng-model="value.msg"></textarea><br>
			<button class="btn btn-primary" ng-click="sendQuery(enquiryForm)">Send</button>
		</form>
	</div>
        </div>
        </div>
</section>
<div ng-include="'js/footer/footer.tpl'"></div>

