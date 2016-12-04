<?php echo validation_errors(); ?>
<?php echo form_open('academicreference/add',array("class"=>"form-horizontal")); ?>

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
		<label for="Institution" class="col-md-4 control-label">Institution</label>
		<div class="col-md-8">
			<input type="text" name="Institution" value="<?php echo $this->input->post('Institution'); ?>" class="form-control" id="Institution" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>