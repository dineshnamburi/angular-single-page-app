<div ng-include="'js/header/header.tpl'"></div>
<section id="banner" style="background-image: url(assets/images/overlay.png), url(images/cms/{{data.image}}); height:450px!important">
	<div id="banner_text" class="fadeInUpSmall animated">
		<div class="layer_2">
			<h3 class="red_txt" style="font-size:50px;margin-top: 0px;margin-bottom: 0px;text-decoration: none;">{{data.name}}</h3>
			<p class="red_txt" style="font-size:18px;">{{data.description}}</p>	
		</div>
	</div>
</section>

<section>
	<div class="container-fluid">
		<div class="row" style="margin-left:4%;margin-right:4%;margin-top:0%;margin-bottom:0%;">
			<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 col-xl-12">
				<p class="text-left no_underline"  ng-bind-html="data.content"></p>
                <p class="text-left no_underline"  ng-bind-html="data.content2"></p>
			</div>
		</div>	
				<!-- Added four columns -->
				<div id="calls_to_action" class="narrower below_content">
	<div class="col-md-12">	
		<div class="col-md-2"></div>
		<div class="columns four col-md-8">
			<div class="column open_positions wow zoomIn col-md-3" style="visibility: visible; animation-name: zoomIn;">
				<div class="container" style="width:100%">
					<h3 style="text-decoration: none;">Open Positions</h3>
					
					<div class="hover">
						<h3 style="text-decoration: none;">Open Positions</h3>
						
						<a href="/open-positions/" class="full_coverage_link" target="_blank">&nbsp;</a>
					</div>
				</div>
			</div>
			
			<div class="column benefits wow zoomIn col-md-3" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: zoomIn;">
				<div class="container" style="width:100%">
					<h3 style="text-decoration: none;">Benefits</h3>	
					
					<div class="hover">
						<h3 style="text-decoration: none;">Benefits</h3>
						
						<a href="/careers/benefits/" class="full_coverage_link">&nbsp;</a>
					</div>
				</div>
			</div>
			
			<div class="column consultant_support_team wow zoomIn col-md-3" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: zoomIn;">
				<div class="container" style="width:100%">
					<h3 style="text-decoration: none;">Career Support</h3>
					
					<div class="hover">
						<h3 style="text-decoration: none;">Career Support</h3>
						
						<a href="/careers/career-support/" class="full_coverage_link">&nbsp;</a>
					</div>
				</div>
			</div>
			
			<div class="column community_engagement wow zoomIn col-md-3" data-wow-delay="600ms" style="visibility: visible; animation-delay: 600ms; animation-name: zoomIn;">
				<div class="container" style="width:100%">
					<h3 style="text-decoration: none;">Community Engagement</h3>
					
					<div class="hover">
						<h3 style="text-decoration: none;">Community Engagement</h3>
						
						<a href="/community-engagement/" class="full_coverage_link">&nbsp;</a>
					</div>
				</div>
			</div>
			
			<div class="cleared"></div>
		</div>
		<div class="col-md-2"></div>
	</div>

               
			</div>
		</div>
</section>
<div ng-include="'js/footer/footer.tpl'"></div>