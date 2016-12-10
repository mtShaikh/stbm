<br>
<div class="panel panel-default">
	<div class="panel-heading">Family Expenses of Applicants</div>
	<div class="panel-body" id="data">	
		<table class="table table-striped table-bordered">
			<tr>
				<th>Name</th>
				<th>Amount</th>
				<th>Type</th>
			</tr>
			<?php foreach($expensesinfo as $E){ ?>
			<tr>
				<td><?php echo $E['PersonName']; ?></td>
				<td><?php echo $E['Amount']; ?></td>
				<td><?php echo $E['Name']; ?></td>
			</tr>
			<?php } ?>
		</table>
	</div>
</div>