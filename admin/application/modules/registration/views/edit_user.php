<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header dashboard-padding"><small>Registered User</small> </h1>
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
			<?php echo form_open_multipart(); ?>
			<div class="col-md-12">
				<div class="row row-bottom-bordr"></div>
				<div class="row">
					<div class="col-md-9">
						<div class="form-group">
							<label class="lable-padd">Title</label>
							<select name="title" class="form-control">
								<option value="Mr." <?php echo $users['title'] == 'Mr.'?'selected':''?>>Mr. </option>
								<option value="Mrs." <?php echo $users['title'] == 'Mrs.'?'selected':''?>>Mrs. </option>
								<option value="Dr." <?php echo $users['title'] == 'Dr.'?'selected':''?>>Dr. </option>
								<option value="Miss." <?php echo $users['title'] == 'Miss.'?'selected':''?>>Miss. </option>

							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-9">
						<div class="form-group">
							<label class="lable-padd">Name</label>
							<input type="text" name="name" class="form-control" placeholder="" value="<?php echo $users['name']  ?>" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-9">
						<div class="form-group">
							<label class="lable-padd">Email </label>
							<input type="email" name="email" class="form-control" placeholder="" value="<?php echo $users['email']  ?>" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-9">
						<div class="form-group">
							<label class="lable-padd">Phone</label>
							<input type="text" name="phone" class="form-control" placeholder="" value="<?php echo $users['phone']  ?>" >
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-9">
						<div class="form-group">
							<label class="lable-padd">Password</label>
							<input type="password" name="password" class="form-control" placeholder="" value="">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-9">
						<div class="form-group">
							<label class="lable-padd">Position</label>
							<input type="text" name="position" class="form-control" placeholder="" value="<?php echo $users['position']  ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-9">
						<div class="form-group">
							<label class="lable-padd">Company</label>
							<input type="text" name="company" class="form-control" placeholder="" value="<?php echo $users['company']  ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-9">
						<div class="form-group">
							<label class="lable-padd">Address</label>
							<input type="text" name="address" class="form-control" placeholder="" value="<?php echo $users['address']  ?>">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-9">
						<div class="form-group">
							<label class="lable-padd">City</label>
							<input type="text" name="city" class="form-control" placeholder="" value="<?php echo $users['city']  ?>">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-9">
						<div class="form-group">
							<label class="lable-padd">State</label>
							<input type="text" name="state" class="form-control" placeholder="" value="<?php echo $users['state']  ?>">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-9">
						<div class="form-group">
							<label class="lable-padd">Country</label>
							<input type="text" name="country" class="form-control" placeholder="" value="<?php echo $users['country']  ?>">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-9">
						<div class="form-group">
							<label class="lable-padd">Postal Code</label>
							<input type="text" name="postal_code" class="form-control" placeholder="" value="<?php echo $users['postal_code']  ?>">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-9">
						<div class="form-group">
							<label class="lable-padd">Verified</label>
							<select name="verified" class="form-control">
								<option value="0" <?php echo $users['verified'] == '0'?'selected':''?>>Unverified </option>
								<option value="1" <?php echo $users['verified'] == '1'?'selected':''?>>Verified </option>
							</select>
						</div>
					</div>
				</div>

				<!-- <input type="hidden" name="id" class="form-control" placeholder="" value="<?php echo $users['id']  ?>"> -->

				<!-- <div class="row">
					<div class="col-md-9">
						<div class="form-group">
							<label class="lable-padd">Status</label>
							<select name="status" class="form-control">
								<option value="0" <?php echo $users['status'] == '0'?'selected':''?>>Inactive </option>
								<option value="1" <?php echo $users['status'] == '1'?'selected':''?>>Active </option>

							</select>
						</div>
					</div>
				</div> -->

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
<!-- /#user-wrapper -->
</div>
