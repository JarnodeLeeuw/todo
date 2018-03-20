
	<h2>Patiënts</h2>
<div class="container">
	<table border="1">
		<tr>
			<th>Lists</th>
			<th>Species</th>
			<th>Client</th>
			<th>Complaint</th>
			<th colspan="2">Actie</th>
		</tr>

		<?php foreach ($lists as $list) { ?>
		<tr>
			<td><?= $list['list_name']; ?></td>
			<td><a href="<?= URL ?>todo/edit/<?= $list['list_id'] ?>">Edit</a></td>
			<td><a href="<?= URL ?>todo/delete/<?= $list['list_id'] ?>">Delete</a></td>
		</tr>
		<?php } ?>

	</table>
	<a href="<?= URL ?>todo/create">Add</a>
</div>