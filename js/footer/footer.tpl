<footer ng-controller="FooterCtrl">
	<div class="container">
		<div class="row" id="footer-nav">
           
			<div class="col-lg-12">
				<div class="col-md-2">
					<ul class="nav nav-pills nav-stacked">
						<h1><a href="https://www.luxbill.com"><img style="width:120px;" src="assets/images/logo.png"></a></h1>
                        <span id="siteseal"><script async type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=lqv5yNJeMhEXhnGcJIvEJpyTCcNNl4SWfCM06uVKDcYGOFB62vc7KA5mt7jj"></script></span>
					</ul>
				</div>
				<div class="col-md-2">
					<ul class="nav nav-pills nav-stacked">
						<h4>About</h4>
						<li><a ui-sref="about">About</a></li>
						<li><a ng-href="{{settings.fb}}" target="_blank">Facebook</a></li>
						<li><a ng-href="{{settings.twitter}}" target="_blank">Twitter</a></li>
                        <li><a ng-href="{{settings.linkedin}}" target="_blank">Instagram</a></li>
					</ul>
				</div>
				<div class="col-md-2">
					<ul class="nav nav-pills nav-stacked">
						<h4>Contact</h4>
                        <li><a ui-sref="contact">Contact Info</a></li>
						<li>{{settings.phone}}</li>
                        <li>{{settings.email}}</li>
						<!-- <li>Carrers</li>          -->
					</ul>
				</div>
				<div class="col-md-3	">
					<ul class="nav nav-pills nav-stacked">
						<h4>Training</h4>
                        <li><a ui-sref="training">Oracle</a></li>
                        <li><a ui-sref="training">SAP</a></li>
                        <li><a ui-sref="training">Data Science</a></li>
						<!-- <li>Donate</li> -->
					</ul>
				</div> 
				<div class="col-md-3">
					<ul class="nav nav-pills nav-stacked">
						<h4>Join our Mailing List</h4>
						<form name="subscribeForm">
						<p class="success">{{success}}</p>
						<p class="error">{{error}}</p>
						<input type="email" name="email" class="form-control" ng-model="email" required><br>
						<button type="submit" class="btn btn-primary" ng-click="subscribe(subscribeForm)">Subscribe</button>
						</form>
					</ul>
				</div>  
			</div>
		</div>
		<div class="row text-center">
			<div class="col-lg-12">
				<ul class="nav-pills nav-justified">
					<li>&copy; 2016 Luxbill</li>
                    
				</ul>
                <div class="text-right">Powered By: <a href="http://www.netflue.com" target="_blank">Netflue</a></div>
			</div>
		</div>
	</div>
</footer>
