<div ng-include="'js/header/header.tpl'"></div>
<section id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
           
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
			<div class="item active">
                
				<img class="fill" src="images/cms/bnr-all.jpg">
                <div class="carousel-caption">
                    <h2>Luxbill Organizes Your Unstructured Data.</h2>
                    <p>We provide hands-on project management to enrich and organize your large<br> datasets, with a business model that lifts people out of poverty.</p>
                </div>
            </div>
			
			<div class="item ">
                
				<img class="fill" src="images/cms/image2.jpg">
                <div class="carousel-caption">
                    <h2>Luxbill Organizes Your Unstructured Data.</h2>
                    <p>We provide hands-on project management to enrich and organize your large<br> datasets, with a business model that lifts people out of poverty.</p>
                </div>
            </div>
            
			<div class="item ">
                
				<img class="fill" src="images/cms/banner10.jpg">
                <div class="carousel-caption">
                    <h2>Luxbill Organizes Your Unstructured Data.</h2>
                    <p>We provide hands-on project management to enrich and organize your large<br> datasets, with a business model that lifts people out of poverty.</p>
                </div>
            </div>
			
			<div class="item ">
                
				<img class="fill" src="images/cms/banner8.jpg">
                <div class="carousel-caption">
                    <h2>Luxbill Organizes Your Unstructured Data.</h2>
                    <p>We provide hands-on project management to enrich and organize your large<br> datasets, with a business model that lifts people out of poverty.</p>
                </div>
            </div>
			
			<div class="item ">
                
				<img class="fill" src="images/cms/banner6.jpg">
                <div class="carousel-caption">
                    <h2>Luxbill Organizes Your Unstructured Data.</h2>
                    <p>We provide hands-on project management to enrich and organize your large<br> datasets, with a business model that lifts people out of poverty.</p>
                </div>
            </div>
           
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </section>
<!--
<section id="banner" style="background-image: url(assets/css/images/overlay.png), url(assets/images/bnr-allpeople.jpg);">
	<h2>Luxbill Organizes Your<br> Unstructured Data.</h2>
	<p>We provide hands-on project management to enrich and organize your large<br> datasets, with a business model that lifts people out of poverty.</p>
</section>
-->
<script>

$('#myCarousel').carousel({
	interval: 3000 //changes the speed
})


</script>
<section class="special">
	<h2>Trusted by</h2>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3 col-lg-3 col-xs-12 col-sm-12 col-xl-3"><img src="assets/images/wallmart.png"></div>
			<div class="col-md-3 col-lg-3 col-xs-12 col-sm-12 col-xl-3"><img src="assets/images/google.png"></div>
			<div class="col-md-3 col-lg-3 col-xs-12 col-sm-12 col-xl-3"><img src="assets/images/ebay.png"></div>
			<div class="col-md-3 col-lg-3 col-xs-12 col-sm-12 col-xl-3"><img src="assets/images/getty.png"></div>
		</div>
	</div>
	<p>Luxbill provides high-end technology solutions and services helps organizations implement and run IT Solutions aligned to their overall business drivers.</p>
</section>

<section>
	<div class="centr-body"></div>
</section>

<section class="special">
    <div ng-bind-html="data.content"></div>
<!--
	<h2>Our Methodology</h2>
	<p>The last thing you want is data full of false positives and negatives that confuse your<br>algorithms and customers. Our process management ensures that you’ll be<br> guaranteed data that exceeds your requirements.</p>
-->
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-lg-3 col-xs-12 col-sm-12"><img class="circle" src="assets/images/scope.png">
				<div class="clearfix"></div>
				<h3>SCOPE</h3>
				<p>Build customized requirements alongside project consultants, who break down workflows into microwork</p>
			</div>
			<div class="col-md-3 col-lg-3 col-xs-12 col-sm-12"><img class="circle" src="assets/images/plan.png">
				<div class="clearfix"></div>

				<h3>PLAN</h3>
				<p>Build project in the Luxbill task management platform, or on client-provided platforms</p>
			</div>
			<div class="col-md-3 col-lg-3 col-xs-12 col-sm-12"><img class="circle" src="assets/images/deliver.png">
				<div class="clearfix"></div>

				<h3>DELIVER</h3>
				<p>SLA management, KPI reporting, analytics for throughput and isolation of quality metrics</p>
			</div>
			<div class="col-md-3 col-lg-3 col-xs-12 col-sm-12"><img class="circle" src="assets/images/iterate.png">
				<div class="clearfix"></div>
                <h3>ITERATE</h3>
				
				<p>Enhance and evolve project to adapt to changing algorithm requirements, build a repository of knowledge with your dedicated, full-time workforce</p>
			</div>
		</div>
	</div>
</section>

<section class="text-center">
    <div class="container">
        <h2>What We are do at Luxbill ?</h2>
        
		<div class="row pad">
   <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" ng-src="{{home_video_url}}"></iframe>
</div>
        </div></div>
	<h2>Our Model</h2>
	<p>We provide two workforce extension models to meet your business needs.</p>
	<div class="container">
		<div class="row pad">
			<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
				<img src="assets/images/prj1.png"/>
				<h3>MICROWORK</h3>
				<p><strong>Have a project you'd like us to manage from start to finish?</strong> Our proven work-processing model, Microwork, and proprietary technology platform, SamaHUB, break down large projects into smaller tasks for our workers to complete at a level of quality that exceeds industry standards.</p>
			</div>
			<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
				<img src="assets/images/prj1.png"/>
				<h3>WORKFORCE EXTENSION</h3>
				<p><strong>Have a project and a platform in place, but need additional support from subject matter experts?</strong> With Workforce Extension, we provide a group of Samasource experts to supplement your internal team to complete tasks on your platform.</p>
			</div>
		</div>
	</div>
	<button type="submit"  ui-sref="about({id:'2'})" class="btn btn-primary">LEARN MORE ABOUT OUR SERVICES</button><br>
</section>
<div ng-include="'js/footer/footer.tpl'"></div>