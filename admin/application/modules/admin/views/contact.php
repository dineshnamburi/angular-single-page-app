
  <div id="page-wrapper">
    <div class="container-fluid">
      <!-- Page Heading -->
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"> Update your Contact Details </h3>
         <?php  if(isset($alert_message) && $alert_message!='')
                                        {
                                            ?>
                                            <div class="alert alert-danger" role="alert"><?php echo $alert_message; ?></div>
                                            <?php 
											}
         else if(isset($alert_message_success) && $alert_message_success!='')
		 {
		 ?>
         <div class="alert alert-success" role="alert"><?php echo $alert_message_success; ?></div>
          <?php } ?>
        </div>
      </div>
      <!-- /.row -->
      <div class="row right-wrapper">
        <div class="col-lg-5 col-md-6 quick-task">
             <?php echo form_open_multipart(); 
?>
                <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" class="form-control" name="address"  value="<?php echo $contact_info['address']; ?>"  required>
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Mobile no.</label>
    <input type="text" class="form-control" name="phone" value="<?php echo $contact_info['phone']; ?>" required>
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Landline no</label>
    <input type="text" class="form-control"  name="landline" value="<?php echo $contact_info['landline']; ?>"  required>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control" name="email"  value="<?php echo $contact_info['email']; ?>" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Website</label>
    <input type="text"  class="form-control" name="website"  value="<?php echo $contact_info['website']; ?>" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Fax</label>
    <input type="text"  class="form-control" name="fax" id="exampleInputPassword1" value="<?php echo $contact_info['fax']; ?>">
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