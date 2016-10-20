<div ng-include="'js/header/header.tpl'"></div>
<section id="banner" style="background-image: url(assets/images/overlay.png), url(images/cms/{{data.image}}); height:200px!important;">
	<h2>{{data.name}}</h2>
	<p>{{data.description}}</p>
</section>

<section>
	<div class="container-fluid">
		
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
				<div class="cover text-center">
					
					<h3>{{course.data.course_name}}</h3>
					<p>{{course.data.description}}</p>
					<p class="duration">Duration : {{course.data.duration}} Hours</p>
					<p>Price: USD {{course.data.price}}</p>
					<button class="btn btn primary" ng-click="enroll(course.data.id)"> Enroll Now</button>
				</div>
			</div>
		</div>
	</div>
</section>
<div ng-include="'js/footer/footer.tpl'"></div>