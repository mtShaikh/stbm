<br>
<div class="panel panel-default">
	<div class="panel-heading">Academic References</div>
	<div class="panel-body" id="data">	
		<table class="table table-striped table-bordered">
			<tr>
				<th>Person Name</th>
				<th>Reference Name</th>
				<th>PhoneNo</th>
				<th>Email</th>
				<th>Institution</th>
			</tr>
			<?php foreach($academicreference as $A){ ?>
			<tr>
				<td><?php echo $A['PersonName']; ?></td>
				<td><?php echo $A['ReferenceName']; ?></td>
				<td><?php echo $A['phoneno']; ?></td>
				<td><?php echo $A['email']; ?></td>
				<td><?php echo $A['Institution']; ?></td>
			</tr>
			<?php } ?>
		</table>
	</div>
</div>