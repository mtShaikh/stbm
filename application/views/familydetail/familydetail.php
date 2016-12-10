<br>
<div class="panel panel-default">
<div class="panel-heading">Applicants' Family Details</div>
	<div class="panel-body" id="data">

		<table class="table table-striped table-bordered">
			<tr>
				<th>Name</th>
				<th>Income</th>
				<th>NoOfSiblings</th>
				<th>Guardian Name</th>
				<th>PhoneNo</th>
				<th>CNIC</th>
				<th>Designation</th>
				<th>Company</th>
			</tr>
			<?php foreach($familydetails as $F){ ?>
			<tr>
				<td><?php echo $F['Name']; ?></td>
				<td><?php echo $F['Income']; ?></td>
				<td><?php echo $F['NoOfSiblings']; ?></td>
				<td><?php echo $F['GuardianName']; ?></td>
				<td><?php echo $F['PhoneNo']; ?></td>
				<td><?php echo $F['CNIC']; ?></td>
				<td><?php echo $F['Designation']; ?></td>
				<td><?php echo $F['Company']; ?></td>
			</tr>
			<?php } ?>
		</table>
	</div>
</div>