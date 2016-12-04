<?php echo validation_errors(); ?>
<?php echo form_open('academicreference/edit/'.$academicreference['ID'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="Name" class="col-md-4 control-label">Name</label>
		<div class="col-md-8">
			<input type="text" name="Name" value="<?php echo ($this->input->post('Name') ? $this->input->post('Name') : $academicreference['Name']); ?>" class="form-control" id="Name" />
		</div>
	</div>
	<div class="form-group">
		<label for="PhoneNo" class="col-md-4 control-label">PhoneNo</label>
		<div class="col-md-8">
			<input type="text" name="PhoneNo" value="<?php echo ($this->input->post('PhoneNo') ? $this->input->post('PhoneNo') : $academicreference['PhoneNo']); ?>" class="form-control" id="PhoneNo" />
		</div>
	</div>
	<div class="form-group">
		<label for="Email" class="col-md-4 control-label">Email</label>
		<div class="col-md-8">
			<input type="text" name="Email" value="<?php echo ($this->input->post('Email') ? $this->input->post('Email') : $academicreference['Email']); ?>" class="form-control" id="Email" />
		</div>
	</div>
	<div class="form-group">
		<label for="Institution" class="col-md-4 control-label">Institution</label>
		<div class="col-md-8">
			<input type="text" name="Institution" value="<?php echo ($this->input->post('Institution') ? $this->input->post('Institution') : $academicreference['Institution']); ?>" class="form-control" id="Institution" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>