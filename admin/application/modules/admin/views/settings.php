
  <div id="page-wrapper">
    <div class="container-fluid">
      <!-- Page Heading -->
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"> Update your Business Details </h3>
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
    
        <div class="col-lg-8 col-md-6 quick-task">
             <?php echo form_open_multipart(); 
?>
            <div class="checkbox tax">
    <label>
      <input type="checkbox" onclick="enable_tax('tax-group');" name="tax" value="1" />Enable Taxes</label>
      <div class="form-group" id="tax-group">
      <div class="radio">
  <label>
    <input type="radio" name="tax" id="optionsRadios1" value="1" checked="checked" disabled="disabled" >
    Always apply taxes to the statement sub total
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="tax" id="optionsRadios2" value="2" disabled="disabled" >
     Apply taxes to line items
  </label>
</div>
<div id="tax-fields"></div>
<div class="clearfix"></div>
 <a href="#" onclick="addInputTax();" class="disabled" id="add-tax"><span class="glyphicon glyphicon-plus-sign"></span></a>
    
  </div>
 
  </div>
  <div class="clearfix"></div>
  <div class="checkbox tax">
    <label>
      <input type="checkbox" onclick="enable_discount('discount-group');" name="tax" value="1" />Enable Discount</label>
      <div class="form-group" id="discount-group">
      <div class="radio">
  <label>
    <input type="radio" name="discount" id="optionsRadios1" value="1" checked="checked" disabled="disabled" >
    Always apply taxes to the statement sub total
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="discount" id="optionsRadios2" value="2" disabled="disabled" >
     Apply taxes to line items
  </label>
</div>
<div id="discount-fields"></div>
<div class="clearfix"></div>
 <a href="#" onclick="addInputDiscount();" class="disabled" id="add-discount"><span class="glyphicon glyphicon-plus-sign"></span></a>
    
  </div>
 
  </div>
  <div class="clearfix"></div>
  <div class="checkbox shipping">
    <label>
      <input type="checkbox" onclick="enable_shipping('shipping-group');" name="tax" value="1" />Enable Shipping</label>
      <div class="form-group" id="shipping-group">
      <div class="radio">
  <label>
    <input type="radio" name="shiping" id="optionsRadios1" value="1" checked="checked" disabled="disabled" >
    Always apply taxes to the statement sub total
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="shiping" id="optionsRadios2" value="2" disabled="disabled" >
     Apply taxes to line items
  </label>
</div>
<div id="shipping-fields"></div>
<div class="clearfix"></div>
 <a href="#" onclick="addInputShipping();" class="disabled" id="add-shipping"><span class="glyphicon glyphicon-plus-sign"></span></a>
    
  </div>
 
  </div>
  <div class="clearfix"></div>
  <button type="submit" class="btn btn-default right">Submit</button>
</form>
         
       </div>
        <div class="col-lg-4 col-md-6 snapshot-box">
        
         
          
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /#page-wrapper -->
</div>