<div ng-include="'js/header/header.tpl'"></div>
<section id="banner" style="background-image: url(assets/images/overlay.png), url(images/cms/{{data.image}}); height:200px!important;">
	<h2>{{data.name}}</h2>
	<p>{{data.description}}</p>
</section>

<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 col-xl-12">
				<p class="text-left" ng-bind-html="data.content"></p>
                <p class="text-left" ng-bind-html="data.content2"></p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12" ng-repeat="client in clients">
				<img ng-src="images/client/{{client.image}}">
			</div>
		</div>
	</div>
</section>
<div ng-include="'js/footer/footer.tpl'"></div>