<?php echo validation_errors(); ?>
<?php echo form_open('persondetail/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="FName" class="col-md-4 control-label">FName</label>
		<div class="col-md-8">
			<input type="text" name="FName" value="<?php echo $this->input->post('FName'); ?>" class="form-control" id="FName" />
		</div>
	</div>
	<div class="form-group">
		<label for="LName" class="col-md-4 control-label">LName</label>
		<div class="col-md-8">
			<input type="text" name="LName" value="<?php echo $this->input->post('LName'); ?>" class="form-control" id="LName" />
		</div>
	</div>
	<div class="form-group">
		<label for="DateOfBirth" class="col-md-4 control-label">DateOfBirth</label>
		<div class="col-md-8">
			<input type="text" name="DateOfBirth" value="<?php echo $this->input->post('DateOfBirth'); ?>" class="form-control" id="DateOfBirth" />
		</div>
	</div>
	<div class="form-group">
		<label for="Email" class="col-md-4 control-label">Email</label>
		<div class="col-md-8">
			<input type="text" name="Email" value="<?php echo $this->input->post('Email'); ?>" class="form-control" id="Email" />
		</div>
	</div>
	<div class="form-group">
		<label for="CNIC" class="col-md-4 control-label">CNIC</label>
		<div class="col-md-8">
			<input type="text" name="CNIC" value="<?php echo $this->input->post('CNIC'); ?>" class="form-control" id="CNIC" />
		</div>
	</div>
	<div class="form-group">
		<label for="Phone" class="col-md-4 control-label">Phone</label>
		<div class="col-md-8">
			<input type="text" name="Phone" value="<?php echo $this->input->post('Phone'); ?>" class="form-control" id="Phone" />
		</div>
	</div>
	<div class="form-group">
		<label for="Address" class="col-md-4 control-label">Address</label>
		<div class="col-md-8">
			<input type="text" name="Address" value="<?php echo $this->input->post('Address'); ?>" class="form-control" id="Address" />
		</div>
	</div>
	<div class="form-group">
		<label for="City" class="col-md-4 control-label">City</label>
		<div class="col-md-8">
			<input type="text" name="City" value="<?php echo $this->input->post('City'); ?>" class="form-control" id="City" />
		</div>
	</div>
	<div class="form-group">
		<label for="District" class="col-md-4 control-label">District</label>
		<div class="col-md-8">
			<input type="text" name="District" value="<?php echo $this->input->post('District'); ?>" class="form-control" id="District" />
		</div>
	</div>
	<div class="form-group">
			<label for="FamilyDetails_ID" class="col-md-4 control-label">FamilyDetails ID</label>
			<div class="col-md-8">
				<select name="FamilyDetails_ID" class="form-control">
					<option value="">select familydetail</option>
					<?php 
					foreach($all_familydetails as $familydetail)
					{
						$selected = ($familydetail['ID'] == $this->input->post('FamilyDetails_ID')) ? ' selected="selected"' : null;

						echo '<option value="'.$familydetail['ID'].'" '.$selected.'>'.$familydetail['ID'].'</option>';
					} 
					?>
				</select>
			</div>
		</div>
	<div class="form-group">
			<label for="Status" class="col-md-4 control-label">Status</label>
			<div class="col-md-8">
				<select name="Status" class="form-control">
					<option value="">select</option>
					<?php 
					$Status_values = array(
					);

					foreach($Status_values as $value => $display_text)
					{
						$selected = ($value == $this->input->post('Status')) ? ' selected="selected"' : null;

						echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
					} 
					?>
				</select>
			</div>
		</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>