<div id="page-wrapper">
  <div class="container-fluid">
    <!-- Page Heading --->
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header dashboard-padding"><small>Update Job</small></h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6"></div>
      <div class="col-md-6" id="msg">
        <?php  if(isset($alert_message) && $alert_message!='')
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
									  
?>
      </div>
    </div>
    <?php echo validation_errors(); ?>
    <div class="row">
      <!--Inventory-->
      <?php echo form_open(); ?>
      <div class="col-md-12">
        <div class="row row-bottom-bordr"></div>
        <div class="row">
          <div class="col-md-9">
            <div class="form-group">
              <label class="lable-padd">Full Title </label>
              <input type="text" name="title" class="form-control" placeholder="Enter Job Title*" value="<?php echo $job['title']  ?>" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-9">
            <div class="form-group">
              <label class="lable-padd">Description</label>
             <?php $content=html_entity_decode($job['description'],ENT_QUOTES); echo $this->ckeditor->editor('content',$content);?>
            </div>
          </div>
         
        </div>
        
      
      <!--Tower-->
      <!--Blank height-->
      <div class="col-md-12" style="height:250px;">
        <div class="form-group">
          <button type="submit" class="btn btn-primary" style="margin-top:40px;" name="submit" value="submit">Submit</button>
        </div>
      </div>
    </div>
    </form>
  </div>
  <!-- /.container-fluid-->
</div>
<!-- /#page-wrapper -->
</div>
