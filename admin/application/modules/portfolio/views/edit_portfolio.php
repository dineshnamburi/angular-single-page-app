<div id="page-wrapper">
  <div class="container-fluid">
    <!-- Page Heading --->
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header dashboard-padding"><small>Edit Portfolio</small></h1>
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
      <?php echo form_open_multipart(); ?>
      <div class="col-md-12">
        <div class="row row-bottom-bordr"></div>
        <div class="row">
          <div class="col-md-9">
            <div class="form-group">
              <label class="lable-padd">Category</label>
              <select name="category" class="form-control"  required>
              <option value="">Select Category</option>
              <?php foreach($category as $category)
			  {
			  
			  ?>
              <option value="<?php echo $category['id']; ?>" <?php if($category['id']==$portfolio['cat']){ ?> selected="selected" <?php  } ?>><?php echo $category['name']; ?> </option>
              <?php 
			  } ?>
              
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-9">
            <div class="form-group">
              <label class="lable-padd">Name</label>
              <input type="text" name="name" class="form-control" placeholder="" value="<?php echo $portfolio['name']; ?>" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-9">
            <div class="form-group">
              <label class="lable-padd">Link</label>
              <input type="text" name="link" class="form-control" placeholder="" value="<?php echo $portfolio['link']; ?>" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-9">
            <div class="form-group">
              <label class="lable-padd">Thumb</label>
              <input type="file" name="thumb"><img src="<?php echo base_url(); ?>../images/portfolio/<?php echo $portfolio['thumb'] ?>" width="200" />
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-9">
            <div class="form-group">
              <label class="lable-padd">Image</label>
              <input type="file" name="image">
              <img src="<?php echo base_url(); ?>../images/portfolio/<?php echo $portfolio['image'] ?>" width="200" />
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
