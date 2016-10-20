<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading --->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header dashboard-padding"><small>Admin Settings</small></h1>
                        
                    </div>
                </div>
                <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6" id="msg"><?php  if(isset($alert_message) && $alert_message!='')
                                        {
                                            ?>
    <div class="alert alert-danger"><?php echo $alert_message; ?></div>
    <?php
                                      }
									  else if(isset($alert_message_success) && $alert_message_success!='')
									  {
									  ?>
									  <div class="alert alert-success"><?php echo $alert_message_success; ?></div>
									 <?php 
									  }
									  else
									  {
									  
									  }
									  
?>  </div>
                </div>
 
    
      <?php echo validation_errors(); ?>
                <div class="row">
                <!--Inventory-->
                <?php echo form_open_multipart(); ?>
                     <div class="col-md-12">
                <div class="row row-bottom-bordr"></div>
                    <div class="row">                    
                    <div class="col-md-6">
                <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" name="username" id="exampleInputEmail1" value="<?php echo $admin['username']; ?>"  required>
  </div>
   
  
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
  </div>
<div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" name="cpassword" class="form-control" id="exampleInputPassword1" required>
  </div>            
  <button type="submit" class="btn btn-default">Submit</button>
</form>
         
       </div>
        <div class="col-lg-7 col-md-6 snapshot-box">
        
         
          
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /#page-wrapper -->
</div>