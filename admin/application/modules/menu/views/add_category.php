<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header dashboard-padding"><small>Add New Menu Categories</small></h1>
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
    <?php echo form_open('menu/category/create'); ?>
    <div class="col-md-12">
      <div class="row row-bottom-bordr"></div>
      <div class="row">
        <div class="col-md-9">
          <div class="form-group">
            <label class="lable-padd">Parent </label>
            <select name="p_id" class="form-control" required>
              <option value="" disabled selected>Select</option>
              <option value="1">Indian</option>
              <option value="2">Thai</option>
            </select>
          </div>
        </div>
      </div>

    <div class="row">
      <div class="col-md-9">
        <div class="form-group">
          <label class="lable-padd">Child Name </label>
          <input type="text" name="title" class="form-control" placeholder="Enter Category Name" required>
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

