<header id="header" class="alt" ng-controller="HeaderCtrl">
	<h1><a href="https://www.luxbill.com"><img style="width:120px;" src="assets/images/logo.png"></a></h1>
	<nav id="nav">
		<ul>
			<li>
				<a ui-sref="about" >About us</a>
				<ul>

					<li><a ui-sref="mission">Mission</a></li>
					<li><a ui-sref="team">Team</a></li>
					<li><a ui-sref="social">Social Initiatives</a></li>

				</ul>
			</li>
			<!-- <ul> -->
			<li><a ui-sref="training">Training</a>
				<ul>

					<li ng-repeat="course in training"><a href="training-details/{{course.id}}">{{course.course_name}}</a></li>
					

				</ul>
			</li>
			<!-- <div class="dropdown"> -->
			<li><a href="::javascript(void);">Services</a>
				<ul>
					<!--					<li><a ui-sref="personal">Personal Assistant Support</a></li>-->
					<li><a ui-sref="administrative">IT strategy Consulting</a></li>
<!--
					<li><a ui-sref="event">Event Planning (Professional & Personal)</a></li>
					<li><a ui-sref="research">Research</a></li>
					<li><a ui-sref="mailing">Mailings</a></li>
				-->
				<li><a ui-sref="database">Database Management</a></li>
				<li><a ui-sref="project">Project Management</a></li>
				<li><a ui-sref="calendar">Outsourcing Services</a></li>
				<li><a ui-sref="booking">IT Staffing</a></li>
				<li><a ui-sref="website">Bill Management Service</a></li>
				<li ng-if="LoggedIn && typeTrainee"><a href="">Videos</a></li>
				<li ng-if="LoggedIn && typePartner"><a href="">Consultant</a></li>
			</ul>
		</li>
		<li><a ui-sref="client">Client</a></li>
		<li><a ui-sref="career">Careers</a>

		</li>
		<li ><a ui-sref="contact" class="button pull-right">Contact us</a></li>
		
		<li><a ui-sref="login" ng-if="!LoggedIn" ui-sref="login" class="button pull-right dropdown-toggle">Login</a></li>
		<li ng-if="LoggedIn">
			<a href="" class="button dropdown-toggle pull-right" data-toggle="dropdown">My Account</a>
			<ul class="dropdown-menu">
					<li ui-sref="profile"><a href="">Profile</a></li>
					<!-- <li ng-if="typePartner"><a href="">Consultant</a></li> -->
					<li><a href="" ng-click="logout()">Logout</a></li>
				</ul>
			</li> 
		</ul>



	</nav>
</header>