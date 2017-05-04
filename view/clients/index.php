<h2>Patiënts</h2>
	<table>
		<thead>
			<tr>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Phone</th>
				<th>Email</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>
			<?php foreach ($clients as $client) { ?>
			<tr>
				<td><?= $client['client_firstname']; ?></td>
				<td><?= $client['client_lastname']; ?></td>
				<td><?= $client['client_phonenumber']; ?></td>
				<td><?= $client['client_email']; ?></td>
				<td><a href="<?= URL ?>clients/edit/<?= $client['client_id'] ?>">Edit</a></td>
				<td><a href="<?= URL ?>clients/delete/<?= $client['client_id'] ?>">Delete</a></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
<p><a href="<?= URL ?>clients/create">Create</a></p>