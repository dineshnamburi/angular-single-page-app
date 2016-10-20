<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading --->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header dashboard-padding"><small>Website Settings</small></h1>
                        
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
                    <div class="col-md-3">
	                    <div class="form-group">
                            <label class="lable-padd">Email</label>
                            
                            <input type="text" name="email" value="<?php  echo $settings['email']; ?>" class="form-control" required />
      
                        </div>
                    </div>
                    <div class="col-md-3">
	                    <div class="form-group">
                            <label class="lable-padd">Phone</label>
                            <input type="text" name="phone" value="<?php  echo $settings['phone']; ?>" class="form-control"  />
                        </div>
                    </div>
                    <div class="col-md-3">
	                    <div class="form-group">
                            <label class="lable-padd">Facebook Link</label>
                            <input type="text" name="fblink" value="<?php  echo $settings['fb'];?>" class="form-control"  />
                        </div>
                    </div>
                    </div>
                    <div class="row">                    
                    <div class="col-md-3">
	                    <div class="form-group">
                            <label class="lable-padd">Twitter Link</label>
                            <input type="text" name="twlink" value="<?php echo $settings['twitter']; ?>"  class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-3">
	                    <div class="form-group">
                            <label class="lable-padd">Instagram Link</label>
                            <input type="text" name="lnkedlink" value="<?php echo $settings['linkedin']; ?>" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-3">
	                    <div class="form-group">
                            <label class="lable-padd">Logo</label>
                            <input type="file" name="logo" value=""  /><img src="<?php echo base_url() ?>../assets/images/<?php echo $settings['logo']  ?>" width="50" />
                        </div>
                    </div>
                    </div>
                    <div class="row">                    
                    <div class="col-md-3">
	                    <div class="form-group">
                            <label class="lable-padd">Address</label>
                            <textarea class="form-control" name="address"><?php echo $settings['address']; ?></textarea>
                           
                        </div>
                    </div>
                    <div class="col-md-3">
	                     <div class="form-group">
                            <label class="lable-padd">Address 2</label>
                            <textarea class="form-control" name="address2"><?php echo $settings['address2']; ?></textarea>
                           
                        </div>
                    </div>
                    <div class="col-md-3">
	                    <div class="form-group">
                            <label class="lable-padd">Home Page Video</label>
                            <input type="text" class="form-control" name="video_url" value="<?php echo $settings['video_url']; ?>" />
                           
                        </div>
                    </div>
                    </div>
                <!--Tower-->
                
               <!--Blank height-->
                <div class="col-md-12" style="height:250px;">
                <div class="form-group">                  
                                <button type="submit" class="btn btn-primary" style="margin-top:40px;" name="submit" value="submit">Save</button>           
                        </div>
                </div>
                </div> 
       </form>
       

            </div>
            <!-- /.container-fluid-->

        </div>
        <!-- /#page-wrapper -->

    </div>