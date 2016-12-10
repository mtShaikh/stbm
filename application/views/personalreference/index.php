<br>
<div class="panel panel-default">
	<div class="panel-heading">Personal Reference</div>
	<div class="panel-body" id="data">	
<table class="table table-striped table-bordered">
    <tr>
		<th>Name</th>
		<th>Reference Name</th>
		<th>PhoneNo</th>
		<th>Email</th>
		<th>Relationship</th>
    </tr>
	<?php foreach($personalreference as $P){ ?>
    <tr>
		<td><?php echo $P['PersonName']; ?></td>
		<td><?php echo $P['ReferenceName']; ?></td>
		<td><?php echo $P['phoneno']; ?></td>
		<td><?php echo $P['email']; ?></td>
		<td><?php echo $P['Relationship']; ?></td>
    </tr>
	<?php } ?>
</table>
</div>
</div>