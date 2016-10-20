<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
	<title>Luxbill</title>
	<base href="<?php echo base_url();?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0" />
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>application/views/libs/css/main.css"/>
</head>
<body class="landing">
	<div id="page-wrapper">
		<div ui-view=""></div>
	</div>
	<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.dropotron.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.scrollgress.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/skel.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/util.js"></script>
	<script src="<?php echo base_url();?>assets/js/main.js"></script>
	<script	src="<?php echo base_url();?>application/views/libs/js/angular.min.js" type="text/javascript"></script>
	<script	src="<?php echo base_url();?>application/views/libs/js/angular-ui-router.min.js" type="text/javascript"></script>
	<script	src="<?php echo base_url();?>application/views/js/app.js" type="text/javascript"></script>
	<script	src="<?php echo base_url();?>application/views/js/home/home-ctrl.js" type="text/javascript"></script>
	<script	src="<?php echo base_url();?>application/views/js/home-service.js" type="text/javascript"></script>


</body>

</html>
