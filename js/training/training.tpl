<div ng-include="'js/header/header.tpl'"></div>
<section id="banner" style="background-image: url(assets/images/overlay.png), url(images/cms/{{data.image}}); height:200px!important;">
	<h2>{{data.name}}</h2>
	<p>{{data.description}}</p>
</section>

<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2  col-xs-12 col-sm-12 ">
				<p class="text-left" ng-bind-html="data.content"></p>
				<p class="text-left" ng-bind-html="data.content2"></p>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12" ng-repeat="list in training">
				<div class="cover text-center">
					
					<h3 >{{list.course_name}}</h3>
					<p>{{list.description}}</p>
					<p class="duration">Duration : {{list.duration}} Hours</p>
					<p>Price: USD {{list.price}}</p>
					<button class="btn btn primary" ng-click="enroll(list.id)"> Enroll Now</button>
				</div>
			</div>
		</div>
	</div>
</section>
<div ng-include="'js/footer/footer.tpl'"></div>