<div class="container">
	<form action="<?= URL ?>hospital/editSave" method="post">
	
		<input type="text" name="list" value="<?= $lists['list_name']; ?>">
		<input type="hidden" name="id" value="<?= $lists['list_id']; ?>">
		<input type="submit" value="Submit">
	
	</form>

</div>