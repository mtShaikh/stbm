<?php echo validation_errors(); ?>
<?php echo form_open('familydetail/edit/'.$familydetail['ID'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="Income" class="col-md-4 control-label">Income</label>
		<div class="col-md-8">
			<input type="text" name="Income" value="<?php echo ($this->input->post('Income') ? $this->input->post('Income') : $familydetail['Income']); ?>" class="form-control" id="Income" />
		</div>
	</div>
	<div class="form-group">
		<label for="NoOfSiblings" class="col-md-4 control-label">NoOfSiblings</label>
		<div class="col-md-8">
			<input type="text" name="NoOfSiblings" value="<?php echo ($this->input->post('NoOfSiblings') ? $this->input->post('NoOfSiblings') : $familydetail['NoOfSiblings']); ?>" class="form-control" id="NoOfSiblings" />
		</div>
	</div>
	<div class="form-group">
		<label for="FName" class="col-md-4 control-label">FName</label>
		<div class="col-md-8">
			<input type="text" name="FName" value="<?php echo ($this->input->post('FName') ? $this->input->post('FName') : $familydetail['FName']); ?>" class="form-control" id="FName" />
		</div>
	</div>
	<div class="form-group">
		<label for="LName" class="col-md-4 control-label">LName</label>
		<div class="col-md-8">
			<input type="text" name="LName" value="<?php echo ($this->input->post('LName') ? $this->input->post('LName') : $familydetail['LName']); ?>" class="form-control" id="LName" />
		</div>
	</div>
	<div class="form-group">
		<label for="PhoneNo" class="col-md-4 control-label">PhoneNo</label>
		<div class="col-md-8">
			<input type="text" name="PhoneNo" value="<?php echo ($this->input->post('PhoneNo') ? $this->input->post('PhoneNo') : $familydetail['PhoneNo']); ?>" class="form-control" id="PhoneNo" />
		</div>
	</div>
	<div class="form-group">
		<label for="Address" class="col-md-4 control-label">Address</label>
		<div class="col-md-8">
			<textarea name="Address"><?php echo ($this->input->post('Address') ? $this->input->post('Address') : $familydetail['Address']); ?></textarea>
		</div>
	</div>
	<div class="form-group">
		<label for="CNIC" class="col-md-4 control-label">CNIC</label>
		<div class="col-md-8">
			<input type="text" name="CNIC" value="<?php echo ($this->input->post('CNIC') ? $this->input->post('CNIC') : $familydetail['CNIC']); ?>" class="form-control" id="CNIC" />
		</div>
	</div>
	<div class="form-group">
		<label for="Designation" class="col-md-4 control-label">Designation</label>
		<div class="col-md-8">
			<input type="text" name="Designation" value="<?php echo ($this->input->post('Designation') ? $this->input->post('Designation') : $familydetail['Designation']); ?>" class="form-control" id="Designation" />
		</div>
	</div>
	<div class="form-group">
		<label for="Company" class="col-md-4 control-label">Company</label>
		<div class="col-md-8">
			<input type="text" name="Company" value="<?php echo ($this->input->post('Company') ? $this->input->post('Company') : $familydetail['Company']); ?>" class="form-control" id="Company" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>