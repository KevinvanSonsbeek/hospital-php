<h2>Species</h2>
	<table>
		<thead>
			<tr>
				<th>#</th>
				<th>Description</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>
		<?php foreach ($species as $specimen) { ?>
			<tr>
				<td><?= $specimen['species_id']; ?></td>
				<td><?= $specimen['species_description']; ?></td>
				<td><a href="<?= URL ?>species/edit/<?= $specimen['species_id'] ?>">Edit</a></td>
				<td><a href="<?= URL ?>species/delete/<?= $specimen['species_id'] ?>">Delete</a></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
<p><a href="<?= URL ?>species/create">Create</a></p>
<?= var_dump($species); ?>