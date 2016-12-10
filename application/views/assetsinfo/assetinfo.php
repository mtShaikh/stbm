	<br>
	<div class="panel panel-default">
		<div class="panel-heading">Family Assets of Applicants</div>
		<div class="panel-body" id="data">					
			<table class="table table-striped table-bordered">
				<tr>Name</tr>
				<tr>Type</tr>
				<tr>Amount</tr>
				<tr>
					<?php foreach($assetsinfo as $A){ ?>
					<td><?php echo $A['PersonName']; ?></td>
					<td><?php echo $A['Name']; ?></td>
					<td><?php echo $A['Amount']; ?></td>
				</tr>
				<?php }?>
			</table>
	</div>
</div>
