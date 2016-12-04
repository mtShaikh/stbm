<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/datepicker3.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">
	<!--Icons-->
	<script src="<?php echo base_url(); ?>assets/js/lumino.glyphs.js"></script>
	<!--web-fonts-->'
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	<!--js-->
</head>

<body>
	<?php include("nav.php"); ?>
	<div id="sidebar-collapse" class="col-sm-3 col-md-2 sidebar">
		<br>
		<?php include("usidebar.php"); ?>
	</div> 
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<?php echo form_open('expensesinfo/edit/'.$mail,array("class"=>"form-horizontal")); ?>
		<div class="row"><h2 class="text-center">Family Expenditures</h2></div>
		<div class="row"><h4 class="text-center">please mention monthly average amount</h4></div>
		<br>
		<div class="row">
			<div class="form-horizontal">
				<div class="form-group">
					<label for="expensesinfo1" class="col-md-4 control-label">Electricity Bill</label>
					<div class="col-md-4">
						<input type="text" name="expensesinfo1" value="<?php 
						echo $this->input->post('expensesinfo1') ? $this->input->post('expensesinfo1') :$expensesinfo1['amount']; ?>" class="form-control" id="expensesinfo1" />
					</div>
				</div>	
				<div class="form-group">
					<label for="expensesinfo2" class="col-md-4 control-label">Medical</label>
					<div class="col-md-4">
						<input type="text" name="expensesinfo2" value="<?php 
						echo $this->input->post('expensesinfo2') ? $this->input->post('expensesinfo2') :$expensesinfo2['amount']; ?>" class="form-control" id="expensesinfo2" />
					</div>
				</div>
				<div class="form-group">
					<label for="expensesinfo3" class="col-md-4 control-label">Groceries</label>
					<div class="col-md-4">
						<input type="text" name="expensesinfo3" value="<?php echo ($this->input->post('expensesinfo3') ? $this->input->post('expensesinfo3') : $expensesinfo3['amount']); ?>" class="form-control" id="expensesinfo3" />
					</div>
				</div>
				<div class="form-group">
					<label for="expensesinfo4" class="col-md-4 control-label">Gas Bill</label>
					<div class="col-md-4">
						<input type="text" name="expensesinfo4" value="<?php 
						echo $this->input->post('expensesinfo4') ? $this->input->post('expensesinfo4') :$expensesinfo4['amount']; ?>" class="form-control" id="expensesinfo4" />
					</div>
				</div>
				<div class="form-group">
					<label for="expensesinfo5" class="col-md-4 control-label">Telephone Bill</label>
					<div class="col-md-4">
						<input type="text" name="expensesinfo5" value="<?php 
						echo $this->input->post('expensesinfo5') ? $this->input->post('expensesinfo5') :$expensesinfo5['amount']; ?>" class="form-control" id="expensesinfo5" />
					</div>
				</div>
				<div class="form-group">
					<label for="expensesinfo6" class="col-md-4 control-label">Education</label>
					<div class="col-md-4">
						<input type="text" name="expensesinfo6" value="<?php 
						echo $this->input->post('expensesinfo6') ? $this->input->post('expensesinfo6') :$expensesinfo6['amount']; ?>" class="form-control" id="expensesinfo6" />
					</div>
				</div>
				<div class="form-group">
					<label for="expensesinfo7" class="col-md-4 control-label">Rent</label>
					<div class="col-md-4">
						<input type="text" name="expensesinfo7" value="<?php 
						echo $this->input->post('expensesinfo7') ? $this->input->post('expensesinfo7') :$expensesinfo7['amount']; ?>" class="form-control" id="expensesinfo7" />
					</div>
				</div>
				<div class="form-group">
					<label for="expensesinfo8" class="col-md-4 control-label">Miscellaneous Expense</label>
					<div class="col-md-4">
						<input type="text" name="expensesinfo8" value="<?php 
						echo $this->input->post('expensesinfo8') ? $this->input->post('expensesinfo8') :$expensesinfo8['amount']; ?>" class="form-control" id="expensesinfo8" />
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-4"></div>
						<div class="col-md-3">
							<button type="submit" name="sbm" value="back" class="btn btn-success btn-lg">Back</button>	
						</div>
						<div class="col-md-3">
							<button type="submit" name="sbm" value="next" class="btn btn-success btn-lg">Next</button>		
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php echo form_close(); ?>
	</div>
	<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
</body>
</html>
