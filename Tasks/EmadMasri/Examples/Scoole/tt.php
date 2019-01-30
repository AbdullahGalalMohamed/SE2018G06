<?php
	include_once("student.php");
	DataBase::Connect("school");
$studens=student::all();
?>
<table border="1">
	<tr>
		<td >ID</td>
		<td>Name</td>
	</tr>
	<?php foreach ($studens as $key) {?>

	<tr>
		<td>
			<?=$key->ID ?>
		</td>
		<td>
			<?=$key->Name ?>
		</td>		
	</tr>
	<?php
	}
	?>




</table>
