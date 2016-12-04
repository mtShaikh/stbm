<div class="pull-right">
	<a href="<?php echo site_url('personalreference/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Name</th>
		<th>PhoneNo</th>
		<th>Email</th>
		<th>Address</th>
		<th>Relationship</th>
		<th>Actions</th>
    </tr>
	<?php foreach($personalreference as $P){ ?>
    <tr>
		<td><?php echo $P['ID']; ?></td>
		<td><?php echo $P['Name']; ?></td>
		<td><?php echo $P['PhoneNo']; ?></td>
		<td><?php echo $P['Email']; ?></td>
		<td><?php echo $P['Address']; ?></td>
		<td><?php echo $P['Relationship']; ?></td>
		<td>
            <a href="<?php echo site_url('personalreference/edit/'.$P['ID']); ?>" class="btn btn-info">Edit</a> 
            <a href="<?php echo site_url('personalreference/remove/'.$P['ID']); ?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>