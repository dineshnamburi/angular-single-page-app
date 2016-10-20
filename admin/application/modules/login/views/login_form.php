
<body class="login">
<div class="container">
  <div class="row">
    <div class="col-md-6 form-bg col-md-offset-3">
    
<!--***Left Section***-->

      <div class="col-md-5 input-padding text-center">
        <form class="form-horizontal input-box" action="<?php echo base_url(); ?>index.php/login/validate_credentials" method="post">
          <div class="form-group has-success has-feedback">
            <div class="input-group input-padding"> <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                <input type="text" name="username" placeholder="Username"    class="form-control" id="inputGroupSuccess4" aria-describedby="inputGroupSuccess4Status" required="required">
            </div>
            <div class="input-group input-padding"> <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                <input type="password" name="password" place class="form-control" placeholder="password" id="inputGroupSuccess4" aria-describedby="inputGroupSuccess4Status" required="required">
            </div>
              <button type="submit" class="btn btn-primary btn-sm button-color button-margintop">Log in to Control Panel</button>
            <div class="clearfix"></div>
            <div class="checkbox pull-left">
<!--              <label><input type="checkbox">Remember Username</label>
-->            </div>            
          </div><br />
        </form>
      </div>
      
<!--***right Section***-->      

      <div class="col-md-7 img-margintop">
     		 <img src="<?php echo base_url(); ?>images/001.jpg" width="308" height="250"/>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<!--======================JS==================-->
<!--bootstrap JS-->
<script src="<?php echo base_url(); ?>js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>

<!--===================End of JS===============-->
</body>
</html>
     
     
     
    