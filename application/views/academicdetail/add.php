<?php echo validation_errors(); ?>
<?php echo form_open('academicdetail/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="Percentage" class="col-md-4 control-label">Percentage</label>
		<div class="col-md-8">
			<input type="text" name="Percentage" value="<?php echo $this->input->post('Percentage'); ?>" class="form-control" id="Percentage" />
		</div>
	</div>
	<div class="form-group">
		<label for="FieldOfStudy" class="col-md-4 control-label">FieldOfStudy</label>
		<div class="col-md-8">
			<input type="text" name="FieldOfStudy" value="<?php echo $this->input->post('FieldOfStudy'); ?>" class="form-control" id="FieldOfStudy" />
		</div>
	</div>
	<div class="form-group">
			<label for="Institution_ID" class="col-md-4 control-label">Institution ID</label>
			<div class="col-md-8">
				<select name="Institution_ID" class="form-control">
					<option value="">select institution</option>
					<?php 
					foreach($all_institution as $institution)
					{
						$selected = ($institution['ID'] == $this->input->post('Institution_ID')) ? ' selected="selected"' : null;

						echo '<option value="'.$institution['ID'].'" '.$selected.'>'.$institution['ID'].'</option>';
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