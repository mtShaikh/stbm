<div class="pull-right">
	<a href="<?php echo site_url('academicreference/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Name</th>
		<th>PhoneNo</th>
		<th>Email</th>
		<th>Institution</th>
		<th>Actions</th>
    </tr>
	<?php foreach($academicreference as $A){ ?>
    <tr>
		<td><?php echo $A['ID']; ?></td>
		<td><?php echo $A['Name']; ?></td>
		<td><?php echo $A['PhoneNo']; ?></td>
		<td><?php echo $A['Email']; ?></td>
		<td><?php echo $A['Institution']; ?></td>
		<td>
            <a href="<?php echo site_url('academicreference/edit/'.$A['ID']); ?>" class="btn btn-info">Edit</a> 
            <a href="<?php echo site_url('academicreference/remove/'.$A['ID']); ?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>