<?php echo validation_errors(); ?>
<?php echo form_open('personalreference/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="Name" class="col-md-4 control-label">Name</label>
		<div class="col-md-8">
			<input type="text" name="Name" value="<?php echo $this->input->post('Name'); ?>" class="form-control" id="Name" />
		</div>
	</div>
	<div class="form-group">
		<label for="PhoneNo" class="col-md-4 control-label">PhoneNo</label>
		<div class="col-md-8">
			<input type="text" name="PhoneNo" value="<?php echo $this->input->post('PhoneNo'); ?>" class="form-control" id="PhoneNo" />
		</div>
	</div>
	<div class="form-group">
		<label for="Email" class="col-md-4 control-label">Email</label>
		<div class="col-md-8">
			<input type="text" name="Email" value="<?php echo $this->input->post('Email'); ?>" class="form-control" id="Email" />
		</div>
	</div>
	<div class="form-group">
		<label for="Address" class="col-md-4 control-label">Address</label>
		<div class="col-md-8">
			<textarea name="Address" class="form-control" id="Address"><?php echo $this->input->post('Address'); ?></textarea>
		</div>
	</div>
	<div class="form-group">
		<label for="Relationship" class="col-md-4 control-label">Relationship</label>
		<div class="col-md-8">
			<input type="text" name="Relationship" value="<?php echo $this->input->post('Relationship'); ?>" class="form-control" id="Relationship" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>