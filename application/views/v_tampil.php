<!DOCTYPE html>
<html>
<head>
	<title>Read Data</title>
</head>
<body>

	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>ID</th>
			<th>username</th>
			<th>fullname</th>
			<th>password</th>
			<th>level</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->id ?></td>
			<td><?php echo $u->username ?></td>
			<td><?php echo $u->fullname ?></td>
			<td><?php echo $u->password ?></td>
			<td><?php echo $u->level ?></td>
			<td>
			      <?php echo anchor('crud/edit/'.$u->id,'Edit'); ?>
                              <?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>