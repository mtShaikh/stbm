<div class="pull-right">
	<a href="<?php echo site_url('familydetail/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Income</th>
		<th>NoOfSiblings</th>
		<th>FName</th>
		<th>LName</th>
		<th>PhoneNo</th>
		<th>CNIC</th>
		<th>Designation</th>
		<th>Company</th>
		<th>Actions</th>
    </tr>
	<?php foreach($familydetails as $F){ ?>
    <tr>
		<td><?php echo $F['ID']; ?></td>
		<td><?php echo $F['Income']; ?></td>
		<td><?php echo $F['NoOfSiblings']; ?></td>
		<td><?php echo $F['FName']; ?></td>
		<td><?php echo $F['LName']; ?></td>
		<td><?php echo $F['PhoneNo']; ?></td>
		<td><?php echo $F['CNIC']; ?></td>
		<td><?php echo $F['Designation']; ?></td>
		<td><?php echo $F['Company']; ?></td>
		<td>
            <a href="<?php echo site_url('familydetail/edit/'.$F['ID']); ?>" class="btn btn-info">Edit</a> 
            <a href="<?php echo site_url('familydetail/remove/'.$F['ID']); ?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>