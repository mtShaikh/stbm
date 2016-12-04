<div class="pull-right">
	<a href="<?php echo site_url('expensesinfo/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>ExpenseType ID</th>
		<th>FamilyDetails ID</th>
		<th>Amount</th>
		<th>Actions</th>
    </tr>
	<?php foreach($expensesinfo as $E){ ?>
    <tr>
		<td><?php echo $E['ID']; ?></td>
		<td><?php echo $E['ExpenseType_ID']; ?></td>
		<td><?php echo $E['FamilyDetails_ID']; ?></td>
		<td><?php echo $E['Amount']; ?></td>
		<td>
            <a href="<?php echo site_url('expensesinfo/edit/'.$E['ID']); ?>" class="btn btn-info">Edit</a> 
            <a href="<?php echo site_url('expensesinfo/remove/'.$E['ID']); ?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>