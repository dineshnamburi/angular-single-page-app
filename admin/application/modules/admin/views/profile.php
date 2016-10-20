
  <div id="page-wrapper">
    <div class="container-fluid">
      <!-- Page Heading -->
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"> Update your user profile </h3>
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
    <label for="exampleInputEmail1">Owner Name</label>
    <input type="text" class="form-control" name="owner_name" id="exampleInputEmail1" value="<?php echo $user['owner_name']; ?>"  required>
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Owner Email</label>
    <input type="email" class="form-control" name="owner_email" id="exampleInputEmail1" value="<?php echo $user['owner_email']; ?>" required>
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Organisation Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="org_name" value="<?php echo $user['org_name']; ?>"  required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Organisation Type</label>
  <select name="org_type"  class="form-control">
  <?php foreach($org_type as $org_type)
  {
   ?>
  <option value="<?php echo $org_type['id']; ?>" <?php if($user['org_type']==$org_type['id']) { ?> selected="selected" <?php }?>><?php echo ucfirst($org_type['type']); ?></option>
  <?php 
  }
  ?>
  </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
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