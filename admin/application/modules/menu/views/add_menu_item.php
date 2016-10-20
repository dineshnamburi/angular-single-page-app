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
    <?php echo form_open_multipart('menu/menu/create'); ?>
    <div class="col-md-12">
      <div class="row row-bottom-bordr"></div>
      <div class="row">
        <div class="col-md-9">
          <div class="form-group">
            <label class="lable-padd">Parent </label>
            <select name="p_id" class="form-control" id="parent" required>
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
            <label class="lable-padd">Child Category</label>
            <select name="c_id" class="form-control" id="child" required>
              <option value="" disabled selected>Select</option>
              
            </select>
          </div>
        </div>
      </div>

    

         <div class="row">
        <div class="col-md-9">
          <div class="form-group">
            <label class="lable-padd">Sub Child Category</label>
            <select name="s_id" class="form-control" id="subchild" required>
              <option value="" disabled selected>Select</option>
              
            </select>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="form-inline">
         <div class="form-group">
          <label class="lable-padd">Food Type</label><br />
          <label class="lable-padd">
            <input type="radio" class="form-control" name="type" value="1" />Vegetarian
          </label>
          <label class="lable-padd">
            <input type="radio"  class="form-control" name="type" value="2" />Non Vegetarian
          </label>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-9">
        <div class="form-group">
          <label class="lable-padd">Item Name </label>
          <input type="text" name="name" class="form-control" placeholder="Enter Item Name" required>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-9">
        <div class="form-group">
          <label class="lable-padd">Price </label>
          <input type="text" name="price" class="form-control" placeholder="Enter Item Price" required>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-9">
        <div class="form-group">
          <label class="lable-padd">Details </label>
          <textarea rows="5" class="form-control" name="details" required></textarea>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-9">
        <div class="form-group">
          <label class="lable-padd"> Item Image</label>
          <input type="file" name="thumb"  required>
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
