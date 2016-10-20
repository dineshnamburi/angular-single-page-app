<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header dashboard-padding"><small>Add New Training</small></h1>
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
          <label class="lable-padd">Course name</label>
          <input type="text" name="courseName" class="form-control" placeholder="" required>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-9">
        <div class="form-group">
          <label class="lable-padd">Description</label>
          <textarea row="3" name="description" class="form-control" placeholder=""></textarea>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-9">
        <div class="form-group">
          <label class="lable-padd">Duration</label>
          <input type="number" class="form-control" name="duration" min="0" required>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-9">
        <div class="form-group">
          <label class="lable-padd">Price</label>
          <input type="text" class="form-control" name="price"  required>
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
