
<?php echo form_open('expensesinfo/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="ExpenseType_ID" class="col-md-4 control-label">ExpenseType ID</label>
		<div class="col-md-8">
			<input type="text" name="ExpenseType_ID" value="<?php echo $this->input->post('ExpenseType_ID'); ?>" class="form-control" id="ExpenseType_ID" />
		</div>
	</div>
	<div class="form-group">
		<label for="Amount" class="col-md-4 control-label">Amount</label>
		<div class="col-md-8">
			<input type="text" name="Amount" value="<?php echo $this->input->post('Amount'); ?>" class="form-control" id="Amount" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>